@extends('layouts.web')

@section('content')

    <!-- Hero section start -->
    <div class="py-9 bg-gray-light">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <li class="mr-5"><a href="index.html" class="text-dark font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a></li>
                            <li class="text-dark font-medium text-base uppercase mr-5">about us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <!-- Hero section end -->
    <!-- Feartured section start -->

    <section class="pt-24 pb-24">
        <div class="container">
            <div class="flex items-center -mx-4 flex-wrap">
                <div class="w-full md:w-1/2 px-4 order-last md:order-first">
                    <img class="mt-8 md:mt-0" src="{{ asset('images/drone/end.jpg') }}" alt="product image" />
                </div>

                <div class="w-full md:w-1/2 px-4">
                    <h2 class="font-playfair font-bold text-dark text-[30px] sm:text-[36px] xl:text-[48px] leading-tight mb-5">E & D Publishing <br>
                    Limited</h2>
                    <hr class="w-16 h-1 bg-orange mb-7 border-0">
                    <p class="font-normal text-dark text-base xl:text-md">
                    This division of our company is geared towards publishing various
                    products that are suitable for various needs namely educational books
                    and published materials as per customer requirements. We have staff and
                    all required technical ability to deliver on time any type of assignment.
                    This includes editing, designing and proof reading.
                    </p>
         </div>
            </div>
        </div>
    </section>


    <!-- Feartured section end -->


@endsection