@extends('admin.layout.main')
@section('content')
    <div class="card">
        <div class="col-lg-4 mt-3 ms-3">
            <a href="{{ route('sessions.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>

        <div class="col-lg-6">
            <div class="float-right">
                <form action="" method="GET" class="ms-2 mt-2 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search"
                            value="{{ request()->search }}">
                        <div class="input-group-append ms-2">
                            <button class="btn btn-primary" type="submit">
                                {{-- <i class="fas fa-search"></i> --}}
                                Search
                            </button>
                            <button class="btn btn-secondary" type="button"
                                onclick="window.location.href='{{ route('sessions.index') }}'">
                                refresh
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- <h5 class="card-header">{{ $title }}</h5> --}}
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>#</th>
                        <th>Session Name</th>
                        <th>Nama Panel</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $session)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $session->name }}</td>
                            <td>{{ $session->panel->name }}</td>
                            <td>{{ $session->session_date }}</td>
                            <td>
                                <a href="{{ route('sessions.edit', $session->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('sessions.show', $session->id) }}" class="btn btn-primary">Detail</a>
                                <a href="#" class="btn btn-danger"
                                    onclick="deletePanel({{ $session->id }})">Delete</a>

                                <form id="delete-form" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

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


    <script>
        function deletePanel(id) {
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
                    const form = document.getElementById('delete-form');
                    form.action = `/sessions/${id}`;
                    form.submit();
                }
            })
        }
    </script>
@endsection
