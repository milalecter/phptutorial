        <?php
        $tittle = 'Array and Printouts';
        include 'includes/header.php';
        ?>
        <h1>Hello World - <?php echo $tittle ?> </h1>
        <?php
            $num = 3; //a variable

            $numbers = array(1,2,3,4,5,55,6,7,8,9,10); //an array, php permite almacenar diferentes tipos de items dentro de la misma matriz

            echo $numbers[5]; //php al igual que java inicia con 0 como primer item de una matriz

            echo "<p>$numbers[9]</p>";
            
            $size = count($numbers);
            echo "<p>Array Numbers is size is: $size</p>";

            for($count = 0; $count < $size; $count++){
                echo "<p>$numbers[$count]</p>";
            }
        ?>
    <?php
        include 'includes/footer.php';
    ?>