        <?php
        $tittle = 'String Manipulation';
        include 'includes/header.php';
        ?>
        <h1>Hello World - <?php echo $tittle ?> </h1>
        <?php
            $phrase1 = "student who came late";
            $phrase2 = "in class, stand with Rock";
            $name = "camila franco";

            echo $phrase1 . " ". $phrase2; // . elemento de concatenación que une ambas variables y " " agrega un espacio entre ambos textos
            echo $phrase1 . ", named Tiffany, ". $phrase2.'<br/>'; //br para iniciar la oración en la siguiente línea
            echo '<hr/>'; //pone una línea :v

            echo 'Uppercase first letter: ' . ucfirst($name).'<br/>'; // ucfirst = primera letra de toda la oración
            echo 'Uppercase firs letter of each word: ' . ucwords($name). '<br/>'; //ucwords = primera letra de cada palabra
            echo 'Uppercase: '. strtoupper($name). '<br/>'; //strtoupper = toda la oración
            echo 'Lowecase: ' . strtolower("THIS WAS ALL UPPERCASE"). '<br/>';//strtolower = toda la oración en minúscula
            echo '<hr/>';

            echo 'Repeat String: ' . str_repeat('camila ', 10).'<br/>'; //str_repeat 'a string', this times
            echo 'Repeat String: ' . ucwords(str_repeat('camila ', 10)).'<br/>'; //utiliza la función repetir dentro de ucwords
            echo 'Get a Substring: ' . substr($name, 3, 8). '<br/>'; //muestra los elementos entre el 3 y el 8 'ila fran'
            echo 'Get position of "r" in String: '. strpos($name, 'r'). '<br/>'; //encuentra la posición de un elementro dentro de la matriz w=8
            echo 'Find Character "f" in String: '. strchr($name, 'f'). '<br/>'; //empieza desde el elemento requerido
            echo 'Find Lenght of String: '. strlen($name). '<br/>'; //dice el largo de la frase/matriz
            echo '<hr/>';

            echo 'Without Trim: '. "A". " B C D ". "E". '<br/>';
            echo 'Trim spaces on both sides: '. "A". trim(" B C D "). "E". '<br/>'; //trim= cortar
            echo 'Trim spaces to the left: '. "A". ltrim(" B C D "). "E". '<br/>'; //cortar a la izquierda
            echo 'Trim spaces to the right: '. "A". rtrim(" B C D "). "E". '<br/>'; //cortar a la derecha
            echo '<hr/>';

            echo 'Replace string with another: '. str_replace("stand", "sit", $phrase2). '<br/>'; // remplaza stand con sit en la variable phrase2

        ?>
    <?php
        include 'includes/footer.php';
    ?>