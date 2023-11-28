@extends('frontend.frontend_master')
@section('main')
 <!-- START DISCOUNT -->
 <div class="disc-section">
    <div class="container-md">
        <div class="disc-wrap">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-3 col-md-4 col-sm-12 ps-5 pe-5">
                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/storesection.webp" width="100%" alt="" />
                </div>
                <div class="col-12 col-lg-5 col-md-4 col-sm-12">
                    <div class="countdown-3" data-countdown data-countdown-option-leadingzero="true" data-countdown-option-setcssproperties="true" data-countdown-option-separatedigits="true" data-countdown-option-nextdigits="true">
                        <div class="days">
                            <span class="amount"></span>
                            <span class="label"></span>
                        </div>
                        <div class="hours">
                            <span class="amount"></span>
                            <span class="label"></span>
                        </div>
                        <div class="minutes">
                            <span class="amount"></span>
                            <span class="label"></span>
                        </div>
                        <div class="seconds">
                            <span class="amount"></span>
                            <span class="label"></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                    <div class="disc-text">
                        <p class="mb-0">Lagi ada promo lho!</p>
                        <h2 class="fw-bold mb-4">Diskon hingga <span>50%</span></h2>
                        <div class="btn-cek mb-4">
                            <a href="#">Cek Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END DISCOUND -->

<!-- START SEARCH DOMAIN -->
<div class="search-domain-section text-center pt-5 pb-5">
    <div class="container">
        <div class="title">
            <h1>Cari Nama Domainmu</h1>
            <p>Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs Anda. Pilih nama domain yang paling mencerminkan bisnis, produk, atau layanan Anda.</p>
        </div>
        <div class="wrap-search mt-4">
            <form>
                <div class="row align-items-center justify-content-between mb-3">
                    <div class="col-12 col-sm-7 col-md-7 col-lg-8">
                        <div class="input-group-lg">
                            <input type="text" class="form-control border-0" placeholder="Cari nama domain Anda" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-md-5 col-lg-2 mt-3 mt-sm-0">
                        <div class="input-group-lg">
                            <select name="" id="" class="form-select">
                                <option value="">.id</option>
                                <option value="">.com</option>
                                <option value="">.info</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 mt-3 mt-lg-0">
                        <div class="btn-search">
                            <a href="#pricingcard-section">Cari</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="mt-4">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="d-flex flex-wrap justify-content-around justify-content-lg-center gap-3">
                        <div>
                            <div class="fw-semibold">.id</div>
                            <h3 class="fw-bold">Rp165.000</h3>
                        </div>
                        <div class="vr"></div>
                        <div>
                            <div class="fw-semibold">.com</div>
                            <h3 class="fw-bold">Rp225.000</h3>
                        </div>
                        <div class="vr"></div>
                        <div>
                            <div class="fw-semibold">.info</div>
                            <h3 class="fw-bold">Rp77.000</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SEARCH DOMAIN -->

