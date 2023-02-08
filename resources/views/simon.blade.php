<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simón dice - Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <script src="{{asset('js/script.js')}}"></script>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Josefin+Sans:wght@300&display=swap');

body {
    background-color: black;
    display: inline-grid;
    place-items: center;
    width: 100%;
    color: #eee;
    font-family: 'Barlow', sans-serif;
    font-family: 'Josefin Sans', sans-serif;
}

.simon {
    position: relative;
    margin-top: 50px;
    padding: 10px;
    border-radius: 5px;
}

.buttonContainer {
    display: inline-grid;
    grid-gap: 10px;
    grid-template-columns: auto auto;
    transform: rotate(45deg);
}

.square {
    border-radius: 100px;
    width: 150px;
    height: 150px;
    cursor: pointer;
}

.square:active,
.active {
    filter: brightness(125%);
}

.red {
    background-color: #EE6352;
}

.blue {
    background-color: #08B2E3;
}

.green {
    background-color: #57A773;
}

.yellow {
    background-color: #FFDF64;
}

#startButton {
    width: 90px;
    position: absolute;
    top: 10px;
    right: -14px;
    border: none;
    font-family: 'Merriweather', serif;
    cursor: pointer;
    border-radius: 5px;
    color: #fff;
    background-color: #587792;
    padding: 5px;
}

#startButton:disabled {
    background-color: #eee;
}

.title {
    width: min-content;
}

.winner {
    animation: spin 1s ease-in-out;
}

@keyframes spin {
    100% { transform:rotate(180deg) } }

</style>

<form action="" method="get">
    <body>
        <div class="simon">
            <div class="title">Simon Dice</div>
            <button id="startButton">Inicio</button>
            <div class="buttonContainer">
                <div class="square red"></div>
                <div class="square yellow"></div>
                <div class="square blue"></div>
                <div class="square green"></div>
            </div>
            <div id="round"></div>
        </div>

</form>
</body>
</html>
