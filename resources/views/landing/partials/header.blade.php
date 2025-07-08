{{-- <header id="header" class="header d-flex align-items-center{{ $npage == 0 ? ' fixed-top' : ' sticky-top' }}"> --}}
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <img src="{{ asset('assets/img/polije_blu.svg') }}" alt="" height="40px">
            <img src="{{ asset('assets/img/icofa_7th_logo_alt.svg') }}" alt="" height="40px">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="./#callforpaper" target="_self" class="active">Call for Papers</a></li>
                <li><a href="./#speaker" target="_self" class="">Speakers</a></li>
                <li class="dropdown"><a href=""><span>Committee</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="?page=scientific-committee" target="_self">Scientific Committee</a></li>

                        <li><a href="?page=organizing-committee" target="_self">Organizing Committee</a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>For Presenters</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="./#important-dates" target="_self" class="">Important Dates</a></li>

                        <li><a href="?page=submission" target="_self">Submission Information</a></li>

                        <li><a href="?page=virtual-conference-instruction" target="_self">Virtual Conference
                                Instruction</a></li>

                        <li><a href="?page=registration-fee" target="_self">Registration Fee</a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Event</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Conference
                                    Event</span> <i class="bi bi-chevron-right toggle-dropdown"></i></a>

                            <ul>
                                <li><a href="?page=program-schedule" target="_self">Program Schedule</a></li>
                                <li><a href="?page=presentation-schedule" target="_self">Presentation Schedule</a></li>
                            </ul>

                        </li>
                        <li><a href="./#venue" target="_self" class="">Venue</a></li>

                    </ul>
                </li>
                <li><a href="?page=download" target="_self">Download</a></li>
                <li><a href="#contact" target="_self" class="">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>

</header>
