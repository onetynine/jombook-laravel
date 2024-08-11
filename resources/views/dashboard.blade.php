<x-app-layout>
    <div class="min-h-screen w-full bg-gray-200 dark:bg-gray-800">
        {{-- <section>
            <div class="mt-8 w-full pt-8">
                <div id="animation-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="duration-200 ease-linear" data-carousel-item>
                            <a target="_blank" href="google.com">
                                <img src="{{ asset('photos/test.png') }}" class="block w-full h-full object-cover"
                                    alt="...">
                            </a>
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item>
                            <img src="{{ asset('photos/test.png') }}" class="block w-full h-full object-cover"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                            <img src="{{ asset('photos/test.png') }}" class="block w-full h-full object-cover"
                                alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item>
                            <img src="{{ asset('photos/test.png') }}" class="block w-full h-full object-cover"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item>
                            <img src="{{ asset('photos/test.png') }}" class="block w-full h-full object-cover"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-yellow-500  bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-white/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-yellow-500 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-white/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>


                </div>
            </div>

        </section> --}}
        <section class="bg-white dark:bg-yellow-500 mt-8">
            <div
                class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img class="w-full dark:hidden"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup.svg"
                    alt="dashboard image">
                <img class="w-full hidden dark:block"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg"
                    alt="dashboard image">
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-black-900 dark:text-black">
                        aFind what's the best for you. You deserve it!
                    </h2>
                    <p class="mb-6 font-bold text-black-500 md:text-lg dark:text-black-400">Jombook helps you connect
                        with the best restaurants and bars near you.
                        Simply book online and get cashback plus vouchers as well. Save money and time. Zero hassle.

                    </p>
                    <a href="#"
                        class="inline-flex items-center text-black bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                        See Recommendation
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex items-center text-black bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                        Reserve Now!
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>

            </div>
        </section>


        <!-- Component: One column even layout -->
        {{-- <section>
            <div class="bg-gray-0 dark:bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl py-8 sm:py-12 lg:max-w-none lg:py-32">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-yellow-500 text-center">Featured Eateries
                        </h2>
                        <div class="flex items-center justify-center py-4 md:py-8 flex-wrap ">

                            <button type="button"
                                class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">All
                                categories</button>
                            <button type="button"
                                class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Fine
                                Dining
                                Halal</button>
                            <button type="button"
                                class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Romantic
                                Dining</button>
                            <button type="button"
                                class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Exotic</button>
                            <button type="button"
                                class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Muslim
                                Friendly</button>
                        </div>
                        <div class="grid grid-cols-4 md:grid-cols-4 gap-4 items-center justify-center ">
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg"
                                    alt="">
                            </div>
                        </div>

                    </div>
        </section> --}}
        <!-- End One column even layout -->
        <section class="bg-white dark:bg-gray-900">
            <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-3 dark:text-white">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">568+</dt>
                        <dd class="font-light text-gray-500 dark:text-gray-400">bookings made</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">RM1,684+</dt>
                        <dd class="font-light text-gray-500 dark:text-gray-400">cash saved</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">RM8,271+</dt>
                        <dd class="font-light text-gray-500 dark:text-gray-400">cashback received</dd>
                    </div>
                </dl>
            </div>
        </section>
        <!-- End Four columns even layout -->
        <!-- End One column even layout -->


        <!-- Section 3: Promo Card -->


    </div>
    </div>

</x-app-layout>
