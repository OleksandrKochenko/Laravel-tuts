<x-tuts_layout>
    <h2>Currently Available Ninjas</h2>

    @if($greeting === 'hello')
        <p>Hi from inside the if statement!</p>
    @endif

    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href="{{ url()->current() }}/{{$ninja['id']}}" :highlight="$ninja['skill'] > 70">
                    <h3>{{$ninja['name']}}</h3>
                </x-card>
                <!-- <p>{{$ninja['name']}}</p>
                <a href="{{ url()->current() }}/{{$ninja['id']}}">
                    View details
                </a> -->
            </li>
        @endforeach
    </ul>
</x-tuts_layout>
