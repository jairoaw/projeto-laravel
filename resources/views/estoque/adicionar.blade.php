
@extends ('base')

@section ('title', 'Estoque')

@section ('content')    
<h2>Adicionar item no estoque</h2>

@if($errors->any())
  <div class="bg-red-50 text-red-500 p-4">
    <ul>
      @foreach($errors->all() as $error)  {{-- Aqui é onde os erros são exibidos --}}
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="mx-auto max-w-xl">
  <form action="{{route ('estoque.adicionar')}}" method="post" class="space-y-5">
    @if(isset($editar))
      @method('put')
      <input type="hidden" name="id" value="{{ $editar->id }}">
    @endif
    
    @csrf
    <div>
      <label for="nome" class="mb-1 block text-sm font-medium text-gray-700">Nome do produto</label>
      <input type="text" id="nome" name="nome" value="{{ old('nome', $editar->nome ?? '') }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" placeholder="nome do produto" />
    </div>
    <div>
      <label for="quantidade" class="mb-1 block text-sm font-medium text-gray-700">quantidade do produto</label>
      <input type="number" id="quantidade" name="quantidade" value="{{ old ('quantidade', $editar->quantidade ?? '') }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" placeholder="quantidade do produto" />
    </div>
    
    <button type="submit" class="rounded-lg border border-primary-500 bg-green-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-primary-700 hover:bg-primary-700 focus:ring focus:ring-primary-200 disabled:cursor-not-allowed disabled:border-primary-300 disabled:bg-primary-300">cadastrar</button>
  </form>
</div>



@endsection