<!-- START PRICING CARD -->
<div id="pricingcard-section" class="pricing-card pb-5">
    <div class="container-md">
        <div class="title text-center mt-5">
            <h1 class="mb-3">Cloud Hosting Indonesia <span>Diskon Hingga 50%</span></h1>
            <p>Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk website anda</p>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up">
                <div class="card border-0 mt-5">
                    <div class="card-heading text-center mt-3 mb-2">
                        <p>Value Cloud Hosting</p>
                        <h3>VCH1</h3>
                    </div>
                    <div class="card-price text-center">
                        <s class="text-muted">Rp24.500</s>
                        <p class="mb-1">Rp14.500</p>
                    </div>

                    <div class="card-description p-2">
                        <hr />
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Disk</div>
                                <p class="mb-0 fw-bold">3 GB</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Bandwith</div>
                                <p class="mb-0 fw-bold">Unlimited</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Core CPU</div>
                                <p class="mb-0 fw-bold">0.5 Core</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Addon / parked domain</div>
                                <p class="mb-0 fw-bold">No</p>
                            </div>
                        </div>
                        <div class="card-btn mt-4 mb-3 ms-3 me-3">
                            <a href="#">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="card border-0 mt-5">
                    <div class="card-heading text-center mt-3 mb-2">
                        <p>Unlimited Hosting</p>
                        <h3>Signature</h3>
                    </div>
                    <div class="card-price text-center">
                        <s class="text-muted">Rp109.000</s>
                        <p class="mb-1">Rp89.900</p>
                    </div>

                    <div class="card-description p-2">
                        <hr />
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Disk</div>
                                <p class="mb-0 fw-bold">Unlimited</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Bandwith</div>
                                <p class="mb-0 fw-bold">Unlimited</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Core CPU</div>
                                <p class="mb-0 fw-bold">1 Core</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Addon / parked domain</div>
                                <p class="mb-0 fw-bold">5 / 5</p>
                            </div>
                        </div>
                        <div class="card-btn mt-4 mb-3 ms-3 me-3">
                            <a href="#">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="2000">
                <div class="card border-0 mt-5">
                    <div class="card-heading text-center mt-3 mb-2">
                        <p>High Performance</p>
                        <h3>HPCH Bisnis 1</h3>
                    </div>
                    <div class="card-price text-center">
                        <s class="text-muted">Rp90.000</s>
                        <p class="mb-1">Rp79.000</p>
                    </div>

                    <div class="card-description p-2">
                        <hr />
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Disk</div>
                                <p class="mb-0 fw-bold">3 GB</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Bandwith</div>
                                <p class="mb-0 fw-bold">Unlimited</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Core CPU</div>
                                <p class="mb-0 fw-bold">0.5 Core</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Addon / parked domain</div>
                                <p class="mb-0 fw-bold">-</p>
                            </div>
                        </div>
                        <div class="card-btn mt-4 mb-3 ms-3 me-3">
                            <a href="#">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="3000">
                <div class="card border-0 mt-5">
                    <div class="card-heading text-center mt-3 mb-2">
                        <p>Cloud VPS KVM SSD</p>
                        <h3>VPS SC1</h3>
                    </div>
                    <div class="card-price text-center">
                        <s class="text-muted">Rp135.000</s>
                        <p class="mb-1">Rp75.000</p>
                    </div>

                    <div class="card-description p-2">
                        <hr />
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Disk</div>
                                <p class="mb-0 fw-bold">25 GB</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Bandwith</div>
                                <p class="mb-0 fw-bold">Unlimited</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Core CPU</div>
                                <p class="mb-0 fw-bold">0.5 Core</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp" width="35" alt="" />
                            </div>
                            <div>
                                <div>Addon / parked domain</div>
                                <p class="mb-0 fw-bold">Unlimited</p>
                            </div>
                        </div>
                        <div class="card-btn mt-4 mb-3 ms-3 me-3">
                            <a href="#">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PRICING CARD -->

