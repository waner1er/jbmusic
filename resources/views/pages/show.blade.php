<x-front-layout>
    <section class="bg-white dark:bg-gray-900">
        @if( $page && $page->slug === 'welcome')
            <div class="flex flex-col-reverse lg:grid max-w-screen-xl px-4 py-8 mx-10 lg:gap-8 xl:gap-8 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-6 flex flex-col justify-center">
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                        {{ $page->title }}</h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                        {{ $page->intro }}

                    </p>
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
                </div>
                <div class="mt-0 col-span-6 flex">
                    <x-curator-glider :media="$page->image" class="object-cover w-full h-64"/>
                </div>
            </div>
        @else
            <div class="grid max-w-screen-xl grid-cols-1 md:grid-cols-2">
                <div class="flex justify-center flex-col items-center">
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                        {{ $page->title }}</h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                        {{ $page->intro }}
                    </p>
                </div>

                <x-curator-glider :media="$page->image" class="object-cover w-full mx-auto"/>
            </div>
        @endif
    </section>
    <section class="container mx-auto border border-gray-100 p-10">
        <h2 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
            {{ $page->subtitle }}
        </h2>
        <div class="tiptap-front-content my-5 mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
            {!! $page->content !!}
        </div>
    </section>
    @if( $page && $page->slug === 'welcome')
        <section class="grid max-w-screen-xl px-4 py-8 mx-10 lg:gap-8 xl:gap-8 lg:py-16 lg:grid-cols-12 relative">
            <div class="mt-0 col-span-4 flex">
                <x-curator-glider :media="$page->image" class="object-cover w-full h-64 sticky top-0 py-6"/>
            </div>
            <div class="mr-auto place-self-center lg:col-span-8 flex flex-col justify-center">
                <h2 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Prestations
                </h2>
                <div data-aos="fade-left">
                    <h3 class="text-3xl">
                        Production audiovisuelle
                    </h3>
                    <div class="flex items-center justify-between my-6">
                        <p class="max-w-2xl  font-light text-gray-500  md:text-lg lg:text-xl dark:text-gray-400 mr-5">
                            Avec une solide expérience en enregistrement vocal, montage et mixage, je suis en mesure de
                            produire des bandes sonores de haute qualité, y compris de la musique. Confiez-moi l'aspect
                            audio de vos productions pour renforcer l'impact de votre message audiovisuel.
                        </p>
                        <img src="https://picsum.photos/150" alt="">
                    </div>
                </div>
                <hr class="my-4">
                <div data-aos="fade-right">
                    <h3 class="text-3xl">
                        Production musicale
                    </h3>
                    <div class="flex items-center justify-between my-6">
                        <img src="https://picsum.photos/150" alt="">
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 ml-5">
                            Passionné par la Musique Assistée par Ordinateur (M.A.O.) depuis 25 ans, je propose non
                            seulement
                            des cours, mais je suis également capable de gérer les aspects techniques de la musique que
                            vous
                            imaginez, donnant vie à toutes vos idées créatives.
                        </p>
                    </div>
                </div>
                <hr class="my-4">
                <div data-aos="fade-left">
                    <h3 class="text-3xl">
                        Enregistrement et mixage musical
                    </h3>
                    <div class="flex items-center justify-between my-6">
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 ml-5">
                            "Un enregistrement de qualité est essentiel pour capturer l'essence d'un message musical.
                            C'est avec
                            cette perspective que je propose mes services pour enregistrer vos projets musicaux. Ayant
                            une
                            expérience variée, allant de l'enregistrement de chorales à celui de groupes de métal
                            extrême, je
                            m'adapte pour mettre en valeur votre musique de la manière qui correspond le mieux à vos
                            aspirations."
                        </p>
                        <img src="https://picsum.photos/150" alt="">
                    </div>
                </div>
                <hr class="my-4">
                <div data-aos="fade-right">
                    <h3 class="text-3xl">
                        Sonorisation et création
                    </h3>
                    <div class="flex items-center justify-between my-6">
                        <img src="https://picsum.photos/150" alt="">

                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 ml-5">
                            "Fort de 15 ans d'expérience en tant que régisseur son dans un théâtre, j'ai acquis une
                            expertise
                            solide en sonorisation, couvrant aussi bien la musique que le théâtre ou la danse. Je suis
                            disponible pour vous accompagner dans vos projets en direct ou vos créations théâtrales, et
                            pour
                            adapter votre fiche technique afin d'assurer des conditions optimales pour vos performances
                            en
                            tournée."
                        </p>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-5">
                    <a href="{{ route('prestations.index') }}"
                       class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        voir +
                    </a>
                </div>
            </div>
        </section>
        <section class="grid max-w-screen-xl px-4 py-8 mx-10 lg:gap-8 xl:gap-8 lg:py-16 lg:grid-cols-12 relative">
            <div class="mr-auto place-self-center lg:col-span-8 flex flex-col justify-center">
                <h2 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Cours
                </h2>
                <div data-aos="fade-left">
                    <h3 class="text-3xl">
                        Musique Assistée par Ordinateur
                    </h3>
                    <div class="flex items-center justify-between my-6">
                        <p class="max-w-2xl  font-light text-gray-500  md:text-lg lg:text-xl dark:text-gray-400 mr-5">
                            "Rêvez-vous de composer votre propre musique, mais vous sentez-vous dépassé par les
                            logiciels de production musicale ? Avec plus de 25 ans d'expérience dans la Musique Assistée
                            par Ordinateur (MAO), je suis là pour vous guider dans le logiciel de votre choix. Mon
                            objectif est de vous aider à maîtriser l'outil et à créer la musique que vous imaginez dans
                            les meilleures conditions possibles."
                        </p>
                        <img src="https://picsum.photos/150" alt="">
                    </div>
                </div>
                <hr class="my-4">
                <div data-aos="fade-right">
                    <h3 class="text-3xl">
                        Guitare
                    </h3>
                    <div class="flex items-center justify-between my-6">
                        <img src="https://picsum.photos/150" alt="">
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 ml-5">
                            En tant que guitariste avec 26 ans d'expérience, je vous propose d'apprendre à maîtriser cet
                            instrument extrêmement polyvalent, en fonction de vos désirs, de la manière la plus ludique
                            possible.
                        </p>
                    </div>
                </div>
                <hr class="my-4">
                <div data-aos="fade-left">
                    <h3 class="text-3xl">
                        Sonorisation
                    </h3>
                    <div class="flex items-center justify-between my-6">
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 ml-5">
                            Êtes-vous membre d'un groupe ou d'un orchestre et intéressé par l'apprentissage des
                            fondamentaux de l'ingénierie du son pour pouvoir communiquer plus efficacement avec les
                            équipes techniques lors des performances ? Peut-être êtes-vous impliqué dans une association
                            et opérez fréquemment des systèmes de son, mais vous vous sentez dépassé lorsque des
                            problèmes surgissent. Si c'est le cas, je peux vous aider à voir la technologie comme un
                            outil plutôt qu'un obstacle.
                        </p>
                        <img src="https://picsum.photos/150" alt="">
                    </div>
                </div>
                <hr class="my-4">
                <div class="grid md:grid-cols-2 gap-5">
                    <a href="{{ route('courses.index') }}"
                       class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        voir +
                    </a>
                </div>
            </div>
            <div class="mt-0 col-span-4 flex">
                <x-curator-glider :media="$page->image" class="object-cover w-full h-64 sticky top-0 py-6"/>
            </div>
        </section>

    @endif
</x-front-layout>
