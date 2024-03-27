<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name=keywords content="" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP odc. 1 Pasja Informatyki. Piekarnia</title>
</head>

<body>
 
    <h1>Zamówienia online</h1>
    <h3>Wpisz liczbę ciastek i złóż zamówienie</h3>

    <form action="order.php" method="post">
        Ilość zamówionych pączków (0.99 PLN/szt.):
        <input type="text" name="paczki"/>

        <br><br>

        Wpisz liczbę grzebieni (1.30 PLN/szt.):
        <input type="text" name="grzebienie">

        <br><br>

        <input type="submit" value="Wyślij zamówienie">
    </form>
    
</body>
</html>