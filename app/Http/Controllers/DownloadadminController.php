<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class DownloadadminController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Admin Download';
        $cari = $request->input('cari'); // Get search input if needed
        $data = Download::where('keterangan', 'like', '%' . $cari . '%')->paginate(20); // Fetch all downloads
        return view('admin.menu.download.index', compact('title', 'data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'keterangan' => 'required|string|max:255',
            'link_download' => 'required|url',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', $validator->errors()->first());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $download = new Download();
            $download->keterangan = $request->keterangan;
            $download->link_download = $request->link_download;
            $download->save();
            Alert::success('Berhasil', 'Data berhasil ditambahkan.');
            return redirect()->route('admin_download.index');
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Data gagal ditambahkan.');
            return redirect()->route('admin_download.index');
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'keterangan' => 'required|string|max:255',
            'link_download' => 'required|url',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', $validator->errors()->first());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $download = Download::findOrFail($request->download_id);
            $download->keterangan = $request->keterangan;
            $download->link_download = $request->link_download;
            $download->save();
            Alert::success('Berhasil', 'Data berhasil diubah.');
            return redirect()->route('admin_download.index');
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Data gagal diubah.');
            return redirect()->route('admin_download.index');
        }
    }
    public function destroy($id)
    {
        try {
            $download = Download::findOrFail($id);
            $download->delete();
            Alert::success('Berhasil', 'Data berhasil dihapus.');
            return redirect()->route('admin_download.index');
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Data gagal dihapus.');
            return redirect()->route('admin_download.index');
        }
    }
}