<!-- START LAYANAN LAINNYA -->
<div class="layanan-lain pb-5">
    <div class="container-md">
        <div class="title text-center pt-5">
            <h1 class="mb-3">Lihat Juga Layanan Kami Yang Lain</h1>
            <p>Optimalkan performa website bisnis Anda dengan berbagai layanan berkualitas dari Qwords</p>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="card border-0 mt-5 p-3">
                    <div class="card-heading d-flex align-items-center">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/ssl.webp" width="35" />
                        <h5 class="ms-2 mb-0 fw-semibold">SSL</h5>
                    </div>
                    <div class="card-description card-description-2 pt-3">
                        <p>Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL Certificate.</p>
                    </div>
                    <div class="card-price">
                        <span>Mulai dari</span>
                        <h2 class="mt-2">Rp112.000 <span>/tahun</span></h2>
                    </div>
                    <div class="card-btn mt-3 mb-2">
                        <a href="#">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="2000">
                <div class="card border-0 mt-5 p-3">
                    <div class="card-heading d-flex align-items-center">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/dbstack.webp" width="35" />
                        <h5 class="ms-2 mb-0 fw-semibold">Dedicated Server</h5>
                    </div>
                    <div class="card-description card-description-2 pt-3">
                        <p>Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas.</p>
                    </div>
                    <div class="card-price">
                        <span>Mulai dari</span>
                        <h2 class="mt-2">Rp499.000 <span>/bulan</span></h2>
                    </div>
                    <div class="card-btn mt-3 mb-2">
                        <a href="#">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="3000">
                <div class="card border-0 mt-5 p-3">
                    <div class="card-heading d-flex align-items-center">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp" width="35" />
                        <h5 class="ms-2 mb-0 fw-semibold">Colocation Server</h5>
                    </div>
                    <div class="card-description card-description-2 pt-3">
                        <p>Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher.</p>
                    </div>
                    <div class="card-price">
                        <span>Mulai dari</span>
                        <h2 class="mt-2">Rp500.000 <span>/bulan</span></h2>
                    </div>
                    <div class="card-btn mt-3 mb-2">
                        <a href="#">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END LAYANAN LAINNYA -->

<!-- START SOLUSI PAKET -->
<div id="solusi" class="solusi-paket">
    <div class="container-md">
        <div class="title text-center pt-5">
            <h1 class="mb-3">Solusi Paket Hosting Terbaik dari Kami</h1>
            <p>Kami menawarkan solusi paket hosting terbaik untuk segala kebutuhan website dan sistem Anda. Mulai dari blog hingga website bisnis dan perusahaan</p>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-sm-6 col-lg-4 mb-3" data-aos="fade-up" data-aos-duration="1000">
                <a href="https://qwords.com/v2/hosting-dan-server-perusahaan/" style="text-decoration: none">
                    <div class="card card-solusi border-0 rounded-20px" id="company">
                        <img
                            data-lazyloaded="1"
                            src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/company.webp"
                            loading="lazy"
                            data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/company.webp"
                            alt="company.webp"
                            data-ll-status="loaded"
                            class="entered litespeed-loaded" /><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/company.webp" alt="company.webp" /></noscript>
                        <div class="p-3 card-text">
                            <h3 class="fw-bold h5home">Perusahaan</h3>
                            <p>Wujudkan website perusahaan profesional dan berkelas dengan dukungan web hosting terbaik dan fitur keamanan ekstra</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-3" data-aos="fade-up" data-aos-duration="2000">
                <a href="https://qwords.com/v2/hosting-dan-server-umkm/" style="text-decoration: none">
                    <div class="card card-solusi border-0 rounded-20px" id="umkm">
                        <img
                            data-lazyloaded="1"
                            src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/umkm.webp"
                            loading="lazy"
                            data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/umkm.webp"
                            alt="umkm.webp"
                            data-ll-status="loaded"
                            class="entered litespeed-loaded" /><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/umkm.webp" alt="umkm.webp" /></noscript>
                        <div class="p-3 card-text">
                            <h3 class="fw-bold h5home">UMKM dan Toko Online</h3>
                            <p>Memberikan hosting terbaik untuk mendukung kebutuhan website pemasaran barang/jasa secara online.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-3" data-aos="fade-up" data-aos-duration="3000">
                <a href="https://qwords.com/v2/hosting-dan-server-organisasi/" style="text-decoration: none">
                    <div class="card card-solusi border-0 rounded-20px" id="orgs">
                        <img
                            data-lazyloaded="1"
                            src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/orgs.webp"
                            loading="lazy"
                            data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/orgs.webp"
                            alt="orgs.webp"
                            data-ll-status="loaded"
                            class="entered litespeed-loaded" /><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/orgs.webp" alt="orgs.webp" /></noscript>
                        <div class="p-3 card-text">
                            <h3 class="fw-bold h5home">Organisasi dan Komunitas</h3>
                            <p>Bikin website organisasi atau komunitas Anda dengan paket hosting unggulan yang ramah kantong.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-3" data-aos="fade-up" data-aos-duration="1000">
                <a href="https://qwords.com/v2/hosting-dan-server-sekolah/" style="text-decoration: none">
                    <div class="card card-solusi border-0 rounded-20px" id="school">
                        <img
                            data-lazyloaded="1"
                            src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/school.webp"
                            loading="lazy"
                            data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/school.webp"
                            alt="school.webp"
                            data-ll-status="loaded"
                            class="entered litespeed-loaded" /><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/school.webp" alt="school.webp" /></noscript>
                        <div class="p-3 card-text">
                            <h3 class="fw-bold h5home">Sekolah</h3>
                            <p>Infrastruktur web hosting terbaik untuk menunjang kegiatan e-learning. Didukung platform MOODLE khusus pembelajaran daring</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-3" data-aos="fade-up" data-aos-duration="2000">
                <a href="https://qwords.com/v2/hosting-dan-server-developer/" style="text-decoration: none">
                    <div class="card card-solusi border-0 rounded-20px hidden" id="dev">
                        <img
                            data-lazyloaded="1"
                            src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/dev.webp"
                            loading="lazy"
                            data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/dev.webp"
                            alt="dev.webp"
                            data-ll-status="loaded"
                            class="entered litespeed-loaded" /><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/dev.webp" alt="dev.webp" /></noscript>
                        <div class="p-3 card-text">
                            <h3 class="fw-bold h5home">Developer</h3>
                            <p>Tersedia paket hosting Indonesia dengan spesifikasi khusus yang dev-friendly. Ekstra NodeJS dan Git Version Control</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-3" data-aos="fade-up" data-aos-duration="3000">
                <a href="https://qwords.com/v2/hosting-dan-server-blogger/" style="text-decoration: none">
                    <div class="card card-solusi border-0 rounded-20px hidden" id="blog">
                        <img
                            data-lazyloaded="1"
                            src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/blog.webp"
                            loading="lazy"
                            data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/blog.webp"
                            alt="blog.webp"
                            data-ll-status="loaded"
                            class="entered litespeed-loaded" /><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/blog.webp" alt="blog.webp" /></noscript>
                        <div class="p-3 card-text">
                            <h3 class="fw-bold h5home">Blogger dan Personal</h3>
                            <p>Memfasilitasi blogger dengan infrastruktur hosting Indonesia terbaik serta template website premium untuk tampil lebih profesional</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <button id="viewMoreButton" class="btn-viewmore">View More</button>
    </div>
