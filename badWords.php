<!-- Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
    $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, maxime rerum vel reiciendis eos earum in pariatur expedita asperiores quos perspiciatis nulla explicabo recusandae itaque dolorum voluptatibus ipsum facilis eveniet!";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>    
</head>
<body>
    <h2>Paragrafo: </h2>
    <p><?php echo $string; ?></p>

    <p><strong>Lunghezza: </strong><?php echo strlen($string); ?></p>

    <form>
        <input type="text" name="word" placeholder="Inserisci la parola da censurare">
        <button type="submit">Censura</button>
    </form>
        
    <?php
    
        if (isset( $_GET['word'])) {
            $string = str_replace($_GET['word'], '***', $string);
            echo '<h2>Paragrafo modificato: </h2>
                <p>' . $string .'</p>

                <p><strong>Lunghezza: </strong>' . strlen($string) . '</p>';

        }
    
    
    ?>  
    
</body>
</html>