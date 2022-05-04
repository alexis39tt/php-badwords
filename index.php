<?php
$sentence = "Che caldo oh, quanto cavolo di caldo che fa!";
$word = (isset($_GET['word']) ? $_GET['word']: '');
$censored_sentence = str_replace($word, '***', $sentence);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parola censurata</title>
    <style>
        body {
            background: #a8a8a8;
            text-align: center;
            padding: 200px;
        }
        h1, h2, p, input, span {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        span{
            color: #008022;
        }
        input{
            background: #c2c2c2;
            border: 2px solid black;
            padding: 5px;
            outline: none;
        }
        input.t {
            width: 300px;
        }
        input.s{
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div id="root">
        <h1><span>Frase originale: </span><?php echo $sentence ?></h1>
        <p>Lunghezza paragrafo: <?php echo strlen($sentence)?></p>
        <form action="" method="get">
            <input type="text" name="word" placeholder="Inserisci parola da censurare" class="t" autofocus>
            <input type="submit" value="Invia" class="s">
        </form>
        <h2><span>Frase censurata: </span><?php echo $censored_sentence ?></h2>
        <p>Lunghezza paragrafo: <?php echo strlen($censored_sentence); ?></p>
</body>

</html>