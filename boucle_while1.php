<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<p align="center">
    <?= "----------------- incrementation +1 -------------------"; ?>
</p>

<form>
<p align="center">
<select name="compter">
<?php
$i= 1;      //initialisation de mon compteur
while($i<=10){      //tant que "$i" est inferieur a 10... continue
     echo '<option value=" '.$i.' ">' .$i.'</option>';
     $i++;  //incrementation dans l'instruction
}

?>


</select>
</p>

</form>

<p align="center">
    <?= "----------------- incrementation +3 -------------------"; ?>
</p>


<form>
<p align="center">
<select name="compter">
<?php
$i= 1;      //initialisation de mon compteur
while($i<=20){      //tant que "$i" est inferieur a 10... continue
     echo '<option value=" '.$i.' ">' .$i.'</option>';
     $i+=3;  //incrementation dans l'instruction
}

?>


</select>
</p>

</form>


<p align="center">
    <?= "------------------ Decrementation -1 --------------------"; ?>
</p>


<form>
<p align="center">
<select name="compter">
<?php
$i= 10;      //initialisation de mon compteur
while($i>=1){      //tant que "$i" est inferieur a 10... continue
     echo '<option value=" '.$i.' ">' .$i.'</option>';
     $i--;  //incrementation dans l'instruction
}

?>


</select>
</p>

</form>

</body>
</html>