<x-front-layout>
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="flex-1">
                @if (null !== $page->image)
                    <x-curator-glider class="object-cover w-auto" :media="$page->image" loading="sdrgerysdtrudtruj" />
                @endif
            </div>
            <div class="flex-1">
                <h1 class="text-5xl font-bold">Box Office News!</h1>
                <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                    exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>
</x-front-layout>
 