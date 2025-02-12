<x-tuts_layout>
    <h1>
        Welcome to the Laravel tutorial
    </h1>
    <p>Click the button to view the list of ninjas</p>
    <a href="{{ url()->current() }}/ninjas" class="btn">Find Ninjas!</a>
</x-tuts_layout>
