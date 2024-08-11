<x-app-layout>

    <section class="w-full bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Savor every flavor, cherish every moment.</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Discover new taste, sense of excitement and reserve a place
                    through our website. Enjoy cut prices and vouchers too.</p>

                <form class="max-w-md">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search Restaurant, Bar..." required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>


            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <div id="controls-carousel" class="relative w-full rounded" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/photos/test.png"
                                class="absolute block border rounded w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="/photos/test.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/photos/test.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/photos/test.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/photos/test.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">


        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Top Rated Places by You
                </h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Might be a good starting point if you
                    are new.</p>
            </div>
            <!-- Carousel src: https://codepen.io/karimhossenbux/pen/zYJRbaZ -->
            <div class="relative flex  flex-col items-center justify-center">
                <div
                    class="carousel scrollbar-hide flex w-full snap-x snap-mandatory gap-4 overflow-x-scroll scroll-smooth">
                    <div
                        class="relative aspect-[1/1] w-[85%] shrink-0 snap-start snap-always rounded-xl bg-blue-200 md:w-[calc(33.33%-(32px/3))]">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <!-- Item 1 -->
                            <div class="relative w-full h-full">
                                <img src="/photos/test.png" class="block w-full h-full object-cover rounded-lg"
                                    alt="">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gray-900 bg-opacity-75 text-white p-4 rounded-b-lg">
                                    <h5 class="text-lg font-bold flex items-center">Warongku Sazali
                                        <span class="w-3 h-3 ms-2 bg-green-500 rounded-full"></span>
                                    </h5>
                                    <p class="text-sm font-bold text-gray-900 dark:text-white">Bangsar, Kuala Lumpur
                                    </p>
                                    <p class="text-sm">

                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <p class="ms-2 text-sm font-bold text-white-900 dark:text-white">4.95</p>
                                        <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                        <a href="#"
                                            class="text-sm font-medium text-white-900 underline hover:no-underline dark:text-white">73
                                            reviews</a>
                                    </div>
                                    </p>
                                    <p class="text-xs mt-2">Warongku Sazali, a beloved Bangsar eatery, serves delicious
                                        local cuisine in a cozy, vibrant atmosphere. </p>
                                    <div class="flex items-center justify-between mt-2">
                                        <span class="text-sm font-bold text-gray-900 dark:text-white">from $20</span>
                                        <button type="button"
                                            class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <svg class="w-3 h-3 text-white me-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 16">
                                                <path
                                                    d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                                <path
                                                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                            </svg>
                                            Reserve Now
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div
                        class="relative aspect-[1/1] w-[85%] shrink-0 snap-start snap-always rounded-xl bg-purple-200 md:w-[calc(33.33%-(32px/3))]">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <!-- Item 1 -->
                            <div class="relative w-full h-full">
                                <img src="/photos/test.png" class="block w-full h-full object-cover rounded-lg"
                                    alt="">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gray-900 bg-opacity-75 text-white p-4 rounded-b-lg">
                                    <h5 class="text-lg font-bold flex items-center">Warongku Sazali
                                        <span class="w-3 h-3 ms-2 bg-green-500 rounded-full"></span>
                                    </h5>
                                    <p class="text-sm font-bold text-gray-900 dark:text-white">Bangsar, Kuala Lumpur
                                    </p>
                                    <p class="text-sm">

                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <p class="ms-2 text-sm font-bold text-white-900 dark:text-white">4.95</p>
                                        <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                        <a href="#"
                                            class="text-sm font-medium text-white-900 underline hover:no-underline dark:text-white">73
                                            reviews</a>
                                    </div>
                                    </p>
                                    <p class="text-xs mt-2">Warongku Sazali, a beloved Bangsar eatery, serves delicious
                                        local cuisine in a cozy, vibrant atmosphere. </p>
                                    <div class="flex items-center justify-between mt-2">
                                        <span class="text-sm font-bold text-gray-900 dark:text-white">from $20</span>
                                        <button type="button"
                                            class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <svg class="w-3 h-3 text-white me-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 16">
                                                <path
                                                    d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                                <path
                                                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                            </svg>
                                            Reserve Now
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div
                        class="relative aspect-[1/1] w-[85%] shrink-0 snap-start snap-always rounded-xl bg-green-200 md:w-[calc(33.33%-(32px/3))]">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-8xl font-bold text-white">3</div>
                        </div>
                    </div>

                    <div
                        class="relative aspect-[1/1] w-[85%] shrink-0 snap-start snap-always rounded-xl bg-yellow-200 md:w-[calc(33.33%-(32px/3))]">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-8xl font-bold text-white">4</div>
                        </div>
                    </div>

                    <div
                        class="relative aspect-[1/1] w-[85%] shrink-0 snap-start snap-always rounded-xl bg-red-200 md:w-[calc(33.33%-(32px/3))]">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-8xl font-bold text-white">5</div>
                        </div>
                    </div>

                    <div
                        class="relative aspect-[1/1] w-[85%] shrink-0 snap-start snap-always rounded-xl bg-orange-200 md:w-[calc(33.33%-(32px/3))]">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-8xl font-bold text-white">6</div>
                        </div>
                    </div>

                    <div
                        class="relative aspect-[1/1] w-[85%] shrink-0 snap-start snap-always rounded-xl bg-teal-200 md:w-[calc(33.33%-(32px/3))]">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-8xl font-bold text-white">7</div>
                        </div>
                    </div>
                </div>

                <div class="pagination my-4 flex gap-2">
                    <span class="h-3 w-3 ease-out duration-300 rounded-full bg-black w-8"></span>
                    <span class="h-3 w-3 ease-out duration-300 rounded-full bg-black"></span>
                    <span class="h-3 w-3 ease-out duration-300 rounded-full bg-black"></span>
                    <span class="h-3 w-3 ease-out duration-300 rounded-full bg-black"></span>
                    <span class="h-3 w-3 ease-out duration-300 rounded-full bg-black"></span>
                    <span class="h-3 w-3 ease-out duration-300 rounded-full bg-black md:hidden"></span>
                    <span class="h-3 w-3 ease-out duration-300 rounded-full bg-black md:hidden"></span>
                </div>

                <div>
                    <button class="prev-btn bg-gray-200 p-2">Prev</button>
                    <button class="next-btn bg-gray-200 p-2">Next</button>
                </div>
            </div>


            {{-- <div id="custom-controls-gallery" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Carousel Item Container -->
                    <div class="grid grid-cols-4 gap-3 duration-700 ease-in-out" data-carousel-item>
                        <!-- Item 1 -->
                        <div class="relative w-full h-full">
                            <img src="/photos/test.png" class="block w-full h-full object-cover rounded-lg"
                                alt="">
                            <div
                                class="absolute bottom-0 left-0 w-full bg-gray-900 bg-opacity-75 text-white p-4 rounded-b-lg">
                                <h5 class="text-lg font-bold flex items-center">Warongku Sazali
                                    <span class="w-3 h-3 ms-2 bg-green-500 rounded-full"></span>
                                </h5>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">Bangsar, Kuala Lumpur</p>
                                <p class="text-sm">

                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="ms-2 text-sm font-bold text-white-900 dark:text-white">4.95</p>
                                    <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                    <a href="#"
                                        class="text-sm font-medium text-white-900 underline hover:no-underline dark:text-white">73
                                        reviews</a>
                                </div>
                                </p>
                                <p class="text-xs mt-2">Warongku Sazali, a beloved Bangsar eatery, serves delicious
                                    local cuisine in a cozy, vibrant atmosphere. </p>
                                <div class="flex items-center justify-between mt-2">
                                    <span class="text-sm font-bold text-gray-900 dark:text-white">from $20</span>
                                    <button type="button"
                                        class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="w-3 h-3 text-white me-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 16">
                                            <path
                                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                            <path
                                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                        </svg>
                                        Reserve Now
                                    </button>
                                </div>
                            </div>

                        </div>


                        <!-- Item 2 -->
                        <div class="relative w-full h-full">
                            <img src="/photos/test.png" class="block w-full h-full object-cover rounded-lg"
                                alt="">
                            <div
                                class="absolute bottom-0 left-0 w-full bg-gray-900 bg-opacity-75 text-white p-4 rounded-b-lg">
                                <h5 class="text-lg font-bold flex items-center">Warongku Sazali
                                    <span class="w-3 h-3 ms-2 bg-green-500 rounded-full"></span>
                                </h5>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">Bangsar, Kuala Lumpur</p>
                                <p class="text-sm">

                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="ms-2 text-sm font-bold text-white-900 dark:text-white">4.95</p>
                                    <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                    <a href="#"
                                        class="text-sm font-medium text-white-900 underline hover:no-underline dark:text-white">73
                                        reviews</a>
                                </div>
                                </p>
                                <p class="text-xs mt-2">Warongku Sazali, a beloved Bangsar eatery, serves delicious
                                    local cuisine in a cozy, vibrant atmosphere. </p>
                                <div class="flex items-center justify-between mt-2">
                                    <span class="text-sm font-bold text-gray-900 dark:text-white">from $20</span>
                                    <button type="button"
                                        class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="w-3 h-3 text-white me-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 16">
                                            <path
                                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                            <path
                                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                        </svg>
                                        Reserve Now
                                    </button>
                                </div>
                            </div>

                        </div>

                        <!-- Item 3 -->
                        <div class="relative w-full h-full">
                            <img src="/photos/test.png" class="block w-full h-full object-cover rounded-lg"
                                alt="">
                            <div
                                class="absolute bottom-0 left-0 w-full bg-gray-900 bg-opacity-75 text-white p-4 rounded-b-lg">
                                <h5 class="text-lg font-bold flex items-center">Warongku Sazali
                                    <span class="w-3 h-3 ms-2 bg-green-500 rounded-full"></span>
                                </h5>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">Bangsar, Kuala Lumpur</p>
                                <p class="text-sm">

                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="ms-2 text-sm font-bold text-white-900 dark:text-white">4.95</p>
                                    <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                    <a href="#"
                                        class="text-sm font-medium text-white-900 underline hover:no-underline dark:text-white">73
                                        reviews</a>
                                </div>
                                </p>
                                <p class="text-xs mt-2">Warongku Sazali, a beloved Bangsar eatery, serves delicious
                                    local cuisine in a cozy, vibrant atmosphere. </p>
                                <div class="flex items-center justify-between mt-2">
                                    <span class="text-sm font-bold text-gray-900 dark:text-white">from $20</span>
                                    <button type="button"
                                        class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="w-3 h-3 text-white me-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 16">
                                            <path
                                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                            <path
                                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                        </svg>
                                        Reserve Now
                                    </button>
                                </div>
                            </div>

                        </div>
                        <!-- Item 4 -->
                        <div class="relative w-full h-full">
                            <img src="/photos/test.png" class="block w-full h-full object-cover rounded-lg"
                                alt="">
                            <div
                                class="absolute bottom-0 left-0 w-full bg-gray-900 bg-opacity-75 text-white p-4 rounded-b-lg">
                                <h5 class="text-lg font-bold flex items-center">Warongku Sazali
                                    <span class="w-3 h-3 ms-2 bg-green-500 rounded-full"></span>
                                </h5>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">Bangsar, Kuala Lumpur</p>
                                <p class="text-sm">

                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="ms-2 text-sm font-bold text-white-900 dark:text-white">4.95</p>
                                    <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                    <a href="#"
                                        class="text-sm font-medium text-white-900 underline hover:no-underline dark:text-white">73
                                        reviews</a>
                                </div>
                                </p>
                                <p class="text-xs mt-2">Warongku Sazali, a beloved Bangsar eatery, serves delicious
                                    local cuisine in a cozy, vibrant atmosphere. </p>
                                <div class="flex items-center justify-between mt-2">
                                    <span class="text-sm font-bold text-gray-900 dark:text-white">from $20</span>
                                    <button type="button"
                                        class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="w-3 h-3 text-white me-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 16">
                                            <path
                                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                            <path
                                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                        </svg>
                                        Reserve Now
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Additional Carousel Item Container if needed -->
                    <div class="grid grid-cols-4 gap-4 hidden duration-700 ease-in-out" data-carousel-item>
                        <!-- Item 5 -->
                        <div class="relative w-full h-full">
                            <img src="/photos/test.png" class="block w-full h-full object-cover rounded-lg"
                                alt="">
                            <div
                                class="absolute bottom-0 left-0 w-full bg-gray-900 bg-opacity-75 text-white p-4 rounded-b-lg">
                                <h5 class="text-lg font-bold flex items-center">Warongku Sazali
                                    <span class="w-3 h-3 ms-2 bg-green-500 rounded-full"></span>
                                </h5>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">Bangsar, Kuala Lumpur</p>
                                <p class="text-sm">

                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="ms-2 text-sm font-bold text-white-900 dark:text-white">4.95</p>
                                    <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                    <a href="#"
                                        class="text-sm font-medium text-white-900 underline hover:no-underline dark:text-white">73
                                        reviews</a>
                                </div>
                                </p>
                                <p class="text-xs mt-2">Warongku Sazali, a beloved Bangsar eatery, serves delicious
                                    local cuisine in a cozy, vibrant atmosphere. </p>
                                <div class="flex items-center justify-between mt-2">
                                    <span class="text-sm font-bold text-gray-900 dark:text-white">from $20</span>
                                    <button type="button"
                                        class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="w-3 h-3 text-white me-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 16">
                                            <path
                                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                            <path
                                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                        </svg>
                                        Reserve Now
                                    </button>
                                </div>
                            </div>

                        </div>
                        <!-- Item 5 -->
                        <div class="relative w-full h-full">
                            <img src="/photos/test.png" class="block w-full h-full object-cover rounded-lg"
                                alt="">
                            <div
                                class="absolute bottom-0 left-0 w-full bg-gray-900 bg-opacity-75 text-white p-4 rounded-b-lg">
                                <h5 class="text-lg font-bold flex items-center">Warongku Sazali
                                    <span class="w-3 h-3 ms-2 bg-green-500 rounded-full"></span>
                                </h5>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">Bangsar, Kuala Lumpur</p>
                                <p class="text-sm">

                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="ms-2 text-sm font-bold text-white-900 dark:text-white">4.95</p>
                                    <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                    <a href="#"
                                        class="text-sm font-medium text-white-900 underline hover:no-underline dark:text-white">73
                                        reviews</a>
                                </div>
                                </p>
                                <p class="text-xs mt-2">Warongku Sazali, a beloved Bangsar eatery, serves delicious
                                    local cuisine in a cozy, vibrant atmosphere. </p>
                                <div class="flex items-center justify-between mt-2">
                                    <span class="text-sm font-bold text-gray-900 dark:text-white">from $20</span>
                                    <button type="button"
                                        class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="w-3 h-3 text-white me-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 16">
                                            <path
                                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                            <path
                                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                        </svg>
                                        Reserve Now
                                    </button>
                                </div>
                            </div>

                        </div>
                        <!-- Item 5 -->
                        <div class="relative w-full h-full">
                            <img src="/photos/test.png" class="block w-full h-full object-cover rounded-lg"
                                alt="">
                            <div
                                class="absolute bottom-0 left-0 w-full bg-gray-900 bg-opacity-75 text-white p-4 rounded-b-lg">
                                <h5 class="text-lg font-bold flex items-center">Warongku Sazali
                                    <span class="w-3 h-3 ms-2 bg-green-500 rounded-full"></span>
                                </h5>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">Bangsar, Kuala Lumpur</p>
                                <p class="text-sm">

                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="ms-2 text-sm font-bold text-white-900 dark:text-white">4.95</p>
                                    <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                    <a href="#"
                                        class="text-sm font-medium text-white-900 underline hover:no-underline dark:text-white">73
                                        reviews</a>
                                </div>
                                </p>
                                <p class="text-xs mt-2">Warongku Sazali, a beloved Bangsar eatery, serves delicious
                                    local cuisine in a cozy, vibrant atmosphere. </p>
                                <div class="flex items-center justify-between mt-2">
                                    <span class="text-sm font-bold text-gray-900 dark:text-white">from $20</span>
                                    <button type="button"
                                        class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="w-3 h-3 text-white me-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 16">
                                            <path
                                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                            <path
                                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                        </svg>
                                        Reserve Now
                                    </button>
                                </div>
                            </div>

                        </div>
                        <!-- Item 5 -->
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Want to see more of these?</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Discover our vast
                                    selection of restaurants and other reservable venues, perfect for any occasion.
                                </p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Click here for more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Add more items as needed -->
                    </div>
                </div>
                <div class="flex justify-center items-center pt-4">
                    <button type="button"
                        class="flex justify-center items-center me-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                            <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="flex justify-center items-center h-full cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                            <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div> --}}


            {{-- <div class="grid gap-8 lg:grid-cols-2"> --}}
            {{-- <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                </path>
                            </svg>
                            Tutorial
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                            href="#">How to quickly deploy a static website</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to
                        bootstrap lots of websites and are becoming the basis for a variety of tools that even influence
                        both web designers and developers influence both web designers and developers.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Jese Leos avatar" />
                            <span class="font-medium dark:text-white">
                                Jese Leos
                            </span>
                        </div>
                        <a href="#"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article> --}}
            {{-- <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                    clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg>
                            Article
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                            href="#">Our first project with React</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to
                        bootstrap lots of websites and are becoming the basis for a variety of tools that even influence
                        both web designers and developers influence both web designers and developers.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                alt="Bonnie Green avatar" />
                            <span class="font-medium dark:text-white">
                                Bonnie Green
                            </span>
                        </div>
                        <a href="#"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article> --}}
            {{-- </div> --}}
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-4 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png"
                    alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png"
                    alt="office content 2">
            </div>
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">We didn't
                    reinvent
                    the wheel</h2>
                <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small
                    enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.
                    Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you
                    need.</p>
                <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be
                    simple and quick.</p>
            </div>

        </div>
    </section>


