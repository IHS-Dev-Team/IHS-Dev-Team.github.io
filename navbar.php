<?php
function activity($check) {
    if ($_SERVER['PHP_SELF'] == $check) {
        return "active";
    } else {
        return "";
    }
}
?>

<nav id="navbar" class="bar">
    <a href="/" class="bar">
    <a href="/" class="bar">
    <button class="btn <?=activity('/index.php')?>">Home</button>
    </a>
    <a href="about.php" class="bar">
        <button class="btn <?=activity('/about.php')?>">About Us</button>
    </a>
    <a href="game.php" class="bar">
        <button class="btn <?=activity('/game.php')?>">Game</button>
    </a>
    <a href="competitions.php" class="bar">
        <button class="btn <?=activity('/competitions.php')?>">Competitions</button>
    </a>
    <a href="announcements.php" class="bar">
        <button class="btn <?=activity('/announcements.php')?>">Announcements</button>
    </a>
    <a href="contact.php" class="bar">
        <button class="btn <?=activity('/contact.php')?>">Contact</button>
    </a>
</nav>
