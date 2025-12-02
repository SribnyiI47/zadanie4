<?php
include "config.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
 $s=$pdo->prepare("INSERT INTO characters(nickname,class,strength,intelligence,agility,level) VALUES(?,?,?,?,?,?)");
 $s->execute([$_POST['nickname'],$_POST['class'],$_POST['strength'],$_POST['intelligence'],$_POST['agility'],$_POST['level']]);
 header("Location: index.php");
}
?>
<html><body>
<h3>Nowa postać</h3>
<form method='POST'>
Nick:<input name='nickname'><br>
Klasa:<input name='class'><br>
Siła:<input name='strength'><br>
Int:<input name='intelligence'><br>
Zwin:<input name='agility'><br>
Lvl:<input name='level'><br>
<button>Zapisz</button>
</form>
</body></html>