</x-app-layout>


<style>
    /* For Webkit-based browsers (Chrome, Safari and Opera) */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    /* For IE, Edge and Firefox */
    .scrollbar-hide {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>

<script>
    const container = document.querySelector('.carousel');
    const slides = document.querySelectorAll('.carousel > div');
    const dots = document.querySelectorAll('.pagination > span');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    const breakpoint = 768;
    const slidesPerPage = 3;
    const totalSlidesCount = slides.length;
    // Mobile stuff
    let touchStartX = 0;
    let touchEndX = 0;

    // Previous
    prevBtn.addEventListener('click', () => {
        container.scrollBy({
            left: -slides[0].offsetWidth,
            behavior: 'smooth'
        });
        const centerSlideIndex = getCenterSlideIndex() - 1;
        updateActiveDot(centerSlideIndex);
    });

    // Next
    nextBtn.addEventListener('click', () => {
        container.scrollBy({
            left: slides[0].offsetWidth,
            behavior: 'smooth'
        });
        const centerSlideIndex = getCenterSlideIndex() + 1;
        updateActiveDot(centerSlideIndex);
    });

    // Mobile
    container.addEventListener('touchstart', (event) => {
        touchStartX = event.touches[0].clientX;
    });

    container.addEventListener('touchmove', (event) => {
        touchEndX = event.touches[0].clientX;
    });

    container.addEventListener('touchend', () => {
        let centerSlideIndex;
        const swipeThreshold = 50;

        if (touchStartX - touchEndX > swipeThreshold) {
            centerSlideIndex = getCenterSlideIndex() + 1;
        } else {
            centerSlideIndex = getCenterSlideIndex() - 1;
        }

        updateActiveDot(centerSlideIndex);
        touchStartX = 0;
        touchEndX = 0;

    });

    // Misc functions
    function updateActiveDot(centerSlideIndex) {
        const isMobileView = container.offsetWidth <= breakpoint;
        const dotsCount = isMobileView ? dots.length : dots.length - 2;
        const slidesCount = isMobileView ? 1 : dotsCount - slidesPerPage;
        const pageIndex = centerSlideIndex - slidesCount;
        if (pageIndex >= 0 && pageIndex < dotsCount) {
            dots.forEach((dot) => dot.classList.remove('w-8'));
            dots[pageIndex].classList.add('w-8');
        }
    }

    function getCenterSlideIndex() {
        const slideWidth = slides[0].offsetWidth;
        const containerWidth = container.offsetWidth;
        const centerSlideIndex = Math.round((container.scrollLeft + Math.floor(containerWidth / 2)) / slideWidth);
        return centerSlideIndex;
    }
</script>
