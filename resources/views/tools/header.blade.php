{{--<nav class="relative text-gray-900 bg-white border-b-2 border-gray-300">
    <div class="container flex justify-between mx-auto">
        <div class="relative block p-4 text-xl font-bold text-black lg:p-6">News</div>
        <ul class="flex">

            <!--Regular Link-->
            <li class="hover:border-black hover:border-b-2 hover:text-black">
                <a href="{{url('/')}}" class="relative block px-2 py-6 text-sm font-bold lg:p-6 lg:text-base">Acueil</a>
            </li>

            <!--Toggleable Link-->
            <li class="hidden toggleable hover:bg-blue-800 hover:text-white">
                <input type="checkbox" value="selected" id="toggle-one" class="toggle-input">
                <label for="toggle-one"
                    class="block px-4 py-6 text-sm font-bold cursor-pointer lg:p-6 lg:text-base">Click</label>
                <div role="toggle" class="p-6 mb-16 bg-blue-800 shadow-xl mega-menu sm:mb-0">
                    <div class="container flex flex-wrap justify-between w-full mx-2 mx-auto">
                        <ul
                            class="w-full px-4 pt-6 pb-6 border-b border-gray-600 sm:w-1/2 lg:w-1/4 sm:border-r lg:border-b-0 lg:pt-3">
                            <h3 class="mb-2 text-xl font-bold text-white text-bold">Heading 1</h3>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                        </ul>
                        <ul
                            class="w-full px-4 pt-6 pb-6 border-b border-gray-600 sm:w-1/2 lg:w-1/4 sm:border-r-0 lg:border-r lg:border-b-0 lg:pt-3">
                            <h3 class="mb-2 text-xl font-bold text-white text-bold">Heading 2</h3>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                        </ul>
                        <ul
                            class="w-full px-4 pt-6 pb-6 border-b border-gray-600 sm:w-1/2 lg:w-1/4 sm:border-b-0 sm:border-r md:border-b-0 lg:pt-3">
                            <h3 class="text-xl font-bold text-white text-bold">Heading 3</h3>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                            <li>
                                <a href="#" class="block p-3 text-gray-300 hover:bg-blue-600 hover:text-white">Category
                                    One Sublink</a>
                            </li>
                        </ul>
                        <ul class="w-full px-4 pt-6 pb-6 border-gray-600 sm:w-1/2 lg:w-1/4 lg:pt-3">
                            <h3 class="mb-2 text-xl font-bold text-white text-bold">Heading 4</h3>
                            <li class="pt-3">
                                <img src="https://placehold.it/205x172">
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <!-- ## Toggleable Link Template ##

		  <li class="toggleable"><input type="checkbox" value="selected" id="toggle-xxx" class="toggle-input"><label for="toggle-xxx" class="cursor-pointer">Click</label><div role="toggle" class="mega-menu">
			Add your mega menu content
			</div></li>

		  -->

            <!--Hoverable Link-->
            <li class="z-50 hoverable hover:text-black">
                <a href="#"
                    class="relative block px-4 py-6 text-sm font-bold lg:p-6 lg:text-base hover:border-black hover:border-b-2 hover:text-black">Categories</a>
                <div class="p-6 mb-16 bg-black shadow-xl mega-menu sm:mb-0">
                    <div class="container flex flex-wrap justify-between w-full mx-2 mx-auto">
                       <!-- Section d'en-tête - Branding -->
                    <div class="w-full mb-8 text-white">
                        <h2 class="text-3xl font-bold">Explorez le Savoir, Comprenez le Monde</h2>
                        <p class="mt-2 text-lg">Des informations approfondies pour éclairer votre vision du monde.</p>
                    </div>
                        <ul
                            class="w-full px-4 pt-6 pb-6 border-b border-gray-600 sm:w-1/2 lg:w-1/4 sm:border-r lg:border-b-0 lg:pt-3">
                            <div class="flex items-center">
                                <svg class="h-8 mb-3 mr-3 text-white fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z" />
                                </svg>
                                <h3 class="mb-2 text-xl font-bold text-white text-bold">Politique </h3>
                            </div>
                            <p class="text-sm text-gray-100">
                                Restez informé des derniers développements politiques à travers le monde.

                                </p>
                            <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                </svg>
                                <a href="#" class="text-white border-b-2 border-blue-300 bold hover:text-blue-300">En savoir plus...</a>
                            </div>
                        </ul>
                        <ul
                            class="w-full px-4 pt-6 pb-6 border-b border-gray-600 sm:w-1/2 lg:w-1/4 sm:border-r-0 lg:border-r lg:border-b-0 lg:pt-3">
                            <div class="flex items-center">
                                <svg class="h-8 mb-3 mr-3 text-white fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z" />
                                </svg>
                                <h3 class="mb-2 text-xl font-bold text-white text-bold">Société</h3>
                            </div>
                            <p class="text-sm text-gray-100">Découvrez les dernières tendances et développements dans le monde de la société..</p>
                            <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                </svg>
                                <a href="#" class="text-white border-b-2 border-blue-300 bold hover:text-blue-300">En savoir plus ...</a>
                            </div>
                        </ul>
                        <ul
                            class="w-full px-4 pt-6 pb-6 border-b border-gray-600 sm:w-1/2 lg:w-1/4 sm:border-b-0 sm:border-r md:border-b-0 lg:pt-3">
                            <div class="flex items-center">
                                <svg class="h-8 mb-3 mr-3 text-white fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z" />
                                </svg>
                                <h3 class="mb-2 text-xl font-bold text-white text-bold">Heading 3</h3>
                            </div>
                            <p class="text-sm text-gray-100">This proposal is a win-win situation which will cause a
                                stellar paradigm shift, let's touch base off-line before we fire the new ux experience.
                            </p>
                            <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                </svg>
                                <a href="#" class="text-white border-b-2 border-blue-300 bold hover:text-blue-300">Find
                                    out more...</a>
                            </div>
                        </ul>
                        <ul class="w-full px-4 pt-6 pb-6 border-gray-600 sm:w-1/2 lg:w-1/4 lg:pt-3">
                            <div class="flex items-center">
                                <svg class="h-8 mb-3 mr-3 text-white fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z" />
                                </svg>
                                <h3 class="mb-2 text-xl font-bold text-white text-bold">Heading 4</h3>
                            </div>
                            <p class="text-sm text-gray-100">This is a no-brainer to wash your face, or we need to
                                future-proof this high performance keywords granularity.</p>
                            <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                </svg>
                                <a href="#" class="text-white border-b-2 border-blue-300 bold hover:text-blue-300">Find
                                    out more...</a>
                            </div>
                        </ul>
                    </div>
                </div>
            </li>


        </ul>
    </div>
</nav>--}}


