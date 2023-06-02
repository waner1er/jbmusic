<x-front-layout>
{{--    @slot('header')--}}
{{--        <h1 class="font-semibold text-2xl text-gray-800 leading-tight">--}}
{{--            {{ $course->title }}--}}
{{--        </h1>--}}
{{--    @endslot--}}
{{--    @dd($course)--}}
{{--    <div class="container mx-auto">--}}
{{--        <div class="card lg:card-side bg-slate-500 text-white shadow-xl p-5">--}}
{{--            <figure><img src="{{ !empty($course->image) ? $course->image : "https://picsum.photos/250" }}" alt="Album" /></figure>--}}
{{--            <div class="card-body">--}}
{{--                <h2 class="card-title">New album is released!</h2>--}}
{{--                <p>Click the button to listen on Spotiwhy app.</p>--}}
{{--                <div class="card-actions justify-end">--}}
{{--                    <button class="btn btn-primary">Listen</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    {{$course->title}}
</x-front-layout>
