@extends('layouts.app')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('assets/img/breadcrumbs-bg.jpg') }})">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Contact</h2>
                <ol>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- Google Map -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238.75043830772537!2d96.15643540734023!3d16.7763267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec811fa35f37%3A0x2595b3979761304e!2sNew%20Burma!5e0!3m2!1sen!2smm!4v1701487005219!5m2!1sen!2smm"
                        frameborder="0" style="border: 0; width: 100%; height: 504px" allowfullscreen></iframe>
                </div>
            </div>
            <!-- End Google Maps -->
            <!-- Google Map End -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-map"></i>
                                <h3>Our Address</h3>
                                <p class=" text-center"> 29 Street Middle Block, No 150--152 <br>
                                    Pabedan Township<br>
                                    Yangon, Myanmar
                                    <br>
                                </p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>newburmaelectric@gmail.com

                                </p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+95 5 555 0786</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                    </div>

                    <div class="row gy-4 mt-1">
                        <div class="col-lg-6">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row gy-4">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required />
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">
                                        Your message has been sent. Thank you!
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                        <!-- End Contact Form -->
                    </div>
                </div>
            </section>
            <!-- End Contact Section -->
    </main>
@endsection
