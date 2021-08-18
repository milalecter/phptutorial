        <?php
        $tittle = 'While Loop';
        include 'includes/header.php';
        ?>
        <h1>Hello World - <?php echo $tittle ?> </h1>
        <h1>While Loop</h1>
        <?php
            $grade = 0;
            //Loop infinito que come mucha máquina
            //while($grade < 10){ 
                //echo '<p>I am less than 10!</p>'
            //}
            while($grade < 10){  //Pre-condition loop
                echo '<p>I am less than 10!</p>';
                $grade++;
            }

            echo 'EXIT LOOP!';
        ?>
        <h1>Do While Loop</h1>
        <?php
            $grade = 0;
            do{ //post-condition loop
                echo '<p>I am a Do While Loop</p>';
                $grade++;
            }while($grade < 10);
            
            echo 'EXIT LOOP!';
        ?>
    <?php
        include 'includes/footer.php';
    ?>