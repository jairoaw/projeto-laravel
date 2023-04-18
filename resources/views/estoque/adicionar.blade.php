
@extends ('base')

@section ('title', 'Estoque')

@section ('content')    
<h2>Adicionar item no estoque</h2>



<div class="mx-auto max-w-xl">
  <form action="" class="space-y-5">
    <div>
      <label for="nome" class="mb-1 block text-sm font-medium text-gray-700">Nome do produto</label>
      <input type="text" id="nome" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" placeholder="nome do produto" />
    </div>
    <div>
      <label for="quantidade" class="mb-1 block text-sm font-medium text-gray-700">quantidade do produto</label>
      <input type="number" id="quantidade" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" placeholder="quantidade do produto" />
    </div>
    
    <button type="button" class="rounded-lg border border-primary-500 bg-green-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-primary-700 hover:bg-primary-700 focus:ring focus:ring-primary-200 disabled:cursor-not-allowed disabled:border-primary-300 disabled:bg-primary-300">cadastrar</button>
  </form>
</div>



@endsection