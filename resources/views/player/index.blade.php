<x-app-layout>
    <x-slot name="header">
        Songs
    </x-slot>
    <div class="container mx-auto p-5 grid grid-cols-1 lg:grid-cols-3">
        @foreach ($songs as $song)
            <div class="card card-compact w-96 bg-base-100 shadow-xl">
                <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $song->name }}</h2>
                    <p>descrioption</p>
                    <div class="card-actions justify-end">
                        <a href="{{ route('songs.show', ['song' => $song]) }}" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>
