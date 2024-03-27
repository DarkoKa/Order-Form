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

  <div class="container align-items-center justify-content-center pt-3 pb-2 h1 text-center myStyleForMainTitle">
        <p class="companyNameStyle">Piekarnia PieczyFFko</p>
        <h6>Zamówienia Online tylko dla klientów hurtowych</h6> 
  </div>

  <div class="container-fluid d-flex align-items-center justify-content-center">
    <div class="row">
      <div class="col myStyleForm 3">
        <form action="order_form.php" method="post">
            <h4 class="p-2 pb-3 text-center myStyleTextInForm">Podaj ilość wybranych produktów:</h4> 

            <span class="myStyleTextInForm">Kajzerka (0.69 PLN/szt.):</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="text" type="text" name="kajzerki"/>
            
            <br><br>

            <span class="myStyleTextInForm">Grahamka (1.30 PLN/szt.):</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="grahamki"/>

            <br><br>

            <span class="myStyleTextInForm">Poznańska (0.99 PLN/szt.):</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="poznanska"/>

            <br><br> 

            <span class="myStyleTextInForm">Pełnoziarnista (1.35 PLN/szt.):</span>
            <input type="text" name="pelnoziarn"/>

            <br><br> 

            <span class="myStyleTextInForm">Ciabatta (1.50 PLN/szt.):</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ciabatta"/>

            <br><br> 

            <span class="myStyleTextInForm">Maślana (1.27 PLN/szt.):</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="maslana"/>
            <br><br> 
           
            <hr style="color: white;">
            
            <h4 class="p-2 pb-2 myStyleTextInForm">Podaj dane oraz adres doręczenia:</h4> 
            <span class="myStyleTextInForm">Imię i Nazwisko:</span><br>
            <input type="text" name="imie" placeholder="imię"/>
            <input type="text" name="nazwisko" placeholder="nazwisko"/>

            <br><br>

            <span class="myStyleTextInForm">Adres doręczenia:</span><br>
            <input type="text" name="ulica" placeholder="ulica"/>
            <input type="text" name="nr_domu" placeholder="nr domu/mieszkania"/>

            <br>

            <input type="text" name="miasto" placeholder="miasto"/>
            <input type="text" name="kod_pocztowy" placeholder="kod pocztowy"/>

            <br><br>

            <span class="myStyleTextInForm">Dane firmy:</span><br>
            <input type="text" name="nazwa_firmy" placeholder="Nazwa firmy"/>

            <!-- test number -->
            <input type="text"  name="nip" placeholder="NIP: 000-000-00-00"/>

            <br>

            <input type="text" name="regon" placeholder="regon"/>
            <input type="text" name="e_mail" placeholder="em@il"/>

            <br><br>

            <input type="submit" class="btn myBtnStyle mb-3" value="Wyślij zamówienie">

        </form>
      </div>
    </div>
  </div>


</body>
</html>