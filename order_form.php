<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name=keywords content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie zamówienia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</head>

<body>  
    <?php
        $kajzerki = $_POST['kajzerki'];
        $grahamki = $_POST['grahamki'];
        $poznanska   = $_POST['poznanska'];
        $pelnoziarn = $_POST['pelnoziarn'];
        $ciabatta = $_POST['ciabatta'];
        $maslana = $_POST['maslana'];
        
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $ulica = $_POST['ulica'];
        $nr_domu = $_POST['nr_domu'];
        $miasto = $_POST['miasto'];
        $kod_pocztowy = $_POST['kod_pocztowy'];
        $nip = $_POST['nip'];
        $e_mail = $_POST['e_mail'];

        $razem = $kajzerki + $grahamki + $poznanska + $pelnoziarn + $ciabatta + $maslana;

        $suma = 0.69 * $kajzerki + 1.30 * $grahamki + 0.99 * $poznanska + 1.35 * $pelnoziarn + 1.50 * $ciabatta + 1.27 * $maslana;

echo<<<END

<div class="container-fluid d-flex align-items-center justify-content-center">
<div class="row">
     
<table class="table">
<thead>
  <tr>
    <th scope="col" colspan="2">Podsumowanie zamówienia</th>
  </tr>
</thead>
<tbody>
  <tr>
      <td>Kajzerki (0.69 PLN/szt.)</td>
      <td>$kajzerki</td>
  </tr>
  <tr>
      <td>Grahamki (1.30 PLN/szt.)</td>
      <td>$grahamki</td>
  </tr>
  <tr>
      <td>Poznańskie (0.99 PLN/szt.)</td>
      <td>$poznanska</td>
  </tr>
  <tr>
      <td>Pełnoziarnista (1.35 PLN/szt.)</td>
      <td>$pelnoziarn</td>
  </tr>
  <tr>
      <td>Ciabatta (1.50 PLN/szt.)</td>
      <td>$pelnoziarn</td>
  </tr>
  <tr>
      <td>Maślana (1.27 PLN/szt.)</td>
      <td>$maslana</td>
  </tr>
  <tr>
      <td>Razem</td>
      <td>$razem</td>
  </tr>
  <tr>
      <td>Suma</td>
      <td>$suma</td>
   </tr>
</tbody>

<thead>
  <tr>
    <th scope="col" colspan="2">Podany adres do zamówienia</th>
  </tr>
</thead>
<tbody>
   <tr>
      <td>Imię</td>
      <td>$imie</td>
   </tr>
   <tr>
      <td>Nazwisko</td>
      <td>$nazwisko</td>
   </tr>
   <tr>
      <td>Ulica</td>
      <td>$ulica</td>
   </tr>
   <tr>
      <td>Miasto</td>
      <td>$miasto</td>
   </tr>
   <tr>
      <td>Kod pocztowy</td>
      <td>$kod_pocztowy</td>
   </tr>

<thead>
  <tr>
    <th scope="col" colspan="2">Pozostałe informacje</th>
  </tr>
</thead>
<tbody>
   <tr>
      <td>NIP</td>
      <td>$nip</td>
   </tr>
   <tr>
      <td>em@il</td>
      <td>$e_mail</td>
   </tr>
</tbody>
</div>
</div>             
         
END;
?>  
</body>

</html>

