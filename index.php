<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name=keywords content="" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Order Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
  </head>

<body class="bodyImg">

  <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 600px;">
    <div class="row">
        <div class="col-12 p-3 myStyleForm">
          <h2>Zamówienia online</h2>   
          <h5>Wybierz produkty z wybieranych poniżej</h5> <br>
          
        <form action="order_form.php" method="post" >
            <span class="myStyleTextInForm">Podaj liczbę (0.99 PLN/szt.)</span>: 
            <br>
            <input class="text" type="text" name="paczki"/> 
            <br><br>
            <span class="myStyleTextInForm">Grachamki (1.30 PLN/szt.):</span>: 
            <br>
            <input type="text" name="grzebienie"/>  
            <br><br> 
            <input type="submit" class="btn myBtnStyle mb-3" value="Wyślij zamówienie">
          </form>

        </div>
    </div>
  </div>

</body>
</html>