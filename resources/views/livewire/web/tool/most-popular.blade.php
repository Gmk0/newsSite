<div class="flex-shrink relative overflow-auto order-first w-full max-w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 lg:order-last">
    <div class="w-full bg-white">
        <div class="mb-6">
            <div class="p-4 bg-gray-100">
                <h2 class="text-lg font-bold">Populaire</h2>
            </div>
            <ul class="post-number">
                @foreach ($mostPopular as $post)
                <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a href="{{route('oneNews',['category'=>$post->category->name,'slug'=>$post->slug])}}" class="flex flex-row items-center px-6 py-3 text-lg font-bold" href="#">
                        {{$post->title}}
                    </a>
                </li>
                @endforeach


            </ul>
        </div>
    </div>

    <div class="sticky top-0 py-6 text-sm">
        <div class="w-full text-center">
            <a class="uppercase" href="#">Advertisement</a>
            <a href="#">
                <img class="mx-auto" src="/images/ads.jpg" alt="advertisement area">
            </a>
        </div>
    </div>
</div>
