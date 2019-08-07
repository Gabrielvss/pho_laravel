@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')

<div class="container">
    <h3 class="center">Lista de cursos</h3>
    <div class="row">
        <table>
            <thead>
                <tr>
                 <th>rank</th>
                 <th>Musica</th>
                 <th>Artista/Banda</th>
                 <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $registro)
                <tr>
                 <td>{{$registro->rank}}</td>
                 <td>{{$registro->musica}}</td>
                 <td>{{$registro->artista}}</td>
                 <td>
                    <a class="btn deep red" href="{{route('admin.cursos.editar', $registro->rank) }}">Editar</a>
                    <a class="btn orange" href="{{route('admin.cursos.deletar', $registro->rank) }}">Deletar</a>
                 </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <a class="btn blue" href="{{route('admin.cursos.adicionar')}}">Adcionar</a>
    </div>
</div>

@endsection