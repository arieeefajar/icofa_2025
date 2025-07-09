@extends('landing.layouts.main')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="hero-bg">
            <img src="{{ asset('assets/img/hero-bg-light.jpg') }}" alt="">
        </div>
        <div class="container text-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('assets/img/icofa_8th_logo.png') }}" alt="" class="hero-img mb-3"
                    data-aos="fade-up">
                <h2 data-aos="fade-up" data-aos-delay="100" class="aos-init">Politeknik Negeri Jember</h2>
                <p data-aos="fade-up" data-aos-delay="150" class="bg-dark px-3 text-white aos-init">8th
                    International Conference on Food and Agriculture 2025<br></p>
                <h3 data-aos="fade-up" data-aos-delay="200" class="aos-init">Empowering Global Society in The
                    Field of Agriculture, Food, Animal Husbandry, and Energy to Respond Climate Emergency for Sustainable
                    Future</h3>
                <div class="d-flex aos-init" data-aos="fade-up" data-aos-delay="250">
                    <a href="#introduction" class="btn-get-started">Introduction</a>
                    <a href="https://easychair.org/conferences/?conf=the7thicofa" class="btn-get-started ms-3"
                        target="_blank"><i class="bi bi-upload"></i> Submit Here</a>
                    <a href="{{ asset('assets/img/ICOFA_POSTER.jpg') }}"
                        class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-file-earmark-image-fill"></i><span>Poster <span>ICoFA</span> 2025</span></a>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-12">
                    <iframe width="100%" height="768"
                        src="https://www.youtube.com/embed/grRMXCDlYQE?si=8o0hRYFYimFwuaPi" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </section>

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Conference Dates</h2>
            <p></p>
            <p>Conference date is July 10<sup>th</sup>, 2025</p>
            <ul>
                <li class="list-unstyled"><span class="fw-bold">Offline Conference</span> for Presenters from Politeknik
                    Negeri Jember</li>
                <li class="list-unstyled"><span class="fw-bold">Offline &amp; Online Conference</span> for External
                    Presenters</li>
            </ul>
            <a href="#important-dates" class="btn-get-started mt-5"><i class="bi bi-calendar-check"></i> Important Dates</a>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                    <div class="container">
                        <div id="countdown" class="row justify-content-center align-items-center"></div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="introduction" class="about section">

        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-6 content aos-init" data-aos="fade-up" data-aos-delay="100">
                    <p class="who-we-are">Introduction</p>
                    <h3>About Conference</h3>
                    <p align="justify">
                        Politeknik Negeri Jember Indonesia will hold scientific conference, entitled The 7<sup>th</sup>
                        International Conference
                        on Food and Agriculture (ICoFA). The theme of ICoFA is "Empowering Global Society in The Field of
                        Agriculture, Food,
                        Animal Husbandry, and Energy to Respond Climate Emergency for Sustainable Future".
                        <br><br>
                        The conference will discuss several topics, including:
                    </p>
                    <span class="fw-bold">Agricultural Production and Agricultural Technology</span>
                    <ol>
                        <li>Biodiversity and Ecosystem Impacts</li>
                        <li>Reforestation and Afforestation Initiatives</li>
                        <li>Organic Agriculture</li>
                        <li>Food Security and Agricultural Adaptation</li>
                    </ol>

                    <span class="fw-bold">Animal Husbandry and Fisheries</span>
                    <ol>
                        <li>Animal Husbandry and Poultry</li>
                        <li>Socioeconomic Aspect and Technology of Husbandry and Agriculture</li>
                        <li>Fishery (Ocean and Brackish)</li>
                        <li>Fish Farming Technology</li>
                    </ol>

                    <span class="fw-bold">Agribusiness Management</span>
                    <ol>
                        <li>Socio Economics Related To Food and Agriculture</li>
                    </ol>

                    <span class="fw-bold">Engineering</span>
                    <ol>
                        <li>Water Resource Management in Changing Climate</li>
                        <li>Carbon Sequestration</li>
                        <li>Sustainable Transportation<br></li>
                        <li>Energy Conservation</li>
                        <li>Low Carbon Technology</li>
                    </ol>

                    <span class="fw-bold">Information Technology</span>
                    <ol>
                        <li>Technology Advancements Related to Climate Change</li>
                        <li>Applied Information Technology for Agriculture</li>
                    </ol>
                </div>

                <div class="col-lg-1"></div>

                <div class="col-lg-5 about-images text-center d-block" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/speakers/no-profile-1.jpg') }}" height="500px" alt="">
                    <div class="chairman text-white text-center border rounded p-3 bg-main">
                        <h4 class="name m-0">XXX</h4>
                        <p class="position m-0">Chairman of Organizing Committee</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- /About Section -->

    <section id="callforpaper" class="services section">

        <!-- Section Title -->
        <div class="container section-title aos-init" data-aos="fade-up">
            <h2>Call for Papers</h2>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <i class="bi bi-book icon"></i>
                        <div>
                            <h3>Submission Information</h3>
                            <p>More details about paper submission and publication opportunies.</p>
                            <a href="" class="read-more stretched-link">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <i class="bi bi-info-circle icon"></i>
                        <div>
                            <h3>Virtual Conference Instruction</h3>
                            <p>Link for Instruction of Virtual Conference</p>
                            <a href="" class="read-more stretched-link">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <i class="bi bi-file-earmark-image icon"></i>
                        <div>
                            <h3>Book of Abstract</h3>
                            <p>Please do not be hesitate to download the digital version Book Of Abstract.</p>
                            <a href="" class="read-more stretched-link">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <i class="bi bi-calendar-range icon"></i>
                        <div>
                            <h3>Program Schedule</h3>
                            <p>Schedule of Program during ICoFA 2024 event.</p>
                            <a href="" class="read-more stretched-link">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <i class="bi bi-mic-fill icon"></i>
                        <div>
                            <h3>Presentation Schedule</h3>
                            <p>Schedule of Presentation during event ICoFA 2024 event.</p>
                            <a href="" class="read-more stretched-link">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <i class="bi bi-award icon"></i>
                        <div>
                            <h3>Awards</h3>
                            <p>List of Awards given during the ICoFA 2024 event.</p>
                            <a href="" class="read-more stretched-link">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="speaker" class="team section">

        <!-- Section Title -->
        <div class="container section-title aos-init" data-aos="fade-up">
            <h2>Opening Speech</h2>
            <p></p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-stretch aos-init" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/speakers/direktur-1.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="member-info">
                            <h4 class="text-center">Saiful Anwar, S.TP, M.P.</h4>
                            <p align="center"></p>
                            <span class="text-center">
                                <p>Director of Politeknik Negeri Jember, Indonesia<br></p>
                            </span>
                        </div>
                    </div>
                </div><!-- End Team Member -->
            </div>
        </div>

        <!-- Section Title -->
        <div class="container section-title mt-3 aos-init" data-aos="fade-up">
            <h2>Keynote Speaker</h2>
            <p></p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-stretch aos-init" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/speakers/no-profile-2.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="member-info">
                            <h4 class="text-center">XXX</h4>
                            <p align="center"></p>
                            <span class="text-center">XXX</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->
                <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-stretch aos-init" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/speakers/no-profile-3.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="member-info">
                            <h4 class="text-center">XXX</h4>
                            <p align="center"></p>
                            <span class="text-center">XXX</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->
                <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-stretch aos-init" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/speakers/no-profile-4.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="member-info">
                            <h4 class="text-center">XXX</h4>
                            <p align="center"></p>
                            <span class="text-center">XXX<br></span>
                        </div>
                    </div>
                </div><!-- End Team Member -->
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="important-dates" class="services section">

        <!-- Section Title -->
        <div class="container section-title aos-init" data-aos="fade-up">
            <h2>Important Dates</h2>
            <p></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row g-5">
                <div class="col-md-12 col-sm-12 col-xs-12" id="timeline">
                    <div class="main-timeline-2">
                        <div class="timeline-2 left-2">
                            <div class="card border-warning aos-init" data-aos="fade-up">
                                <div class="card-body p-4">
                                    <h4 class="fw-bold mb-2"><a href="#" class="text-warning">Earlybird Abstract
                                            Deadline</a></h4>
                                    <p class="text-muted mb-2">August 17<sup>th</sup>, 2024</p>
                                    <i class="icon bi bi-file-earmark-text text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-2 right-2">
                            <div class="card border-danger aos-init" data-aos="fade-up">
                                <div class="card-body p-4">
                                    <h4 class="fw-bold mb-2"><a href="#" class="text-danger">Early Bird Payment
                                            Deadline</a></h4>
                                    <p class="text-muted mb-2">August 17<sup>th</sup>, 2024</p>
                                    <i class="icon bi bi-credit-card-2-front text-danger"></i>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-2 left-2">
                            <div class="card border-primary aos-init" data-aos="fade-up">
                                <div class="card-body p-4">
                                    <h4 class="fw-bold mb-2"><a href="#" class="text-primary">Abstract Submission
                                            Deadline</a></h4>
                                    <p class="text-muted mb-2"><s>August 30<sup>th</sup>, 2024</s><br>
                                        September 13<sup>th</sup>, 2024</p>
                                    <i class="icon bi bi-cloud-arrow-up text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-2 right-2">
                            <div class="card border-info aos-init" data-aos="fade-up">
                                <div class="card-body p-4">
                                    <h4 class="fw-bold mb-2"><a href="#" class="text-info">Abstract Accepted
                                            Announcement</a></h4>
                                    <p class="text-muted mb-2"><s>September 2<sup>nd</sup>, 2024</s><br>
                                        September 14<sup>th</sup>, 2024</p>
                                    <i class="icon bi bi-info-circle text-info"></i>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-2 left-2">
                            <div class="card border-danger aos-init" data-aos="fade-up">
                                <div class="card-body p-4">
                                    <h4 class="fw-bold mb-2"><a href="#" class="text-danger">Regular Payment
                                            Deadline</a></h4>
                                    <p class="text-muted mb-2"><s>September 2<sup>nd</sup>, 2024</s><br>
                                        September 14<sup>th</sup>, 2024</p>
                                    <i class="icon bi bi-credit-card-2-back text-danger"></i>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-2 right-2">
                            <div class="card border-primary aos-init" data-aos="fade-up">
                                <div class="card-body p-4">
                                    <h4 class="fw-bold mb-2"><a href="#" class="text-primary">Full Paper
                                            Deadline</a></h4>
                                    <p class="text-muted mb-2"><s>September 12<sup>th</sup>, 2024</s><br>
                                        September 20<sup>th</sup>, 2024</p>
                                    <i class="icon bi bi-newspaper text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-2 left-2">
                            <div class="card border-info aos-init" data-aos="fade-up">
                                <div class="card-body p-4">
                                    <h4 class="fw-bold mb-2"><a href="#" class="text-info">Full Paper Reviewed
                                            Result</a></h4>
                                    <p class="text-muted mb-2"><s>September 22<sup>nd</sup>, 2024</s><br>
                                        September 30<sup>th</sup>, 2024</p>
                                    <i class="icon bi bi-info-circle-fill text-info"></i>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-2 right-2">
                            <div class="card border-primary aos-init" data-aos="fade-up">
                                <div class="card-body p-4">
                                    <h4 class="fw-bold mb-2"><a href="#" class="text-primary">Camera Ready Paper
                                            Deadline</a></h4>
                                    <p class="text-muted mb-2"><s>September 29<sup>th</sup>, 2024</s><br>
                                        October 6<sup>th</sup>, 2024</p>
                                    <i class="icon bi bi-camera text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-2 left-2">
                            <div class="card border-info aos-init" data-aos="fade-up">
                                <div class="card-body p-4">
                                    <h4 class="fw-bold mb-2"><a href="#" class="text-info">Conference Date</a></h4>
                                    <p class="text-muted mb-2">October 12<sup>th</sup>, 2024</p>
                                    <i class="icon bi bi-calendar3 text-info"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Link Section -->
    <section id="link" class="cta section">

        <div class="container aos-init" data-aos="fade-up">

            <div class="row content justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <h3 class="text-center">Hosted By</h3>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="bg-white border rounded p-1 mb-3">
                                <a href="https://polije.ac.id/" target="_blank">
                                    <img src="{{ asset('assets/img/logo/polije-logo-gabung.png') }}" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h3 class="text-center">Supported By</h3>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="bg-white border rounded p-1 mb-3">
                                <a href="https://p3m.polije.ac.id/" target="_blank">
                                    <img src="{{ asset('assets/img/logo/p3m.png') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h3 class="text-center">Published By</h3>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="bg-white border rounded p-1 mb-3">
                                <a href="https://applied.dysona.org/" target="_blank">
                                    <img src="{{ asset('assets/img/logo/dysona.jpg') }}" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-white border rounded p-1 mb-3">
                                <a href="https://publikasi.polije.ac.id/tefa" target="_blank">
                                    <img src="{{ asset('assets/img/logo/tefa.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h3 class="text-center">Proceeding Indexed By</h3>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="bg-white border rounded p-1 mb-3">
                                <a href="#" target="_blank">
                                    <img src="{{ asset('assets/img/logo/scopus.jpg') }}" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Contact Section -->
    <section id="venue" class="contact section">

        <!-- Section Title -->
        <div class="container section-title pb-0 aos-init" data-aos="fade-up">
            <h2>Conference Venue</h2>
            <p></p>
        </div><!-- End Section Title -->

        <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-12">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center aos-init"
                        data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Ketapang Indah Hotel, Banyuwangi, East Java, Indonesia</h3>
                        <p>Address: Jalan Gatot Subroto No.Km. 6, Lingkungan Tj., Klatak, Kec. Kalipuro, Kabupaten
                            Banyuwangi, Jawa Timur 68421</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="row gy-4 mt-1">
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
                    <div id="venueCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-bs-interval="5000">

                        <div class="carousel-inner" role="listbox">

                            <div class="carousel-item"
                                style="background-image: url({{ asset('assets/img/venue/venue-1.jpg') }}); background-size: cover;">
                                <div class="carousel-container">
                                    <div class="container" style="height: 380px;"></div>
                                </div>
                            </div>
                            <div class="carousel-item"
                                style="background-image: url({{ asset('assets/img/venue/venue-2.jpg') }}); background-size: cover;">
                                <div class="carousel-container">
                                    <div class="container" style="height: 380px;"></div>
                                </div>
                            </div>
                            <div class="carousel-item active"
                                style="background-image: url({{ asset('assets/img/venue/venue-3.jpg') }}); background-size: cover;">
                                <div class="carousel-container">
                                    <div class="container" style="height: 380px;"></div>
                                </div>
                            </div>
                            <div class="carousel-item"
                                style="background-image: url({{ asset('assets/img/venue/venue-4.jpg') }}); background-size: cover;">
                                <div class="carousel-container">
                                    <div class="container" style="height: 380px;"></div>
                                </div>
                            </div>
                            <div class="carousel-item"
                                style="background-image: url({{ asset('assets/img/venue/venue-5.jpg') }}); background-size: cover;">
                                <div class="carousel-container">
                                    <div class="container" style="height: 380px;"></div>
                                </div>
                            </div>
                            <div class="carousel-item"
                                style="background-image: url({{ asset('assets/img/venue/venue-6.jpg') }}); background-size: cover;">
                                <div class="carousel-container">
                                    <div class="container" style="height: 380px;"></div>
                                </div>
                            </div>
                            <div class="carousel-item"
                                style="background-image: url({{ asset('assets/img/venue/venue-7.jpg') }}); background-size: cover;">
                                <div class="carousel-container">
                                    <div class="container" style="height: 380px;"></div>
                                </div>
                            </div>

                        </div>

                        <a class="carousel-control-prev" href="#venueCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>

                        <a class="carousel-control-next" href="#venueCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>

                    </div>
                </div>
                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.426662855851!2d114.38854107558062!3d-8.15969598175282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd14427376889f1%3A0x5a095f61da85b0a6!2sKetapang%20Indah%20Hotel!5e0!3m2!1sen!2sid!4v1721556986271!5m2!1sen!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->
            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
