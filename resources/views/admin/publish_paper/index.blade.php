@extends('admin.layout.main')
@section('content')
    <div class="card">


        <div class="col-lg-4 mt-3 ms-3">
            @if ($data == null)
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data
                </button>
            @endif
        </div>
        {{-- <h5 class="card-header">{{ $title }}</h5> --}}
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Link Download</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>{{ $data->link_download }}</td>
                    <td>
                        {{-- Contoh tombol aksi --}}
                        {{-- Modal untuk update link download --}}
                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                            data-bs-target="#updateLinkDownloadModal">
                            Update
                        </button>

                    </td>
                </tr>

                <tr>
                    <th>Link Upload</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>{{ $data->link_upload }}</td>
                    <td>
                        {{-- Contoh tombol aksi --}}
                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                            data-bs-target="#updateLinkUploadModal">
                            Update
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

    {{-- modal tambah --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin_publish_papers.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="link_upload" class="form-label">Link Upload</label>
                            <input type="text" class="form-control" name="link_upload">
                        </div>
                        <div class="mb-3">
                            <label for="link_download" class="form-label">Link Download</label>
                            <input type="text" class="form-control" name="link_download">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updateLinkDownloadModal" tabindex="-1" aria-labelledby="updateLinkDownloadModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateLinkDownloadModalLabel">Update Link Download</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin_publish_papers.update_download', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="link_download" class="form-label">Link Download</label>
                            <input type="text" class="form-control" name="link_download">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateLinkUploadModal" tabindex="-1" aria-labelledby="updateLinkUploadModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateLinkUploadModalLabel">Update Link Upload</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin_publish_papers.update_upload', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="link_upload" class="form-label">Link Upload</label>
                            <input type="text" class="form-control" name="link_upload">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
