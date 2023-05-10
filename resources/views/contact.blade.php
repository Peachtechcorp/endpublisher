@extends('layouts.web')

@section('content')
    <!-- Hero section start -->
    <div class="py-9 bg-gray-light">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <li class="mr-5"><a href="/"
                                    class="text-dark font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a>
                            </li>
                            <li class="text-dark font-medium text-base uppercase mr-5">contact us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <!-- Hero section end -->



    <!-- contact us section start -->


    <div class="bg-white py-24">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4">
                <div class="contact-info-area">
                    <h2 class="font-semibold text-dark text-4xl mb-14 capitalize">Contact Us</h2>
                    <div class="flex flex-wrap items-center mb-8">
                        <span class="text-dark text-4xl mr-5"><i class="icon-location-pin"></i></span>
                        <p class="flex-1">Kijitonyama Olga House Plot #44 Off Shekilango Road
                            P.O Box 4460 Dar es Salaam,Tanzania</p>
                    </div>
                    <div class="flex flex-wrap items-center mb-8">
                        <span class="text-dark text-4xl mr-5"><i class="icon-envelope"></i></span>
                        <a href="mailto:info@example.com" class="flex-1">info@edvisionpublishing.co.tz</a>
                    </div>
                    <div class="flex flex-wrap items-center">
                        <span class="text-dark text-4xl mr-5"><i class="icon-screen-smartphone"></i></span>
                        <a href="tel:01234567890" class="flex-1">+255 859 011 / +255 859 011</a>
                    </div>
                </div>

                <div class="p-10 lg:p-14 shadow mt-14 lg:mt-0">
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('contact.email') }}">
                        @csrf
                        <input
                            class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                            type="text" name="name" placeholder="Name">
                        <input
                            class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                            type="email" placeholder="Email" name="email">
                        <input
                            class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                            type="text" placeholder="subject" name="subject">
                        <textarea
                            class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 text-dark h-32 focus:outline-none text-base resize-none"
                            name="massage"></textarea>
                        <button
                            class="w-full leading-none uppercase text-white text-sm bg-dark px-5 py-5 transition-all hover:bg-orange"
                            type="submit" aria-label="button">Send Message</button>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>

    </div>
    <!-- contact us section end -->


    <!-- google map start -->

    <div>
        <iframe class="w-full h-96 md:h-500px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3743278.227637299!2d-61.159056951307704!3d-2.371597134950372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91e8605342744385%3A0x3d3c6dc1394a7fc7!2sAmazon%20Rainforest!5e0!3m2!1sen!2sbd!4v1638433670177!5m2!1sen!2sbd"
            allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- google map end -->
@endsection
