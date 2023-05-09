{{-- resources/views/estoque.apagar.blade.php--}}
@extends('base')

@section('title', 'Estoque - Apagar')

@section('content')
    <div class="mb-5">Apagar item do estoque?</div>
    <p>Você tem certeza que deseja apagar o item <strong>{{$estoque['nome']}}</strong>?</p>
    <form action="{{route ('estoque.apagar', $estoque['id'])}}" method="post">
        @method('delete')
        @csrf {{-- token de segurança, evita ataques de csrf (outros formularios) --}}
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Apagar</button>
@endsection