</div>
<!-- END SOLUSI PAKET -->

<!-- START KOMITMENT QWORDS -->
<div class="komit-qwords">
    <div class="container-md">
        <div class="title text-center pt-5">
            <h1 class="mb-3">Komitmen Qwords</h1>
            <p>Berbagai alasan mengapa pelanggan memilih sewa hosting di Qwords</p>
        </div>
        <div class="app-slider pt-5">
            <div class="app-slider--card p-2">
                <div class="komit-img">
                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/call.webp" width="55" alt="" />
                </div>
                <div class="komit-ttl">
                    <h4 class="fw-bold">Layanan 24/7</h4>
                </div>
                <div class="komit-content">
                    <p>Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support Ticket.</p>
                </div>
            </div>
            <div class="app-slider--card p-2">
                <div class="komit-img">
                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/book.webp" width="55" alt="" />
                </div>
                <div class="komit-ttl">
                    <h4 class="fw-bold">Panduan Manual Lengkap</h4>
                </div>
                <div class="komit-content">
                    <p>Qwords dilengkapi dengan halaman knowledge base berisi tutorial dan tips seputar pengelolaan website dan hosting. Dapat diakses dengan mudah dan solutif</p>
                </div>
            </div>
            <div class="app-slider--card p-2">
                <div class="komit-img">
                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp" width="55" alt="" />
                </div>
                <div class="komit-ttl">
                    <h4 class="fw-bold">Up time 99.99%</h4>
                </div>
                <div class="komit-content">
                    <p>Uptime Network & Server di atas 99. 99% dengan konfigurasi server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider network serta multiple peering.</p>
                </div>
            </div>
            <div class="app-slider--card p-2">
                <div class="komit-img">
                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/guard.webp" width="55" alt="" />
                </div>
                <div class="komit-ttl">
                    <h4 class="fw-bold">Jaminan keamanan</h4>
                </div>
                <div class="komit-content">
                    <p>Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama kami.</p>
                </div>
            </div>
            <div class="app-slider--card p-2">
                <div class="komit-img">
                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/networkAlt.webp" width="55" alt="" />
                </div>
                <div class="komit-ttl">
                    <h4 class="fw-bold">Clustered DNS</h4>
                </div>
                <div class="komit-content">
                    <p>DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal ini membuat DNS Server akan selalu dapat di akses karena saling membackup antar server.</p>
                </div>
            </div>
            <div class="app-slider--card p-2">
                <div class="komit-img">
                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/diamond.webp" width="55" alt="" />
                </div>
                <div class="komit-ttl">
                    <h4 class="fw-bold">High Enterprise Server</h4>
                </div>
                <div class="komit-content">
                    <p>Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core yang merupakan hardware kelas terbaik. Hardware ini biasa digunakan oleh perusahaan terkemuka.</p>
                </div>
            </div>
            <div class="app-slider--card p-2">
                <div class="komit-img">
                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp " width="55" alt="" />
                </div>
                <div class="komit-ttl">
                    <h4 class="fw-bold">Tier 1 Network</h4>
                </div>
                <div class="komit-content">
                    <p>Tier 1 Network merupakan jaringan dunia tanpa transit network, yang membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network.</p>
                </div>
            </div>
            <div class="app-slider--card p-2">
                <div class="komit-img">
                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/network.webp" width="55" alt="" />
                </div>
                <div class="komit-ttl">
                    <h4 class="fw-bold">Peering Network</h4>
                </div>
                <div class="komit-content">
                    <p>Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin kecil.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END KOMITMENT QWORDS -->

