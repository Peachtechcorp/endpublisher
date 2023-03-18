<div id="maintab" class="pb-24">
    <div class="container">
        <div class="grid grid-rows-1 grid-flow-col gap-x-4">
            <div class="text-center mb-14">
                {{-- <h2 class="font-playfair font-bold text-3xl text-primary md:text-4xl lg:text-xl">Featured</h2> --}}
            </div>
        </div>
        <div class="grid grid-cols-1 gap-x-5">
            <div class="border border-solid border-gray-300 p-8">
                <ul class="custom-tab-nav flex flex-wrap items-center mb-10 -mx-5 -my-1">
                    <li class="mx-5 my-1"><a class="pb-3 leading-none capitalize transition-all hover:text-orange text-base sm:text-md before:absolute before:left-auto before:right-0 before:bottom-0 before:w-0 before:h-2px before:empty before:bg-orange relative before:transition-all ease-out" href="#description">Featured</a></li>
                    <li class="mx-5 my-1"><a class="pb-3 leading-none capitalize transition-all hover:text-orange text-base sm:text-md before:absolute before:left-auto before:right-0 before:bottom-0 before:w-0 before:h-2px before:empty before:bg-orange relative before:transition-all ease-out" href="#product-details">New Arrival</a></li>
                    <li class="mx-5 my-1"><a class="pb-3 leading-none capitalize transition-all hover:text-orange text-base sm:text-md before:absolute before:left-auto before:right-0 before:bottom-0 before:w-0 before:h-2px before:empty before:bg-orange relative before:transition-all ease-out" href="#review">Most viewed</a></li>
                </ul>
                <div id="description" class="custom-tab-content">
                    <x-web.partials.new-arrival />
                </div>

                <div id="product-details" class="custom-tab-content">
                    <x-web.partials.featured />
                </div>
                <div id="review" class="custom-tab-content">
                    <x-web.partials.popular />
                </div>
            </div>
        </div>
    </div>
</div>