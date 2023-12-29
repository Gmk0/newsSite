<div class="flex-col p-2 pt-4 bg-white rounded-md">
    <div class="hidden py-4 bg-gray-50">
        <div class="px-3 mx-auto xl:container sm:px-4 xl:px-2">
            <div class="table mx-auto text-sm text-center">
                <a class="uppercase" href="#">Advertisement</a>
                <a href="#">
                    <img src="src/img/ads/ads_728.jpg" alt="advertisement area">
                </a>
            </div>
        </div>
    </div>

    <div>
        <div class="py-6 bg-white">
            <div class="px-3 mx-auto xl:container sm:px-4 xl:px-2">
                <!-- big grid 1 -->
                <div class="flex flex-row flex-wrap">
                    <!--Start left cover-->
                    @empty(!$landing)
                    <div class="flex-shrink w-full max-w-full pb-1 lg:w-1/2 lg:pb-0 lg:pr-1">
                        <div class="relative overflow-hidden hover-img max-h-98">
                            <a href="#">
                                <img class="w-full h-auto max-w-full mx-auto" src="/images/3.jpg"
                                    alt="Image description">
                            </a>
                            <div class="absolute bottom-0 w-full px-5 pt-8 pb-5 bg-gradient-cover">
                                <a href="{{route('oneNews',[$landing->category->name,$landing->slug])}}">
                                    <h2 class="mb-3 text-3xl font-bold text-white capitalize">{{$landing->title}}</h2>
                                </a>
                                <p class="hidden text-gray-100 sm:inline-block">{{$landing->description}}..</p>
                                <div class="pt-2">
                                    <div class="text-gray-100">
                                        <div class="inline-block h-3 mr-2 border-l-2 border-red-600"></div>{{$landing->category->name}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endempty

                    <!--Start box news-->
                    <div class="flex-shrink w-full max-w-full lg:w-1/2">
                        <div class="flex flex-row flex-wrap box-one">
                            @foreach ($fourNews as $news)
                            <article class="flex-shrink w-full max-w-full sm:w-1/2">
                                <div class="relative overflow-hidden hover-img max-h-48">
                                    <a href="#">
                                        <img class="w-full h-auto max-w-full mx-auto" src="/images/2.jpg" alt="Image description">
                                    </a>
                                    <div class="absolute bottom-0 w-full px-4 pb-4 pt-7 bg-gradient-cover">
                                        <a href="#">
                                            <h2 class="mb-1 text-lg font-bold leading-tight text-white capitalize">{{$news->title}}</h2>
                                        </a>
                                        <div class="pt-1">
                                            <div class="text-gray-100">
                                                <div class="inline-block h-3 mr-2 border-l-2 border-red-600"> </div><span>{{$news->category->name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="mb-6 bg-white">
        <div class="px-3 mx-auto xl:container sm:px-4 xl:px-2">
            <div class="flex flex-row flex-wrap">
                <!-- Left -->
                <div class="flex-shrink w-full max-w-full overflow-hidden lg:w-2/3">
                    <div class="w-full py-3">

                        <div class="flex justify-between px-2">
                            <div class="border-l-2 border-red-600 px-2s">
                                <span class="px-2 text-xl font-bold">{{$categoryPolitique}}</span>
                            </div>
                            <div class="border-b border-red-600 px-2s">
                                <span class="px-2 text-lg font-bold">voir plus</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 mt-4 lg:grid-cols-3">

                        @foreach ($lastPolitique as $post)


                        <livewire:web.tool.card-news :$post :key="$post->id" />



                        @endforeach

                    </div>
                </div>
                <!-- right -->
                <div class="flex-shrink order-first w-full max-w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 lg:order-last">
                    <div class="w-full h-full bg-gray-50">
                        <div class="sticky py-6 text-sm">
                            <div class="w-full text-center">
                                <a class="uppercase" href="#">Advertisement</a>
                                <a href="#">
                                    <img class="mx-auto" src="/images/ads.jpg" alt="advertisement area">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="p-4 py-12 mb-4 bg-black bg-opacity-70">
        <div class="flex justify-between px-2 mb-6">
            <div class="border-l-2 border-red-600 px-2s">
                <span class="px-2 text-lg font-bold text-white">Societe</span>
            </div>
            <div class="border-b border-red-600 px-2s">
                <span class="px-2 text-lg font-bold text-white">voir plus</span>
            </div>
        </div>
      <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { slidesPerView: '3', autoplay: true, breakpoints: { 0: { slidesPerView: 2 }, 520: { slidesPerView:  2}, 950: { slidesPerView: 3 }, 1100: { slidesPerView: 3 } }, spaceBetween: 30, navigation: { nextEl: '.next-btn', prevEl: '.prev-btn' } }))"
            class="swiper">
            <div class="swiper-wrapper">
                @foreach ($societes as $societe)
                <div class="swiper-slide">
                    <div class="max-w-sm bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/images/1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                    technology acquisitions 2021</h5>
                            </a>

                            <div class="flex px-4 my-4 border-l-2 border-red-500">
                                <span class="text-base text-dark">{{$societe->category->name}}</span>
                            </div>

                            <a href="#"
                                class="items-center hidden px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full prev-btn bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer next-btn end-0 group focus:outline-none"
                >
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>


        </div>

    </div>

    <div class="min-h-screen px-4 py-12 bg-white">
        <div class="flex justify-between px-2">
            <div class="border-l-2 border-red-600 px-2s">
                <span class="px-2 text-lg font-bold">{{$forSlider?->name}}</span>
            </div>
            <div class="border-b border-red-600 px-2s">
                <span class="px-2 text-lg font-bold">voir plus</span>
            </div>
        </div>
        <div>

            <div class="grid grid-cols-1 gap-4 mt-8 lg:grid-cols-4">

                @foreach ($lastPostFor3section as $post)

                <livewire:web.tool.card-news :$post :key="$post->id" />


                @endforeach


            </div>


        </div>

    </div>

    <div>
        <!-- block news -->
        <div class="py-6 bg-gray-50">
            <div class="px-3 mx-auto xl:container sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">
                    <!-- Left -->
                    <div class="flex-shrink w-full max-w-full overflow-hidden lg:w-2/3">
                        <div class="w-full py-3">
                            <h2 class="text-2xl font-bold text-gray-800">
                                <span class="inline-block h-5 mr-2 border-red-600 border-l-3"></span>Asian
                            </h2>
                        </div>
                        <div class="flex flex-row flex-wrap -mx-3">
                            <div class="flex-shrink w-full max-w-full px-3 pb-5">
                                <div class="relative overflow-hidden hover-img max-h-98">
                                    <!--thumbnail-->
                                    <a href="#">
                                        <img class="w-full h-auto max-w-full mx-auto bg-black opacity-80" src="/images/1.jpg"
                                            alt="Image description">
                                    </a>
                                    <div class="absolute bottom-0 w-full px-5 pt-8 pb-5 bg-gradient-cover">
                                        <!--title-->
                                        <a href="#">
                                            <h2 class="mb-3 text-3xl font-bold text-white capitalize">Amazon Shoppers Are
                                                Ditching Designer Belts for This Best-Selling</h2>
                                        </a>
                                        <p class="hidden text-gray-100 sm:inline-block">This is a wider card with supporting
                                            text below as a natural lead-in to additional content. This very helpfull for
                                            generate default content..</p>
                                        <!-- author and date -->
                                        <div class="pt-2">
                                            <div class="text-gray-100">
                                                <div class="inline-block h-3 mr-2 border-l-2 border-red-600"></div>Europe
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-4 mt-8 lg:grid-cols-3">

                                @foreach ($politiques as $post)

                                <livewire:web.tool.card-news :$post :key="$post->id" />

                                @endforeach


                            </div>


                        </div>
                    </div>
                    <!-- right -->
                   @livewire('web.tool.most-popular')
                </div>
            </div>
        </div>


    </div>


    <div>


        <div class="relative py-16 overflow-hidden bg-gray-900 isolate sm:py-24 lg:py-32">
            <div class="px-6 mx-auto max-w-7xl lg:px-8">
                <div class="grid max-w-2xl grid-cols-1 mx-auto gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                    <div class="max-w-xl lg:max-w-lg">
                      <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Abonnez-vous à notre newsletter.</h2>
                    <p class="mt-4 text-lg leading-8 text-gray-300">Inscrivez-vous dès maintenant pour recevoir les dernières mises à jour
                        et un contenu soigneusement sélectionné directement dans votre boîte de réception.!</p>
                        <div class="flex max-w-md mt-6 gap-x-4">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input id="email-address" name="email" type="email" autocomplete="email" required
                                class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
                                placeholder="Enter your email">
                            <button type="submit"
                                class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Subscribe</button>
                        </div>
                    </div>
                    <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                        <div class="flex flex-col items-start">
                            <div class="p-2 rounded-md bg-white/5 ring-1 ring-white/10">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                            </div>
                           <dt class="mt-4 font-semibold text-white">Articles Hebdomadaires</dt>
                        <dd class="mt-2 leading-7 text-gray-400">Recevez chaque semaine des articles captivants. Ne manquez pas nos analyses
                            approfondies, nos réflexions stimulantes et les dernières tendances du monde</dd>
                        </div>
                        <div class="flex flex-col items-start">
                            <div class="p-2 rounded-md bg-white/5 ring-1 ring-white/10">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                                </svg>
                            </div>
                            <dt class="mt-4 font-semibold text-white">Zéro Spam</dt>
                            <dd class="mt-2 leading-7 text-gray-400">Nous vous garantissons une expérience sans spam. Recevez uniquement les
                                informations pertinentes et passionnantes, sans encombrement inutile.</dd>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="absolute top-0 -translate-x-1/2 left-1/2 -z-10 blur-3xl xl:-top-6" aria-hidden="true">
                <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
    </div>


</div>