<!-- START CARD INFO -->
<div class="banner-info mt-5 pt-2">
    <div class="container-md">
        <div class="bg-banner">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6" data-aos="fade-left">
                    <div class="banner-img">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/bw.webp" alt="" />
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6" data-aos="fade-right">
                    <div class="banner-text">
                        <h1 class="fw-semibold mb-3"><span>Bikin website impian</span> dengan mudah disini hanya 1jutaan</h1>
                        <p class="mb-4">Bikin website impian include paket hosting Indonesia terbaik hanya 1 jutaan Jasa pembuatan website profesional untuk Perusahaan, Bisnis & UKM. Bikin Website Impian dengan mudah di sini, desain website elegan dan mudah dikelola</p>
                    </div>
                    <div class="button-5 banner-btn mb-5">
                        <a href="#">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CARD INFO -->

<!-- START TELAH DIPERCAYA -->
<div class="pelanggan-aktif">
    <div class="container-md">
        <div class="title text-center pt-5">
            <h1 class="mb-3">Telah Dipercaya oleh 45.000+ Pelanggan Aktif</h1>
        </div>
        <div style="max-width: 1200px; margin: 40px auto">
            <div class="your-class">
                <div class="logo-slide"><img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Cimory.webp" /></div>
                <div class="logo-slide"><img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Forisa.webp" /></div>
                <div class="logo-slide"><img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Elsheskin.webp" /></div>
                <div class="logo-slide"><img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Icon.webp" /></div>
                <div class="logo-slide"><img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Horison.webp" /></div>
                <div class="logo-slide"><img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/MD.webp" /></div>
            </div>
        </div>
        <div class="list-btn d-flex align-items-center text-center justify-content-center mt-5">
            <a href="#">Dan Masih Banyak yang Lainnya </a>
            <i class="bx bx-right-arrow-alt"></i>
        </div>
    </div>
