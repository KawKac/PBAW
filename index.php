<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PBAW</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <form class="calc" action="index.php" method="get">
      <h1>Przelicz swój kredyt</h1>
      <div class="form-group">
        <label for="howtake">
          Pożyczasz
        </label>
        <input type="text" name="how_many" value="" placeholder="Wprowadź kwotę" class="form-control" value="<?php print $money ?>">
      </div>
      <div class="form-group">
        <label for="howback">
          Oddajesz
        </label>
        <input type="text" name="how_back" value="" placeholder="Oddajesz" class="form-control">
      </div>
      <input type="submit" name="lets_calc" value="Przelicz" class="btn btn-success">
    </form>
  </body>
</html>
<?php

 ?>
