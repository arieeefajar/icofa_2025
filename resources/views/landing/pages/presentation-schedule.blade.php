@extends('landing.layouts.main')
@section('content')
    <div class="page-title aos-init" data-aos="fade">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0"></h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="https://conference.polije.ac.id/icofa/2024">Home</a></li>
                    <li class="current">Presentation Schedule</li>
                </ol>
            </nav>
        </div>
    </div>

    <style>
        #starter-section .nav-link {
            color: #589981 !important
        }
    </style>

    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title aos-init" data-aos="fade-up">
            <h2>Presentation Schedule</h2>
            <p></p>
        </div><!-- End Section Title -->

        <div class="container aos-init" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            @foreach ($presentationSchedule as $index => $schedule)
                                <button class="nav-link {{ $index === 0 ? 'active' : '' }}" id="panel{{ $index }}"
                                    data-bs-toggle="tab" data-bs-target="#nav-panel{{ $index }}"
                                    aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                    Panel {{ $index + 1 }}
                                </button>
                            @endforeach
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        @foreach ($presentationSchedule as $index => $schedule)
                            <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                                id="nav-panel{{ $index }}" role="tabpanel" aria-labelledby="nav-panel1-tab">

                                <div class="row justify-content-center">
                                    <div class="col-lg-12 p-3 my-3 bg-light">
                                        <table class="table table-borderless h6 mb-0">
                                            <tbody>
                                                @if ($schedule->type == 'online')
                                                    <tr>
                                                        <th width="10%">Panel Name :</th>
                                                        <td width="40%">{{ $schedule->name }}</td>
                                                        <th width="10%">Room :</th>
                                                        <td>{{ $schedule->room }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Timezone :</th>
                                                        <td>{{ $schedule->time_zone }}</td>
                                                        <th>Zoom Link :</th>
                                                        <td>
                                                            <a href="{{ $schedule->zoom_link }}"
                                                                target="_blank">{{ $schedule->zoom_link }}</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Moderator :</th>
                                                        <td>
                                                            <ol class="ps-3 mb-0">
                                                                @foreach ($schedule->moderators as $moderator)
                                                                    <li>{{ $moderator }}</li>
                                                                @endforeach
                                                            </ol>
                                                        </td>
                                                        <th>Meeting ID :</th>
                                                        <td>{{ $schedule->meeting_id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th></th>
                                                        <td></td>
                                                        <th>Password :</th>
                                                        <td>{{ $schedule->password }}</td>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <th width="10%">Panel Name :</th>
                                                        <td width="40%">{{ $schedule->name }}</td>
                                                        <th>Room Name :</th>
                                                        <td>{{ $schedule->room }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="10%">Moderator :</th>
                                                        <td>
                                                            <ol class="ps-3 mb-0">
                                                                @foreach ($schedule->moderators as $moderator)
                                                                    <li>{{ $moderator }}</li>
                                                                @endforeach
                                                            </ol>

                                                        </td>
                                                        <th>Timezone :</th>
                                                        <td>{{ $schedule->time_zone }}</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-lg-12 p-0">
                                        @foreach ($schedule->sessions as $session)
                                            <div class="card mb-3">
                                                <div class="card-header bg-main">
                                                    <h5 class="card-title fw-bold text-white mb-0">{{ $session->name }}
                                                        @php
                                                            $date = \Carbon\Carbon::parse(
                                                                $session->session_date,
                                                            )->translatedFormat('F d, Y');
                                                            $start = \Carbon\Carbon::parse(
                                                                $session->start_time,
                                                            )->format('H.i');
                                                            $end = \Carbon\Carbon::parse($session->end_time)->format(
                                                                'H.i',
                                                            );
                                                            $disStart = \Carbon\Carbon::parse(
                                                                $session->start_discussion_time,
                                                            )->format('H.i');
                                                            $disEnd = \Carbon\Carbon::parse(
                                                                $session->end_discussion_time,
                                                            )->format('H.i');
                                                        @endphp
                                                        <span class="small fw-normal float-end">{{ $date }}
                                                            ({{ $start }} -
                                                            {{ $end }}
                                                            WIB)
                                                        </span>
                                                    </h5>
                                                </div>
                                                <div class="card-body p-0">
                                                    <table class="table table-striped mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th width="10%">Paper ID</th>
                                                                <th width="35%">Author</th>
                                                                <th>Title</th>
                                                                <th width="10%">Time</th>
                                                            </tr>
                                                            @foreach ($session->papers as $paper)
                                                                <tr>
                                                                    <td align="center">{{ $paper->id }}</td>
                                                                    <td>{{ $paper->authors }}</td>
                                                                    <td>{{ $paper->title }}
                                                                    </td>
                                                                    @php
                                                                        $start = \Carbon\Carbon::parse(
                                                                            $paper->start_time,
                                                                        )->format('H.i');
                                                                        $end = \Carbon\Carbon::parse(
                                                                            $paper->end_time,
                                                                        )->format('H.i');
                                                                    @endphp
                                                                    <td>{{ $start }} - {{ $end }}</td>
                                                                </tr>
                                                            @endforeach
                                                            <tr class="bg-dark">
                                                                <td class="fw-bold text-dark h6" colspan="3">Discussion
                                                                </td>
                                                                <td class="text-dark">{{ $disStart }} -
                                                                    {{ $disEnd }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
