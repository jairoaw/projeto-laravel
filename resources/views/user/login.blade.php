{{-- resources/views/user/login.blade.php --}}

@extends('base')

@section('title', 'Login')

@section('content')

<form action="{{route ('user.login')}}"
method="post" class="space-y-5">
    @csrf
    <input type="text" name="name" id="name" placeholder="Username" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" />
    <input type="password" name="password" id="password" placeholder="Senha" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" />
    <input type="submit" value="Acessar" class="rounded-lg border border-primary-500 bg-green-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-primary-700 hover:bg-primary-700 focus:ring focus:ring-primary-200 disabled:cursor-not-allowed disabled:border-primary-300 disabled:bg-primary-300 cursor-pointer" />
</form>




@endsection
