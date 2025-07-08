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
                            data-aos-anchor-placement="top-bottom">8th ICoFA 2025</h1>
                        <div class="conference-number" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600"
                            data-aos-anchor-placement="top-bottom">International Conference</div>
                        <div class="host-info" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800"
                            data-aos-anchor-placement="top-bottom">Politeknik Negeri Jember</div>
                        <p class="theme" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000"
                            data-aos-anchor-placement="top-bottom">
                            "Empowering Global Society in The Field of Agriculture, Food, Animal Husbandry, and Energy
                            to Respond Climate Emergency for Sustainable Future"
                        </p>
                        <div class="row justify-content-center g-3" data-aos="fade-up" data-aos-duration="800"
                            data-aos-delay="1200" data-aos-anchor-placement="top-bottom">
                            <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="1400"
                                data-aos-anchor-placement="top-bottom">
                                <a href="#registration" class="btn btn-custom-primary w-100"><i
                                        class="bi bi-pencil-square me-2"></i>Register Now</a>
                            </div>
                            <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="1600"
                                data-aos-anchor-placement="top-bottom">
                                <a href="#papers" class="btn btn-custom-secondary w-100"><i
                                        class="bi bi-file-text me-2"></i>Submit Paper</a>
                            </div>
                            <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="1800"
                                data-aos-anchor-placement="top-bottom">
                                <a href="#program" class="btn btn-custom-tertiary w-100"><i
                                        class="bi bi-calendar3 me-2"></i>View Program</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- video section -->
    <section id="conference-video" class="video-section py-5">
        <div class="container" data-aos="zoom-in" data-aos-duration="1000">
            <div class="ratio ratio-16x9 rounded shadow-sm overflow-hidden">
                <iframe src="https://www.youtube.com/embed/grRMXCDlYQE?si=6UXTgEK4LoeZa9UZ" title="ICoFA Conference Video"
                    allowfullscreen loading="lazy">
                </iframe>
            </div>
        </div>
    </section>
@endsection
