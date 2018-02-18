<?php
/**
 * Created by PhpStorm.
 * User: ДемченкоМаксимАндрій
 * Date: 18.02.2018
 * Time: 21:12
 */
require 'content.php';
echo '<!DOCTYPE html>
<html>
<head>
    <title>pisarjesvkyRookieScissors</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"
          integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<h2 style="color: aliceblue; margin-bottom: 20px; text-align: center;">Добро пожаловать, pisarjevsky</h2>

<table class="table table-inverse">
    <thead>
    <tr>
        <th>Ссылка на раздел</th>
        <th>Файлов</th>
        <th>Изменено</th>
    </tr>
    </thead>
    <tbody>
    ';
foreach ($nameToDirName as $node) {
    $dir = strtolower($node);
    if (!file_exists(strtolower($node)) && !is_dir(strtolower($node))) {
        mkdir($dir);
    }
    $files = scandir($dir, 1);
    $lastFile = reset($files);

    echo '<tr><td><a href="' . $dir . '">' . $node . '</a></td>';
    $status = (count($files) > 1) ? count($files) - 1 : 0;
    echo '<td>' . --$status . ' элементов</td>';
    echo '<td>' . date("H:i:s d/m/Y ", filemtime($dir)) . '</td></tr>';
}
echo '
    </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
        integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"
        integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="main.js"></script>
</body>
</html>';