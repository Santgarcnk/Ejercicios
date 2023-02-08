@extends('layouts.app')

@section('title', 'Serie Fibonacci')

@section('content')
<script src="fibonacci.blade.php"></script>

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

<h1 class="text-3xl text-center font-bold">Serie Fibonacci</h1>

<form class="mt-4" method="post" action="{{route('fibonacci')}}">
    @csrf

    <input type="number" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Digite numero" id="num" name="cant_num">

 <button type="submit" class="rounded-md bg-blue-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-blue-700">Enviar</button></a>


</form>

</div>
@endsection
