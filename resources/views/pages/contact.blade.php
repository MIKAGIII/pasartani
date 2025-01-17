@extends('layouts.home')

@section('title')
    Contact | Pasar Tani
@endsection

@section('content')
    <!-- Single Page Header start -->
    <div class="py-5 container-fluid page-header">
        <h1 class="text-center text-white display-6">Contact</h1>
        <ol class="mb-0 breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="text-white breadcrumb-item active">Contact</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Contact Start -->
    <div class="py-5 container-fluid contact">
        <div class="container py-5">
            <div class="p-5 rounded bg-light">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="mx-auto text-center" style="max-width: 700px;">
                            <h1 class="text-primary">Pasar Tani</h1>
                            <p class="mb-4">Pasar Tani merupakan inisiasi dari Kepala Dinas
                                 Pertanian Kabupaten Lebak berupa pasar yang khusus menjual 
                                 barang-barang hasil Pertanian unggulan petani Lebak seperti s
                                 ayur-sayuran, ayam, daging segar dan produk yang lain. Pasar tani merupakan 
                                 jualan langsung, di mana petani atau penternak berpeluang menjual barang dagangan mereka secara 
                                 langsung kepada konsumen tanpa melalui pemborong atau tengkulak. <a href="{{ route('about') }}">Baca Selengkapnya</a></p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="rounded h-100">
                            <iframe class="rounded w-100" style="height: 400px;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31722.51580011688!2d-73.97125104702017!3d40.69329759244816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="" class="">
                            <input type="text" class="py-3 mb-4 border-0 w-100 form-control" placeholder="Your Name">
                            <input type="email" class="py-3 mb-4 border-0 w-100 form-control"
                                placeholder="Enter Your Email">
                            <textarea class="mb-4 border-0 w-100 form-control" rows="5" cols="10" placeholder="Your Message"></textarea>
                            <button class="py-3 bg-white w-100 btn form-control border-secondary text-primary"
                                type="submit">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <div class="p-4 mb-4 bg-white rounded d-flex">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Lokasi</h4>
                                <p class="mb-2">Rangkasbitung, Kabupaten Lebak, Banten 42315</p>
                            </div>
                        </div>
                        <div class="p-4 mb-4 bg-white rounded d-flex">
                            <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Mail Us</h4>
                                <p class="mb-2">distant@gmail.com</p>
                            </div>
                        </div>
                        <div class="p-4 bg-white rounded d-flex">
                            <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Telephone</h4>
                                <p class="mb-2">082132343968</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
