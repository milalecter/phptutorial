        <?php
        $tittle = 'Functions';
        include 'includes/header.php';
        ?>
        <h1>Hello World - <?php echo $tittle ?> </h1>
        <?php
            $num = 500;

            function writeMessage(){
                echo "You are a nice person. Have a nice time!<br/>";
            }
            writeMessage(); //llamar la función
            echo '<hr/>';

            function addFunction($num1, $num2){
                $sum = $num1 + $num2;
                echo "The sum of $num1 and $num2 is: $sum <br/>";
            }
            addFunction(10, 20);

            echo '<hr/>';

            function changeNum(&$num){
                $num = $num + 10;
            }
            changeNum($num);
            echo "Num was 500 and now is $num <br/>";

            echo '<hr/>';

            function returnProduct($num1, $num2){
                $prod = $num1 * $num2;
                return $prod;
            }
            $return_value = returnProduct(5, 6);
            echo "The product of 5 * 6 is $return_value <br/>";

        ?>
    <?php
        include 'includes/footer.php';
    ?>