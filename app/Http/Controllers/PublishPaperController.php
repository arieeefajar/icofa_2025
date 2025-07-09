<?php

namespace App\Http\Controllers;

use App\Models\Publish_paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PublishPaperController extends Controller
{
    public function index()
    {
        $title = 'Link Upload Paper';

        $data = Publish_paper::first();
        return view('admin.publish_paper.index', compact('title', 'data'));
    }
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'link_upload' => 'required|url',
            'link_download' => 'required|url',
        ]);

        if ($validation->fails()) {
            Alert::error('Error', $validation->errors()->first());
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $data = Publish_paper::create($request->all());
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('admin_publish_papers.index');
    }

    public function update_download(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'link_download' => 'required|url',
        ]);

        if ($validation->fails()) {
            Alert::error('Error', $validation->errors()->first());
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $data = Publish_paper::findOrFail($id);
        $data->link_download = $request->link_download;
        $data->save();

        Alert::success('Success', 'Link Download Berhasil Diupdate');
        return redirect()->route('admin_publish_papers.index');
    }

    public function update_upload(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'link_upload' => 'required|url',
        ]);

        if ($validation->fails()) {
            Alert::error('Error', $validation->errors()->first());
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $data = Publish_paper::findOrFail($id);
        $data->link_upload = $request->link_upload;
        $data->save();

        Alert::success('Success', 'Link Upload Berhasil Diupdate');
        return redirect()->route('admin_publish_papers.index');
    }
}
