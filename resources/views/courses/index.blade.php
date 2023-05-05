<x-front-layout>
    @slot('header')
    <h1 class="font-semibold text-2xl text-gray-800 leading-tight">
        {{ __('Cours') }}
    </h1>
@endslot
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($courses as $course)
            <a href="{{ route('courses.show', ['course' => $course])}}"> {{ $course->title }}</a>
               
            @endforeach
        </div>
    </div>
</x-front-layout>