</div>
<!-- END TELAH DIPERCAYA -->

<!-- START ALL BRANDS -->
<div class="mt-5">
    <div class="container-md">
        <div class="relations-wrap">
            <div class="row align-items-center justify-content-around">
                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="relations-content mb-3">
                        <h1 id="shiva" class="count">14</h1>
                        <p class="mb-2">Partner Kami</p>
                        <div class="list-btn mb-3" style="text-decoration: underline #ff6d0b">
                            <a href="#">Lihat Semua Partner</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="relations-content mb-3">
                        <h1 id="shiva" class="count">6</h1>
                        <p class="mb-2">Telah Meliput</p>
                        <div class="list-btn mb-3" style="text-decoration: underline #ff6d0b">
                            <a href="#">Lihat Semua Liputan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="relations-content mb-3">
                        <h1 id="shiva" class="count">38</h1>
                        <p class="mb-2">Metode Pembayaran</p>
                        <div class="list-btn mb-3" style="text-decoration: underline #ff6d0b">
                            <a href="#">Lihat Panduan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END ALL BRANDS -->

<!-- START BANNER GARANSI -->
<div class="banner-garansi mt-5 py-4">
    <div class="container-md">
        <div class="h-100 row align-items-center justify-content-center">
            <div class="col-12 col-sm-12 col-lg-6 col-xxl-5 mb-3 mb-lg-0" data-aos="fade-left">
                <!-- <div class="banner-img">
                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/guarantee.webp" alt="" />
                </div> -->
                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/guarantee.webp" width="100%" alt="" />
            </div>
            <div class="col-12 col-sm-12 col-lg-6 col-xxl-5 text-center text-lg-start" data-aos="fade-right">
                <div class="banner-text">
                    <h1 class="fw-bold mb-3">Garansi 30 Hari <span>Uang Kembali</span></h1>
                    <p>Untuk menjaga kepuasan pelanggan, kami memberikan garansi uang kembali yang berlaku hingga 30 hari setelah hosting aktif.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END BANNER GARANSI -->

