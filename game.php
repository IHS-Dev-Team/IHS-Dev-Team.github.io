<!DOCTYPE php>

<head>
    <title>IHS Dev Team</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="BlockShooter/graphics.js"></script>
    <script src="BlockShooter/sprites.js"></script>
    <script src="BlockShooter/game.js"></script>
    <script src="BlockShooter/main.js"></script>
    <script src="utils/navbar.js"></script>
<? include("meta.php") ?>
</head>

<body id="home">
<div class='bg'></div>
<? include("navbar.php") ?>
<div id="outer">
    <div class='box'><h1 id="shooter">BlockShooter</h1></div>
    <div class='box'>
        <p>WASD: move</p>
        <p>SPACE: shoot</p>
        <p>P: pause</p>
        <p>R: restart</p>
    </div>
    <canvas id="game"></canvas>
</div>
</body>
