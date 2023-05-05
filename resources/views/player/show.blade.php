<x-app-layout>
    <midi-player src=" {{ asset('midi/exodus.mid') }}" sound-font
        visualizer="#myVisualizer">
    </midi-player>
    <midi-visualizer type="piano-roll" id="myVisualizer"></midi-visualizer>
</x-app-layout>
