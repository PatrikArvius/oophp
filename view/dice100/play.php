<?php

namespace Anax\View;

// Unset session variables
unset($_SESSION["newGame"]);
$dice100 = $_SESSION["dice100"];
?>
<article>
<h1>Dice100 the game</h1>
<table style="width:30%;margin:0 auto;border:2px solid;">
<th>Player score: </th>
<th>Computer score: </th>
<tr style="text-align:center;">
<td><?= $pScore ?></td>
<td><?= $cScore ?></td>
</tr>
</table>
<div style="width:50%;margin:0 auto;">
<form method="POST" action="play-process">
<?php if ($winner) : ?>
    <p><b>WINNER WINNER CHICKEN DINNER</b></p>
    <p><b><?= $winner ?></b></p>
    <input type="submit" name="newGame" value="New Game">
<?php else : ?>
    <?php if ($playerTurn) : ?>
    <h3><b>Players turn!</b></h3>
        <?php if ($dice100->player->hasRolled()) : ?>
        <p><b>You rolled: </b><?= $dice100->player->getLastRoll() ?></p>
        <p><b>Current score: </b><?= $currentScore ?></p>
        <input type="submit" name="save" value="Save Score">
        <?php endif; ?>
    <input type="submit" name="nextRound" value="Roll Dice">
    <input type="submit" name="newGame" value="New Game">
    <?php else : ?>
    <h3><b>Computers turn!</b></h3>
    <input type="submit" name="compRoll" value="Simulate Computer">
    <input type="submit" name="newGame" value="New Game">
    <?php endif; ?>
<?php endif; ?>
</div>