<header class="fixed top-0 left-0 right-0 z-50">
    <nav class="bg-black">
        <div class="px-3 mx-auto xl:container sm:px-4 xl:px-2">
            <div class="flex justify-between">
                <div class="flex items-center text-2xl font-bold text-white capitalize mx-w-10">Tailnews</div>

                <div class="flex flex-row">
                    <!-- nav menu -->
                    <ul class="items-center hidden text-sm font-bold text-gray-400 navbar lg:flex lg:flex-row">
                        <li class="relative border-l border-gray-800 hover:bg-gray-900">
                            <a class="block px-6 py-3 border-b-2 border-transparent" href="index.html">Home</a>
                        </li>
                        <li class="relative border-l border-gray-800 dropdown hover:bg-gray-900">
                            <a class="block px-6 py-3 border-b-2 border-transparent" href="#">Pages</a>

                            <ul class="absolute left-0 right-auto z-50 font-normal text-left text-gray-700 bg-white border border-b-0 border-gray-100 dropdown-menu top-full"
                                style="min-width: 12rem;">
                                <li class="relative subdropdown hover:bg-gray-50">
                                    <a class="block px-6 py-2 border-b border-gray-100" href="#">
                                        Homepage
                                    </a>

                                    <!--dropdown submenu-->
                                    <ul class="absolute right-auto z-50 ml-0 mr-0 -mt-10 text-left transform bg-white border border-b-0 border-gray-100 dropdown-menu left-full top-full"
                                        style="min-width: 12rem;">
                                        <li class="relative hover:bg-gray-50"><a
                                                class="block px-6 py-2 border-b border-gray-100"
                                                href="index.html">Homepage 1</a></li>
                                        <li class="relative hover:bg-gray-50"><a
                                                class="block px-6 py-2 border-b border-gray-100"
                                                href="index-2.html">Homepage 2</a></li>
                                    </ul>
                                </li>
                                <li class="relative subdropdown hover:bg-gray-50">
                                    <a class="block px-6 py-2 border-b border-gray-100" href="#">
                                        Pages
                                    </a>

                                    <!--dropdown submenu-->
                                    <ul class="absolute right-auto z-50 ml-0 mr-0 -mt-10 text-left transform bg-white border border-b-0 border-gray-100 dropdown-menu left-full top-full"
                                        style="min-width: 12rem;">
                                        <li class="relative hover:bg-gray-50"><a
                                                class="block px-6 py-2 border-b border-gray-100" href="404.html">404</a>
                                        </li>
                                        <li class="relative hover:bg-gray-50"><a
                                                class="block px-6 py-2 border-b border-gray-100"
                                                href="author.html">Author</a></li>
                                        <li class="relative hover:bg-gray-50"><a
                                                class="block px-6 py-2 border-b border-gray-100"
                                                href="category.html">Category</a></li>
                                        <li class="relative hover:bg-gray-50"><a
                                                class="block px-6 py-2 border-b border-gray-100"
                                                href="search.html">Search</a></li>
                                        <li class="relative hover:bg-gray-50"><a
                                                class="block px-6 py-2 border-b border-gray-100"
                                                href="page.html">Page</a></li>
                                        <li class="relative hover:bg-gray-50"><a
                                                class="block px-6 py-2 border-b border-gray-100"
                                                href="contact-us.html">Contact</a></li>
                                    </ul>
                                </li>
                                <li class="relative subdropdown hover:bg-gray-50">
                                    <a class="block px-6 py-2 border-b border-gray-100" href="#">
                                        Post
                                    </a>

                                    <!--dropdown submenu-->
                                    <ul class="absolute right-auto z-50 ml-0 mr-0 -mt-10 text-left transform bg-white border border-b-0 border-gray-100 dropdown-menu left-full top-full"
                                        style="min-width: 12rem;">
                                        <li class="relative hover:bg-gray-50"><a
                                                class="block px-6 py-2 border-b border-gray-100" href="single.html">Post
                                                default</a></li>
                                        <li class="relative hover:bg-gray-50"><a
                                                class="block px-6 py-2 border-b border-gray-100"
                                                href="single-2.html">Post fullwidth</a></li>
                                    </ul>
                                </li>

                                <li class="relative subdropdown hover:bg-gray-50">
                                    <a class="block px-6 py-2 border-b border-gray-100" href="#">
                                        Documentation
                                    </a>

                                    <!--dropdown submenu-->
                                    <ul class="absolute right-auto z-50 ml-0 mr-0 -mt-10 text-left transform bg-white border border-b-0 border-gray-100 dropdown-menu left-full top-full"
                                        style="min-width: 12rem;">
                                        <li class="relative hover:bg-gray-50"><a
                                                class="block px-6 py-2 border-b border-gray-100"
                                                href="docs/index.html">Get started</a></li>
                                        <li class="relative hover:bg-gray-50"><a
                                                class="block px-6 py-2 border-b border-gray-100"
                                                href="docs/components.html">Components</a></li>
                                        <li class="relative hover:bg-gray-50"><a
                                                class="block px-6 py-2 border-b border-gray-100"
                                                href="docs/credits.html">Credits</a></li>
                                        <li class="relative hover:bg-gray-50"><a
                                                class="block px-6 py-2 border-b border-gray-100"
                                                href="docs/changelogs.html">Changelogs</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="relative border-l border-gray-800 hover:bg-gray-900">
                            <a class="block px-6 py-3 border-b-2 border-transparent" href="#">Sport</a>
                        </li>
                        <li class="relative border-l border-gray-800 hover:bg-gray-900">
                            <a class="block px-6 py-3 border-b-2 border-transparent" href="#">Travel</a>
                        </li>
                        <li class="relative border-l border-gray-800 hover:bg-gray-900">
                            <a class="block px-6 py-3 border-b-2 border-transparent" href="#">Techno</a>
                        </li>
                        <li class="relative border-l border-gray-800 hover:bg-gray-900">
                            <a class="block px-6 py-3 border-b-2 border-transparent" href="#">Worklife</a>
                        </li>
                        <li class="relative border-l border-gray-800 hover:bg-gray-900">
                            <a class="block px-6 py-3 border-b-2 border-transparent" href="#">Future</a>
                        </li>
                        <li class="relative border-l border-gray-800 hover:bg-gray-900">
                            <a class="block px-6 py-3 border-b-2 border-transparent" href="#">More</a>
                        </li>
                    </ul>

                    <!-- search form & mobile nav -->
                    <div class="flex flex-row items-center text-gray-300">
                        <div class="relative border-r border-gray-800 search-dropdown lg:border-l hover:bg-gray-900">
                            <button class="block px-6 py-3 border-b-2 border-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="open bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="close bi bi-x-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                                    <path fill-rule="evenodd"
                                        d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                                </svg>
                            </button>
                            <div class="absolute right-0 left-auto z-50 p-3 mt-1 text-left text-gray-700 bg-white border border-gray-100 dropdown-menu top-full"
                                style="min-width: 15rem;">
                                <div class="relative flex flex-wrap items-stretch w-full">
                                    <input type="text"
                                        class="relative flex-1 flex-grow flex-shrink w-px max-w-full px-5 py-2 overflow-x-auto leading-5 text-gray-800 bg-white border border-gray-300 focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        name="text" placeholder="Search..." aria-label="search">
                                    <div class="flex -mr-px">
                                        <button
                                            class="flex items-center px-5 py-2 -ml-1 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0"
                                            type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative block hover:bg-gray-800 lg:hidden">
                            <button @click='isNavOpen=!isNavOpen' type="button" class="block px-6 py-3 border-b-2 border-transparent menu-mobile">
                                <span class="sr-only">Mobile menu</span>
                                <svg class="inline-block w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg> Menu
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header><!-- end header -->

