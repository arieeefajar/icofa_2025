<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use App\Models\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $title = 'Papers';
        $data = Paper::where('title', 'like', '%' . $request->input('search') . '%')
            ->orWhere('authors', 'like', '%' . $request->input('search') . '%')
            ->orWhereHas('session', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->input('search') . '%');
            })
            ->with('session')
            ->paginate(30);
        return view('admin.menu.paper.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Paper';
        $sessions = Session::all();
        return view('admin.menu.paper.tambah_paper', compact('title', 'sessions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validation =  Validator::make($request->all(), [
            'session_id' => 'required|exists:sessions,id',
            'authors' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'title' => 'required',
        ]);

        if ($validation->fails()) {
            Alert::error('Error', $validation->errors()->first());
            return redirect()->back()
                ->withErrors($validation)
                ->withInput();
        }
        $startTime = Carbon::createFromFormat('H:i', $request->start_time);
        $endTime = Carbon::createFromFormat('H:i', $request->end_time);

        Paper::create([
            'session_id' => $request->session_id,
            'authors' => $request->authors,
            'start_time' => $startTime,
            'end_time' => $endTime,
            'title' => $request->title,
        ]);
        Alert::success('Berhasil', 'Paper berhasil ditambahkan.');


        return redirect()->route('papers.index')->with('success', 'Paper berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $title = 'Edit Paper';
        $paper = Paper::findOrFail($id);
        $sessions = Session::all();
        return view('admin.menu.paper.edit_paper', compact('title', 'paper', 'sessions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation =  Validator::make($request->all(), [
            'session_id' => 'required|exists:sessions,id',
            'authors' => 'required',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'title' => 'required',
        ]);

        if ($validation->fails()) {
            Alert::error('Error', $validation->errors()->first());
            return redirect()->back()
                ->withErrors($validation)
                ->withInput();
        }



        $paper = Paper::findOrFail($id);

        $startTime = Carbon::parse($request->start_time)->format('H:i');

        $endTime = Carbon::parse($request->end_time)->format('H:i');
        $paper->update([
            'session_id' => $request->session_id,
            'authors' => $request->authors,
            'start_time' => $startTime,
            'end_time' => $endTime,
            'title' => $request->title,
        ]);
        Alert::success('Berhasil', 'Paper berhasil diperbarui.');

        return redirect()->route('papers.index')->with('success', 'Paper berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paper = Paper::findOrFail($id);
        $paper->delete();
        Alert::success('Berhasil', 'Paper berhasil dihapus.');
        return redirect()->route('papers.index')->with('success', 'Paper berhasil dihapus.');
    }
}
