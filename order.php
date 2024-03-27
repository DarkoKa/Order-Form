<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name=keywords content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP odc. 1 Pasja Informatyki. Podsumowanie Zamówienia</title>
</head>

<body>
    <?php
        $paczki = $_POST['paczki'];
        $grzebienie = $_POST['grzebienie'];
        $il_sztuk = $paczki + $grzebienie;
        $razem = 0.99 * $paczki + 1.30 * $grzebienie;  

echo <<<END
         <h3>Podsumowanie zamówienia</h3>

         <table border="1" cellpadding="10" cellspacing="0"
            <tr>
                <td>Pączek (0.99 PLN/szt.)</td>
                <td>$paczki</td>
            </tr>
            <tr>
                <td>Grzebienie (1.30 PLN/szt.)</td>
                <td>$grzebienie</td>
            </tr>
            <tr>
                <td>Ilość sztuk</td>
                <td>$il_sztuk</td>
            </tr>
            <tr>
                <td>Razem</td>
                <td>$razem</td>
            </tr>
         </table>
         <br/>
         <a href="index.php">Powrót do strony głównej</a>
END;
?>
</body>

</html>