<?php

$info = ['pisarjevskyRookieScissors' => 'Добавить Laravel',
    'Велосипед Pride Rocket Sora Blue' => '22000 грн',
    'Экипировка' => '3000 грн',
    'Одежда обычная' => '5000 грн',
    'Ботинки rammstein' => '4000 грн',
    'Фотоаппарат polaroid 6302' => '6000 грн',
    'Sony смартфон' => '30000 грн'];
echo '
<!DOCTYPE html>
<html>
<head>
    <title>Lab1 KPZ Demchenko 121-16-1</title>

    <meta charset="utf - 8">
    <meta name="viewport" content="width = device - width, initial - scale = 1, shrink - to - fit = no">
    <meta http-equiv="x - ua - compatible" content="ie = edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"
          integrity = "2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin = "anonymous" >
    <link rel = "stylesheet" href = "../css/main.css" >

</head >
<body >
<h2 style = "color: aliceblue; margin-bottom: 20px; text-align: center;" > Добро пожаловать, pisarjevsky </h2 >

<table class="table table-inverse" >
    <thead >
    <tr >
        <th >Цель</th >
        <th >Ресурсы</th >
    </tr >
    </thead >
    <tbody >
    ';
foreach ($info as $description => $value) {
    echo '<tr >
        <td >' . $description . '</td >
        <td >' . $value . '</td >
    </tr >';
}
echo '
    </tbody >
</table >

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity = "sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
        crossorigin = "anonymous" ></script >
<script src = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
        integrity = "sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
        crossorigin = "anonymous" ></script >
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"
        integrity = "VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin = "anonymous" ></script >
<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js" ></script >
<script src = "main.js" ></script >
</body >
</body >
</html >
';