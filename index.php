<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name=keywords content="" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP odc. 1 Pasja Informatyki. Piekarnia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

  <div class="container d-flex align-items-center justify-content-center" style="height: 600px;">
    <div class="row">
      <div class="col border border-warning p-3">
          <h3 class="text-danger">Zamówienia online</h3>
          <h4>Wybierz produkty z wybieranych poniżej</h4> 
          
          <form action="order_form.php" method="post" >
            Ilość zamówionych pączków (0.99 PLN/szt.):
            <input class="text-center" type="text" name="paczki"/> 
            <br><br> 
            Wpisz liczbę grzebieni (1.30 PLN/szt.):
            <input type="text" name="grzebienie"/>  
            <br><br> 
            <input type="submit" class="btn btn-primary mb-3" value="Wyślij zamówienie">
      </div>
    </div>
  </div>

</body>
</html>