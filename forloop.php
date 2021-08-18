        <?php
        $tittle = 'For Loop';
        include 'includes/header.php';
        ?>
        <h1>Hello World - <?php echo $tittle ?> </h1>

        <?php
        for($count = 0; $count < 10; $count++){
            echo '<p>Hello World!</p>';
        }

        for($count = 0; $count < 10; $count++){
            echo "<p>The count is: $count</p>";
        }
        ?>
    <?php
        include 'includes/footer.php';
    ?>