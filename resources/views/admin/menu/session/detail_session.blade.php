@extends('admin.layout.main')
@section('content')
    <div class="card">
        <div class="col-lg-4 mt-3 ms-3">
            <a href="{{ route('sessions.index') }}" class="btn btn-danger">Kembali</a>
        </div>
        <h5 class="card-header">{{ $title }}</h5>
        <table class="table table-striped">
            <tr>
                <th>Session Name</th>
                <td>{{ $session->name }}</td>
            </tr>
            <tr>
                <th>Panel Name</th>
                <td>{{ $session->panel->name }}</td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td>{{ $session->session_date }}</td>
            </tr>
            <tr>
                <th>Start Time</th>
                <td>{{ $session->start_time }}</td>
            </tr>
            <tr>
                <th>End Time</th>
                <td>{{ $session->end_time }}</td>
            </tr>
            <tr>
                <th>Start Discussion Time</th>
                <td>{{ $session->start_discussion_time }}</td>
            </tr>
            <tr>
                <th>End Discussion Time</th>
                <td>{{ $session->end_discussion_time }}</td>
            </tr>
        </table>
    </div>
@endsection
