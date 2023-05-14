<x-front-layout>
    @slot('header')
        {{ __('jbmusic.prestation') }}
    @endslot

    <h2 class="w-10/12 lg:w-7/12 mx-auto">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium dicta enim iusto voluptatem eveniet, sit
        nesciunt distinctio quia assumenda deleniti nihil exercitationem explicabo quo quod, ex voluptate aperiam earum
        sapiente?
    </h2>
        <div class="grid grid-cols-1 gap-5 p-5 {{$prestations->count() <= 2 ? 'md:grid-cols-fifty-fifty': 'md:grid-cols-auto-column'}}" >
        @foreach ($prestations as $prestation)
            @livewire('card-component', [
                'prestation' => $prestation,
                'img' => $prestation->image,
                'title' => $prestation->title,
                'excerpt' => $prestation->excerpt,
                'pricePerHour' => $prestation->hour_price,
                'route' => 'prestations.show',
                'routeName' => 'prestation',
                'model' => $prestation,
                'imgId' => $prestation->id,
            ])
        @endforeach
    </div>
</x-front-layout>
