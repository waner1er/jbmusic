<x-front-layout>
    @slot('header')
        {{ __('jbmusic.course') }}
    @endslot

    <h2 class="w-10/12 lg:w-7/12 mx-auto">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium dicta enim iusto voluptatem eveniet, sit
        nesciunt distinctio quia assumenda deleniti nihil exercitationem explicabo quo quod, ex voluptate aperiam earum
        sapiente?
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5 p-5">
        @foreach ($courses as $course)
            @livewire('card-component', [
                'course' => $course,
                'img' => $course->image,
                'title' => $course->title,
                'excerpt' => $course->excerpt,
                'pricePerHour' => $course->hour_price,
                'route' => 'courses.show',
                'routeName' => 'course',
                'model' => $course,
                'imgId' => $course->id,
            ])
        @endforeach
    </div>
</x-front-layout>