<!-- START TESTIMONIAL -->
<div class="testimonial mt-1">
    <div class="container-md">
        <div class="title text-center pt-5">
            <h1 class="mb-3">Apa Kata Mereka?</h1>
            <p>Apa kata mereka yang sudah menggunakan layanan web hosting Indonesia dari Qwords? Simak pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami.</p>
        </div>
        <div class="blog-card mt-4">
            <input type="radio" name="select" id="tap-1" checked />
            <input type="radio" name="select" id="tap-2" />
            <input type="radio" name="select" id="tap-3" />
            <input type="checkbox" id="imgTap" />
            <div class="sliders">
                <label for="tap-1" class="tap tap-1"></label>
                <label for="tap-2" class="tap tap-2"></label>
                <label for="tap-3" class="tap tap-3"></label>
            </div>
            <div class="row align-items-center inner-part mt-4">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center">
                    <label for="imgTap" class="img">
                        <img class="img-1" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi1.webp" />
                    </label>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="content content-1">
                        <div class="header-quote">
                            <h5>Semoga Qwords dapat terus bertahan, sehingga kami dan masyarakat Indonesia bisa mendapatkan layanan yang terbaik dari Qwords.</h5>
                        </div>
                        <div class="quote-details">
                            <p>Kami, ID Cert, merupakan sebuah perusahaan yang bergerak dalam bidang penyedia jasa informasi keamanan di Indonesia. Oleh karena itu, kami membutuhkan Qwords untuk mendukung kebutuhan kami terhadap server dan hosting yang selalu up selama 24 jam.</p>
                        </div>
                        <div class="d-flex align-items-center ms-5">
                            <h6 class="fs-5 fw-medium me-3 mb-0">Budi Raharjo</h6>
                            <span class="fs-6 text-muted mb-0">Founder ID Cert</span>
                        </div>
                        <div class="list-btn d-flex align-items-center ms-5">
                            <a href="#">Lihat Video Selengkapnya </a>
                            <i class="bx bx-right-arrow-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center inner-part mt-4">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="content content-2">
                        <div class="header-quote">
                            <h5>Pelayanan Qwords sangat cepat dan responsif, sehingga tidak butuh waktu lama untuk membantu website kami kembali normal. Terbaik pokoknya, mah!</h5>
                        </div>
                        <div class="quote-details">
                            <p>Sebagai media penyedia kabar seputar kota Bandung, Info BDG menggunakan website sebagai rumah informasi. Website kami yang sempat down kini menunjukkan traffic yang tinggi setelah menggunakan dukungan dari Qwords.</p>
                        </div>
                        <div class="d-flex align-items-center ms-5">
                            <h6 class="fs-5 fw-medium me-3 mb-0">Kuns Kurniawan</h6>
                            <span class="fs-6 text-muted mb-0">PR Event Info BDG</span>
                        </div>
                        <div class="list-btn d-flex align-items-center ms-5">
                            <a href="#">Lihat Video Selengkapnya </a>
                            <i class="bx bx-right-arrow-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center">
                    <label for="imgTap" class="img">
                        <img class="img-2" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi2.webp" />
                    </label>
                </div>
            </div>
            <div class="row align-items-center inner-part mt-4">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center">
                    <label for="imgTap" class="img">
                        <img class="img-3" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi3.webp" />
                    </label>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="content content-3">
                        <div class="header-quote">
                            <h5>Hingga saat ini pula, kami tidak pernah menemukan masalah yang berarti dari layanan yang diberikan Qwords. Layanan Customer Service yang sangat baik, membuat kami tidak ingin berpindah dari Qwords.</h5>
                        </div>
                        <div class="quote-details">
                            <p>Penjualan Rumah Kopi Temanggung 90% dilakukan secara online, salah satunya menggunakan website. Semenjak tahun 2015 hingga saat ini, kami menggunakan hosting dan domain dari Qwords.</p>
                        </div>
                        <div class="d-flex align-items-center ms-5">
                            <h6 class="fs-5 fw-medium me-3 mb-0">Denden Sofiudin</h6>
                            <span class="fs-6 text-muted mb-0">Owner Rumah Kopi temanggung</span>
                        </div>
                        <div class="list-btn d-flex align-items-center ms-5">
                            <a href="#">Lihat Video Selengkapnya </a>
                            <i class="bx bx-right-arrow-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END TESTIMONIAL -->

