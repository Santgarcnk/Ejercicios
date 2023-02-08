<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Palindromo - Laravel</title>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
</head>
<body class="bg-gray-900 text-gray-700">

@yield('content')

<script src="fibonacci.blade.php"></script>

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-black rounded-lg shadow-lg">

<h1 class="text-3xl text-center font-bold">Palindromos</h1>

<form action="" method="post">
@csrf
<h1 class="text-1xl text-center font-bold bg-green-500 text-white">Resultado</h1>
<br>
{{$resul}}
</form>

</div>



</body>
</html>

