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
                    {{-- <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="h6 fw-bold nav-link active" id="panel1" data-bs-toggle="tab"
                                data-bs-target="#nav-panel1" type="button" role="tab" aria-controls="nav-panel1"
                                aria-selected="true">Panel 1</button>
                            <button class="h6 fw-bold nav-link" id="panel2" data-bs-toggle="tab"
                                data-bs-target="#nav-panel2" type="button" role="tab" aria-controls="nav-panel2"
                                aria-selected="false" tabindex="-1">Panel 2</button>
                            <button class="h6 fw-bold nav-link" id="panel3" data-bs-toggle="tab"
                                data-bs-target="#nav-panel3" type="button" role="tab" aria-controls="nav-panel3"
                                aria-selected="false" tabindex="-1">Panel 3</button>
                            <button class="h6 fw-bold nav-link" id="panel4" data-bs-toggle="tab"
                                data-bs-target="#nav-panel4" type="button" role="tab" aria-controls="nav-panel4"
                                aria-selected="false" tabindex="-1">Panel 4</button>
                            <button class="h6 fw-bold nav-link" id="panel5" data-bs-toggle="tab"
                                data-bs-target="#nav-panel5" type="button" role="tab" aria-controls="nav-panel5"
                                aria-selected="false" tabindex="-1">Panel 5</button>
                            <button class="h6 fw-bold nav-link" id="panel6" data-bs-toggle="tab"
                                data-bs-target="#nav-panel6" type="button" role="tab" aria-controls="nav-panel6"
                                aria-selected="false" tabindex="-1">Panel 6</button>
                        </div>
                    </nav> --}}
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            @foreach ($presentationSchedule as $index => $schedule)
                                <button class="h6 fw-bold nav-link active" id="panel{{ $index }}"
                                    data-bs-toggle="tab" data-bs-target="#nav-panel{{ $index }}" type="button"
                                    role="tab" aria-controls="nav-panel{{ $index }}" aria-selected="true">Panel
                                    1</button>
                            @endforeach
                        </div>
                    </nav>
                    {{-- <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-panel1" role="tabpanel"
                            aria-labelledby="nav-panel1-tab">

                            <div class="row justify-content-center">
                                <div class="col-lg-12 p-3 my-3 bg-light">
                                    <table class="table table-borderless h6 mb-0">
                                        <tbody>
                                            <tr>
                                                <th width="10%">Panel Name :</th>
                                                <td width="40%">Panel 1</td>
                                                <th>Room Name :</th>
                                                <td>Marlin VIP 1 (Offline)</td>
                                            </tr>
                                            <tr>
                                                <th width="10%">Moderator :</th>
                                                <td>
                                                    <ol class="ps-3 mb-0">
                                                        <li>Risse Entikaria Rachmanita, S.Pd., M.Si.</li>
                                                        <li>Findi Citra Kusumasari, S.Pd., M.Si.</li>
                                                        <li>Sindy Frinalia, A.Md.</li>
                                                    </ol>
                                                </td>
                                                <th>Timezone :</th>
                                                <td>Western Indonesian Time (WIB) [GMT +7]</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-12 p-0">

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 1 <span
                                                    class="small fw-normal float-end">October 12, 2024 (10.00 - 10.45
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">7</td>
                                                        <td>Arisanty Nursetia Restuti, Miftahul Jannah, Dina Fitriyah,
                                                            Adhiningsih Yulianti, Dwi Rahmawati, Arizona Ahmad, Ariesia
                                                            Ayuning Gemaputri and Lintang Anis Bena Kinanti</td>
                                                        <td>The proximate analysis and nutrition assessment of Catfishflour
                                                            produced by different drying time and temperature</td>
                                                        <td>10:00 - 10:07</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">10</td>
                                                        <td>Syaiful Bachri, R. Alamsyah Sutantio, Niswatin Hasanah, Rinda
                                                            Nurul Karimah, Fitriya Andriyani and Wike Cahya Dwi Harta</td>
                                                        <td>Study Of Raw Material Chemical Composition Results For
                                                            MilkProducts In Three Regions</td>
                                                        <td>10:07 - 10:14</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">13</td>
                                                        <td>Arvita Agus Kurniasari, Pramuditha Shinta Dewi Puspitasari,
                                                            Lukie Perdanasari, Dia Bitari Mei Yuana and Jumiatun Jumiatun
                                                        </td>
                                                        <td>Enhancing Hydroponic Systems with ESP32: An IoT Approach
                                                            toReal-Time Monitoring and Automation</td>
                                                        <td>10:14 - 10:21</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">16</td>
                                                        <td>Sepdian Luri Asmono, Rahmawati Rahmawati, Nisa Budi Arifiana,
                                                            Dessy Putri Andini and Mochamad Syarief</td>
                                                        <td>Biochemical and Sensory Characteristics of the FermentedGolden
                                                            Apple Snail Extract with the Addition of Kaffir Lime(Citrus
                                                            hystrix) Leaves at Several Ratios</td>
                                                        <td>10:21 - 10:28</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">25</td>
                                                        <td>Yusril Syafrizal, Gendro Indri Wahyuningsih, Fajarani Ulfah,
                                                            Ananta Bayu Pratama and Cahyo Adileksana</td>
                                                        <td>Plant growth analysis of maize (Zea mays): impact of
                                                            secondpaclobutrazol application timing</td>
                                                        <td>10:28 - 10:35</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">46</td>
                                                        <td>Wahyu Suryaningsih, Titik Budiati, Merry Muspita Dyah Utami,
                                                            Aryanti Candra Dewi and Oryza Arddhiarisca</td>
                                                        <td>Effect of Starch and Chitosan on the Physical andMechanical
                                                            Properties of Durian Mesocarp CelluloseBiodegradable Foam</td>
                                                        <td>10:35 - 10:42</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">10.35 - 10-45</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 2 <span
                                                    class="small fw-normal float-end">October 12, 2024 (10.45 - 11.30
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">71</td>
                                                        <td>Sri Sundari, Fendi Hermawan, Tanti Kustiari, Dian Hartatie,
                                                            Financia Mayasari and Hermawan Arief Putranto</td>
                                                        <td>Hydroponic Horticulture Business Sustainability Model inEast
                                                            Java</td>
                                                        <td>10:45 - 10:52</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">80</td>
                                                        <td>Muksin Muksin, Mohamad Dzulkifli, Naning Retnowati and L E
                                                            Widyatami</td>
                                                        <td>Characteristics of customer needs in Agribusiness-BasedEducation
                                                            at Politeknik Negeri Jember</td>
                                                        <td>10:52 - 10:59</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">91</td>
                                                        <td>Ahmad Haris Hasanuddin Slamet, Dini Nafisatul Mutmainah, Septine
                                                            Brillyantina, Sekar Ayu Wulandari, Rahmat Dhandy and Siti Eka
                                                            Nur Julianti</td>
                                                        <td>Development Strategy of PSDKU Sidoarjo AgribusinessTeaching
                                                            Factory Pilot Using SWOT and Lean Canvas BusinessModel</td>
                                                        <td>10:59 - 11:06</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">102</td>
                                                        <td>Ratih Puspitorini Yekti Ambarkahi, Raden Roro Lia Chairina,
                                                            Paramita Andini, Dyah Kusuma Wardani, Andi Muhammad Ismail and
                                                            Dhanang Eka Putra</td>
                                                        <td>Driving Performance Excellence at TEFA Tax Center: TheImpact of
                                                            Balanced Scorecard Implementation</td>
                                                        <td>11:06 - 11:13</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">117</td>
                                                        <td>Muhammad Hasyim Ibnu Abbas, Yogi Dwi Satrio, Hadi Sumarsono,
                                                            Annisya Annisya and Arisona Ahmad</td>
                                                        <td>An Assessment of The Sustainability of AgriculturalProducts in
                                                            Probolinggo Regency: RALED Approach</td>
                                                        <td>11:13 - 11:20</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">11.20 - 11.30</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 3 <span
                                                    class="small fw-normal float-end">October 12, 2024 (11.30 - 12.15
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">119</td>
                                                        <td>Djamali R. Abdoel, Cahyaningrum Deltaningtyas Tri, Retnowati
                                                            Naning and Nindya Laurenta Tasya</td>
                                                        <td>Dynamic System Model For The Development Of AgroindustryAnchovy
                                                            (Stolephurus Commersonii) In Indonesia</td>
                                                        <td>11:30 - 11:37</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">123</td>
                                                        <td>Sri Sundari, Donny Agustinus Waluyo, Tanti Kustiari and Ahmad
                                                            Ahsin Kusuma Mawardi</td>
                                                        <td>Analysis of The Empowerment of Young Coffee Agripreneurs
                                                            inManaging Coffee Production Businesses in Jember</td>
                                                        <td>11:37 - 11:44</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">3</td>
                                                        <td>Erfan Kustiawan, Rizki A Nurfitriani, Dyah L Rukmi, Nur Muhamad,
                                                            Amalia D Marseva and Suluh Nusantoro</td>
                                                        <td>Dietary Golden Apple Snails (Pomacea canaliculata) Eggs
                                                            Maintained Egg Quality of Laying Hens During Storage</td>
                                                        <td>11:44 - 11:51</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">18</td>
                                                        <td>Theo Mahiseta Syahniar, Mira Andriani, Nurkholis Nurkholis,
                                                            Niati Ningsih and Datik Lestari</td>
                                                        <td>Physical characteristics of various crunchy green feeds asa
                                                            small-ruminant supplement</td>
                                                        <td>11:51 - 11:58</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">30</td>
                                                        <td>Merry Muspita Dyah Utami, Aryanti Candra Dewi, Rosa Tri
                                                            Hertamawati, Dillenia Jamine, Nala Wafia, Jini Saputri,
                                                            Kornelius Hangga Septiyanto and Tao Yong</td>
                                                        <td>Biochemical Composition of Pomegranate (Punica granatum) asa
                                                            Natural Feed Additive of Poultry</td>
                                                        <td>11:58 - 12:05</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">12.05 - 12.15</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 4 <span
                                                    class="small fw-normal float-end">October 12, 2024 (12.30 - 13.15
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">33</td>
                                                        <td>Wari Pawestri, Muhammad'Afif Syarifuddin, Ari Kusuma Wati,
                                                            Endang Tri Rahayu and Yuli Yanti</td>
                                                        <td>Physiological Conditions of Bendi Horse in Surakarta City</td>
                                                        <td>12:30 - 12:37</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">37</td>
                                                        <td>Niswatin Hasanah, Nurkholis Nurkholis, Budi Prasetyo, Nining
                                                            Haryuni, Nanang Dwi Wahyono, Salman Riyansyah, Samuel Hadi Sono,
                                                            Dina Prihatiana and Zilvanhisna Emka Fitri</td>
                                                        <td>Efficiency Supply Chain Management Beef Cattle AgricultureWith
                                                            Digital Marketing</td>
                                                        <td>12:37 - 12:44</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">63</td>
                                                        <td>Budi Prasetyo, Agus Hadi Prayitno, Dharwin Siswantoro,
                                                            Deltaningtyas Tri Cahyaningrum and Rizqi Febrian Pramudita</td>
                                                        <td>The effect of local herbs and spices on the physical,color, and
                                                            sensory properties of traditional Indonesianbraised broiler
                                                            chicken breast ‘ungkep’</td>
                                                        <td>12:44 - 12:51</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">65</td>
                                                        <td>Agus Hadi Prayitno, Noor Asrianto, Reikha Rahmasari, Hatmiyarni
                                                            Tri Handayani and Choirul Huda</td>
                                                        <td>The effect of broiler bone nanocalcium citratefortification on
                                                            the color and sensory properties ofIndonesian traditional beef
                                                            meatballs ‘bakso’</td>
                                                        <td>12:51 - 12:58</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">67</td>
                                                        <td>Satria Budi Kusuma, Suci Wulandari, Amal Bahariawan, Adib Norma
                                                            Respati, Muhammad Adhyatma and Wahyu Firmansyah</td>
                                                        <td>PALATABILITY RESPONSE TEST OF HYDROPONIC FODDER (Zea mays,Oryza
                                                            sativa, and Vigna radiata) IN THIN-TAILED SHEEP (Ovisaries)</td>
                                                        <td>12:58 - 13:05</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">13.05 - 13.15</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 5 <span
                                                    class="small fw-normal float-end">October 12, 2024 (13.15 - 14.00
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">68</td>
                                                        <td>Adib Norma Respati, Suci Wulandari, Amal Bahariawan, Satria Budi
                                                            Kusuma and Bahi Nun Zufar Ruswanto</td>
                                                        <td>EVALUATION GROWTH OF HYDROPONIC FODDER WITH DIFFERENTLIGHTING
                                                            TREATMENT TO INCREASE FORAGE PRODUCTIVITY</td>
                                                        <td>13:15 - 13:22</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">72</td>
                                                        <td>Shokhirul Imam, Rosa Tri Hertamawati, Anang Febri Prasetyo,
                                                            Gayuh Syaikhullah, Noor Asrianto and Ujang Suryadi</td>
                                                        <td>Productivity of indigenous chickens fed with palm kernelmeal at
                                                            various feeding levels</td>
                                                        <td>13:22 - 13:29</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">75</td>
                                                        <td>Niati Ningsih, Nur Muhamad, Alditya Putri Yulinarsari, Gayuh
                                                            Syaikhullah and Aryanti Candra Dewi</td>
                                                        <td>Sperm quality of Indonesian native rooster with single
                                                            andmulti-strain probiotic dietary supplements</td>
                                                        <td>13:29 - 13:36</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">99</td>
                                                        <td>Hafsah Hafsah, Dwi Sulistiawati, Muhammad Tahir, Andi Pertiwi
                                                            Damayanti, Muhammed Rasyiq Al Sahab and Andi Nurfadhillah</td>
                                                        <td>Egg production yield and quality of eggs quails byinclusion of
                                                            clitoria ternatea meals as a phytobiotics inthe diets</td>
                                                        <td>13:36 - 13:43</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">107</td>
                                                        <td>Rizki Amalia Nurfitriani, Huda Ahmad Hudori, Deltaningtyas Tri
                                                            Cahyaningrum, Estin Roso Pristiwaningsih, Septine Brillyantina
                                                            and Happy Syahnia Pratiwi</td>
                                                        <td>Study of Sugarcane Silage as Local Raw Material forCafeteria
                                                            Feeding: A Review</td>
                                                        <td>13:43 - 13:50</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">13.50 - 14.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 6 <span
                                                    class="small fw-normal float-end">October 12, 2024 (14.00 - 14.45
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">26</td>
                                                        <td>Siti Djamila, Iswahyono, Yossi Wibisono, Didiek Hermanuadi and
                                                            Supriyono</td>
                                                        <td>Performance of Drying Machine with Air DehumidifyingProcess for
                                                            Marungga Leaves and Identification of FlourMarungga</td>
                                                        <td>14:00 - 14:07</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">27</td>
                                                        <td>Irene Ratri Andia Sasmita, Putu Tessa Fadhilah, Findi Citra
                                                            Kusumasari, Mohammad Mardiyanto and Emi Kurniawati</td>
                                                        <td>Chemical and Microbiology Characteristics of Dragon FruitPeel
                                                            Fermented Drinks</td>
                                                        <td>14:07 - 14:14</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">29</td>
                                                        <td>Sugiyarto Sugiyarto, Descha Giatri Cahyaningrum, Nantil Bambang
                                                            Eko Sulistyono, Liliek Dwi Soelaksini, Elly Daru Ika Wilujeng
                                                            and Ni Nengah Putri Adnyani</td>
                                                        <td>Formulation and Characterization of Polychar Plus GranuleOrganic
                                                            Fertilizer and Agronomic Testing on Tobacco Plantsas an Effort
                                                            to Increase the Capacity of Organic Home Tefa</td>
                                                        <td>14:14 - 14:21</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">31</td>
                                                        <td>Titik Budiati, Wahyu Suryaningsih, Muhammad Ardiyansyah and
                                                            Raden Rara Merry Muspita Dyah Utami</td>
                                                        <td>Effect of acetic acid concentration on
                                                            physicochemicalcharacteristics of collagen from mackerel fish
                                                            waste(Euthynnus affinis)</td>
                                                        <td>14:21 - 14:28</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">32</td>
                                                        <td>Maria Azizah, Desca Giatri Cahyaningrum, Christa Dyah Utami,
                                                            Fadil Rohman and Gallyndra Fatkhu Dinata</td>
                                                        <td>Effect of seed priming with biological agents Trichodermasp and
                                                            Pseudomonas fluorescens on increasing seed qualityof Kenaf
                                                            (Hibiscus cannabinus L.) cultivar KR 14</td>
                                                        <td>14:28 - 14:35</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">14:35 - 14:45</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 7 <span
                                                    class="small fw-normal float-end">October 12, 2024 (14.45 - 15.30
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">34</td>
                                                        <td>Ramadhan Taufika, Dyah Nuning Erawati, Siti Humaida, Usken
                                                            Fisdiana and Irma Harlianingtyas</td>
                                                        <td>Assessment of Insect Population Abundance and Its Effect onthe
                                                            Production Value of Fresh Fruit Bunches of Oil Palm(Elaeis
                                                            guineensis Jacq.)</td>
                                                        <td>14:45 - 14:52</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">35</td>
                                                        <td>Resti Pranata Putri, Annisa'U Choirun, Nadhifah Al Indis,
                                                            Rusdiarti and Ade Galuh Rakhmadevi</td>
                                                        <td>Effect of Microwave-Assisted Extraction (MAE) Method on
                                                            theCharacteristics of Protein Extract from Edamame (Glycinemax
                                                            (L.) Merrill)</td>
                                                        <td>14:52 - 14:59</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">38</td>
                                                        <td>Nantil Bambang Eko Sulistyono, Hanif Fatur Rohman, Muhammad
                                                            Zayin Sukri and Mochamat Bintoro</td>
                                                        <td>EFFECT OF HUMIC ACID AND BLOTONG APLICATION ON VEGETATIVEGROWTH
                                                            OF CHILI (Capsicum annum L.) PLANT</td>
                                                        <td>14:59 - 15:06</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">41</td>
                                                        <td>Tri Rini Kusparwanti, Rindha Rentina Darah Pertami, Firda
                                                            Fatimah Zawani, Gallyndra Fatkhu Dinata, Edi Siswadi, Suwardi
                                                            Suwardi and Fitri Krismiratsih</td>
                                                        <td>Analysis of Hydroponic Honey Globe Melon (Cucumis melo
                                                            L.inodorus) Farming Business with Substrate Planting Media</td>
                                                        <td>15:06 - 15:13</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">42</td>
                                                        <td>Adhima Adhamatika, Dimas Triardianto, Yani Subaktilah, Mohammad
                                                            Edwinsyah Yanuan Putra and Datik Lestari</td>
                                                        <td>Innovation of Lemuru Fish with Green Chili Sauce UsingCanning
                                                            Technology to Support Product Diversification atTEFA Fish
                                                            Canning</td>
                                                        <td>15:13 - 15:20</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">15:20 - 15:30</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 8 <span
                                                    class="small fw-normal float-end">October 12, 2024 (15.30 - 16.15
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">43</td>
                                                        <td>Dian Hartatie, Hatmiyarni Tri Handayani, Ujang Setyoko and Huda
                                                            Ahmad Hudori</td>
                                                        <td>Effect of Humidity and Temperature on the Growth of StapleStems
                                                            of Robusta Coffee Plants Resulting from Rejuvenationof BP 234
                                                            and BP 409 Clones in the Politeknik Negeri JemberCollection
                                                            Garden</td>
                                                        <td>15:30 - 15:37</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">47</td>
                                                        <td>Edi Siswadi, Gallyndra Fatkhu Dinata, Tri Rini Kusparwanti,
                                                            Rindha Rentina Darah Pertami and Abdurrahman Salim</td>
                                                        <td>Antifungal activity of secondary metabolites fromTrichoderma sp.
                                                            against Fusarium oxysporum f. sp. cubense</td>
                                                        <td>15:44 - 15:51</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">48</td>
                                                        <td>Michael Joko Wibowo, Mokhamad Fatoni Kurnianto, Findi Citra
                                                            Kusumasari, Abi Bakri, Risse Entikaria Rachmanita, Dimas
                                                            Triardianto and Budi Hariono</td>
                                                        <td>Combination of Thermal and Non-Thermal Pasteurization ofSiam
                                                            Semboro Orange Juice</td>
                                                        <td>15:51 - 15:58</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">16:05 - 16:15</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-panel2" role="tabpanel" aria-labelledby="nav-panel2-tab">

                            <div class="row justify-content-center">
                                <div class="col-lg-12 p-3 my-3 bg-light">
                                    <table class="table table-borderless h6 mb-0">
                                        <tbody>
                                            <tr>
                                                <th width="10%">Panel Name :</th>
                                                <td width="40%">Panel 2</td>
                                                <th>Room Name :</th>
                                                <td>Wahoo (Offline)</td>
                                            </tr>
                                            <tr>
                                                <th width="10%">Moderator :</th>
                                                <td>
                                                    <ol class="ps-3 mb-0">
                                                        <li>Nugroho Setyo Wibowo, ST, MT.</li>
                                                        <li>Adriadi Novawan, S.Pd., M.Ed.</li>
                                                        <li>Dr. dr. R. Roro Lia Chairina, MM</li>
                                                    </ol>
                                                </td>
                                                <th>Timezone :</th>
                                                <td>Western Indonesian Time (WIB) [GMT +7]</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-12 p-0">

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 1 <span
                                                    class="small fw-normal float-end">October 12, 2024 (10.00 - 10.45
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">5</td>
                                                        <td>Aulia Brilliantina, Putu Tessa Fadhila, Emi Kurniawati, Mohammad
                                                            Mardiyanto and Irene Ratri Andia Sasmita</td>
                                                        <td>The Analysis of Consumer Perception on Quality of CannedSardines
                                                            TeFa POLIJE Used Importance Performance AnalysisMethod</td>
                                                        <td>10:00 - 10:07</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">20</td>
                                                        <td>Tia Sofiani Napitupulu, Sumarlina, Aulia Nadhirah, Amalia Dwi
                                                            Marseva, Lintang Anis Bena Kinanti and Angel Ferinta</td>
                                                        <td>Determining Consumer Preferences for Orange Attributes:
                                                            AConjoint Analysis Approach at The Teaching Factory,Politeknik
                                                            Negeri Jember</td>
                                                        <td>10:07 - 10:14</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">55</td>
                                                        <td>Deltaningtyas Tri Cahyaningrum, R Abdoel Djamali and Ajeng Eka
                                                            Putri Puspito</td>
                                                        <td>Analysis of Supply Chain Risk Management in UD. Tempe UsingHouse
                                                            Of Risk Method</td>
                                                        <td>10:14 - 10:21</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">60</td>
                                                        <td>Nanang Dwi Wahyono, Tanti Kustiari and Niswatin Hasanah</td>
                                                        <td>Sustainable Coffee Agroindustry Supply Chain
                                                            PerformanceImprovement Planning Strategy</td>
                                                        <td>10:21 - 10:28</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">62</td>
                                                        <td>Muhammad Edwinsyah Yanuan Putra, Elis Rahmawati Mar'Atus
                                                            Sholihah, Waridad Umais Al Ayyubi, Anwar Firmansyah, Ngani
                                                            Alwirya Musi, Aditya Wardana and Rahmat Dhandy</td>
                                                        <td>THE DETERMINANT OF EXCELLENT HORTICULTURE COMMODITY INNGAWI
                                                            REGENCY</td>
                                                        <td>10:28 - 10:35</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">10.35 - 10-45</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 2 <span
                                                    class="small fw-normal float-end">October 12, 2024 (10.45 - 11.30
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">39</td>
                                                        <td>Yuana Susmiati, Bayu Rudiyanto, Sugiyarto Sugiyarto and Dafit
                                                            Ari Prasetyo</td>
                                                        <td>Optimizing the process of extracting palm fruit from
                                                            Polijeplantations into CPO (crude palm oil) using Taguchi method
                                                        </td>
                                                        <td>10:45 - 10:52</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">17</td>
                                                        <td>Taufik Hidayat, Ida Adha Anrosana Pongoh, Rizal Rizal, Alwan
                                                            Abdurahman and Dini Nafisatul Mutmainah</td>
                                                        <td>Business Economy Development Based on Agro Techno Park 5.0at
                                                            Jember State Polytechnic's Teaching Factory AgribusinessCenter
                                                        </td>
                                                        <td>10:52 - 10:59</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">19</td>
                                                        <td>Luluk Cahyo Wiyono, Retno Sari Mahanani, Ridwan Iskandar,
                                                            Alditya Putri Yulinarsari and Andarula Galushasti</td>
                                                        <td>Marketing Strategy of Teaching Factory Agribusiness Centerof
                                                            Jember State Polytechnic</td>
                                                        <td>10:59 - 11:06</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">77</td>
                                                        <td>Ridwan Iskandar, Luluk Cahyo Wiyono, Retno Sari Mahanani and
                                                            Uyun Erma Malika</td>
                                                        <td>Diagnostics of Production Process Quality Innovation toImprove
                                                            the Sustainability of the Teaching Factory SmartGreen House of
                                                            the Politeknik Negeri Jember</td>
                                                        <td>11:06 - 11:13</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">57</td>
                                                        <td>Irma Wardati, Titien Fatimah, Satria Indra Kusuma, Iqbal
                                                            Erdiansyah and Andarula Galushasti</td>
                                                        <td>Increasing the Sugarcane Growth and the Brix Value ofSugarcane
                                                            Sap by Providing Sugarcane Root Bacteria andAmino Acids</td>
                                                        <td>11:13 - 11:20</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">11.20 - 11.30</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 3 <span
                                                    class="small fw-normal float-end">October 12, 2024 (11.30 - 12.15
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">50</td>
                                                        <td>Yani Subaktilah, Nadhifah Al Indis, Ade Galuh Rakhmadevi and
                                                            Ahmad Haris Hasanuddin Slamet</td>
                                                        <td>Analysis of Fiber, Antioxidant, and Organoleptic Content
                                                            inCroissants Substituted with Millet Flour (Setaria italicaL.)
                                                        </td>
                                                        <td>11:30 - 11:37</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">52</td>
                                                        <td>Refa Firgiyanto, Nurul Sjamsijah, Hari Prasetyo, Evan Purnama
                                                            Ramdan, Ade Sumiahadi, Leli Kurniasari and Fadil Rohman</td>
                                                        <td>In Vitro Modification of Subculture Media in the Productionof
                                                            Superior Plantlets on Three Chrysanthemum Cultivars</td>
                                                        <td>11:37 - 11:44</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">53</td>
                                                        <td>Fadil Rohman, Refa Firgiyanto, M Zayin Sukri, Maria Azizah,
                                                            Didik Pudji Restanto and Etik Wukir Tini</td>
                                                        <td>Water footprint of melon production under differentnutrient and
                                                            plant growth regulator management</td>
                                                        <td>11:44 - 11:51</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">54</td>
                                                        <td>M Adhyatma, Gandu Eko Julianto Suyoso, Angga Rahagiyanto, Faruq
                                                            Avero Azhar and Veronika Vestine</td>
                                                        <td>Occupational Safety and Health risk analysis of UHT MilkFactory
                                                            at Jember Region</td>
                                                        <td>11:51 - 11:58</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">56</td>
                                                        <td>Fandyka Yufriza Ali, Rizky Nirmala Kusumaningtyas, Dian Galuh
                                                            Pratita, Satria Indra Kusuma and Nisa Budi Arifiana</td>
                                                        <td>Improvement Nutrient Uptake of Robusta Coffee Seedlings(Coffea
                                                            canephora) through the Application of Plant GrowthPromoting
                                                            Rhizobacteria and Mycorrhiza</td>
                                                        <td>11:58 - 12:05</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">12.05 - 12.15</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 4 <span
                                                    class="small fw-normal float-end">October 12, 2024 (12.30 - 13.15
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">61</td>
                                                        <td>Suwinda Fibriani, Fitri Krismirastih, Estin Roso
                                                            Pristiwaningsih, Suyitno Suyitno and Khomsatun Ni'Mah</td>
                                                        <td>Growth and Production of Shallots (Allium Cepa L) atVarious
                                                            Volumes and Watering Intervals : Case Study inNganjuk District
                                                        </td>
                                                        <td>12:30 - 12:37</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">64</td>
                                                        <td>Anni Nuraisyah, Rizky Nirmala Kusumaningtyas, Annisa Lutfi Alwi,
                                                            Uystka Hikmatul Kamiliyah Nh and Triono Bambang Irawan</td>
                                                        <td>Physical Characteristics of Green Beans from CoffeeCherries
                                                            Fermented with Civet Bacteria</td>
                                                        <td>12:37 - 12:44</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">69</td>
                                                        <td>Aldy Bahaduri Indraloka, Mohamad Ilham Hilal and Abdus Salam
                                                            Junaedi</td>
                                                        <td>Quality Nutrient Identification in Liquid OrganicFertilizer
                                                            (Goat Urine and Banana Stem) and Its Applicationon Growth of
                                                            Chili (Capsicum frutescens</td>
                                                        <td>12:44 - 12:51</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">70</td>
                                                        <td>Alinea Dwi Elisanti, Rindiani Rindiani, Galih Purnasari, Dahlia
                                                            Indah Amareta and M. Rizal Permadi</td>
                                                        <td>Nutritional Content of Non-Gluten Vegetable Cookies as
                                                            anAlternative Snack for Undernourished Children</td>
                                                        <td>12:51 - 12:58</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">74</td>
                                                        <td>Hanif Fatur Rohman, Muhammad Zayin Sukri, Maria Azizah and
                                                            Dhanang Eka Putra</td>
                                                        <td>APLICATION OF HUMIC ACID AND FULVIC ACID ON THE GROWTH
                                                            OFCHRISANT (Chrysanthemum cinerariaefolium) PLANTS</td>
                                                        <td>12:58 - 13:05</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">13.05 - 13.15</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 5 <span
                                                    class="small fw-normal float-end">October 12, 2024 (13.15 - 14.00
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">76</td>
                                                        <td>Moch Rosyadi Adnan, Elly Daru Ika Wilujeng, Mahindra Dewi Nur
                                                            Aisyah, Trisnani Alif and Andarula Galushasti</td>
                                                        <td>Agronomic characterization and performance of japonica
                                                            ricecarrying a tiller number mutation</td>
                                                        <td>13:15 - 13:22</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">79</td>
                                                        <td>Ratih Putri Damayati, Firda Agustin, Ayu Febriyatna, Stephani
                                                            Nesya Renamastika and Sekar Ayu Wulandari</td>
                                                        <td>Enrichment of Synbiotic Yogurt With Unripe Banana
                                                            Flour:Characterization Physicochemical During Storage</td>
                                                        <td>13:22 - 13:29</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">81</td>
                                                        <td>Putri Rahayu Ratri, Yohan Yuanta, Surya Dewi Puspita and
                                                            Rusdiarti Rusdiarti</td>
                                                        <td>An Innovation of High Protein Biscuit Incorporation ofJackfruit
                                                            Seed Flour, Millet Seed, and Eel For StuntingPrevention</td>
                                                        <td>13:29 - 13:36</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">82</td>
                                                        <td>Mansoor Abdul Hamid, Ho Wan Ting, Yeap Chi Hong, Mazarina Devi
                                                            and Oslida Martony</td>
                                                        <td>The Effect of Adding Cassava Leaves and FermentationDuration on
                                                            the Mocaf Quality</td>
                                                        <td>13:36 - 13:43</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">83</td>
                                                        <td>Mansoor Abdul Hamid, Hoy Jin Mei, Yeap Chi Hong, Mat Salleh
                                                            Ayub, Rozekin Suratman and Oslida Martony</td>
                                                        <td>Development of Food Seasoning using Subgrade Fish
                                                            Cracker,Pumpkin (Cucurbita moschata) And Seaweed
                                                            (Kappaphycusalvarezii)</td>
                                                        <td>13:43 - 13:50</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">13.50 - 14.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 6 <span
                                                    class="small fw-normal float-end">October 12, 2024 (14.00 - 14.45
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">86</td>
                                                        <td>Nita Maria Rosiana, Arinda Lironika Suryana, Zora Olivia, Agatha
                                                            Widiyawati, Vigo Dewangga and Sofwatul Hidayah</td>
                                                        <td>The Biophysical Properties of Complementary Feeding Madefrom
                                                            Soybeans and Dragon Fruit Peel</td>
                                                        <td>14:00 - 14:07</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">89</td>
                                                        <td>Nurul Sjamsijah, Leli Kurniasari, Sri Rahayu, Refa Firgiyanto
                                                            and Dewi Fatmawaty Sabiku</td>
                                                        <td>Application of GA3 and Potassium fertilizer to optimize
                                                            theproductivity of several genotypes of soybean lines
                                                            (Glycinemax L.) prospective candidate varieties at Teaching
                                                            Factoryof Seed Center State Polytechnic of Jember</td>
                                                        <td>14:07 - 14:14</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">90</td>
                                                        <td>Azamataufiq Budiprasojo, Dicky Adi Tyagita and Ahmad Rofii</td>
                                                        <td>Electric Agriculture Hand Tractor Conversion Kits:
                                                            ATechnological Design, Performance Analysis, and
                                                            InnovativeConversion Techniques</td>
                                                        <td>14:14 - 14:21</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">100</td>
                                                        <td>Dina Fitriyah, Miftahul Jannah, Dessya Putri Ayu, Heri Warsito
                                                            and Agustina Endah Werdiharini</td>
                                                        <td>Nutrient Content of Synbiotic Yoghurt from Purple SweetPotatoes
                                                            and Fresh Milk</td>
                                                        <td>14:21 - 14:28</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">113</td>
                                                        <td>Ni'Matul Istiqomah, Lutfi Asnan Qodri, Nur Anita Yunikawati and
                                                            Magistyo Purboyo Priambodo</td>
                                                        <td>URBAN FARMING ANALYSIS ENHANCES SUSTAINABLE DEVELOPMENTTHROUGH
                                                            THE UTILIZATION OF EXISTING LAND IN URBAN AREAS</td>
                                                        <td>14:28 - 14:35</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">14:35 - 14:45</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 7 <span
                                                    class="small fw-normal float-end">October 12, 2024 (14.45 - 15.30
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">116</td>
                                                        <td>Nurhayati Nurhayati, Achmad Subagio, Ika Wahyuni and Umi
                                                            Purwandari</td>
                                                        <td>Production of probiotic tapai as emerging food made fromcassava
                                                            for enhanced microflora gut health</td>
                                                        <td>14:45 - 14:52</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">133</td>
                                                        <td>Tekad Urip Pambudi Sujarnoko, Dwi Budiono, Novia Amalia Sholeha,
                                                            Ridwan Siskandar, Theo Mahiseta Syahniar, Mira Andriani and Anis
                                                            Usfah Prastujati</td>
                                                        <td>Potential Loss of Body Weight in Bull Transportation and The
                                                            Effect of Adding Acacia mangium Bark Extract During Recovery
                                                            Period</td>
                                                        <td>14:52 - 14:59</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">59</td>
                                                        <td>Eva Rosdiana, Setyo Andi Nugroho, Rudi Wardana, Abdurrahman
                                                            Salim and Fandyka Yufriza Ali</td>
                                                        <td>Application of Combined Coffe Skin Husk Biochar and RiceHusk
                                                            Charcoal as Planting Media to Improve on the GrowthSeedling
                                                            Coffee</td>
                                                        <td>14:59 - 15:06</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">114</td>
                                                        <td>Dadik Pantaya, Niati Ningsih, Alditya Putri Yulinarsari, M.
                                                            Hanif and Nur Aini Setyo Ningrum</td>
                                                        <td>The blood haematological profile on laying quails thattreated by
                                                            different levels of Se-yeast supplementation</td>
                                                        <td>15:06 - 15:13</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">118</td>
                                                        <td>Dadik Pantaya, Gayuh Syaikhullah, Hariadi Subagja, Muhammad Agus
                                                            Rizal, Anis Usfah Prastujati and Gilang Ayuningtyas</td>
                                                        <td>The Haematological Profile on Grower Duck That Treated
                                                            byDifferent Levels of Probiotic Supplementation</td>
                                                        <td>15:13 - 15:20</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">15:20 - 15:30</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 8 <span
                                                    class="small fw-normal float-end">October 12, 2024 (15.30 - 16.15
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">1</td>
                                                        <td>Ahmad Rofi'I, Nuzula Afianah, Salsabila Liandra Putri, Aditya
                                                            Wahyu Winadi Atmajaya, Fendik Eko Purnomo and Syamsiar Kautsar
                                                        </td>
                                                        <td>Development of Robotics Learning Modules Based on IoT and ESP32
                                                        </td>
                                                        <td>15:30 - 15:37</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">11</td>
                                                        <td>Nur Faizin, Cahyaning Nur Karimah, Zeni Ulma, Siti Diah Ayu
                                                            Febriani and Qanitah Qanitah</td>
                                                        <td>Analysis of the Effect of Input Temperature and RotaryDryer
                                                            Rotation Speed on the Coffee Bean Drying Process</td>
                                                        <td>15:37 - 15:44</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">12</td>
                                                        <td>Dedy Eko Rahmanto, Michael Joko Wibowo and Azza Auliya Rahma
                                                            Aurelya</td>
                                                        <td>Investigation and potential development of a microhydropower
                                                            plant in Tlocor village, Banyuwangi - East Java</td>
                                                        <td>15:44 - 15:51</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">45</td>
                                                        <td>Alex Taufiqurrohman Zain, Dwi Djoko Suranto, Azamataufiq
                                                            Budiprasojo, Cahyaning Nur Karimah and Faruq Avero Azhar</td>
                                                        <td>Design and Development of Lithium-Ion Battery Indicators
                                                            onMultifunctional Three-Wheel Electric Vehicles</td>
                                                        <td>15:51 - 15:58</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">49</td>
                                                        <td>Siti Diah Ayu Febriani, Yuana Susmiati, Hariadi Subagja, Qanitah
                                                            Qanitah, Nuzula Afianah, Abdilah Faqih and Nugroho Jerry
                                                            Kurniawan</td>
                                                        <td>Bioethanol Production with Semi-Continuous
                                                            FermentationDistillation System using Sacharomyces Cerevisiae
                                                        </td>
                                                        <td>15:58 - 16:05</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">16:05 - 16:15</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-panel3" role="tabpanel" aria-labelledby="nav-panel3-tab">

                            <div class="row justify-content-center">
                                <div class="col-lg-12 p-3 my-3 bg-light">
                                    <table class="table table-borderless h6 mb-0">
                                        <tbody>
                                            <tr>
                                                <th width="10%">Panel Name :</th>
                                                <td width="40%">Panel 3</td>
                                                <th>Room Name :</th>
                                                <td>Sri Tanjung II (Offline)</td>
                                            </tr>
                                            <tr>
                                                <th width="10%">Moderator :</th>
                                                <td>
                                                    <ol class="ps-3 mb-0">
                                                        <li>Resti Pranata Putri, S.Si., M.Sc.</li>
                                                    </ol>
                                                </td>
                                                <th>Timezone :</th>
                                                <td>Western Indonesian Time (WIB) [GMT +7]</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-12 p-0">




                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 4 <span
                                                    class="small fw-normal float-end">October 12, 2024 (12.30 - 13.15
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">78</td>
                                                        <td>Yogiswara, Naraga Maulana, Beni Widiawan, Agus Purwadi, Lalitya
                                                            Nindita Sahendra and Asep Samsudin</td>
                                                        <td>Mobile Application Development for a Hydroponic
                                                            NutrientAutomation System Based Internet of Things</td>
                                                        <td>12:30 - 12:37</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">87</td>
                                                        <td>Agus Purwadi, Beni Widiawan, Icha Putri Ambarwati, Lalitya
                                                            Nindita Sahendra, Yogiswara Yogiswara and Asep Samsudin</td>
                                                        <td>Mobile Internet of Things (MIoT) and Its Applications forSmart
                                                            NPK Measurement in Integrated Agricultural Units –Politeknik
                                                            Negeri Jember</td>
                                                        <td>12:37 - 12:44</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">94</td>
                                                        <td>Hendra Yufit Riskiawan, Beni Widiawan, Dwi Putro Sarwo
                                                            Setyohadi, Saiful Anwar, Syamsul Arifin, Aji Seto Arifianto and
                                                            Refa Firgiyanto</td>
                                                        <td>IoT-Based Fumigation Monitoring in Agricultural
                                                            ProductWarehouses at Politeknik Negeri Jember</td>
                                                        <td>12:44 - 12:51</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">105</td>
                                                        <td>Mira Andriani, Dwi Putro Sarwo Setyohadi, Hendra Yufit Riskiawan
                                                            and Saiful Anwar</td>
                                                        <td>Design and Implementation of a QR Code-Based Online
                                                            CanteenSystem to Optimize Transactions at
                                                            Politeknik&nbsp;Negeri&nbsp;Jember</td>
                                                        <td>12:51 - 12:58</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">108</td>
                                                        <td>Lukie Perdanasari, Bety Etikasari, Ratih Ayuninghemi, Munih Dian
                                                            Widianta and Budi Utomo</td>
                                                        <td>Optimization of Digital Image Processing for Chicken EggQuality
                                                            Classification</td>
                                                        <td>12:58 - 13:05</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">13.05 - 13.15</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 5 <span
                                                    class="small fw-normal float-end">October 12, 2024 (13.15 - 14.00
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">22</td>
                                                        <td>Wahyu Kurnia Dewanto, Aji Seto Arifianto, Hariyono Rakhmad,
                                                            Hermawan Arief Putranto, Muhammad Hafidh Firmansyah, Iqbal F,
                                                            Yovita Sari Cahyaningtyas and Tri Farin Meydiantika Anggia Putri
                                                        </td>
                                                        <td>Motor-Based Smart Decision-Making for Tropical Agriculture</td>
                                                        <td>13:15 - 13:22</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">23</td>
                                                        <td>Prawidya Destarianto, Denny Trias Utomo, Denny Wijanarko, Dian
                                                            Galuh Pratita and Dian Kartika Sari</td>
                                                        <td>Water Quality Modeling (WQM) With Machine Learning (ML)
                                                            ForSurface Modeling Vehicle Shrimp Ponds</td>
                                                        <td>13:22 - 13:29</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">24</td>
                                                        <td>Bekti Maryuni Susanto, Surateno Surateno, Ery Setiyawan Jullev
                                                            Atmadji, Agus Hariyanto and Choirul Huda</td>
                                                        <td>Lightweight Intrusion Detection System Using EnsembleLearning
                                                            and Statistical-based Feature Selection inAgriculture IoT
                                                            Network</td>
                                                        <td>13:29 - 13:36</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">40</td>
                                                        <td>Didit Rahmat Hartadi, Shabrina Choirunnisa, Ely Mulyadi, Tanti
                                                            Kustiari and Sabran</td>
                                                        <td>Application of Machine Learning and Sensor Array inIntegrated
                                                            Mushroom Cultivation System</td>
                                                        <td>13:36 - 13:43</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">58</td>
                                                        <td>Mochammad Nuruddin, Zeni Ulma, Nur Faizin, Dedy Eko Rahmanto and
                                                            Yuli Hananto</td>
                                                        <td>Effect of Storage Time on the Quality of Cow Manure Biogaswith
                                                            Rice Husk Adsorbent</td>
                                                        <td>13:43 - 13:50</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">13.50 - 14.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 6 <span
                                                    class="small fw-normal float-end">October 12, 2024 (14.00 - 14.45
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">66</td>
                                                        <td>Mochamad Nari, Fendik Eko Purnomo, Ahmad Rofi'I, Nurul Zainal
                                                            Fanani and Dicky Adi Tyagita</td>
                                                        <td>Development of Mini-Conveyor Trainer Kit based on ModbusProtocol
                                                        </td>
                                                        <td>14:00 - 14:07</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">96</td>
                                                        <td>Mukhamad Angga Gumilang, Intan Sulistyaningrum Sakkinah, Ahmad
                                                            Fahriyannur Rosyady, Raditya Arief Pratama and Sholihah Ayu
                                                            Wulandari</td>
                                                        <td>Classification of Scientific Citation Quality with SupportVector
                                                            Machine (SVM): A Case Study on the Politeknik NegeriJember
                                                            Research &amp; Community Service Information System</td>
                                                        <td>14:07 - 14:14</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">128</td>
                                                        <td>Mochamad Sulaiman, Sigit Rahmat Rizalmi, Abdul Alimul Karim and
                                                            Estu Tri Suachiri</td>
                                                        <td>Medium Scale Material Handling Equipment Design: Case Study of
                                                            Agricultural Product Transportation</td>
                                                        <td>14:14 - 14:21</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h6" colspan="3">Discussion</td>
                                                        <td class="text-dark">14:35 - 14:45</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-panel4" role="tabpanel" aria-labelledby="nav-panel4-tab">


                            <div class="row justify-content-center">
                                <div class="col-lg-12 p-3 my-3 bg-light">
                                    <table class="table table-borderless h6 mb-0">
                                        <tbody>
                                            <tr>
                                                <th width="10%">Panel Name :</th>
                                                <td width="40%">Panel 4</td>
                                                <th width="10%">Room :</th>
                                                <td>Sayuwiwit IV (Online - Zoom - Breakout Room 1)</td>
                                            </tr>
                                            <tr>
                                                <th>Timezone :</th>
                                                <td>Western Indonesian Time (WIB) [GMT +7]</td>
                                                <th>Zoom Link :</th>
                                                <td><a href="https://zoom.us/j/91055060118?pwd=vbrkcfTbD7YbZ2qu6ahfbr6JLl5Bxu.1"
                                                        target="_blank">https://zoom.us/j/91055060118?pwd=vbrkcfTbD7YbZ2qu6ahfbr6JLl5Bxu.1</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Moderator :</th>
                                                <td>
                                                    <ol class="ps-3 mb-0">
                                                        <li>Zeni Ulma, S.ST, M.Eng.</li>
                                                    </ol>
                                                </td>
                                                <th>Meeting ID :</th>
                                                <td>910 5506 0118</td>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <td></td>
                                                <th>Password :</th>
                                                <td>813734</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-12 p-0">

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 4 <span
                                                    class="small fw-normal float-end">October 12, 2024 (12.30 - 13.15
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">2</td>
                                                        <td>Vina Eka Aristya, Wahyu Adi Nugroho, Samijan Samijan, Sri
                                                            Minarsih and Yulis Hindarwati</td>
                                                        <td>Strategies for Increasing Rice Productivity in Rainfed Fields
                                                            Environment-Friendly Systems</td>
                                                        <td>12:30 - 12:37</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">4</td>
                                                        <td>Mazarina Devi, Chintya Paramita Puspita, Dinar Ajeng
                                                            Oktaviantry, Norrina Din and Nunung Nurjanah</td>
                                                        <td>Development of Traditional Indonesian Layer Cake From Pureed
                                                            Yellow Pumpkin (Cucurbita moschata Durch) And Carrot (Daucus
                                                            carrota L) as a Highly Nutritious as an Additional Food For
                                                            Toddlers</td>
                                                        <td>12:37 - 12:44</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">6</td>
                                                        <td>Asriani Hasanuddin, Rusdi Rusdi, Mulyati Mulyati, Fatmawati
                                                            Fatmawati and Minarny Gobel</td>
                                                        <td>Multi-strain probiotics inclusion in the diet and effectson
                                                            laying hens performance and egg quality</td>
                                                        <td>12:44 - 12:51</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">9</td>
                                                        <td>Iffan Maflahah, Selamet Joko Utomo, Dian Farida Asfan and Fathor
                                                            As</td>
                                                        <td>Analysis of Superior Agricultural Sector Commodities toIncrease
                                                            Economic Growth in Sumenep District</td>
                                                        <td>12:51 - 12:58</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">14</td>
                                                        <td>Hanifa Risnawati, Rini Triani, Pradeka Brilyan Purwandoko, Nur
                                                            Kartika Indah Mayasti, Novita Dwi Susanti, Fithria Novianti,
                                                            Ignatius Fajar Apriyanto, Intan Seri Kuala, Ashri Indriati and
                                                            Christina Litaay</td>
                                                        <td>Effect of Low Temperature on Physical Characteristics ofChicken
                                                            (Gallus domesticus) Meat During Storage</td>
                                                        <td>12:58 - 13:05</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h5" colspan="3">Discussion</td>
                                                        <td class="text-dark">13.05 - 13.15</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 5 <span
                                                    class="small fw-normal float-end">October 12, 2024 (13.15 - 14.00
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">28</td>
                                                        <td>Asriani Hasanuddin, Rusdi Rusdi, Minarny Gobel and Fatmawati
                                                            Fatmawati</td>
                                                        <td>Effect of Using Palm Sludge (solid decanter)
                                                            BioconversionProduct on the Performance of Laying Hens</td>
                                                        <td>13:15 - 13:22</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">36</td>
                                                        <td>Neneng Ratna Purnamasari, Nazly Aswani and Prasodjo Soedomo</td>
                                                        <td>Genotypic differences in long bean (Vigna unguiculatasubs.
                                                            sesquipedalis) in agronomic response to biofertilizer</td>
                                                        <td>13:22 - 13:29</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">51</td>
                                                        <td>Cahyo Indarto, Millatul Ulya and Wahyu Prihanta</td>
                                                        <td>Exploring the Potential of Aloe vera Extract for
                                                            EnhancingMeatball Textural Characteristics</td>
                                                        <td>13:29 - 13:36</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">73</td>
                                                        <td>Ignatius Apriyanto and Seri Intan Kuala</td>
                                                        <td>Opportunities for coffee beans research using AI in
                                                            climateemergency era: bibliometric analysis</td>
                                                        <td>13:36 - 13:43</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">84</td>
                                                        <td>Mariam Mariam, Ismail Gaffar, Andi Ridwan Makkulawu and
                                                            Ardiansyah Ardiansyah</td>
                                                        <td>Preprocessing Vannamei Skeleton Image For FeatureClassification
                                                        </td>
                                                        <td>13:43 - 13:50</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h5" colspan="3">Discussion</td>
                                                        <td class="text-dark">13.50 - 14.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 6 <span
                                                    class="small fw-normal float-end">October 12, 2024 (14.00 - 14.45
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">85</td>
                                                        <td>Andi Ridwan Makkulawu, Ilham Ahmad and Andryanto Aman</td>
                                                        <td>Determination of Processed Products from Pamelo OrangeOuter Peel
                                                            using Analytic Hierarchy Process (AHP)</td>
                                                        <td>14:00 - 14:07</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">88</td>
                                                        <td>Ni Luh Ari Yusasrini, I Nengah Kencana Putra, I Dewa Gde Mayun
                                                            Permana and Komang Ayu Nocianitri</td>
                                                        <td>Extraction and Identification of Phenolic Compounds inEthanol
                                                            Extract of Protium javanicum Leaves at DifferentSolvent
                                                            Concentrations</td>
                                                        <td>14:07 - 14:14</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">92</td>
                                                        <td>Fitri Wibowo, Ika Meidy Deviarni, Nabila Nabila, Ahmad Choirudin
                                                        </td>
                                                        <td>Development of a Hybrid Energy-Powered IoT-Based Monitoring and
                                                            Control System for Smart Fish Farming</td>
                                                        <td>14:14 - 14:21</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">93</td>
                                                        <td>Zulfadly, Sylvia Sjam and Melina</td>
                                                        <td>Pellet formulation of peppermint essential oil Menthapiperita L
                                                            as repellent againts Araecerus fasciculatus (DeGeer)
                                                            (Coleoptera: Anthribidae)</td>
                                                        <td>14:21 - 14:28</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">112</td>
                                                        <td>Ahlihya Bianca Gulifardo, Buen Jasper Balane, Mark Ebora,
                                                            Melissa Serrano, Erwin Ellazar, Ariel Nicolas and Ronaldo Maaño
                                                        </td>
                                                        <td>iPond: An Internet of Things–Based Water Quality
                                                            MonitoringSystem for Fishpond</td>
                                                        <td>14:28 - 14:35</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">126</td>
                                                        <td>Thomas Soseco, Emma Yunika Puspasari and Lutfi Asnan Qodri</td>
                                                        <td>Urban Hydroponic Farming: Empowering Women and Enhancing
                                                            Household Economy in Malang</td>
                                                        <td>14:35 - 14:42</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h5" colspan="3">Discussion</td>
                                                        <td class="text-dark">14:35 - 14:45</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-panel5" role="tabpanel" aria-labelledby="nav-panel5-tab">


                            <div class="row justify-content-center">
                                <div class="col-lg-12 p-3 my-3 bg-light">
                                    <table class="table table-borderless h6 mb-0">
                                        <tbody>
                                            <tr>
                                                <th width="10%">Panel Name :</th>
                                                <td width="40%">Panel 5</td>
                                                <th width="10%">Room :</th>
                                                <td>Sayuwiwit IV (Online - Zoom - Breakout Room 2)</td>
                                            </tr>
                                            <tr>
                                                <th>Timezone :</th>
                                                <td>Western Indonesian Time (WIB) [GMT +7]</td>
                                                <th>Zoom Link :</th>
                                                <td><a href="https://zoom.us/j/91055060118?pwd=vbrkcfTbD7YbZ2qu6ahfbr6JLl5Bxu.1"
                                                        target="_blank">https://zoom.us/j/91055060118?pwd=vbrkcfTbD7YbZ2qu6ahfbr6JLl5Bxu.1</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Moderator :</th>
                                                <td>
                                                    <ol class="ps-3 mb-0">
                                                        <li>Riski Amalia Nurfitriani, S.Pt., M.Si.</li>
                                                    </ol>
                                                </td>
                                                <th>Meeting ID :</th>
                                                <td>910 5506 0118</td>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <td></td>
                                                <th>Password :</th>
                                                <td>813734</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-12 p-0">

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 4 <span
                                                    class="small fw-normal float-end">October 12, 2024 (12.30 - 13.15
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">97</td>
                                                        <td>Taufik Rahman, Nur Mayasti, Ashri Indriati, Fithria Novianti,
                                                            Nurhaidar Rahman, Dedi Sumaryadi, Neneng Komalasari and Raden
                                                            Andriansyah</td>
                                                        <td>Analysis of workload of noodle sheeting slitting
                                                            machineoperators using the heart rate variability method</td>
                                                        <td>12:30 - 12:37</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">101</td>
                                                        <td>Mauli Kasmi, Andi Ridwan Makkulawu, Akmal Abdullah, Andryanto
                                                            Aman and Andi Baso Adil Natsir</td>
                                                        <td>Acceptance and Usage Analysis of the CelebesreeffishPlatform
                                                        </td>
                                                        <td>12:37 - 12:44</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">104</td>
                                                        <td>Arif Anshori, Tri Endar Suswatiningsih and Sri Wahyuni Budiarti
                                                        </td>
                                                        <td>Management of waste and water to support rice cultivationin
                                                            narrow land of residential area</td>
                                                        <td>12:44 - 12:51</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">109</td>
                                                        <td>Anisiyah, Wijaya Murti Indriatama, Taufik Bachtiar, Muhammad
                                                            Nurcholis, Susilo Herlambang, Sihono and Soeranto Human</td>
                                                        <td>Agronomical Performance, Genetic Variability Estimation
                                                            andMutant Selection in M3 Generation of Sorghum under
                                                            OptimumConditions</td>
                                                        <td>12:51 - 12:58</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">120</td>
                                                        <td>Yulia Pujiharti, Rizky Prayogo Ramadhan, Oky Dwi Purwanto, I
                                                            Putu Wardana, I Gustu Ayu Putu Mahendri, Ekwasita Rini Pribadi
                                                            and Sujianto</td>
                                                        <td>Determinant of Rice Cultivation Technology Adoption inRainfed
                                                            Agricultural System: Insights from East NusaTenggara, Indonesia
                                                        </td>
                                                        <td>12:58 - 13:05</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h5" colspan="3">Discussion</td>
                                                        <td class="text-dark">13.05 - 13.15</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 5 <span
                                                    class="small fw-normal float-end">October 12, 2024 (13.15 - 14.00
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">121</td>
                                                        <td>Nur Fathonah Sadek and Bryan Laywith</td>
                                                        <td>Sensory mapping and antioxidant activity of Indonesiancommercial
                                                            flower tisane</td>
                                                        <td>13:15 - 13:22</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">122</td>
                                                        <td>Nur Fathonah Sadek and Ida Ayu Laksmi Pradnya Suari</td>
                                                        <td>Optimization of porang and corn flour ratio as snack barbinder:
                                                            physicochemical and sensory aspects</td>
                                                        <td>13:22 - 13:29</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">129</td>
                                                        <td>Alfiandi Rezki, Sylvia Sjam and Tamrin Abdullah</td>
                                                        <td>Combination of flowering plants with plant extract application
                                                            on population and attack intensity of Spedoptera exigua (Hubner)
                                                            (Lepidoptera; Noctuidae)</td>
                                                        <td>13:29 - 13:36</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">131</td>
                                                        <td>Sulistiono Sulistiono</td>
                                                        <td>The relationship between phytoplankton community structure and
                                                            water conditions at Margagiri-Grenyang coastal waters, Banten
                                                            Bay, Indonesia</td>
                                                        <td>13:36 - 13:43</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">132</td>
                                                        <td>Sulistiono Sulistiono</td>
                                                        <td>Condition and development of aquaculture in Muara Pahu,
                                                            Penyinggahan and Jempang Ditricts of West Kutai Regency, East
                                                            Borneo Province of Indonesia</td>
                                                        <td>13:43 - 13:50</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h5" colspan="3">Discussion</td>
                                                        <td class="text-dark">13.50 - 14.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 6 <span
                                                    class="small fw-normal float-end">October 12, 2024 (14.00 - 14.45
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">135</td>
                                                        <td>Anung Wahyudi and Siska Yunita Sari</td>
                                                        <td>Yield Test of Oriental Melon In Tasikmalaya, West Java</td>
                                                        <td>14:00 - 14:07</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">95</td>
                                                        <td>Nur Kartika Indah Mayasti, Fithria Novianti, Herlan
                                                            Septiyansyah, Dadang Dayat Hidayat, Ashri Indriati, Maulana
                                                            Furqon, Ainia Herminiati, Taufik Rahman and Raden Cecep Erwan
                                                            Andriansyah</td>
                                                        <td>Ergonomic Evaluation of a Drum Dryer Machine Using the
                                                            RULA(Rapid Upper Limb Assessment) Method (Case Study:
                                                            InstantPurple Swett Potato Flour Production)</td>
                                                        <td>14:07 - 14:14</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">110</td>
                                                        <td>Rainiell Guerrero, Armiel Calapit, John Mark Ortega, Ronaldo
                                                            Maaño, Hannah Shamira Santonil, Dhon Niño Canela and Roselyn
                                                            Maaño</td>
                                                        <td>Microcontroller-Based Fish Drying System with EnhancedDrying
                                                            Time</td>
                                                        <td>14:14 - 14:21</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">111</td>
                                                        <td>Monica Maghirang, Ronaldo Maaño, Hannah Shamira Santonil, Dhon
                                                            Niño Canela, Martin Jecho De La Roca, Danielle Joseph Buban and
                                                            Roselyn Maaño</td>
                                                        <td>IoT-Enabled Soil Moisture Management for Precision
                                                            PlantSprinkler System for Organic Farming</td>
                                                        <td>14:21 - 14:28</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">138</td>
                                                        <td>Mekhala Insawang, and Athorn Vora-Ud</td>
                                                        <td>Thermoelectricity Energy Conversion based on Polymer and Textile
                                                        </td>
                                                        <td>14:28 - 14:35</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h5" colspan="3">Discussion</td>
                                                        <td class="text-dark">14:35 - 14:45</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-panel6" role="tabpanel" aria-labelledby="nav-panel6-tab">


                            <div class="row justify-content-center">
                                <div class="col-lg-12 p-3 my-3 bg-light">
                                    <table class="table table-borderless h6 mb-0">
                                        <tbody>
                                            <tr>
                                                <th width="10%">Panel Name :</th>
                                                <td width="40%">Panel 6</td>
                                                <th width="10%">Room :</th>
                                                <td>Sayuwiwit IV (Online - Zoom - Breakout Room 3)</td>
                                            </tr>
                                            <tr>
                                                <th>Timezone :</th>
                                                <td>Western Indonesian Time (WIB) [GMT +7]</td>
                                                <th>Zoom Link :</th>
                                                <td><a href="https://zoom.us/j/91055060118?pwd=vbrkcfTbD7YbZ2qu6ahfbr6JLl5Bxu.1"
                                                        target="_blank">https://zoom.us/j/91055060118?pwd=vbrkcfTbD7YbZ2qu6ahfbr6JLl5Bxu.1</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Moderator :</th>
                                                <td>
                                                    <ol class="ps-3 mb-0">
                                                        <li>Adriadi Novawan, S.Pd., M.Ed.</li>
                                                    </ol>
                                                </td>
                                                <th>Meeting ID :</th>
                                                <td>910 5506 0118</td>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <td></td>
                                                <th>Password :</th>
                                                <td>813734</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-12 p-0">

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 4 <span
                                                    class="small fw-normal float-end">October 12, 2024 (12.30 - 13.15
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">137</td>
                                                        <td>Hariadi Subagja, Shabrina Choirunnisa, Enik Rukiati and Arinda
                                                            Lironika</td>
                                                        <td>Production Management Study of Laying Duck Breeding Business
                                                            semi-intensive cage in Jember</td>
                                                        <td>12:30 - 12:37</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">106</td>
                                                        <td>Risse Entikaria Rachmanita, Denny Trias Utomo, Hariadi Subagja,
                                                            Yuana Susmiati and Beni Widiawan</td>
                                                        <td>Smart solar energy system technology and IoT based aircontrol
                                                            system in duck egg incubator</td>
                                                        <td>12:37 - 12:44</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">10</td>
                                                        <td>Khafidurrohman Agustianto, Enik Rukiati, Riskha Dora Candra
                                                            Dewi, Iwan Abdi Suandana and Dhyani Ayu Perwiraningrum</td>
                                                        <td>Eye Gaze Modeling using Tobii Eye Tracker for Detecting Anxiety
                                                            and Mental Health of Students Case Study of Jember State
                                                            Polytechnic</td>
                                                        <td>12:51 - 12:58</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">8</td>
                                                        <td>Nugroho Setyo Wibowo, Sri Sundari, Wenny Dhamayanthi, Endro
                                                            Sugiartono and Suparto</td>
                                                        <td>Development of Fuzzy Logic Model on Web-based CitrusMapping and
                                                            Marketing Geographic Information System</td>
                                                        <td>12:58 - 13:05</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h5" colspan="3">Discussion</td>
                                                        <td class="text-dark">13.05 - 13.15</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header bg-main">
                                            <h5 class="card-title fw-bold text-white mb-0">Session 5 <span
                                                    class="small fw-normal float-end">October 12, 2024 (13.15 - 14.00
                                                    WIB)</span></h5>
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
                                                    <tr>
                                                        <td align="center">44</td>
                                                        <td>Elly Kurniawati, Resti Pranata Putri, Agung Wahyono, Silvia
                                                            Oktavia Nur Yudiastuti and Candra Pramula Pinandita</td>
                                                        <td>Characteristic and Prebiotic Index of Instant MultigrainRice
                                                        </td>
                                                        <td>13:15 - 13:22</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">15</td>
                                                        <td>Raden Roro Lia Chairina, Adriadi Novawan, Erfan Kustiawan and
                                                            Gullit Tornado Taufan</td>
                                                        <td>Basic Study of Circular Economy on Dairy Farmers inDifferent
                                                            Regions</td>
                                                        <td>13:22 - 13:29</td>
                                                    </tr>
                                                    <tr class="bg-dark">
                                                        <td class="fw-bold text-dark h5" colspan="3">Discussion</td>
                                                        <td class="text-dark">13.50 - 14.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="tab-content" id="nav-tabContent">
                        @foreach ($presentationSchedule as $index => $schedule)
                            <div class="tab-pane fade show active" id="nav-panel{{ $index }}" role="tabpanel"
                                aria-labelledby="nav-panel1-tab">

                                <div class="row justify-content-center">
                                    <div class="col-lg-12 p-3 my-3 bg-light">
                                        <table class="table table-borderless h6 mb-0">
                                            <tbody>
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
