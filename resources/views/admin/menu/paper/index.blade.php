@extends('admin.layout.main')
@section('content')
    <div class="card">
        <div class="col-lg-4 mt-3 ms-3">
            <a href="{{ route('papers.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="col-lg-6">
            <div class="float-right">
                <form action="" method="GET" class="ms-2 mt-2 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search"
                            value="{{ request()->search }}">
                        <div class="input-group-append ms-2">
                            <button class="btn btn-primary" type="submit">
                                Search
                            </button>
                            <button class="btn btn-secondary" type="button"
                                onclick="window.location.href='{{ route('papers.index') }}'">
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
                        <th>Paper Id</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Time</th>
                        <th>Session Name</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $paper)
                        <tr>
                            <td>{{ $paper->id }}</td>
                            <td style="max-width: 200px;" class="text-wrap">{{ $paper->authors }}</td>
                            <td style="max-width: 300px;" class="text-wrap">{{ $paper->title }}</td>
                            <td>{{ $paper->start_time }} - {{ $paper->end_time }}</td>
                            <td>{{ $paper->session->name }}</td>
                            <td>
                                <a href="{{ route('papers.edit', $paper->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <button onclick="deletePanel({{ $paper->id }})"
                                    class="btn btn-danger btn-sm">Delete</button>
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
                    form.action = `/papers/${id}`;
                    form.submit();
                }
            })
        }
    </script>
@endsection
