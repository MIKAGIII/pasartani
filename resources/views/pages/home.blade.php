@extends('layouts.home')

@section('title')
    Home | Pasar Tani
@endsection

@section('content')
    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="mx-auto input-group w-75 d-flex">
                        <input type="search" class="p-3 form-control" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="p-3 input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Hero Start -->
    <div class="py-5 mb-5 container-fluid hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 text-secondary">DISTAN KABUPATEN LEBAK</h4>
                    <h1 class="mb-5 display-3 text-primary">Buah-buahan & Sayuran Segar</h1>
                    <div class="mx-auto position-relative">
                        <input class="px-4 py-3 border-2 form-control border-secondary w-75 rounded-pill" type="number"
                            placeholder="Search">
                        <button type="submit"
                            class="px-4 py-3 text-white border-2 btn btn-primary border-secondary position-absolute rounded-pill h-100"
                            style="top: 0; right: 25%;">Submit Now</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="rounded carousel-item active">
                                <img src="img/hero-img-1.png" class="rounded img-fluid w-100 h-100 bg-secondary"
                                    alt="First slide">
                                <a href="#" class="px-3 py-2 text-white rounded btn">Buah-buahan</a>
                            </div>
                            <div class="rounded carousel-item">
                                <img src="img/hero-img-2.jpg" class="rounded img-fluid w-100 h-100" alt="Second slide">
                                <a href="#" class="px-4 py-2 text-white rounded btn">Sayuran</a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Featurs Section Start -->
    <div class="py-5 container-fluid featurs">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 text-center rounded featurs-item bg-light">
                        <div class="mx-auto mb-5 featurs-icon btn-square rounded-circle bg-secondary">
                            <i class="text-white fas fa-car-side fa-3x"></i>
                        </div>
                        <div class="text-center featurs-content">
                            <h5>Gratis Ongkir</h5>
                            <p class="mb-0">Gratis untuk pesanan di atas Rp.50.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 text-center rounded featurs-item bg-light">
                        <div class="mx-auto mb-5 featurs-icon btn-square rounded-circle bg-secondary">
                            <i class="text-white fas fa-user-shield fa-3x"></i>
                        </div>
                        <div class="text-center featurs-content">
                            <h5>Keamanan</h5>
                            <p class="mb-0">Pembayaran keamanan 100%.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 text-center rounded featurs-item bg-light">
                        <div class="mx-auto mb-5 featurs-icon btn-square rounded-circle bg-secondary">
                            <i class="text-white fas fa-exchange-alt fa-3x"></i>
                        </div>
                        <div class="text-center featurs-content">
                            <h5>Garansi</h5>
                            <p class="mb-0">Garansi mendapatkan buah segar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 text-center rounded featurs-item bg-light">
                        <div class="mx-auto mb-5 featurs-icon btn-square rounded-circle bg-secondary">
                            <i class="text-white fa fa-phone-alt fa-3x"></i>
                        </div>
                        <div class="text-center featurs-content">
                            <h5>Dukungan 24/7</h5>
                            <p class="mb-0">WhatsApp chat 082132343968</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featurs Section End -->


    <!-- Fruits Shop Start-->
    <div class="py-5 container-fluid fruite">
        <div class="container py-5">
            <div class="text-center tab-class">
                <div class="row g-4">
                    <div class="mb-4 col-lg-6 text-start">
                        <h1>Our Organic Products</h1>
                    </div>

                </div>
                <div class="tab-content">
                    <div id="tab-1" class="p-0 tab-pane fade show active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($products as $product)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <a href="{{ route('shop-detail', $product->id) }}">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="{{ Storage::url($product->photos) }}"
                                                            class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="px-3 py-1 text-white rounded bg-secondary position-absolute"
                                                        style="top: 10px; left: 10px;">{{ $product->category->name }}</div>
                                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                        <h4>{{ $product->name }}</h4>
                                                        <p style="color: #747d88 !important">
                                                            {{ $product->thumb_description }}
                                                        </p>
                                                        <div class="d-flex justify-content-center flex-lg-wrap">
                                                            <a href="{{ route('shop-detail', $product->id) }}"
                                                                class="px-3 border btn border-secondary rounded-pill text-primary">
                                                                Detail
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->


    <!-- Featurs Start -->
    <div class="py-5 container-fluid service">
        <div class="container py-5">
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <a href="#">
                        <div class="border rounded service-item bg-secondary border-secondary">
                            <img src="img/featur-1.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="px-4 rounded-bottom">
                                <div class="p-4 text-center rounded service-content bg-primary">
                                    <h5 class="text-white">Fresh Apples</h5>
                                    <h3 class="mb-0">20% OFF</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#">
                        <div class="border rounded service-item bg-dark border-dark">
                            <img src="img/featur-2.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="px-4 rounded-bottom">
                                <div class="p-4 text-center rounded service-content bg-light">
                                    <h5 class="text-primary">Tasty Fruits</h5>
                                    <h3 class="mb-0">Free delivery</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#">
                        <div class="border rounded service-item bg-primary border-primary">
                            <img src="img/featur-3.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="px-4 rounded-bottom">
                                <div class="p-4 text-center rounded service-content bg-secondary">
                                    <h5 class="text-white">Exotic Vegitable</h5>
                                    <h3 class="mb-0">Discount 30$</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Featurs End -->


    <!-- Vesitable Shop Start-->
    <div class="py-5 container-fluid vesitable">
        <div class="container py-5">
            <h1 class="mb-0">Fresh Organic Vegetables</h1>
            <div class="owl-carousel vegetable-carousel justify-content-center">
                @foreach ($products as $product)
                    <div class="border rounded border-primary position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{ Storage::url($product->photos) }}" class="img-fluid w-100 rounded-top"
                                alt="">
                        </div>
                        <div class="px-3 py-1 text-white rounded bg-primary position-absolute"
                            style="top: 10px; right: 10px;">{{ $product->category->name }}</div>
                        <div class="p-4 rounded-bottom">
                            <h4>
                                <a style="color: #45595b !important"
                                    href="{{ route('shop-detail', $product->id) }}">{{ $product->name }}</a>
                            </h4>
                            <p>{{ $product->thumb_description }}</p>
                            <div class="d-flex justify-content-center flex-lg-wrap">
                                <a href="{{ route('shop-detail', $product->id) }}"
                                    class="px-3 border btn border-secondary rounded-pill text-primary">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Vesitable Shop End -->


    <!-- Banner Section Start-->
    <div class="my-5 container-fluid banner bg-secondary">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="py-4">
                        <h1 class="text-white display-3">Apa Itu Pasar Tani?</h1>
                        <p class="mb-4 text-dark">Pasar Tani merupakan inisiasi dari Kepala Dinas Pertanian Kabupaten Lebak berupa pasar yang khusus menjual barang-barang hasil Pertanian unggulan 
                            petani Lebak seperti sayur-sayuran, ayam, daging segar dan produk yang lain.</p>
                        <a href="{{ route('about') }}"
                            class="px-5 py-3 border-2 border-white banner-btn btn rounded-pill text-dark">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="img/kegiatanpt2.png" class="rounded img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->


    <!-- Bestsaler Product Start -->
    <div class="py-5 container-fluid">
        <div class="container py-5">
            <div class="mx-auto mb-5 text-center" style="max-width: 700px;">
                <h1 class="display-4">Bestseller Products</h1>
                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks
                    reasonable.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/best-product-1.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="my-3 d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">Rp 12.000</h4>
                                <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/best-product-2.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="my-3 d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">Rp 12.000</h4>
                                <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/best-product-3.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="my-3 d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">Rp 12.000</h4>
                                <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/best-product-4.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="my-3 d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">Rp 12.000</h4>
                                <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/best-product-5.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="my-3 d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">Rp 12.000</h4>
                                <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/best-product-6.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="my-3 d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">Rp 12.000</h4>
                                <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/fruite-item-1.jpg" class="rounded img-fluid" alt="">
                        <div class="py-4">
                            <a href="#" class="h5">Organic Tomato</a>
                            <div class="my-3 d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="mb-3">Rp 12.000</h4>
                            <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/fruite-item-2.jpg" class="rounded img-fluid" alt="">
                        <div class="py-4">
                            <a href="#" class="h5">Organic Tomato</a>
                            <div class="my-3 d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="mb-3">Rp 12.000</h4>
                            <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/fruite-item-3.jpg" class="rounded img-fluid" alt="">
                        <div class="py-4">
                            <a href="#" class="h5">Organic Tomato</a>
                            <div class="my-3 d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="mb-3">Rp 12.000</h4>
                            <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/fruite-item-4.jpg" class="rounded img-fluid" alt="">
                        <div class="py-2">
                            <a href="#" class="h5">Tomato</a>
                            <div class="my-3 d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="mb-3">Rp 12.000</h4>
                            <a href="#" class="px-3 border btn border-secondary rounded-pill text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bestsaler Product End -->


    <!-- Tastimonial Start -->
    <div class="py-5 container-fluid testimonial">
        <div class="container py-5">
            <div class="text-center testimonial-header">
                <h4 class="text-primary">Our Testimonial</h4>
                <h1 class="mb-5 display-5 text-dark">Kata pelanggan Kami!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="p-4 rounded testimonial-item img-border-radius bg-light">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="pb-4 mb-4 border-bottom border-secondary">
                            <p class="mb-0">"Saya sangat senang berbelanja di Pasar Tani. Selain produk-produknya segar dan berkualitas, 
                                harganya juga terjangkau. Saya sering membeli sayuran dan buah-buahan di sini."
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="rounded bg-secondary">
                                <img src="img/testi1.jpg" class="rounded img-fluid"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Fitriyah</h4>
                                <p class="pb-3 m-0">Masyarakat</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 rounded testimonial-item img-border-radius bg-light">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="pb-4 mb-4 border-bottom border-secondary">
                            <p class="mb-0">"penjualnya selalu ramah. Pasar ini juga mendukung petani 
                                lokal, sehingga kita tahu bahwa setiap pembelian kita membantu perekonomian masyarakat setempat."
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="rounded bg-secondary">
                                <img src="img/testi2.jpg" class="rounded img-fluid"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Sarwanto</h4>
                                <p class="pb-3 m-0">Pegawai Dinsos Lebak</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 rounded testimonial-item img-border-radius bg-light">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="pb-4 mb-4 border-bottom border-secondary">
                            <p class="mb-0">"Pasar Tani ini benar-benar mendukung konsep keberlanjutan dan pemberdayaan lokal. Setiap kali saya berbelanja 
                                di sini, saya merasa seperti memberikan kontribusi langsung kepada komunitas petani lokal."
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="rounded bg-secondary">
                                <img src="img/testi4.jpg" class="rounded img-fluid"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Yeni Mulyani</h4>
                                <p class="pb-3 m-0">Pegawai Dishub Lebak</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tastimonial End -->
@endsection
