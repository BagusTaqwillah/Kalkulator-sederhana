<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator</title>
</head>
<style>
  body{
    background-color: #66FFFF;
  }
  .container{
   align-items: center; 
  }
  .kalkulator{
    width: 40%;
    margin-left:30%;
    margin-top: 90px;
  }
  h1{
    background-color: #FFFF33;
    padding: 30px;
    text-align: center;
    border: 2px solid black;
  }
  .menu{
    background-color: #330033;
    color: white;
    padding: 30px;
    margin-top: -20px;
    height: 300px;
  }
  .hasil{
    background-color: white;
    color: black;
    height: 144px;
    padding-left: 30px;
    padding-top: 20px;
  }
</style>
<body>
  <form method="POST">
    <div class="container">
      <div class="kalkulator">
      <h1>Kalkulator</h1>
      <div class="menu">
      <table>
        <tr>
          <td>Bilangan 1</td>
          <td>:</td>
          <td><input type="number" name="x"></td>
        </tr>
        <tr>
          <td>Bilangan 2</td>
          <td>:</td>
          <td><input type="number" name="y"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" value="Hitung" class="button"></td>
        </tr>
      </table>
      <h3>Hasil</h3>
      <div class="hasil">
      <?php
      class Matematika
      {
        private $x;
        private $y;

        public function Tambah($x, $y)
        {
          $this->x = $x;
          $this->y = $y;
          $hasil = $this->x + $this->y;
          return $hasil;
        }

        public function Kali($x, $y)
        {
          $this->x = $x;
          $this->y = $y;
          $hasil = $this->x * $this->y;
          return $hasil;
        }

        public function Kurang($x, $y)
        {
          $this->x = $x;
          $this->y = $y;
          $hasil = $this->x - $this->y;
          return $hasil;
        }

        public function Bagi($x, $y)
        {
          $this->x = $x;
          $this->y = $y;
          $hasil = $this->x / $this->y;
          return $hasil;
        }

      }


      $data = new Matematika();


      if ($_POST) {
        $x = $_POST['x'];
        $y = $_POST['y'];
        echo "Hasil Tambah :".$x." + ".$y." = ".$data->Tambah($x, $y)."<br /><br />";
        echo "Hasil Kurang :".$x." - ".$y." = ".$data->Kurang($x, $y)."<br /><br />";
        echo "Hasil Kali :".$x." x ".$y." = ".$data->Kali($x, $y)."<br /><br />";
        echo "Hasil Bagi :".$x." / ".$y." = ".$data->Bagi($x, $y)."<br /><br />";

      }
      ?>
      </div>
      </div>
      </div>
    </div>
  </form>
</body>
</html>
