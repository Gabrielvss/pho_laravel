@extends('layout.site')

@section('titulo','Contato')

@section('conteudo')

<h1>essa é a controller do index</h1>
<?php
foreach($contatos as $x){
echo $x->nome;
echo $x->telefone;
}
?>

@endsection