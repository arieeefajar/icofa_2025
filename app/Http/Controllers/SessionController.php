<?php

namespace App\Http\Controllers;

use App\Models\Panel;
use App\Models\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Session Admin';
        // Fetch all sessions with their associated panels
        $data = Session::where('name', 'like', '%' . $request->input('search') . '%')
            ->orWhere('start_time', 'like', '%' . $request->input('search') . '%')
            ->orWhere('end_time', 'like', '%' . $request->input('search') . '%')
            ->orWhereHas('panel', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->input('search') . '%');
            })
            ->with('panel')->paginate(20);
        return view('admin.menu.session.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $title = 'Tambah Session';
        // Fetch all panels to populate the dropdown
        $panels = Panel::all();
        return view('admin.menu.session.tambah_session', compact('title', 'panels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'panel_id' => 'required|exists:panels,id',
            'session_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'start_discussion_time' => 'nullable|date_format:H:i',
            'end_discussion_time' => 'nullable|date_format:H:i|after:start_discussion_time',
        ]);

        if ($validation->fails()) {
            Alert::error('Error', $validation->errors()->first());
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $sessionDate = Carbon::parse($request->session_date)->format('Y-m-d');
        $startTime = Carbon::parse($request->start_time)->format('H:i');
        $endTime = Carbon::parse($request->end_time)->format('H:i');
        $startDiscussionTime = $request->start_discussion_time ? Carbon::parse($request->start_discussion_time)->format('H:i') : null;
        $endDiscussionTime = $request->end_discussion_time ? Carbon::parse($request->end_discussion_time)->format('H:i') : null;

        if ($startTime >= $endTime) {
            Alert::error('Error', 'Waktu mulai session harus sebelum waktu selesai.');
            return back()->withErrors(['start_time' => 'Waktu mulai session harus sebelum waktu selesai.'])->withInput();
        }

        // Validasi 2: Waktu diskusi (jika ada) harus dalam rentang session
        if ($startDiscussionTime && ($startDiscussionTime < $startTime || $startDiscussionTime > $endTime)) {
            Alert::error('Error', 'Waktu mulai diskusi harus dalam rentang waktu session.');
            return back()->withErrors(['start_discussion_time' => 'Waktu mulai diskusi harus dalam rentang waktu session.'])->withInput();
        }

        if ($endDiscussionTime && ($endDiscussionTime < $startTime || $endDiscussionTime > $endTime)) {
            Alert::error('Error', 'Waktu selesai diskusi harus dalam rentang waktu session.');
            return back()->withErrors(['end_discussion_time' => 'Waktu selesai diskusi harus dalam rentang waktu session.'])->withInput();
        }

        // Validasi 3: start_discussion_time harus < end_discussion_time
        if ($startDiscussionTime && $endDiscussionTime && $startDiscussionTime >= $endDiscussionTime) {
            Alert::error('Error', 'Waktu mulai diskusi harus sebelum waktu selesai diskusi.');
            return back()->withErrors(['start_discussion_time' => 'Waktu mulai diskusi harus sebelum waktu selesai diskusi.'])->withInput();
        }
        Session::create([
            'name' => $request->name,
            'description' => $request->description ?? null,
            'session_date' => $sessionDate,
            'start_time' => $startTime,
            'end_time' => $endTime,
            'start_discussion_time' => $startDiscussionTime,
            'end_discussion_time' => $endDiscussionTime,
            'panel_id' => $request->panel_id,
        ]);

        Alert::success('Berhasil', 'Data berhasil ditambahkan.');
        return redirect()->route('sessions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = 'Detail Session';
        $session = Session::with('panel')->findOrFail($id);
        return view('admin.menu.session.detail_session', compact('title', 'session'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $title = 'Edit Session';
        // Fetch the session and its associated panel
        $session = Session::with('panel')->findOrFail($id);
        // Fetch all panels to populate the dropdown
        $panels = Panel::all();
        return view('admin.menu.session.edit_session', compact('title', 'session', 'panels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $session = Session::findOrFail($id);

        $validation = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'panel_id' => 'required|exists:panels,id',
            'session_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'start_discussion_time' => 'nullable',
            'end_discussion_time' => 'nullable|after:start_discussion_time',
        ]);

        if ($validation->fails()) {
            Alert::error('Error', $validation->errors()->first());
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $sessionDate = Carbon::parse($request->session_date)->format('Y-m-d');
        $startTime = Carbon::parse($request->start_time)->format('H:i');
        $endTime = Carbon::parse($request->end_time)->format('H:i');
        $startDiscussionTime = $request->start_discussion_time ? Carbon::parse($request->start_discussion_time)->format('H:i') : null;
        $endDiscussionTime = $request->end_discussion_time ? Carbon::parse($request->end_discussion_time)->format('H:i') : null;

        if ($startTime >= $endTime) {
            Alert::error('Error', 'Waktu mulai session harus sebelum waktu selesai.');
            return back()->withErrors(['start_time' => 'Waktu mulai session harus sebelum waktu selesai.'])->withInput();
        }

        // Validasi 2: Waktu diskusi (jika ada) harus dalam rentang session
        if ($startDiscussionTime && ($startDiscussionTime < $startTime || $startDiscussionTime > $endTime)) {
            Alert::error('Error', 'Waktu mulai diskusi harus dalam rentang waktu session.');
            return back()->withErrors(['start_discussion_time' => 'Waktu mulai diskusi harus dalam rentang waktu session.'])->withInput();
        }

        if ($endDiscussionTime && ($endDiscussionTime < $startTime || $endDiscussionTime > $endTime)) {
            Alert::error('Error', 'Waktu selesai diskusi harus dalam rentang waktu session.');
            return back()->withErrors(['end_discussion_time' => 'Waktu selesai diskusi harus dalam rentang waktu session.'])->withInput();
        }

        // Validasi 3: start_discussion_time harus < end_discussion_time
        if ($startDiscussionTime && $endDiscussionTime && $startDiscussionTime >= $endDiscussionTime) {
            Alert::error('Error', 'Waktu mulai diskusi harus sebelum waktu selesai diskusi.');
            return back()->withErrors(['start_discussion_time' => 'Waktu mulai diskusi harus sebelum waktu selesai diskusi.'])->withInput();
        }
        $session->update([
            'name' => $request->name,
            'description' => $request->description ?? null,
            'session_date' => $sessionDate,
            'start_time' => $startTime,
            'end_time' => $endTime,
            'start_discussion_time' => $startDiscussionTime,
            'end_discussion_time' => $endDiscussionTime,
            'panel_id' => $request->panel_id,
        ]);

        Alert::success('Berhasil', 'Data berhasil diupdate.');
        return redirect()->route('sessions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $session = Session::findOrFail($id);
        $session->delete();
        Alert::success('Berhasil', 'Data berhasil dihapus.');
        return redirect()->route('sessions.index');
    }
}
