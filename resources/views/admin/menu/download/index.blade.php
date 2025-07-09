@extends('admin.layout.main')
@section('content')
    <div class="card">
        <div class="col-lg-4 mt-3 ms-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data
            </button>
        </div>
        <h5 class="card-header">{{ $title }}</h5>

        <br>
        <!-- Button trigger modal -->

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>#</th>
                        <th>Keterangan</th>
                        <th>Link Download</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $download)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $download->keterangan }}</td>
                            <td><a href="{{ $download->link_download }}" target="_blank" class="btn btn-dark">Download</a>
                            </td>
                            <td>
                                <button class="btn btn-warning" onclick="editDownload({{ $download }})"
                                    data-bs-toggle="modal" data-bs-target="#editmodal"> edit</button>
                                <button class="btn btn-danger" onclick="deleteDownload({{ $download->id }})">Hapus</button>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $data->links() }}
            </div>

        </div>
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
                    <form action="{{ route('admin_download.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan">
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
    {{-- edit modal --}}
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editmodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editmodalLabel">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin_download.update') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                        </div>
                        <div class="mb-3">
                            <label for="link_download" class="form-label">Link Download</label>
                            <input type="text" class="form-control" id="link_download" name="link_download">
                        </div>

                        <input type="hidden" id="download_id" name="download_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function editDownload(data) {
            document.getElementById('keterangan').value = data.keterangan;
            document.getElementById('link_download').value = data.link_download;
            document.getElementById('download_id').value = data.id;


        }


        function deleteDownload(id) {


            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `/admin_downloaddestroy/${id}`;
                }
            })
        }
    </script>
@endsection
