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

                <!-- Judul -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="title">Judul Paper</label>
                    <div class="col-sm-10">
                        <textarea name="title" id="title" class="form-control" required>{{ old('title') }}</textarea>
                    </div>
                </div>

                <!-- Authors -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="authors">Authors</label>
                    <div class="col-sm-10">
                        <textarea name="authors" id="authors" class="form-control" required>{{ old('authors') }}</textarea>
                    </div>
                </div>

                <!-- Sesi -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="session_id">Sesi</label>
                    <div class="col-sm-10">
                        <select name="session_id" id="session_id" class="form-control" required>
                            <option value="">-- Pilih Sesi --</option>
                            @foreach ($sessions as $session)
                                <option value="{{ $session->id }}"
                                    data-start="{{ \Carbon\Carbon::parse($session->start_time)->format('H:i') }}"
                                    data-end="{{ \Carbon\Carbon::parse($session->end_time)->format('H:i') }}"
                                    {{ old('session_id') == $session->id ? 'selected' : '' }}>
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
                        <input type="text" id="start_time" name="start_time" class="form-control flatpickr"
                            placeholder="Start Time" required>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" id="end_time" name="end_time" class="form-control flatpickr"
                            placeholder="End Time" required>
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
    <!-- Tambahkan di dalam <head> atau sebelum </body> -->
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        // Ambil semua sesi dari Laravel
        const sessions = @json($sessions);

        // Inisialisasi Flatpickr
        const startPicker = flatpickr("#start_time", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true
        });

        const endPicker = flatpickr("#end_time", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true
        });

        // Saat sesi diganti
        document.getElementById('session_id').addEventListener('change', function() {
            const sessionId = this.value;
            const session = sessions.find(s => s.id == sessionId);

            if (session) {
                const start = session.start_time.slice(0, 5); // "19:00"
                const end = session.end_time.slice(0, 5); // "20:00"

                // Atur batasan waktu
                startPicker.set({
                    minTime: start,
                    maxTime: end,
                    defaultDate: null
                });

                endPicker.set({
                    minTime: start,
                    maxTime: end,
                    defaultDate: null
                });
            }
        });
    </script>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
