@extends('layouts.app')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('assets/img/breadcrumbs-bg.jpg') }})">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Products</h2>
                <ol>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Products</li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <section id="product" class=" bg">
            <div class=" container ">
                <div class=" row">
                    <div class=" col-md-6 ">
                        <div class=" d-flex justify-content-end  flex-wrap gap-3">
                            <img width="200px" height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/1.jpg') }}" alt="">
                            <img width="200px" height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/2.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/3.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/4.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/5.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/6.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/7.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/8.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/9.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/10.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/11.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/12.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/13.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/14.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/15.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/16.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/17.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/18.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/19.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/20.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/21.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/22.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/23.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/24.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/25.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/26.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/27.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/28.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/29.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/30.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/31.jpg') }}" alt=""> <img width="200px"
                                height="200px" class=" border p-1 bg-white   rounded shadow"
                                src="{{ asset('assets/img/product/1:1/32.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class=" d-flex justify-content-start  flex-wrap gap-3">
                            <img width="200px" height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/1.jpg') }}" alt="">
                            <img width="200px" height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/2.jpg') }}" alt=""> <img width="200px"
                                height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/3.jpg') }}" alt=""> <img width="200px"
                                height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/4.jpg') }}" alt="">
                            <img width="200px" height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/5.jpg') }}" alt=""> <img width="200px"
                                height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/6.jpg') }}" alt=""> <img width="200px"
                                height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/7.jpg') }}" alt=""> <img width="200px"
                                height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/8.jpg') }}" alt=""> <img width="200px"
                                height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/9.jpg') }}" alt=""> <img width="200px"
                                height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/10.jpg') }}" alt=""> <img width="200px"
                                height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/11.jpg') }}" alt=""> <img width="200px"
                                height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/12.jpg') }}" alt=""> <img width="200px"
                                height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/13.jpg') }}" alt=""> <img width="200px"
                                height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/14.jpg') }}" alt=""> <img width="200px"
                                height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/15.jpg') }}" alt=""> <img width="200px"
                                height="300px" class=" border p-1 bg-white  rounded shadow"
                                src="{{ asset('assets/img/product/4:3/16.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Contact Section -->
    </main>
@endsection
