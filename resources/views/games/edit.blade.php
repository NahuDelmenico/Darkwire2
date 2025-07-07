<x-layout>

    <x-slot:title> Editar Juego </x-slot:title>

        <h1 class="mb-3 d-flex justify-content-center">Editar Juego</h1>

        @if($errors->any())
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger w-75">
                    Hay errores en los campos ingresados.
                    Por favor, revisar los campos
                </div>
            </div>
        @endif

        <div class="d-flex justify-content-center">
            <form action="{{route('games.update',['id' => $game -> game_id])}}" class="w-75" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="title">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" 
                    @error('name') arial-invalid="true" arial-errornessage="error-name" @enderror value="{{old('name', $game->name)}}">
                    @error('name')
                        <div id="error-name" class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                

                <div class=" mb-3">
                    <label for="description" class="form-label">Descripcion</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" style="height: 300px"
                    @error('description') arial-invalid="true" arial-errornessage="error-description" @enderror >{{old('description',$game->description)}} </textarea>
                    @error('description')
                        <div id="error-description" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="price">Precio</label>
                    <input type="number" id="price" name="price" class="form-control @error('price') is-invalid @enderror"
                    @error('price') arial-invalid="true" arial-errornessage="error-price" @enderror value="{{old('price',$game->price)}}">
                    @error('price')
                        <div id="error-price" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="discount">Descuento (Valores de 0 a 100)</label> 
                    <input type="number" id="discount" name="discount" class="form-control @error('discount') is-invalid @enderror"
                    @error('discount') arial-invalid="true" arial-errornessage="error-discount" @enderror value="{{old('discount' , $game->discount)}}">
                    @error('discount')
                        <div id="error-discount" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="release_at">Fecha de lanzamiento</label>
                    <input type="date" id="release_at" name="release_at" class="form-control @error('release_at') is-invalid @enderror"
                    @error('release_at') arial-invalid="true" arial-errornessage="error-release_at" @enderror value="{{old('release_at', $game->release_at)}}">
                    @error('release_at')
                        <div id="error-release_at" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

              <div class="mb-3">
                <label class="form-label" for="category_fk">Categoría</label>
                <select 
                    id="category_fk" 
                    name="category_fk" 
                    class="form-select @error('category_fk') is-invalid @enderror" 
                    aria-label="Seleccionar categoría"
                    @error('category_fk') 
                        aria-invalid="true" 
                        aria-describedby="error-category_fk" 
                    @enderror
                >
                    <option value="" disabled {{ old('category_fk', $game->category_fk) ? '' : 'selected' }}>Seleccione una categoría</option>
                    @foreach($categories as $c)
                        <option value="{{ $c->category_id }}" {{ old('category_fk', $game->category_fk) == $c->category_id ? 'selected' : '' }}>
                            {{ $c->name }}
                        </option>
                    @endforeach
                </select>

                @error('category_fk')
                    <div id="error-category_fk" class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="gamemode_fk">Modo de Juego*</label>
                <select 
                    id="gamemode_fk" 
                    name="gamemode_fk" 
                    class="form-select @error('gamemode_fk') is-invalid @enderror" 
                    aria-label="Seleccionar categoría"
                    @error('gamemode_fk') 
                        aria-invalid="true" 
                        aria-describedby="error-gamemode_fk" 
                    @enderror
                >
                    <option value="" disabled {{ old('gamemode_fk', $game->gamemode_fk) ? '' : 'selected' }}>Seleccione una categoría</option>
                    @foreach($gamemodes as $g)
                        <option value="{{ $g->gamemode_id }}" {{ old('gamemode_fk', $game->gamemode_fk) == $g->gamemode_id ? 'selected' : '' }}>
                            {{ $g->name }}
                        </option>
                    @endforeach
                </select>

                @error('gamemode_fk')
                    <div id="error-gamemode_fk" class="text-danger">{{ $message }}</div>
                @enderror
            </div>

                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input class="form-control form-control-lg" id="logo" name="logo" type="file">
                </div>    

                <div class="mb-3">
                    <label for="cover" class="form-label">Portada</label>
                    <input class="form-control form-control-lg" id="cover" name="cover" type="file">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Confirmar Cambios </button>
                </div>
            </form>
        </div>
</x-layout>