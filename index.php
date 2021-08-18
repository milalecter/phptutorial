    <?php 
    $tittle = 'Home';
    include 'includes/header.php'; 
    ?>  <!-- incluye todo el código que se encuentra en el archivo 'header' -->
        <h1>Hello World - <?php echo $tittle ?> </h1>
        <?php
            $name = 'Camila Franco';
            $age = 28;
            echo 'Hello PHP! <br/>';
            echo "<p>My name is $name</p>";
            echo "<p>I am $age years old</p>";
        ?>
    <?php
        include 'includes/footer.php';
    ?>