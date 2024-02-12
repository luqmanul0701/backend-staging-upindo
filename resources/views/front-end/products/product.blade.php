@extends('front-end.layouts.master')

@section('title', 'Beranda')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('content')

<section class="product" style="padding-top: 20vh">

    <div class="title text-center pb-3d-flex ">
        <h2>SEMUA PRODUK</h2>
        <div class="custom-horizontal-line"></div>
    </div>
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-xl-3">
                            <!-- terakhir disini -->
                            <div class="input-group w-100 mx-auto d-flex shadow">
                                <input type="search" class="form-control p-3" placeholder="Cari Produk" style="border:1px solid #A9A9A9;" aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="input-group-text p-3" style="border:1px solid #A9A9A9;"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-xl-3">
                            <div class="bg-light ps-3 py-3 rounded mb-1 shadow" style="border: 1px solid #A9A9A9; margin-right: 10px;">
                                <!-- DROPDOWN -->
                                <label for="kategori" style="margin-top: 5px; font-weight: bold"><i class="fa fa-filter"></i> Filter:</label>
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left: 40px">
                                    Pilih Kategori
                                </button>
                                <div class="dropdown-menu animate slideIn" aria-labelledby="dropdownMenuButton" style="max-height: 200px; overflow-y: auto;">
                                    <a class="dropdown-item" href="#">CV. AGUNG SARI UTAMA</a>
                                    <a class="dropdown-item" href="#">CV. BARITO BOGA MAKMUR</a>
                                    <a class="dropdown-item" href="#">CV. CIPTA RASA MANDIRI</a>
                                    <a class="dropdown-item" href="#">CV. CIPTA RASA UTAMA</a>
                                    <a class="dropdown-item" href="#">CV. PALMY GLOBE NUSANTARA</a>
                                    <a class="dropdown-item" href="#">CV. PUTRA SUMATERA FOOD</a>
                                    <a class="dropdown-item" href="#">CV. RIYANA CIPTA PANGAN</a>
                                    <a class="dropdown-item" href="#">CV. SAHABAT PANGAN MANDIRI</a>
                                    <a class="dropdown-item" href="#">CV. SHUTO JAYA BERSAMA</a>
                                    <a class="dropdown-item" href="#">CV. SINAR REJEKI</a>
                                    <a class="dropdown-item" href="#">CV. SUMBER RASA</a>
                                    <a class="dropdown-item" href="#">CV. TATAKO</a>
                                    <a class="dropdown-item" href="#">CV. WEIMAR MITRA MAKMUR</a>
                                    <a class="dropdown-item" href="#">GALAXY MEGA PERKASA</a>
                                    <a class="dropdown-item" href="#">MARTINI FOOD</a>
                                    <a class="dropdown-item" href="#">MBAK ARIN NANANG</a>
                                    <a class="dropdown-item" href="#">PD. CHUP-CHUP</a>
                                    <a class="dropdown-item" href="#">PD. KHARISMA MANDIRI SAKTI</a>
                                    <a class="dropdown-item" href="#">PD. SARIWANGI</a>
                                    <a class="dropdown-item" href="#">PD. TIN TIN</a>
                                    <a class="dropdown-item" href="#">Pecah Belah</a>
                                    <a class="dropdown-item" href="#">PT. ABADI MAJU AGUNG</a>
                                    <a class="dropdown-item" href="#">PT. ANEKA INDO MAKMUR</a>
                                    <a class="dropdown-item" href="#">PT. ARTHA SUMATRA ABADI</a>
                                    <a class="dropdown-item" href="#">PT. BAYU BAGUS BAKRY</a>
                                    <a class="dropdown-item" href="#">PT. BINTANG MULTI KENCANA</a>
                                    <a class="dropdown-item" href="#">PT. BROTHER FOOD INDONESIA</a>
                                    <a class="dropdown-item" href="#">PT. BUMI TANGERANG COKLAT UTAMA</a>
                                    <a class="dropdown-item" href="#">PT. CANDY BRAND</a>
                                    <a class="dropdown-item" href="#">PT. CISADANE FOOD</a>
                                    <a class="dropdown-item" href="#">PT. CITRA SAMPURNA INDAH</a>
                                    <a class="dropdown-item" href="#">PT. GALAXY TOYS</a>
                                    <a class="dropdown-item" href="#">PT. GIZINDO PANGAN SEJATI</a>
                                    <a class="dropdown-item" href="#">PT. GLOBAL BINTAN PERMATA</a>
                                    <a class="dropdown-item" href="#">PT. GOOD SPICE FOOD</a>
                                    <a class="dropdown-item" href="#">PT. HESSEN UNION INDONESIA</a>
                                    <a class="dropdown-item" href="#">PT. HOKA SUKSES SENTOSA</a>
                                    <a class="dropdown-item" href="#">PT. INDO PANGAN NUSANTARA</a>
                                    <a class="dropdown-item" href="#">PT. JAYA AGUNG ABADI</a>
                                    <a class="dropdown-item" href="#">PT. KHARISMA MANDIRI SAKTI</a>
                                    <a class="dropdown-item" href="#">PT. NITO SNACK INDONESIA</a>
                                    <a class="dropdown-item" href="#">PT. PANGAN PERSADA INDONESIA</a>
                                    <a class="dropdown-item" href="#">PT. PRIMA FOOD LESTARI</a>
                                    <a class="dropdown-item" href="#">PT. PRIMA JAYA ANUGRAH MAKMUR</a>
                                    <a class="dropdown-item" href="#">PT. PUSAN MANIS MULIA</a>
                                    <a class="dropdown-item" href="#">PT. PUTRA NAGA JAYA</a>
                                    <a class="dropdown-item" href="#">PT. RANJANI JAYA LESTARI</a>
                                    <a class="dropdown-item" href="#">PT. RUSINDO PRIMA FOOD INDUSTRI</a>
                                    <a class="dropdown-item" href="#">PT. SAPINDO FOOD</a>
                                    <a class="dropdown-item" href="#">PT. SARI BUMI SENTOSA</a>
                                    <a class="dropdown-item" href="#">PT. SARIFOOD INDONUSA</a>
                                    <a class="dropdown-item" href="#">PT. SARIPATI MAS MAHKOTA</a>
                                    <a class="dropdown-item" href="#">PT. SELERA SWEETSINDO</a>
                                    <a class="dropdown-item" href="#">PT. SINAR HARAPAN BOGA</a>
                                    <a class="dropdown-item" href="#">PT. SINAR PURNAMA INDAH</a>
                                    <a class="dropdown-item" href="#">PT. SOLID MURTI CHOCHO PRIMA (SMC)</a>
                                    <a class="dropdown-item" href="#">PT. SUMBER JAYA</a>
                                    <a class="dropdown-item" href="#">PT. SUMBER SAKTI SEJAHTERA</a>
                                    <a class="dropdown-item" href="#">PT. SUNLIGHT FOOD INDONESIA</a>
                                    <a class="dropdown-item" href="#">PT. THANDEM JAYA</a>
                                    <a class="dropdown-item" href="#">PT. TORA NUSANTARA</a>
                                    <a class="dropdown-item" href="#">PT. TRIO FOOD (TRIO MITRA BERSAMA)</a>
                                    <a class="dropdown-item" href="#">PT. UNGGUL INDO MODERN SEJAHTERA (UNIMOS KOKOLA)</a>
                                    <a class="dropdown-item" href="#">PT. UNINDO </a>
                                    <a class="dropdown-item" href="#">PUTRA JOWO MALANG</a>
                                    <a class="dropdown-item" href="#">UD. BAROKAH</a>
                                    <a class="dropdown-item" href="#">UD. BINTANG TIGA</a>
                                    <a class="dropdown-item" href="#">UD. DUTA PANGAN INDONESIA</a>
                                    <a class="dropdown-item" href="#">UD. INDO NAGA</a>
                                    <a class="dropdown-item" href="#">UD. KOLAM SILOAM</a>
                                    <a class="dropdown-item" href="#">UD. MAKARONI MUGIREJO</a>
                                    <a class="dropdown-item" href="#">UD. MEKAR JAYA</a>
                                    <a class="dropdown-item" href="#">UD. SUMBER SLAMET</a>
                                </div>
                                <!-- DROPDOWN END -->

                            </div>
                        </div>
                    </div>




                    <!-- card start -->
                    <div class="container-fluid fruite py-5">
                        <div class="row justify-content-center">
                            <div class="row g-4 justify-content-center">
                                <div class="col-md-6 col-lg-3">
                                    <div class="rounded position-relative shadow">
                                        <div class="fruite-img">
                                            <img src="http://127.0.0.1:8000/img/no-image.png" class="img-fluid w-100 rounded-top" alt="image">
                                        </div>
                                        <div class="p-4 border-top-0 rounded-bottom" style="background: #F0F8FF;">
                                            <h4 class="responsive-text mb-2 mt-0 text-small text-gray-700">MARINDO BLACK COOKIES VANILA RC16 GR (6X20)</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-7 mb-0 responsive-text">Rp.120.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="rounded position-relative shadow">
                                        <div class="fruite-img">
                                            <img src="http://127.0.0.1:8000/img/no-image.png" class="img-fluid w-100 rounded-top" alt="image">
                                        </div>
                                        <div class="p-4 border-top-0 rounded-bottom" style="background: #F0F8FF;">
                                            <h4 class="responsive-text mb-2 mt-0 text-small text-gray-700">SUPER KADO (8X24)</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-7 mb-0 responsive-text">Rp.120.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="rounded position-relative shadow">
                                        <div class="fruite-img">
                                            <img src="http://127.0.0.1:8000/img/no-image.png" class="img-fluid w-100 rounded-top" alt="image">
                                        </div>
                                        <div class="p-4 border-top-0 rounded-bottom" style="background: #F0F8FF;">
                                            <h4 class="responsive-text mb-2 mt-0 text-small text-gray-700">SUPRISE BAG HERO (10X20)</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-7 mb-0 responsive-text">Rp.120.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="rounded position-relative shadow">
                                        <div class="fruite-img">
                                            <img src="http://127.0.0.1:8000/img/no-image.png" class="img-fluid w-100 rounded-top" alt="image">
                                        </div>
                                        <div class="p-4 border-top-0 rounded-bottom" style="background: #F0F8FF;">
                                            <h4 class="responsive-text mb-2 mt-0 text-small text-gray-700">JELLY BOLA 500 GR (1X25)</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-7 mb-0 responsive-text">Rp.120.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="rounded position-relative shadow">
                                        <div class="fruite-img">
                                            <img src="http://127.0.0.1:8000/img/no-image.png" class="img-fluid w-100 rounded-top" alt="image">
                                        </div>
                                        <div class="p-4 border-top-0 rounded-bottom" style="background: #F0F8FF;">
                                            <h4 class="responsive-text mb-2 mt-0 text-small text-gray-700">JELLY BOX SORTIR (12 X 10)</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-7 mb-0 responsive-text">Rp.120.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="rounded position-relative shadow">
                                        <div class="fruite-img">
                                            <img src="http://127.0.0.1:8000/img/no-image.png" class="img-fluid w-100 rounded-top" alt="image">
                                        </div>
                                        <div class="p-4 border-top-0 rounded-bottom" style="background: #F0F8FF;">
                                            <h4 class="responsive-text mb-2 mt-0 text-small text-gray-700">JELLY GELAS (1 X 24)</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-7 mb-0 responsive-text">Rp.120.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="rounded position-relative shadow">
                                        <div class="fruite-img">
                                            <img src="http://127.0.0.1:8000/img/no-image.png" class="img-fluid w-100 rounded-top" alt="image">
                                        </div>
                                        <div class="p-4 border-top-0 rounded-bottom" style="background: #F0F8FF;">
                                            <h4 class="responsive-text mb-2 mt-0 text-small text-gray-700">JELLY MOTIF (18X6)</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-7 mb-0 responsive-text">Rp.120.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="rounded position-relative shadow">
                                        <div class="fruite-img">
                                            <img src="http://127.0.0.1:8000/img/no-image.png" class="img-fluid w-100 rounded-top" alt="image">
                                        </div>
                                        <div class="p-4 border-top-0 rounded-bottom" style="background: #F0F8FF;">
                                            <h4 class="responsive-text mb-2 mt-0 text-small text-gray-700">JELLY MOTIF 1 KG (1X15)</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-7 mb-0 responsive-text">Rp.120.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example" class="mt-5">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        < </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">></a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection