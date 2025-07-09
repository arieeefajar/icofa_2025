@extends('admin.layout.main')
@section('content')
    <div class="card mb-4">
        <div class="col-lg-4 mt-3 ms-3">
            <a href="{{ route('sessions.index') }}" class="btn btn-danger">Kembali</a>
        </div>

        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">{{ $title }}</h5>

        </div>
        <div class="card-body">
            <form action="{{ route('sessions.update', $session->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Name --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Panel"
                            value="{{ $session->name ?? old('name') }}" required>
                    </div>
                </div>

                {{-- Description --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="description">Description</label>
                    <div class="col-sm-10">
                        <textarea name="description" id="description" class="form-control" placeholder="Deskripsi (opsional)"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="name">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" name="session_date" class="form-control" id="session_date"
                            placeholder="Tanggal" value="{{ $session->session_date ?? old('session_date') }}" required>
                    </div>
                </div>

                {{-- Waktu Session --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Waktu Session</label>
                    <div class="col-sm-5">
                        <input type="time" name="start_time" class="form-control" placeholder="Start Time"
                            value="{{ $session->start_time ?? old('start_time') }}" required>
                    </div>
                    <div class="col-sm-5">
                        <input type="time" name="end_time" class="form-control" placeholder="End Time"
                            value="{{ $session->end_time ?? old('end_time') }}" required>
                    </div>
                </div>

                {{-- Type --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="panel_id">Panel</label>
                    <div class="col-sm-10">
                        <select name="panel_id" id="panel_id" class="form-control">
                            @foreach ($panels as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $session->panel_id ? 'selected' : '' }}>
                                    {{ $item->name }}</option>
                            @endforeach


                        </select>
                    </div>
                </div>


                {{-- waktu discussion --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Waktu Diskusi</label>
                    <div class="col-sm-5">
                        <input type="time" name="start_discussion_time" class="form-control"
                            placeholder="Start Discussion"
                            value="{{ $session->start_discussion_time ?? old('start_discussion_time') }}" required>
                    </div>
                    <div class="col-sm-5">
                        <input type="time" name="end_discussion_time" class="form-control" placeholder="End Discussion"
                            value="{{ $session->end_discussion_time ?? old('end_discussion_time') }}" required>
                    </div>
                </div>

                {{-- Room --}}


                {{-- Submit --}}
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
