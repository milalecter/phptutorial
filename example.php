<!DOCTYPE html>
<html lang="en">
    <head>
        <meta chartset= "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHP Primer - Index</title>
    </head>
    <body>
        <h1>Hello World - HTML Primer</h1>
        <?php
        $name = 'Camila Franco'; // $ se usa para declarar variables
        $age = 28;
        echo 'Hello PHP';
        echo '<br/>'; //se pueden llamar estilos y cosas del html entre ' '
        echo $name;
        echo '<h1>My name is: '.$name.' and i am '.$age.' years old</h1>'; //'..' está concatenando la variable $name, llamándola dentro de otra etiqueta
        echo '</br>';
        echo "<h1>My name is: $name and i am $age years old</h1>"; //usando " " no es necesario llamar las variables con '. .'
        ?>
    <?php
        include 'includes/footer.php';
    ?>