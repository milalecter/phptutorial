        <?php
        $tittle = 'Date and Time Manipulation';
        include 'includes/header.php';
        ?>
        <h1>Hello World - <?php echo $tittle ?> </h1>
        <?php
        $datenow = getdate();
        echo "Today's Date: <br/>";
        echo $datenow['mday']. '</br>'; //mday = month day, el día del mes
        echo $datenow['mon']. '</br>'; //mon = month
        echo $datenow['year']. '</br>';
        echo "Today's Date: ". $datenow['mday'] . '/'. $datenow['mon']. '/'. $datenow['year'];
        echo '<hr/>';
        echo time(). '</br>';
        print date("m/d/y G.i:s<br>", time()). '</br>';
        print "Today is ";
        print date("j of F Y, \a\\t g.i a", time()); 
        ?>
    <?php
        include 'includes/footer.php';
    ?>