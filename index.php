<?php
include "config.php";
$q = $pdo->query("SELECT * FROM characters");
$all = $q->fetchAll();
?>
<html><body>
<h2>Lista postaci</h2>
<a href='create.php'>Dodaj</a>
<table border=1>
<tr><td>ID</td><td>Nick</td><td>Klasa</td><td>Sila</td><td>Int</td><td>Zwin</td><td>Lvl</td><td>Akcje</td></tr>
<?php foreach($all as $c){ ?>
<tr>
<td><?= $c['id'] ?></td>
<td><?= $c['nickname'] ?></td>
<td><?= $c['class'] ?></td>
<td><?= $c['strength'] ?></td>
<td><?= $c['intelligence'] ?></td>
<td><?= $c['agility'] ?></td>
<td><?= $c['level'] ?></td>
<td>
<a href='edit.php?id=<?= $c['id'] ?>'>E</a> |
<a href='delete.php?id=<?= $c['id'] ?>'>X</a>
</td>
</tr>
<?php } ?>
</table>
</body></html>