<div class="card  bg-base-100 shadow-xl">
    @if (!empty($img))
        <x-curator-glider :images="$img" />
    @else
        <figure><img class="w-96 lg:w-full xl:w-96" src="https://picsum.photos/id/{{ random_int(1,99)}}/250"
                alt="Shoes" /></figure>
    @endif
    <div class="card-body">
        <h3 class="card-title">{{ $title }}</h2>
        <p>{{ $excerpt }}</p>
        <p>tarif horaire : {{ $pricePerHour }} €</p>
        <div class="card-actions justify-end">
            <a href="{{ route($route, [$routeName => $model]) }}" class="btn btn-primary">En Savoir +</a>
        </div>
    </div>
</div>
