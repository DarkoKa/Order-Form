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

<body>

  <div class="pt-3 pb-2 h1 text-center myStyleForMainTitle">
    <p>Pieczyffko</p>
    <p>Zamówienia Online</p>
  </div>

  <div class="container d-flex align-items-center justify-content-center">
    <div class="row">
      <div class="col myStyleForm">
        <form action="order_form.php" method="post">
            <h3 class="p-2 pb-3 myStyleTextInForm">Wybierz produkty i podaj ilość:</h3> 
            <span class="myStyleTextInForm">Kajzerka (0.69 PLN/szt.):</span>
            &nbsp; <input class="text" type="text" name="kajzerki"/>
            <br><br>
            <span class="myStyleTextInForm">Grahamki (1.30 PLN/szt.):</span>
            <input type="text" name="grahamki"/>
            <br><br>
            <span class="myStyleTextInForm">Poranna (0.99 PLN/szt.):</span>
            &nbsp; <input type="text" name="poranne"/>
            <br><br> 
            <input type="submit" class="btn myBtnStyle mb-3" value="Wyślij zamówienie">
            <hr style="color: white;">
            
            <h4 class="p-2 pb-3 myStyleTextInForm">Podaj dane oraz adres doręczenia</h4> 
            <span class="myStyleTextInForm">Imię:</span>
            &nbsp; <input type="text" name="imie"/>
            <br><br> 
            <span class="myStyleTextInForm">Nazwisko:</span>
            &nbsp; <input type="text" name="nazwisko"/>
            <br><br> 
            <span class="myStyleTextInForm">Ulica:</span>
            &nbsp; <input type="text" name="Ulica"/>
            <br><br> 
            <span class="myStyleTextInForm">Kod pocztowy</span>
            &nbsp; <input type="text" name="kod_pocztowy"/>
            <br><br> 
            
        </form>
      </div>
    </div>
  </div>

  <!-- <div class="container d-flex align-items-center justify-content-center"> 
    <div class="row">
      <div class="col mb-5 myStyleForm">
        <form action="order_form.php" method="post">
            <h4 class="p-2 pb-3 myStyleTextInForm">Podaj adres do zamówienia</h4> 
            <span class="myStyleTextInForm">Kajzerka (0.69 PLN/szt.):</span>
            &nbsp; <input class="text" type="text" name="kajzerki"/>
            <br><br>
            <span class="myStyleTextInForm">Grahamki (1.30 PLN/szt.):</span>
            <input type="text" name="grahamki"/>
            <br><br>
            <span class="myStyleTextInForm">Poranna (0.99 PLN/szt.):</span>
            &nbsp; <input type="text" name="poranne"/>
            <br><br> 
           
            <br><br> 
            <input type="submit" class="btn myBtnStyle mb-3" value="Wyślij zamówienie">
        </form>
      </div>
    </div>
  </div>-->

</body>
</html>