<!-- START FAQ -->
<div class="container-md">
    <div class="title text-center mt-5 mb-4">
        <h1 class="mb-3">Pertanyaan seputar <span style="color: #ff6d0b">Layanan Web Hosting </span>Qwords</h1>
    </div>
    <div class="faq-container mb-3">
        <div class="faq-bg">
            <div class="faq-label">
                <div class="faq-label-text">Apa itu web hosting?</div>
                <div class="faq-label-icon">
                    <span class="material-icons"><i class="bx bxs-chevron-down"></i> </span>
                </div>
            </div>
            <div class="faq-answer">
                <hr />
                <div class="faq-answer-content">
                    Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website. File dan data tersebut di simpan di dalam server yang terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja dan di mana saja.
                    <br />
                    <br />
                    Penjelasan lebih lanjut dapat Anda baca pada artikel ini : https://qwords.com/blog/apa-itu-hosting/
                </div>
            </div>
        </div>
    </div>
    <div class="faq-container mb-3">
        <div class="faq-bg">
            <div class="faq-label">
                <div class="faq-label-text">Apa kelebihan dari cloud hosting Qwords?</div>
                <div class="faq-label-icon">
                    <span class="material-icons"><i class="bx bxs-chevron-down"></i> </span>
                </div>
            </div>
            <div class="faq-answer">
                <hr />
                <div class="faq-answer-content">
                    Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website. File dan data tersebut di simpan di dalam server yang terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja dan di mana saja.
                    <br />
                    <br />
                    Penjelasan lebih lanjut dapat Anda baca pada artikel ini : https://qwords.com/blog/apa-itu-hosting/
                </div>
            </div>
        </div>
    </div>
    <div class="faq-container mb-3">
        <div class="faq-bg">
            <div class="faq-label">
                <div class="faq-label-text">Mengapa saya perlu web hosting?</div>
                <div class="faq-label-icon">
                    <span class="material-icons"><i class="bx bxs-chevron-down"></i> </span>
                </div>
            </div>
            <div class="faq-answer">
                <hr />
                <div class="faq-answer-content">
                    Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website. File dan data tersebut di simpan di dalam server yang terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja dan di mana saja.
                    <br />
                    <br />
                    Penjelasan lebih lanjut dapat Anda baca pada artikel ini : https://qwords.com/blog/apa-itu-hosting/
                </div>
            </div>
        </div>
    </div>
    <div class="faq-container mb-3">
        <div class="faq-bg">
            <div class="faq-label">
                <div class="faq-label-text">Bagaimana cara membeli hosting?</div>
                <div class="faq-label-icon">
                    <span class="material-icons"><i class="bx bxs-chevron-down"></i> </span>
                </div>
            </div>
            <div class="faq-answer">
                <hr />
                <div class="faq-answer-content">
                    Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website. File dan data tersebut di simpan di dalam server yang terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja dan di mana saja.
                    <br />
                    <br />
                    Penjelasan lebih lanjut dapat Anda baca pada artikel ini : https://qwords.com/blog/apa-itu-hosting/
                </div>
            </div>
        </div>
    </div>
    <div class="faq-container mb-3">
        <div class="faq-bg">
            <div class="faq-label">
                <div class="faq-label-text">Apakah saya bisa transfer Hosting ke Qwords Cloud Web Hosting Indonesia?</div>
                <div class="faq-label-icon">
                    <span class="material-icons"><i class="bx bxs-chevron-down"></i> </span>
                </div>
            </div>
            <div class="faq-answer">
                <hr />
                <div class="faq-answer-content">
                    Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website. File dan data tersebut di simpan di dalam server yang terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja dan di mana saja.
                    <br />
                    <br />
                    Penjelasan lebih lanjut dapat Anda baca pada artikel ini : https://qwords.com/blog/apa-itu-hosting/
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END FAQ -->

<!-- START BUTUH BANTUAN -->
<div class="butuh-bantuan mt-5">
    <div class="container-md">
        <div class="title text-center pt-5">
            <h1 class="mb-3">Butuh <span>Bantuan?</span></h1>
            <p>Kami siap membantu anda 24 Jam</p>
        </div>
        <div class="contact-info d-flex gap-2 flex-wrap align-items-center justify-content-center justify-content-lg-center mt-2 mt-4 px-3 mb-5">
            <a href="tel:+628041808888">
                <div class="d-flex align-items-center justify-content-center a-content">
                    <i class="bx bxs-phone"></i>
                    <p class="mb-0">0804-1-808-888</p>
                </div>
            </a>
            <a href="tel:+628041808888">
                <div class="d-flex align-items-center justify-content-center a-content">
                    <i class="bx bxs-phone"></i>
                    <p class="mb-0">021 39708800</p>
                </div>
            </a>
            <a href="tel:+628041808888">
                <div class="d-flex align-items-center justify-content-center a-content">
                    <i class="bx bxl-whatsapp"></i>
                    <p class="mb-0">+6281-7437-111 (WhatsApp only)</p>
                </div>
            </a>
            <a href="tel:+628041808888">
                <div class="d-flex align-items-center justify-content-center a-content">
                    <i class="bx bxs-envelope"></i>
                    <p class="mb-0">info@qwords.com</p>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- END BUTUH BANTUAN -->
@endsection