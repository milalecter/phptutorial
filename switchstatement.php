        <?php
        $tittle = 'Switch Statement';
        include 'includes/header.php';
        ?>
        <h1>Hello World - <?php echo $tittle ?> </h1>
        <?php
        $grade = 'B';

        switch($grade){
            case 'A';
                echo '<h2 style="color: green">You are a SUPERSTAR</h2>';
                break;
            
            case 'B';
                echo '<h2 style="color: yellow">You did WELL</h2>';
                break;
            
            case 'C';
                echo '<h2 style="color: red">You have FAILED</h2>';
                break;
        }
        ?>
    <?php
        include 'includes/footer.php';
    ?>