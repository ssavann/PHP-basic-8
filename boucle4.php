<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Menu deroulant</title>
</head>
<body>


<p align="center">
        <?= "---------------------- Avec boucle FOR ------------------------------"; ?>
</p>


<form>
<p align="center">
<select name="compter">
    <?php
        for($i=1; $i < 51; $i = $i + 3) {
            echo '<option value=" '.$i.' ">' .$i.'</option>';

        }
    ?>


</select>
</p>

</form>

<p align="center">
        <?= "---------------------- Avec boucle FOR decrementation ------------------------------"; ?>
</p>

<form>
<p align="center">
<select name="compter">
    <?php
        for($i=10; $i >= 1; $i = $i - 1) {
            echo '<option value=" '.$i.' ">' .$i.'</option>';

        }
    ?>


</select>
</p>

</form>


<p align="center">
        <?= "---------------------- Avec boucle FOR += 2 ------------------------------"; ?>
</p>

<form>
<p align="center">
<select name="compter">
    <?php
        for($i=10; $i <= 20; $i += 2) {
            echo '<option value=" '.$i.' ">' .$i.'</option>';

        }
    ?>


</select>
</p>

</form>

</body>
</html>