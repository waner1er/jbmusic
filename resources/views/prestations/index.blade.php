<x-front-layout>
    @slot('header')
        {{ __('jbmusic.course') }}
    @endslot

    <h2 class="w-10/12 lg:w-7/12 mx-auto">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium dicta enim iusto voluptatem eveniet, sit
        nesciunt distinctio quia assumenda deleniti nihil exercitationem explicabo quo quod, ex voluptate aperiam earum
        sapiente?
    </h2>


    <div class="grid grid-cols-1 gap-5 p-5 {{$prestations->count() <= 2 ? 'md:grid-cols-fifty-fifty': 'md:grid-cols-auto-column'}}">
        @foreach ($prestations as $prestation)
            <div class="max-w-sm w-9/12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto">
                @if (!empty($prestation->image) && is_int($prestation->image))
                    <x-curator-glider :media="$prestation->image" class="object-cover w-full h-64"/>
                @endif
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $prestation->title }}
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        {{ $prestation->excerpt }}
                    </p>

                    <a href="{{ route('prestations.show', ['prestation' => $prestation]) }}"
                       class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-third-600 roéééééééunded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Voir +
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>

        @endforeach
    </div>
</x-front-layout>
