<div class="flex-col p-2 pt-4 rounded-md">

    <div class="flex gap-2">

       <div class="relative w-[45%] bg-center bg-cover rounded-md"
        style="background-image: url('/images/banner.jpg'); filter: brightness(0.9);">

            <div class="absolute px-4 top-[40%] text-left text-white z-index-1">
                <h1 class="text-4xl font-bold">Les dernières nouvelles</h1>
                <p class="mb-4 text-base">Restez informés des dernières nouvelles du monde entier.</p>

                <div class="flex px-4 border-l-2 border-red-500">
                    <span class="text-base text-white">Politique</span>

                </div>
            </div>
        </div>

        <div class="grid w-[55%] gap-1 grid-cols-2">
                    @for ($i=1 ; $i < 5 ;$i ++)


                            <div class="flex ">
                                <div class="relative p-1">
                                    <img src="/images/banner.jpg" class="object-cover"/>

                                <div class="absolute flex flex-col p-2 top-[40%] ">

                                    <div class="mb-2 text-base text-white">
                                        titre de l'article peut etre trop longue oui ou trop courts
                                    </div>
                                    <div class="flex px-4 border-l-2 border-red-500">
                                        <span class="text-base text-white">Politique</span>

                                    </div>

                                </div>
                                </div>
                            </div>
                    @endfor

         </div>


    </div>



    <div class="flex gap-2 mt-4 flew-row ">
        <div class=" bg-gray-200 rounded-md flex  p-4 flex-col min-h-screen lg:w-[75%]">
            <div class="flex justify-between px-2">
                <div class="border-l-2 border-red-600 px-2s">
                    <span class="px-2 text-lg font-bold">Politique</span>
                </div>
                <div class="border-b border-red-600 px-2s">
                    <span class="px-2 text-lg font-bold">voir plus</span>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 mt-4 lg:grid-cols-3">

                @foreach ($politiques as $politique)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/images/1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{$politique->title}}</h5>
                            </a>

                            <div class="flex px-4 my-4 border-l-2 border-red-500">
                                <span class="text-base text-dark">{{$politique->category->name}}</span>

                            </div>
                            <a href="#" class="items-center hidden px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                @endforeach


         </div>

        </div>
        <div class="h-screen  rounded-md w-[25%]">

        </div>
    </div>
    <div class="min-h-screen p-4 mb-4 bg-gray-900">
        <div class="flex justify-between px-2 mb-6">
            <div class="border-l-2 border-red-600 px-2s">
                <span class="px-2 text-lg font-bold text-white">Societe</span>
            </div>
            <div class="border-b border-red-600 px-2s">
                <span class="px-2 text-lg font-bold text-white">voir plus</span>
            </div>
        </div>
        <div class="grid items-center grid-cols-4 gap-6 px-4 my-auto">
            @foreach ($societes as $societe)
            <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="/images/1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                                acquisitions 2021</h5>
                        </a>

                        <div class="flex px-4 my-4 border-l-2 border-red-500">
                            <span class="text-base text-dark">{{$societe->category->name}}</span>

                        </div>
                        <a href="#"
                            class="items-center hidden px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                    </div>

                    @endforeach

        </div>

    <div>

    <div class="min-h-screen">

    </div>





</div>
