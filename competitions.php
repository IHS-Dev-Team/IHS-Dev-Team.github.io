<!DOCTYPE php>

<head>
    <title>IHS Dev Team</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="utils/navbar.js"></script>
<? include("meta.php") ?>
</head>

<body id="home">
<div class='bg'></div>

<nav id="navbar" class="bar">
    <a href="index.php" class="bar">
        <button class="btn">Home</button>
    </a>
    <a href="about.php" class="bar">
        <button class="btn">About Us</button>
    </a>
    <a href="game.php" class="bar">
        <button class="btn">Game</button>
    </a>
    <a href="competitions.php" class="bar">
        <button class="btn active">Competitions</button>
    </a>
    <a href="announcements.php" class="bar">
        <button class="btn">Announcements</button>
    </a>
    <a href="contact.php" class="bar">
        <button class="btn">Contact</button>
    </a>
</nav>

<div id="outer">
    <div class='box'><h1 id="competitions">Competitions</h1></div>
    <div class='box'>
    <p id="competitionparagraph">
        Throughout the school year, the IHS Dev Team participates in many different programming compeitions including:
        <br> - ACSL Programming Contest
        <br> - PClassic Fall and Spring
        <br> - St. Bonaventure Programming Contest
        <br> - Cornell Programming Contest
    </p>
    </div>
</div>
</body>
