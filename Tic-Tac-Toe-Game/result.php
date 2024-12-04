<?php
require_once "templates/header.php";

if (!playersRegistered()) {
    header("location: index.php");
}

resetBoard();
?>

<table class="wrapper" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            <div class="welcome">
                <h1>
                    <?php
                    if (isset($_GET['player']) && $_GET['player']) {
                        echo "Гравець " . playerName($_GET['player']) . " переміг!";
                    } else {
                        echo "Нічия!";
                    }
                    ?>
                </h1>

                <div class="player-name">
                    <?php echo playerName('x')?>: <b><?php echo score('x')?></b>
                </div>

                <div class="player-name">
                    <?php echo playerName('o')?>: <b><?php echo score('o')?></b>
                </div>

                <a href="play.php">Грати ще раз</a><br />

                <a href="index.php" class="reset-btn">Скинути</a>
            </div>
        </td>
    </tr>
</table>

</body>
</html>