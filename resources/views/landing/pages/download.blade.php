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
                            <tr>
                                <td width="5%" align="center"><i class="bi bi-file h1"></i></td>
                                <td>
                                    <h4>Presenter Certificate</h4>
                                </td>
                                <td width="20%" align="center"><a
                                        href="https://drive.google.com/drive/folders/11x7YDXiT2gGIVGy06ByFss4tM1oVvQAT?usp=sharing"
                                        class="btn btn-dark" target="_blank"><i class="bi bi-download"></i> Download</a>
                                </td>
                            </tr>
                            <tr>
                                <td width="5%" align="center"><i class="bi bi-file h1"></i></td>
                                <td>
                                    <h4>Certificate Best Article and Presenter</h4>
                                </td>
                                <td width="20%" align="center"><a
                                        href="https://drive.google.com/drive/folders/1v_960TGi1i2lmJOvhQUkpPYdZnptHKCE?usp=drive_link"
                                        class="btn btn-dark" target="_blank"><i class="bi bi-download"></i> Download</a>
                                </td>
                            </tr>
                            <tr>
                                <td width="5%" align="center"><i class="bi bi-file-image h1"></i></td>
                                <td>
                                    <h4>Poster ICoFA 2024</h4>
                                </td>
                                <td width="20%" align="center"><a
                                        href="https://drive.google.com/file/d/1Y2bmVsuKw20nphGWnOwBh03cQef-Vtte/view?usp=sharing"
                                        class="btn btn-dark" target="_blank"><i class="bi bi-download"></i> Download</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
