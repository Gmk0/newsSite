<div>
 <div
        class="flex flex-row max-w-full bg-white border border-gray-200 rounded-lg md:flex-col dark:bg-gray-800 dark:border-gray-700">
        <div class="w-1/2 p-1 lg:w-auto">
            <a href="#">
                <img class="rounded-md md:rounded-t-lg" src="/images/1.jpg" alt="" />
            </a>
        </div>

        <div class="w-1/2 p-3 py-0 lg:w-auto sm:py-3 ">
            <h3 class="pt-3 mb-2 text-lg font-bold leading-tight hover:text-blue-500">
                <a href="{{route('oneNews',['category'=>$post->category->name,'slug'=>$post->slug])}}">{{$post->title}}</a>
            </h3>
          <p class="hidden mb-3 leading-tight text-gray-600 md:block">{{ Str::limit($post->description, 100) }}</p>
            <a class="text-gray-500" href="#">
                <span class="inline-block h-3 mr-2 border-l-2 border-red-600"></span>{{$post->category->name}}</a>
        </div>

    </div>
</div>
