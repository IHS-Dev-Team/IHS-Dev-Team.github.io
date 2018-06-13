<?php
    if ($_POST) {
        header("Location: " . $_SERVER['REQUEST_URI']);
        $content = $_POST['content'];
        $time = `date +"%D [%H:%M]"`;
        $post = <<< EOF
<div class='box'>
    <h3>$time</h3>
    <p>$content</p>
</div>
EOF;
        $thread = strip_tags($post . `cat .posts`, '
            <br><a><img><b><i><sup><sub><strong><em><h1><h2><h3><h4><mark><small><ins><del><p><div><video><iframe><object>');
        $handle = fopen('.posts', 'w');
        fwrite($handle, $thread);
    }  
?>

<!DOCTYPE html>

<head>
    <title>IHS Dev Team</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="utils/navbar.js"></script>
    <style>
        textarea {
            width: 100%;
        }
    </style>
</head>

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
    <div class='box'>
        <form method='post'>
        <textarea id='content' name='content' rows='4'></textarea><br>
        <button type='submit'>Post</button>
        </form>
    </div>
    <?=`cat .posts`;?>
</div>
</body>
