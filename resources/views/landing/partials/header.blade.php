<header id="header"
    class="header d-flex align-items-center {{ request()->path() == '/' ? ' fixed-top' : ' sticky-top' }}">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <img src="{{ asset('assets/img/polije_blu.svg') }}" alt="" height="40px">
            <img src="{{ asset('assets/img/icofa_8th_logo_alt.png') }}" alt="" height="40px">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="./#callforpaper" target="_self" class="">Call
                        for Papers</a></li>
                <li><a href="./#speaker" target="_self" class="">Speakers</a></li>
                <li class="dropdown"><a href=""><span>Committee</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="scientific-committee" target="_self">Scientific Committee</a></li>

                        <li><a href="organizing-committee" target="_self">Organizing Committee</a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>For Presenters</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#important-dates" target="_self" class="">Important Dates</a></li>

                        <li><a href="submission" target="_self">Submission Information</a></li>

                        <li><a href="virtual-conference-instruction" target="_self">Virtual Conference
                                Instruction</a></li>

                        <li><a href="registration-fee" target="_self">Registration Fee</a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Event</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Conference
                                    Event</span> <i class="bi bi-chevron-right toggle-dropdown"></i></a>

                            <ul>
                                <li><a href="program-schedule" target="_self">Program Schedule</a></li>
                                <li><a href="{{ route('landing.presentationSchedule') }}" target="_self">Presentation
                                        Schedule</a></li>
                            </ul>

                        </li>
                        <li><a href="#venue" target="_self" class="">Venue</a></li>

                    </ul>
                </li>
                <li><a href="{{ route('landing.download') }}" target="_self"
                        class="{{ request()->routeIs('landing.download') ? 'active' : '' }}">Download</a></li>
                <li><a href="#contact" target="_self" class="">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>

</header>
