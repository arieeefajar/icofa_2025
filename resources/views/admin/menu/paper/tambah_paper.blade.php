@extends('admin.layout.main')
@section('content')
    <div class="card mb-4">
        <div class="col-lg-4 mt-3 ms-3">
            <a href="{{ route('papers.index') }}" class="btn btn-danger">Kembali</a>
        </div>

        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">{{ $title }}</h5>

        </div>
        <div class="card-body">
            <form action="{{ route('papers.store') }}" method="POST">
                @csrf

                {{-- Judul Paper --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="title">Judul Paper</label>
                    <div class="col-sm-10">
                        <textarea name="title" id="title" class="form-control" placeholder="Judul Paper" required>{{ old('title') }}</textarea>
                    </div>
                </div>

                {{-- Authors --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="authors">Authors</label>
                    <div class="col-sm-10">
                        <textarea name="authors" id="authors" class="form-control" placeholder="Penulis (pisahkan dengan koma)" required>{{ old('authors') }}</textarea>
                    </div>
                </div>

                {{-- Waktu Paper --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Waktu Presentasi</label>
                    <div class="col-sm-5">
                        <input type="time" name="start_time" class="form-control" placeholder="Start Time"
                            value="{{ old('start_time') }}" required>
                    </div>
                    <div class="col-sm-5">
                        <input type="time" name="end_time" class="form-control" placeholder="End Time"
                            value="{{ old('end_time') }}" required>
                    </div>
                </div>

                {{-- Pilih Sesi --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="session_id">Sesi</label>
                    <div class="col-sm-10">
                        <select name="session_id" id="session_id" class="form-control" required>
                            <option value="">-- Pilih Sesi --</option>
                            @foreach ($sessions as $session)
                                <option value="{{ $session->id }}"
                                    {{ old('session_id') == $session->id ? 'selected' : '' }}>
                                    {{ $session->name }} ({{ $session->session_date }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Tombol Simpan --}}
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>



        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
