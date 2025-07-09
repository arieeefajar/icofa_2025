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
            <form action="{{ route('papers.update', $paper->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Judul Paper -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="title">Judul Paper</label>
                    <div class="col-sm-10">
                        <textarea name="title" id="title" class="form-control" required>{{ $paper->title }}</textarea>
                    </div>
                </div>

                <!-- Authors -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="authors">Authors</label>
                    <div class="col-sm-10">
                        <textarea name="authors" id="authors" class="form-control" required>{{ $paper->authors }}</textarea>
                    </div>
                </div>

                <!-- Pilih Sesi -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="session_id">Sesi</label>
                    <div class="col-sm-10">
                        <select name="session_id" id="session_id" class="form-control" required>
                            <option value="">-- Pilih Sesi --</option>
                            @foreach ($sessions as $session)
                                <option value="{{ $session->id }}"
                                    data-start="{{ \Carbon\Carbon::parse($session->start_time)->format('H:i') }}"
                                    data-end="{{ \Carbon\Carbon::parse($session->end_time)->format('H:i') }}"
                                    {{ $paper->session_id == $session->id ? 'selected' : '' }}>
                                    {{ $session->name }} ({{ $session->start_time }} - {{ $session->end_time }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Waktu Presentasi -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Waktu Presentasi</label>
                    <div class="col-sm-5">
                        <input type="text" id="start_time" name="start_time" class="form-control"
                            placeholder="Start Time" required
                            value="{{ \Carbon\Carbon::parse($paper->start_time)->format('H:i') }}">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" id="end_time" name="end_time" class="form-control" placeholder="End Time"
                            required value="{{ \Carbon\Carbon::parse($paper->end_time)->format('H:i') }}">
                    </div>
                </div>

                <!-- Tombol Simpan -->
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Flatpickr CSS & JS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        const sessions = @json($sessions);
        const sessionSelect = document.getElementById('session_id');
        const startInput = document.getElementById('start_time');
        const endInput = document.getElementById('end_time');

        const startPicker = flatpickr(startInput, {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true
        });

        const endPicker = flatpickr(endInput, {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true
        });

        function updateTimeLimits() {
            const selected = sessionSelect.options[sessionSelect.selectedIndex];
            const start = selected.getAttribute('data-start');
            const end = selected.getAttribute('data-end');

            if (start && end) {
                startPicker.set({
                    minTime: start,
                    maxTime: end
                });
                endPicker.set({
                    minTime: start,
                    maxTime: end
                });
            }
        }

        // Update saat ganti sesi
        sessionSelect.addEventListener('change', updateTimeLimits);

        // Jalankan saat halaman pertama kali dimuat (untuk preselected session)
        document.addEventListener('DOMContentLoaded', updateTimeLimits);
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
