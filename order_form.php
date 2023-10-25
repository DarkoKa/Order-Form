<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name=keywords content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>  
    <?php
        $kajzerki = $_POST['kajzerki'];
        $grahamki = $_POST['grahamki'];
        $poranne = $_POST['poranne'];

        
        $imie = $_POST['imie'];

        $il_sztuk = $kajzerki + $grahamki + $poranne;
        $razem = 0.69 * $kajzerki + 1.30 * $grahamki + 0.99 * $poranne;

echo<<<END
         <h3>Podsumowanie zamówienia</h3>

         <table border="1" cellpadding="10" cellspacing="0"
            <tr>
                <td>Kajzerki (0.69 PLN/szt.)</td>
                <td>$kajzerki</td>
            </tr>
            <tr>
                <td>Grahamki (1.30 PLN/szt.)</td>
                <td>$grahamki</td>
            </tr>
            <tr>
                <td>Poranne (1.30 PLN/szt.)</td>
                <td>$poranne</td>
            </tr>
            <tr>
                <td>Ilość sztuk</td>
                <td>$il_sztuk</td>
            </tr>
            <tr>
                <td>Razem</td>
                <td>$razem</td>
            </tr>
            <tr>
            <td>Dane kontaktowe</td>
            <td>$imie</td>
        </tr>
         </table>
         <br/>
         <a href="index.php">Powrót do strony głównej</a>
END;
?>
</body>

</html>