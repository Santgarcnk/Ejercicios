<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindromos - Laravel</title>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <script src="./resupal.blade.php"></script>
</head>
<body class="bg-gray-900 text-gray-700">

@yield('content')

<script src="fibonacci.blade.php"></script>

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-black rounded-lg shadow-lg">

<h1 class="text-3xl text-center font-bold">Palindromos</h1>

<form class="mt-4" method="post" action="{{route('resupal')}}">
    @csrf

    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Digite una palabra" id="palin" name="palin">

 <button type="submit" name="verificar" class="rounded-md bg-green-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-green-700">Enviar</button></a>


</form>

</div>



</body>
</html>