<!-- Mobile menu -->
<div x-show="isNavOpen"
x-transition:enter="transition ease-out duration-300"
        @click.away="isNavOpen=false"
        x-transition:enter-start="opacity-0 transform translate-x-40"
        x-transition:enter-end="opacity-100 transform -translate-x-0"
        x-transition:leave="transition ease-out duration-200"
        x-transition:leave-start="opacity-0 transform translate-x-0"
        x-transition:leave-end="opacity-0 transform translate-x-40"
x-cloak class="fixed inset-0 z-50 w-full h-full">
    <!-- bg open -->
    <div class="fixed inset-x-0 top-0 w-full h-full bg-gray-900 back-menu bg-opacity-70">
        <button type="button" @click='isNavOpen=!isNavOpen' class="absolute p-2 text-white cursor-pointer right-64">
            <svg class="bi bi-x" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd">
                </path>
                <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile navbar -->
    <nav id="mobile-nav"
        class="fixed top-0 right-0 z-40 flex flex-col w-64 h-full overflow-hidden bg-white dark:bg-gray-800">
        <div class="mb-auto">
            <!--navigation-->
            <nav class="relative flex flex-wrap">
                <div class="w-full py-4 font-bold text-center border-b border-gray-100">TAILNEWS</div>
                <ul id="side-menu" class="flex flex-col float-none w-full">
                    <li class="relative">
                        <a href="#" class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50">Home</a>
                    </li>

                    <!-- dropdown with submenu-->
                    <li x-data="{open:false}" class="relative dropdown">
                        <a class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50" href="#" @click="open=!open">
                            News
                        </a>

                        <!-- dropdown menu -->
                        <ul x-show="open"
                        class="block rounded rounded-t-none top-full z-50 ml-4 py-0.5 text-left bg-white dark:bg-gray-800 mb-4"
                            style="min-width: 12rem">
                            <!--submenu-->
                            <li class="relative subdropdown">
                                <a class="block w-full px-5 py-2 border-b border-gray-100 hover:bg-gray-50"
                                    href="javascript:;">
                                    Dropdown item
                                </a>

                                <!--dropdown submenu-->
                                <ul class="dropdown-menu block rounded rounded-t-none top-full z-50 ml-4 py-0.5 text-left bg-white dark:bg-gray-800"
                                    style="min-width: 12rem">
                                    <li><a class="block w-full px-5 py-2 border-b border-gray-100 hover:bg-gray-50"
                                            href="#">Dropdown sub item</a></li>
                                    <li><a class="block w-full px-5 py-2 border-b border-gray-100 hover:bg-gray-50"
                                            href="#">Dropdown sub item</a></li>
                                    <li><a class="block w-full px-5 py-2 border-b border-gray-100 hover:bg-gray-50"
                                            href="#">Dropdown sub item</a></li>
                                    <li><a class="block w-full px-5 py-2 border-b border-gray-100 hover:bg-gray-50"
                                            href="#">Dropdown sub item</a></li>
                                </ul>
                            </li>
                            <!--end submenu-->
                            <li class="relative"><a
                                    class="block w-full px-5 py-2 border-b border-gray-100 hover:bg-gray-50"
                                    href="#">Dropdown item</a></li>
                            <li class="relative"><a
                                    class="block w-full px-5 py-2 border-b border-gray-100 hover:bg-gray-50"
                                    href="#">Dropdown item</a></li>
                        </ul>
                    </li>

                    <li class="relative">
                        <a href="#" class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50">Sport</a>
                    </li>

                    <li class="relative">
                        <a href="#" class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50">Travel</a>
                    </li>

                    <li class="relative">
                        <a href="#" class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50">Techno</a>
                    </li>

                    <li class="relative">
                        <a href="#" class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50">Worklife</a>
                    </li>

                    <li class="relative">
                        <a href="#" class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50">Future</a>
                    </li>

                    <li class="relative">
                        <a href="#" class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50">More</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- copyright -->
        <div class="px-6 py-4 mt-6 text-sm text-center">
            <p>Copyright <a href="#">Tailnews</a> - All right reserved</p>
        </div>
    </nav>
</div>
