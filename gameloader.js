function load() {
    const graphics = document.createElement("script");
    graphics.src = "https://rawgit.com/vivekmyers/BlockShooter/master/graphics.js";
    const sprites = document.createElement("script");
    sprites.src = "https://rawgit.com/vivekmyers/BlockShooter/master/sprites.js";
    const game = document.createElement("script");
    game.src = "https://rawgit.com/vivekmyers/BlockShooter/master/game.js";
    const run = document.createElement("script");
    run.src = "https://rawgit.com/vivekmyers/BlockShooter/master/main.js";
    document.head.appendChild(graphics);
    document.head.appendChild(sprites);
    document.head.appendChild(game);
    document.head.appendChild(run);
    return false;
}

function start() {
    let button = document.getElementById("button");
    button.parentNode.removeChild(button);
    let can = document.createElement("canvas");
    can.id = "game";
    document.body.appendChild(can);
    can.width = 800;
    can.height = 600;
    const d = document.createElement("div");
    d.innerHTML = "<p>WASD: move</p>\n" +
        "    <p>SPACE: shoot</p>\n" +
        "    <p>P: pause</p>\n" +
        "    <p>R: restart</p>";
    document.body.appendChild(d);
    window.main();
}