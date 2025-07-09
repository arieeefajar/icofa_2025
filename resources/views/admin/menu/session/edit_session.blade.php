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
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Session"
                            value="{{ old('name', $session->name) }}" required>
                    </div>
                </div>

                {{-- Description --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="description">Description</label>
                    <div class="col-sm-10">
                        <textarea name="description" id="description" class="form-control" placeholder="Deskripsi (opsional)">{{ old('description', $session->description) }}</textarea>
                    </div>
                </div>

                {{-- Tanggal --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="session_date">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" name="session_date" class="form-control" id="session_date"
                            value="{{ old('session_date', $session->session_date) }}" required>
                    </div>
                </div>

                {{-- Waktu Session --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Waktu Session</label>
                    <div class="col-sm-5">
                        <input type="text" id="session_start_time" name="start_time" class="form-control timepicker"
                            placeholder="Start Time" value="{{ old('start_time', $session->start_time) }}" required>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" id="session_end_time" name="end_time" class="form-control timepicker"
                            placeholder="End Time" value="{{ old('end_time', $session->end_time) }}" required>
                    </div>
                </div>

                {{-- Panel --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="panel_id">Panel</label>
                    <div class="col-sm-10">
                        <select name="panel_id" id="panel_id" class="form-control">
                            @foreach ($panels as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $session->panel_id ? 'selected' : '' }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Waktu Diskusi --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Waktu Diskusi</label>
                    <div class="col-sm-5">
                        <input type="text" id="start_discussion_time" name="start_discussion_time"
                            class="form-control timepicker" placeholder="Start Discussion"
                            value="{{ old('start_discussion_time', $session->start_discussion_time) }}" required>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" id="end_discussion_time" name="end_discussion_time"
                            class="form-control timepicker" placeholder="End Discussion"
                            value="{{ old('end_discussion_time', $session->end_discussion_time) }}" required>
                    </div>
                </div>

                {{-- Submit --}}
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Flatpickr CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    {{-- Flatpickr JS --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    {{-- Inisialisasi Flatpickr + Batasan Diskusi --}}
    <script>
        const timeOptions = {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true
        };

        const sessionStart = flatpickr("#session_start_time", timeOptions);
        const sessionEnd = flatpickr("#session_end_time", timeOptions);
        const discussionStart = flatpickr("#start_discussion_time", timeOptions);
        const discussionEnd = flatpickr("#end_discussion_time", timeOptions);

        function updateDiscussionLimits() {
            const start = document.getElementById('session_start_time').value;
            const end = document.getElementById('session_end_time').value;

            if (start && end) {
                discussionStart.set({
                    minTime: start,
                    maxTime: end
                });
                discussionEnd.set({
                    minTime: start,
                    maxTime: end
                });
            }
        }

        document.getElementById('session_start_time').addEventListener('change', updateDiscussionLimits);
        document.getElementById('session_end_time').addEventListener('change', updateDiscussionLimits);
        document.addEventListener('DOMContentLoaded', updateDiscussionLimits);
    </script>

    {{-- Custom Style: Putih Background Timepicker --}}
    <style>
        .flatpickr-input {
            background-color: white !important;
            color: black;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
