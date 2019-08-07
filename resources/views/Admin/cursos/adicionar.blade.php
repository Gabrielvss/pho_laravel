@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')

<div class="container">
    <h3 class="center">Adicionar Musicas</h3>
    <br>
    <div class="row">
        <form action="{{route('admin.cursos.salvar')}}" method ="POST">
            {{csrf_field()}}
            @include('Admin.cursos._form')

            <button class="btn deep-red">Salvar</button>
        </form>
        
    </div>
</div>

@endsection