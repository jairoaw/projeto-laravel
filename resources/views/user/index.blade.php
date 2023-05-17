{{-- resources/views/user/index.blade.php --}}
@extends('base')

@section('title', 'Usuários')

@section('content')
<p><b>Página de usuários</b></p>
<a href="{{ route('user.create') }}">Adicionar usuário</a>


@endsection
