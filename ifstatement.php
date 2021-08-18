        
        <?php
        $tittle = 'If Statement';
        include 'includes/header.php';
        //An If Statement that will carry out an action based on the value of the variable
        echo "<h1>Hello World - $tittle </h1>";

        $grade = 30;

        if($grade >= 50){
            echo '<h3 style="color: green">You have passed</h3>'; 
        }
        else{
            echo '<h3 style="color: red">You have failed</h3>';
        }

        //If-Else IF-Else
        $grade = 'A';

        if($grade == 'A'){
            echo '<h2>You are a SUPERSTAR</h2>';
        }
        elseif($grade == 'B'){
            echo '<h2>You did WELL</h2>';
        }
        else{
            echo '<h2>You have FAILED</h2>';
        }
        ?>

    <?php
        include 'includes/footer.php';
    ?>