<?php
$submit = filter_input(INPUT_POST, 'submit');
$gender = filter_input(INPUT_POST, "gender");
$email = filter_input(INPUT_POST, "email");

?>
 
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($submit)) { ?>
    <p>formulář byl odeslán a proto ho už znovu nezobrazuji!</p>
    <p>Odeslaný email: xx@xx.cz</p>
    <p>Zadané pohlaví: xxx</p>
<?php
} else { ?>
    <p>stránka byla načtena bez odeslaného formuláře a proto zobrazuji formulář</p>
 
    <form action="index.php" method="post">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email">
 
        <h2>Pohlaví</h2>
        <label for="gender-male">Muž</label>
        <input type="radio" name="gender" value="male" id="gender-male">
 
        <label for="gender-female">Žena</label>
        <input type="radio" name="gender" value="female" id="gender-female">
        
        <label for="gender-none">Nespecifikováno</label>
        <input type="radio" name="gender" value="none" id="gender-none">
        <input type="submit" name="submit" value="Přidat do databáze">

        </form>
        <?php
}
?>

</body>
</html>