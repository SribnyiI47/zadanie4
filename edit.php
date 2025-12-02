<?php
include "config.php";
$id=$_GET['id'];
$q=$pdo->prepare("SELECT * FROM characters WHERE id=?");
$q->execute([$id]);
$c=$q->fetch();

if($_SERVER['REQUEST_METHOD']=="POST"){
 $s=$pdo->prepare("UPDATE characters SET nickname=?,class=?,strength=?,intelligence=?,agility=?,level=? WHERE id=?");
 $s->execute([$_POST['nickname'],$_POST['class'],$_POST['strength'],$_POST['intelligence'],$_POST['agility'],$_POST['level'],$id]);
 header("Location: index.php");
}
?>
<html><body>
<h3>Edycja</h3>
<form method='POST'>
Nick:<input name='nickname' value='<?= $c['nickname'] ?>'><br>
Klasa:<input name='class' value='<?= $c['class'] ?>'><br>
Sila:<input name='strength' value='<?= $c['strength'] ?>'><br>
Int:<input name='intelligence' value='<?= $c['intelligence'] ?>'><br>
Zwin:<input name='agility' value='<?= $c['agility'] ?>'><br>
Lvl:<input name='level' value='<?= $c['level'] ?>'><br>
<button>Zapisz</button>
</form>
</body></html>