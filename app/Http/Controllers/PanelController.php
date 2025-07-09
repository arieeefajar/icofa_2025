<?php

namespace App\Http\Controllers;

use App\Models\Panel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $title = 'Panel Admin';
        $data = Panel::where('name', 'like', '%' . $request->search . '%')
            ->where('type', 'like', '%' . $request->type . '%')
            ->orWhere('room', 'like', '%' . $request->search . '%')
            ->paginate(20); // Fetch all panels with their moderators
        return view('admin.menu.panel.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Panel';
        return view('admin.menu.panel.tambah_panel', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->type === 'offline') {
            $validation = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'type' => 'required|in:offline,online',
                'room_name' => 'required|string|max:255',
                'gdrive_link' => 'nullable|url',
                'moderator.*' => 'required|string|max:255',
            ]);
        } else {
            $validation = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'type' => 'required|in:offline,online',
                'room' => 'required|string|max:255',
                'gdrive_link' => 'nullable|url',
                'moderator.*' => 'required|string|max:255',
                'zoom_link' => 'required|url',
                'meeting_id' => 'nullable|string|max:255',
                'password' => 'nullable|string|max:255',
            ]);
        }

        if ($validation->fails()) {
            Alert::error('Error', $validation->errors()->first());
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $panel = new Panel();
        $panel->name = $request->name;
        $panel->description = $request->description ?? null;
        $panel->type = $request->type;
        if ($request->type === 'offline') {
            $panel->room = $request->room_name;
        } else {
            $panel->room = $request->room;
        }

        $panel->gdrive_link = $request->gdrive_link ?? null;
        $panel->zoom_link = $request->zoom_link ?? null;
        $panel->meeting_id = $request->meeting_id ?? null;
        $panel->password = $request->password ?? null;

        // Simpan moderator sebagai JSON
        $panel->moderators = json_encode($request->moderator); // buang kosong & reset index

        $panel->time_zone = $request->time_zone ?? 'Western Indonesian Time (WIB) [GMT +7]'; // Default time zone
        $panel->save();


        Alert::success('Berhasil', 'Panel berhasil ditambahkan.');
        return redirect()->route('panels.index');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = 'Detail Panel';
        $panel = Panel::findOrFail($id);

        // Decode moderators from JSON
        $moderators = json_decode($panel->moderators, true);
        return view('admin.menu.panel.detail_panel', compact('title', 'panel', 'moderators'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Panel';
        $panel = Panel::findOrFail($id);

        $moderators = json_decode($panel->moderators, true);
        return view('admin.menu.panel.edit_panel', compact('title', 'panel', 'moderators'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->type === 'offline') {
            $validation = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'type' => 'required|in:offline,online',
                'room_name' => 'required|string|max:255',
                'gdrive_link' => 'nullable|url',
                'moderator.*' => 'required|string|max:255',
            ]);
        } else {
            $validation = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'type' => 'required|in:offline,online',
                'room' => 'required|string|max:255',
                'gdrive_link' => 'nullable|url',
                'moderator.*' => 'required|string|max:255',
                'zoom_link' => 'required|url',
                'meeting_id' => 'nullable|string|max:255',
                'password' => 'nullable|string|max:255',
            ]);
        }

        if ($validation->fails()) {
            Alert::error('Error', $validation->errors()->first());
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $panel = Panel::findOrFail($id);
        $panel->name = $request->name;
        $panel->description = $request->description ?? null;
        $panel->type = $request->type;
        if ($request->type === 'offline') {
            $panel->room = $request->room_name;
        } else {
            $panel->room = $request->room;
        }

        $panel->gdrive_link = $request->gdrive_link ?? null;
        $panel->zoom_link = $request->zoom_link ?? null;
        $panel->meeting_id = $request->meeting_id ?? null;
        $panel->password = $request->password ?? null;

        // Simpan moderator sebagai JSON
        $panel->moderators = json_encode($request->moderator); // buang kosong & reset index
        $panel->time_zone = $request->time_zone ?? 'Western Indonesian Time (WIB) [GMT +7]'; // Default time zone
        $panel->save();

        Alert::success('Berhasil', 'Panel berhasil diperbarui.');
        return redirect()->route('panels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $panel = Panel::findOrFail($id);
        $panel->delete();
        Alert::success('Berhasil', 'Panel berhasil dihapus.');
        return redirect()->route('panels.index');
    }
}
