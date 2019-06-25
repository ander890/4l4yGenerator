<?php
require_once('4layGenerator.php');
$type = filter_var(isset($_POST['type']) ? $_POST['type'] : null, FILTER_SANITIZE_STRING);
$alay = filter_var(isset($_GET['alay']) ? $_GET['alay'] : null, FILTER_SANITIZE_STRING);
$resultAlay = filter_var(isset($_GET['ralay']) ? $_GET['ralay'] : null, FILTER_SANITIZE_STRING);

if($type == "alay"){
    $text = filter_var($_POST['text'], FILTER_SANITIZE_STRING);
    $hasil = alayGenerator($text);
    header("LOCATION: index.php?ralay=$hasil&alay=$text");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>4LAy Generator</title>
  </head>
  <body>
    <center><h1>4L4Y GENERATOR BY DVLPR</h1><p>Sekarang jadi 4l4y tidak perlu perjuangan!</center>
    <br>
    <br>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <h2> Jadikan Semua 4l4y ! </h2>
    <form method="POST">
    <input name="type" value="alay" type="hidden">
    <label> Masukkan kata-kata </label>
    <input class="form-control" name="text" type="text" placeholder="text biasa" value="<?= $alay ?>" required>
    <br>
    <button type="submit" class="btn btn-success btn-block"> Jadikan 4l4y </button>
    </form>
    <br>
    <br>
    <h3> 4LaY RESULT <h3>
    <input readonly class="form-control" value="<?= $resultAlay ?>" placeholder="hasil">
    </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>