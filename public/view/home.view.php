<?php
$style = "/css/style.css";
$js = "/js/main.js";


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 
   ## Uncomment if you want to use tailwindcss in your project ## 
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    -->

    <!-- A normal css file if you want to write pure CSS -->
    <link rel="stylesheet" href=<?= "$style" ?>>

</head>

<body>
    <div class="container">
        <div class="child">
            <h1>Composer + PHP</h1>
            <h3>Setup created by Prashant</h3>
            <p>A simple yet power full setup for people wanting to learn php. A file structure which soft launches your learning with laravel.</p>
        </div>
    </div>
    <script src=<?= "$js" ?>></script>
</body>

</html>