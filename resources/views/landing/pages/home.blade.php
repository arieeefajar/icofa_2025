@extends('landing.layouts.main')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center">
                        <div class="conference-logo" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                            <img src="{{ asset('assets/img/icofa_7th_logo.svg') }}" alt="ICoFA Logo" class="img-fluid">
                        </div>
                        <h1 class="conference-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400"
                            data-aos-anchor-placement="top-bottom">
                            8th ICoFA 2025
                        </h1>
                        <div class="conference-number" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600"
                            data-aos-anchor-placement="top-bottom">
                            International Conference
                        </div>
                        <div class="host-info" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800"
                            data-aos-anchor-placement="top-bottom">
                            Politeknik Negeri Jember
                        </div>
                        <p class="theme" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000"
                            data-aos-anchor-placement="top-bottom">
                            "Empowering Global Society in The Field of Agriculture, Food, Animal Husbandry, and Energy to
                            Respond Climate Emergency for Sustainable Future"
                        </p>
                        <div class="row justify-content-center g-3" data-aos="fade-up" data-aos-duration="800"
                            data-aos-delay="1200" data-aos-anchor-placement="top-bottom">
                            <div class="col-md-4 col-lg-3">
                                <a href="#registration" class="btn btn-custom-primary w-100">
                                    <i class="bi bi-pencil-square me-2"></i>Register Now
                                </a>
                            </div>
                            <div class="col-md-4 col-lg-3">
                                <a href="#papers" class="btn btn-custom-secondary w-100">
                                    <i class="bi bi-file-text me-2"></i>Submit Paper
                                </a>
                            </div>
                            <div class="col-md-4 col-lg-3">
                                <a href="#program" class="btn btn-custom-tertiary w-100">
                                    <i class="bi bi-calendar3 me-2"></i>View Program
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section id="conference-video" class="video-section py-5">
        <div class="container" data-aos="zoom-in" data-aos-duration="1000">
            <!-- Embedded Video -->
            <div class="mb-5">
                <div class="ratio ratio-16x9 rounded shadow overflow-hidden">
                    <iframe src="https://www.youtube.com/embed/grRMXCDlYQE?si=FSKHTD4LHkjN5mvd" title="Conference Video"
                        allowfullscreen loading="lazy"></iframe>
                </div>
            </div>

            <!-- Conference Dates -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <h2 class="fw-bold">Conference Dates</h2>
                <div class="divider mx-auto my-2" style="width: 60px; height: 3px; background-color: #3f7f69;"></div>
                <p class="mt-3">
                    Conference date is July 10<sup>th</sup>, 2025<br>
                    <strong>Offline Conference</strong> for Presenters from Politeknik Negeri Jember<br>
                    <strong>Offline & Online Conference</strong> for External Presenters
                </p>
                <p>The program starts at 10.00 (GMT+7)</p>
                <a href="#" class="btn btn-custom-primary rounded-pill px-4 py-2 mt-2">
                    <i class="bi bi-calendar-event me-2"></i> Important Dates
                </a>

                <!-- Countdown -->
                <div class="d-flex justify-content-center gap-4 mt-5 flex-wrap">
                    <div class="countdown-box text-center border rounded px-3 py-2">
                        <h3 id="days" class="fw-bold">00</h3>
                        <span class="text-muted fw-semibold">days</span>
                    </div>
                    <div class="countdown-box text-center border rounded px-3 py-2">
                        <h3 id="hours" class="fw-bold">00</h3>
                        <span class="text-muted fw-semibold">hours</span>
                    </div>
                    <div class="countdown-box text-center border rounded px-3 py-2">
                        <h3 id="minutes" class="fw-bold">00</h3>
                        <span class="text-muted fw-semibold">minutes</span>
                    </div>
                    <div class="countdown-box text-center border rounded px-3 py-2">
                        <h3 id="seconds" class="fw-bold">00</h3>
                        <span class="text-muted fw-semibold">seconds</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
