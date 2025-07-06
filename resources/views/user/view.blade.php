<x-layout>


    <x-slot:title>
        Usuario :: {{ $user->name}}
    </x-slot:title>

    <div class="d-flex justify-content-center w-100">
        <div class="w-75">
            <div class="bg-body-secondary p-5">
                <h1 class="mb-3">{{ $user->name}}</h1>

                <p>{{ $user->email}}</p>
            </div>
            
        </div>
    </div>

</x-layout>