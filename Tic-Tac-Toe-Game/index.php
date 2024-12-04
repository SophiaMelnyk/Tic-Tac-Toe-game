<?php
require_once "./templates/header.php";
?>

<form method="post" action="register-players.php">
    <div class="welcome">
        <h1>Гра «Хрестики-Нулики»</h1>
        <h2>Будь ласка, введіть ваші імена</h2>

        <div class="p-name">
            <label for="player-x"> Гравець №1</label>
            <input type="text" id="player-x" name="player-x" required />
        </div>

        <div class="p-name">
            <label for="player-o"> Гравець №2</label>
            <input type="text" id="player-o" name="player-o" required />
        </div>

        <button type="submit">Почати</button>
    </div>
</form>

<?php
require_once "./templates/footer.php";