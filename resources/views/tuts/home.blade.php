<x-tuts_layout>
    <div class="text-center px-8 py-12">
        <h1>
            Welcome to the Laravel tutorial
        </h1>
        <p>Click the button to view the list of ninjas</p>
        <a href="{{ url()->current() }}/ninjas" class="btn mt-4 inline-block">Find Ninjas!</a>
    </div>
</x-tuts_layout>
