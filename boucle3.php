<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Menu deroulant</title>
</head>
<body>

<p align="center">
        <?= "---------------------- Aucune boucle ------------------------------" ?>
</p>

<form>
<p align="center">
<select name="compter">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    
</select>
</p>

</form>

<p align="center">
        <?= "---------------------- Avec boucle FOR ------------------------------" ?>
</p>


<form>
<p align="center">
<select name="compter">
    <?php
        for($i=1; $i < 51; $i++) {
            echo '<option value=" '.$i.' ">' .$i.'</option>';

        }
    ?>


</select>
</p>

</form>

</body>
</html>