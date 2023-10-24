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

<!-- <div class="bg-image" style="background-image: url('bread.png'); min-height: 650px"> -->

  <div class="pt-5 pb-5 h1 text-center myStyleForMainTitle">
    <p>Pieczyffko</p>
    <p>Zamówienia Online</p>
  </div>

  <div class="container d-flex align-items-center justify-content-center">
    <div class="row">
      
      <div class="col mb-5 myStyleForm">
        <form action="order_form.php" method="post">
            <h2 class="p-2 pb-3 myStyleTextInForm">Wybierz produkty i podaj ilość:</h2> 
            <span class="myStyleTextInForm">Kajzerka (0.69 PLN/szt.):</span>
            &nbsp; <input class="text" type="text" name="kajzerki"/>
            <br><br>
            <span class="myStyleTextInForm">Grahamki (1.30 PLN/szt.):</span>
            <input type="text" name="grahamki"/>
            <br><br>
            <span class="myStyleTextInForm">Poranna (0.99 PLN/szt.):</span>
            &nbsp; <input type="text" name="poranne"/>
            <br><br> 
            <span class="myStyleTextInForm">Imię:</span>
            &nbsp; <input type="text" name="imie"/>
            <br><br> 
            <input type="submit" class="btn myBtnStyle mb-3" value="Wyślij zamówienie">
        </form>
      </div>

    </div>
  </div>


</body>
</html>