@extends('layouts.appNonMain')

@section('content')

<div class="flex justify-center w-9/12 mt-10">
    
    <div>
        <h1 class="text-5xl font-bold mt-0 mb-6 text-purple-200">EDITAR PERFIL</h1>
    </div>
    
    <br>
    
    <form action="{{route('usuario.update', $user->id)}}" method="POST" class="w-9/12">

        {{-- <div class="flex justify-center">
            @if ($errors->any())
            <ul class="errors text-purple-200">
                @foreach ($errors->all() as $error)
                    <li class="error">{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div> --}}

        @method('PUT')
        @csrf
            <div class="form-group mb-6 ">
                <label><h4>Foto de Perfil</h4></label>
                <input for="image" type="file" class="form-control" name="image" id="image">
            </div>

            <div class="form-group mb-6 ">
                <label class="form-label inline-block mb-2 text-gray-700">Nome: </label>
                <input type="text" name="name" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        value="{{$user->name}}" placeholder="Nome">
                        @error('name')
                  <div class="block w-full text-purple-200">{{$message}}</div>
                  @enderror
            </div>

            <div class="form-group mb-6">
                <label class="form-label inline-block mb-2 text-gray-700">Email: </label>
                <input type="email" name="email" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id=""
                       value="{{$user->email}}" placeholder="Email">
                       @error('email')
                  <div class="block w-full text-purple-200">{{$message}}</div>
                  @enderror
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="form-group mb-6">
                    <label class="form-label inline-block mb-2 text-gray-700">Cidade: </label>
                    <input type="text" name="cidade" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        value="{{$user->cidade}}" placeholder="cidade">
                        @error('cidade')
                  <div class="block w-full text-purple-200">{{$message}}</div>
                  @enderror
                </div>

                <div class="form-group mb-6">
                    <label class="form-label inline-block mb-2 text-gray-700">UF: </label>
                    <input type="text" name="estado" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        value="{{$user->estado}}" placeholder="Estado">
                        @error('estado')
                  <div class="block w-full text-purple-200">{{$message}}</div>
                  @enderror
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div class="form-group mb-6">
                    <label class="form-label inline-block mb-2 text-gray-700">Instagram: </label>
                    <input type="text" name="instagram" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                        value="{{$user->instagram}}" placeholder="Instagram">
                        @error('instagram')
                  <div class="block w-full text-purple-200">{{$message}}</div>
                  @enderror
                </div>

                <div class="form-group mb-6">
                    <label class="form-label inline-block mb-2 text-gray-700">Telefone: </label>
                    <input type="number" name="telefone" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        value="{{$user->telefone}}" placeholder="Telefone">
                        @error('telefone')
                  <div class="block w-full text-purple-200">{{$message}}</div>
                  @enderror
                </div>
            </div>
            
            <div class="form-group mb-6">
                <label class="form-label inline-block mb-2 text-gray-700">Bio: </label>
                <textarea type="text"
                class="box-content w-100%
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0 resize-none
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    name="bio" cols="8" rows="8" maxlength="150" maxlength="150"
                    value="{{$user->bio}}" placeholder="Bio"></textarea>
                    @error('bio')
                  <div class="block w-full text-purple-200">{{$message}}</div>
                  @enderror
            </div>

            <div class="grid grid-cols-2 gap-4 ml-40">
                <div class="flex-auto"> 
                    <a href="{{route('usuario.showUser')}}" type="button" 
                            class=" 
                            inline-block abso
                            px-6 py-2.5 bg-gray-200 
                            text-white font-medium text-m 
                            leading-tight uppercase rounded shadow-md 
                            hover:bg-gray-100 hover:shadow-lg 
                            focus:bg-gray-100 focus:shadow-lg 
                            focus:outline-none focus:ring-0 
                            active:bg-gray-100 active:shadow-lg 
                            transition duration-150 ease-in-out">
                            Cancelar
                     </a>
                </div>
                <div class="flex-auto"> 
                    <button 
                            class="inline-block abso
                            px-6 py-2.5 bg-green-600 
                            text-white font-medium text-m 
                            leading-tight uppercase rounded shadow-md 
                            hover:bg-green-700 hover:shadow-lg 
                            focus:bg-green-700 focus:shadow-lg 
                            focus:outline-none focus:ring-0 
                            active:bg-green-800 active:shadow-lg 
                            transition duration-150 ease-in-out" type="submit">
                            Editar
                </button>
                </div>
            </div>
    </form>
</div>

@endsection
