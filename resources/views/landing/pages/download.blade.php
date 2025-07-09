@extends('landing.layouts.main')

@section('content')
    <section id="download" class="download about">
        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h2>Download</h2>
            <p></p>
        </div><!-- End Section Title -->

        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="bg-main text-white"></th>
                                <th class="bg-main text-white text-center">Keterangan</th>
                                <th class="bg-main text-white text-center">Link Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($download as $d)
                                <tr>
                                    <td width="5%" align="center"><i
                                            class="bi {{ Str::contains(Str::lower($d->keterangan), 'poster') ? 'bi-image' : 'bi-file' }} h1"></i>
                                    </td>
                                    <td>
                                        <h4>{{ $d->keterangan }}</h4>
                                    </td>
                                    <td width="20%" align="center"><a href="{{ $d->link_download }}" class="btn btn-dark"
                                            target="_blank"><i class="bi bi-download"></i> Download</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
