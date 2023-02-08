@extends('layouts.app')

@section('title', 'Resultado')

@section('content')


<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

<h1 class="text-3xl text-center font-bold">Serie Fibonacci</h1>
<br>
<form action="" method="post">
@csrf
<h1 class="text-1xl text-center font-bold bg-blue-500 text-white">Resultado</h1>
<br>
{{$resultado}}
</form>

@endsection
