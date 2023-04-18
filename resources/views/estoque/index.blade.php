Index de estoque

@extends ('base')

@section('title', 'estoque')
    

@section('content')
<div class="mb-5">    <h1>conteudo da Index de estoque</h1></div>


    <p><a href="{{ route('estoque.adicionar')}}" 
    class="rounded-lg border border-primary-500 bg-green-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-primary-700 hover:bg-primary-700 focus:ring focus:ring-primary-200 disabled:cursor-not-allowed disabled:border-primary-300 disabled:bg-primary-300">    
    Adicionar item</a></p>


@endsection
