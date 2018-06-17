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
            <br><a><img><b><i><sup><sub><strong><em><h1><h2><h3><h4><mark><small><ins><del><p><div><video><iframe><object><table><source><tr><td><th>');
        $handle = fopen('.posts', 'w');
        fwrite($handle, $thread);
    }  
?>
<!DOCTYPE php>

<head>
    <title>IHS Dev Team</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="utils/navbar.js"></script>
<? include("meta.php") ?>
    <style>
        textarea {
            width: 100%;
        }
    </style>
</head>

<body id="home">
<div class='bg'></div>
<? include("navbar.php") ?>
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
