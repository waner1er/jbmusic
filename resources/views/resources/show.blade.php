<x-app-layout>
{{--    @dd($resource)--}}
    @if(is_numeric($resource->file))
        <x-curator-glider :media="$resource->file"/>
    @else
            <p>l'image n'est pas au bon format </p>
    @endif
</x-app-layout>

<script>

</script>