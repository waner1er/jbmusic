{{--<div class="card  bg-base-100 shadow-xl">--}}
{{--    @if (!empty($img))--}}
{{--        <x-curator-glider :media="$img" class="object-cover w-auto h-64" />--}}
{{--    @else--}}
{{--        <div class="w-full h-64 flex items-center justify-center italic">--}}
{{--            Photo non disponible--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    <div class="card-body flex flex-col justify-between">--}}
{{--        <div>--}}
{{--            <h3 class="card-title">{{ $title }}</h3>--}}
{{--            <p class="text-justify mt-3">{{ $excerpt }}</p>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <p class="mt-8">tarif horaire : {{ $pricePerHour }} €</p>--}}
{{--            <div class="card-actions justify-end">--}}
{{--                <a href="{{ route($route, [$routeName => $model]) }}" class="btn btn-primary">En Savoir +</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto">
    @if (!empty($img))
        <x-curator-glider :media="$img" class="object-cover w-full h-64"/>
    @endif
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
            acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#"
           class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-third-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
</div>

