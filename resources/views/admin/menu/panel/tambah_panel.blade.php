@extends('admin.layout.main')
@section('content')
    <div class="card mb-4">
        <div class="col-lg-4 mt-3 ms-3">
            <a href="{{ route('panels.index') }}" class="btn btn-danger">Kembali</a>
        </div>

        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">{{ $title }}</h5>

        </div>
        <div class="card-body">
            <form action="{{ route('panels.store') }}" method="POST">
                @csrf

                {{-- Name --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Panel"
                            required>
                    </div>
                </div>

                {{-- Description --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="description">Description</label>
                    <div class="col-sm-10">
                        <textarea name="description" id="description" class="form-control" placeholder="Deskripsi (opsional)"></textarea>
                    </div>
                </div>

                {{-- Moderator --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Moderator</label>
                    <div class="col-sm-10">
                        <div id="moderator-wrapper">
                            <div class="input-group mb-2 moderator-group">
                                <input type="text" name="moderator[]" class="form-control" placeholder="Nama Moderator"
                                    required>
                                <button type="button" class="btn btn-outline-primary add-moderator"><i
                                        class="bx bx-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="time_zone">Time Zone</label>
                    <div class="col-sm-10">
                        <input type="text" name="time_zone" class="form-control" id="time_zone"
                            placeholder="Western Indonesian Time (WIB) [GMT +7]">
                    </div>
                </div>
                {{-- Type --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="type">Type</label>
                    <div class="col-sm-10">
                        <select name="type" id="type" class="form-control">
                            <option value="offline" selected>Offline</option>
                            <option value="online">Online</option>
                        </select>
                    </div>
                </div>

                {{-- Room --}}
                <div class="row mb-3 optional-fieldd">
                    <label class="col-sm-2 col-form-label" for="room_name">Room Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="room_name" class="form-control" id="room_name"
                            placeholder="Marlin VIP 1 (Offline)">
                    </div>
                </div>
                <div class="row mb-3 optional-field">
                    <label class="col-sm-2 col-form-label" for="room">Room</label>
                    <div class="col-sm-10">
                        <input type="text" name="room" class="form-control" id="room"
                            placeholder="Sayuwiwit IV (Online - Zoom - Breakout Room 3)">
                    </div>
                </div>

                {{-- GDrive Link --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="gdrive_link">Google Drive Link</label>
                    <div class="col-sm-10">
                        <input type="url" name="gdrive_link" class="form-control" id="gdrive_link"
                            placeholder="opsional" />
                    </div>
                </div>

                {{-- Zoom Link --}}
                <div class="row mb-3 optional-field">
                    <label class="col-sm-2 col-form-label" for="zoom_link">Zoom Link</label>
                    <div class="col-sm-10">
                        <input type="url" name="zoom_link" class="form-control" id="zoom_link"
                            placeholder="https://zoom.us/..." />
                    </div>
                </div>

                {{-- Meeting ID --}}
                <div class="row mb-3 optional-field">
                    <label class="col-sm-2 col-form-label" for="meeting_id">Meeting ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="meeting_id" class="form-control" id="meeting_id"
                            placeholder="123 4567 8910" />
                    </div>
                </div>

                {{-- Passcode --}}
                <div class="row mb-3 optional-field">
                    <label class="col-sm-2 col-form-label" for="password">Passcode</label>
                    <div class="col-sm-10">
                        <input type="text" name="password" class="form-control" id="password"
                            placeholder="Password Zoom (opsional)" />
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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Sembunyikan field tambahan jika offline
        function toggleOptionalFields() {
            if ($('#type').val() === 'offline') {
                $('.optional-field').hide();
                $('.optional-fieldd').show();
            } else {
                $('.optional-field').show();
                $('.optional-fieldd').hide();
            }
        }

        $(document).ready(function() {
            toggleOptionalFields();

            // Toggle field saat select berubah
            $('#type').on('change', function() {
                toggleOptionalFields();
            });

            // Tambah moderator
            $(document).on('click', '.add-moderator', function() {
                const newField = `
                <div class="input-group mb-2 moderator-group">
                    <input type="text" name="moderator[]" class="form-control" placeholder="Nama Moderator" required>
                    <button type="button" class="btn btn-outline-danger remove-moderator"><i class="bx bx-trash"></i></button>
                    <button type="button" class="btn btn-outline-primary add-moderator"><i class="bx bx-plus"></i></button>
                </div>`;
                $('#moderator-wrapper').append(newField);
            });

            // Hapus moderator
            $(document).on('click', '.remove-moderator', function() {
                $(this).closest('.moderator-group').remove();
            });
        });
    </script>
@endsection
