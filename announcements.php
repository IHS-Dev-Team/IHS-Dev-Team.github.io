<!DOCTYPE html>

<head>
    <title>IHS Dev Team</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="utils/navbar.js"></script>
</head>

<?php
    if ($_POST) {
        $content = $_POST['content'];
        $time = `date +"%D [%H:%M]"`;
        $post = <<< EOF
<div class='box'>
    <h3>$time</h3>
    <p>$content</p>
</div>
EOF;
        $handle = fopen('.posts', 'a+');
        fwrite($handle, $post);
    }  
?>

<body id="home">
<div class='bg'></div>
<nav id="navbar" class="bar">
    <a href="index.html" class="bar">
        <button class="btn">Home</button>
    </a>
    <a href="about.html" class="bar">
        <button class="btn">About Us</button>
    </a>
    <a href="game.html" class="bar">
        <button class="btn">Game</button>
    </a>
    <a href="competitions.html" class="bar">
        <button class="btn">Competitions</button>
    </a>
    <a href="announcements.php" class="bar">
        <button class="btn active">Announcements</button>
    </a>
    <a href="contact.html" class="bar">
        <button class="btn">Contact</button>
    </a>
</nav>
<div id="outer">
    <div class='box'><h1>Announcements</h1></div>
    <?=`cat .posts`;?>
    <div class='box'>
        <form method='post'>
        <textarea id='content' name='content' rows='4' cols='100%'></textarea><br>
        <button type='submit'>Post</button>
        </form>
    </div>
</div>
</body>
