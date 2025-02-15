<x-tuts_layout>
    <h2>Currently Available Ninjas</h2>

    @if(isset($greeting) && $greeting === 'hello')
        <p>Hi from inside the if statement!</p>
    @else
        <p>No greetings!</p>
    @endif

    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <!-- href="{{ url()->current() }}/{{$ninja['id']}}" replaced by easier syntax with rout naming: -->
                <x-card href="{{ route('ninjas.show', $ninja['id']) }}" :highlight="$ninja['skill'] > 70">
                    <div>
                        <h3>{{ $ninja->name }}</h3>
                        <p>{{ $ninja->dojo->name }}</p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $ninjas->links() }}
</x-tuts_layout>
