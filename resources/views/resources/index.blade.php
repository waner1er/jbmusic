<x-app-layout>
    <div class="grid grid-cols-1 lg:grid-cols-3">
    @foreach ($resources as $resource)
     <div>
        <a href="{{ route('resources.show', ['resource' => $resource])}}">voir</a>
     </div>
    @endforeach
</div>

</x-app-layout>