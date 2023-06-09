<x-front-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-10 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-6 flex flex-col justify-center">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    {{ $page->title }}</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aspernatur consequatur dolorem error
                    eum ex illo ipsa labore libero nisi non odio perferendis qui, quis rerum soluta tempore ut.
                    Asperiores.
                </p>
                @if($page->slug === 'welcome')
                    <div class="grid md:grid-cols-2 gap-5">
                        <a href="#"
                           class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            Découvrir les prestations
                        </a>
                        <a href="#"
                           class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            Découvrir les cours
                        </a>
                    </div>
                @endif
            </div>
            <div class="hidden lg:mt-0 lg:col-span-6 lg:flex">
                <img src="{{ asset('img/music-instruments-electric-guitar.jpg') }}" alt="jbGuitar">
            </div>
        </div>
    </section>
    <section class="container mx-auto border border-gray-100 p-10">
        <H2 class="text-3xl">Sous titre</H2>
        <p>
            Ici le contenu du champ Content de Welcome
        </p>
    </section>
</x-front-layout>
