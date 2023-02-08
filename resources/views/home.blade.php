<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Laravel</title>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
</head>
<body class="bg-indigo-700 text-gray-700">

@yield('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

<h1 class="text-3xl text-center font-bold">Ejercicios Logica</h1>

<form class="mt-4" method="" action="">
    @csrf

 <a href="{{url('serie')}}"><button type="button" class="rounded-md bg-blue-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-blue-700">Fibonacci</button></a>
<br>
 <a href="{{url('factorizacion')}}"><button type="button" class="rounded-md bg-red-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-red-700">Factorización</button></a>
<br>
<a href="{{url('palindromos')}}"><button type="button" class="rounded-md bg-green-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-green-700">Palindromos</button></a>

<a href="{{url('simon')}}"><button type="button" class="rounded-md bg-yellow-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-yellow-700">Simon dice</button></a>


</form>

</div>



</body>
</html>

