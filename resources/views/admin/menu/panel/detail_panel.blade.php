@extends('admin.layout.main')
@section('content')
    <div class="card">
        <div class="col-lg-4 mt-3 ms-3">
            <a href="{{ route('panels.index') }}" class="btn btn-danger">Kembali</a>
        </div>
        <h5 class="card-header">{{ $title }}</h5>
        <table class="table table-striped">
            <tr>
                <th>Panel Name</th>
                <td>{{ $panel->name }}</td>
            </tr>
            <tr>
                <th>Room Name</th>
                <td>{{ $panel->room }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $panel->description ?? '-' }}</td>
            </tr>
            <tr>
                <th>Google Drive Link</th>
                <td>{{ $panel->gdrive_link ?? '-' }}</td>
            </tr>
            <tr>
                <th>Zoom Link</th>
                <td>{{ $panel->zoom_link ?? '-' }}</td>
            </tr>
            <tr>
                <th>Meeting ID</th>
                <td>{{ $panel->meeting_id ?? '-' }}</td>
            </tr>
            <tr>
                <th>Passcode</th>
                <td>{{ $panel->password ?? '-' }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ ucfirst($panel->type) }}</td>
            </tr>
            <tr>
                <th>Moderators</th>
                <td>
                    <ul>
                        @foreach ($moderators as $mod)
                            <li>{{ $mod }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            <tr>
                <th>Time Zone</th>
                <td>{{ $panel->time_zone }}</td>
            </tr>
        </table>
    </div>
@endsection
