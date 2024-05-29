@extends('layouts.home')

@section('title')
About Us | Pasar Tani
@endsection

@section('content')
    <!-- Single Page Header start -->
    <div class="py-5 container-fluid page-header">
        <h1 class="text-center text-white display-6">About Us</h1>
        <ol class="mb-0 breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="text-white breadcrumb-item active">About Us</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Tentang Kami Mulai -->
    <div class="py-5 container-fluid about">
        <div class="container py-5">
            <div class="p-5 rounded bg-light shadow">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="mx-auto text-center" style="max-width: 700px;">
                            <h1 class="text-primary mb-3">Pasar Tani</h1>
                            <p class="mb-4">
                            Peluang dan potensi sektor pertanian di Kabupaten Lebak adalah dari potensi wilayah dan potensi sumber daya manusianya. Kabupaten Lebak memiliki luas wilayah 304.472 Ha atau 3.044,72 Km<sup>2</sup> (30% dari luas Provinsi Banten) dengan jumlah penduduk 1.386.793 jiwa, terdiri dari 28 Kecamatan yang meliputi 340 desa, dan 5 kelurahan. Hal ini berarti bahwa penggunaan lahan yang ada di Kabupaten Lebak merupakan salah satu yang dapat dimanfaatkan oleh pelaku utama dalam melaksanakan memproduksi komoditas unggulan.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Banner Section Start-->
                    <div class="my-5 container-fluid banner bg-secondary">
                        <div class="container py-5">
                            <div class="row g-4 align-items-center">
                                <div class="col-lg-6">
                                    <div class="py-4">
                                        <h2 class="text-white">Inisiasi Pasar Tani</h2>
                                        <p class="mb-4 text-dark">
                                        Pasar Tani merupakan inisiasi dari Kepala Dinas Pertanian Kabupaten Lebak berupa pasar yang khusus menjual barang-barang hasil pertanian unggulan petani Lebak seperti sayur-sayuran, ayam, daging segar, dan produk lainnya. Pasar tani merupakan jualan langsung, di mana petani atau peternak berpeluang menjual barang dagangan mereka secara langsung kepada konsumen tanpa melalui pemborong atau tengkulak. Harga yang tersedia di pasaran tidak sesuai dengan harapan untuk mengembangkan potensial sebagai wahana dalam memperkenalkan komoditas produk unggulan petani.
                                        </p>
                                        <a href="{{ route('shop') }}" class="px-5 py-3 border-2 border-white banner-btn btn rounded-pill text-dark">Beli Sekarang</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="position-relative">
                                        <img src="img/kegiatanpt.jpg" class="rounded img-fluid w-100 shadow" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Banner Section End -->

                    <div class="col-12">
                        <div class="mx-auto text-center" style="max-width: 700px;">
                            <h2 class="text-primary mb-3">Pengembangan Pasar Tani</h2>
                            <p class="mb-4">
                                Pasar Tani saat ini dikembangkan oleh OPD Dinas Pertanian dalam rangka membantu para petani yang tergabung dalam Kelembagaan Tani seluruh Kecamatan di Kabupaten Lebak dalam memperkenalkan dan memberikan peluang untuk memasarkan komoditas unggulan berbasis kearifan lokal masyarakat serta yang paling penting adalah menurunkan inflasi di Kabupaten Lebak.
                            </p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mx-auto text-center" style="max-width: 700px;">
                            <h2 class="text-primary mb-3">Maksud & Tujuan</h2>
                            <div class="text-start">
                                <h4 class="text-primary">Maksud:</h4>
                                <p class="mb-4">
                                    Dari program inovasi PASTAN LEBAK ini adalah untuk mempermudah petani dalam memasarkan produknya dengan harga lebih tinggi dibanding menjual di tengkulak. Pihak konsumen mendapatkan harga murah dibandingkan harga pasar dengan kualitas produk lebih segar dari komoditas unggulan di setiap Kecamatan di Kabupaten Lebak. Mencegah terjadinya kerugian karena memutus rantai pemasaran dengan penjualan langsung kepada konsumen. Kemudahan transaksi selain transaksi secara langsung juga bisa dengan pemesanan order barang antara pembeli kepada penjual melalui online sistem pembayaran melalui transfer uang dan COD (Cash On Delivery).
                                </p>
                                <h4 class="text-primary">Tujuan:</h4>
                                <ul class="mb-4">
                                    <li>Memberikan kemudahan kepada petani dalam memasarkan produknya dengan harga lebih tinggi dibanding menjual di tengkulak.</li>
                                    <li>Memberikan kepada konsumen jaminan harga lebih murah dibandingkan harga pasar atau minimal sama dengan kualitas produk lebih segar dari komoditas unggulan setiap Kecamatan.</li>
                                    <li>Mengurangi risiko kerugian kepada petani karena memutus rantai pemasaran dengan penjualan langsung kepada konsumen.</li>
                                    <li>Kemudahan bertransaksi selain transaksi secara langsung juga bisa dengan pemesanan order barang antara pembeli kepada penjual melalui online sistem pembayaran melalui transfer uang dan COD (Cash On Delivery).</li>
                                    <li>Memberikan jaminan keamanan dan meminimalkan kerugian bertransaksi.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang Kami Selesai -->
@endsection
