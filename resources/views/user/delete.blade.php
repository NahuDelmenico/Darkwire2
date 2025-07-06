<x-layout>

    <x-slot:title>
        Eliminar Usuario :: {{ $user->name}}
    </x-slot:title>

    <div class="d-flex justify-content-center w-100">
        <div class="alert alert-danger">
                <p>Estas a punto de eliminar el usuario <b>"{{ $user->name}}"</b></p>
                <p>¿Quieres eliminar al usuario?</p>

                <form action="{{route('user.destroy',['id'=>$user->id])}}"
                class="mb-3"
                method="post">
                    @csrf
                    @method('DELETE')


                    <button type="submit" class="btn btn-danger">Quiero eliminar "{{ $user->name}}" </button>
                </form>
            </div>
        </div>
        <div class="w-75">
            <div class="bg-body-secondary p-5">
                <h1 class="mb-3">{{ $user->name}}</h1>

                <p>{{ $user->email}}</p>
            </div>
            
        </div>
    </div>

</x-layout>