<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=288b53ba&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-primary bg-primary">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container_new" style=background-image:url('5.jpg');>
<div class="row mt-3 text-center">
  <div class="col">
<h1>FILM KEREN</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="foto11.webp" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Train to busan</h5>
        <p class="card-text">Seok-woo dan putrinya yang berulang tahun pergi ke busan dengan kereta untuk menemui istrinya.Tapi perjalanan tersebut berubah menjadi mimpi buruk kala mereka terjebak di tengah-tengah wadah zombie.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="foto22.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Tiger</h5>
        <p class="card-text"> Seorang agen RAW Tiger bergabung dengan Zoya untuk menyelamatkan sekelompok perawat yang disandera oleh komplotan teroris.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="foto33.webp" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Horor</h5>
        <p class="card-text">Film horor adalah sebuah genre film yang berusaha untuk memancing emosi berupa ketakutan atau rasa jijik dari penontonnya. Alur cerita mereka sering melibatkan tema-tema kematian,supranatural,atau penyakit mental. Banyak cerita film horor yang berpusat pada sebuah tokoh antagonis tertentu  yang jahat.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="foto44.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Tiger zinda Hai</h5>
        <p class="card-text">Seorang agen RAW Tiger bergabung dengan Zoya untuk menyelamatkan sekelompok perawat yang disandera oleh komplotan teroris.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="foto88.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">fery</h5>
        <p class="card-text">komandan tank M Sherman bernama Don "Wardaddy" Collier yang dipercaya untuk menembus jantung pertahanan musuh dalam pertempuran di perang Dunia II.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="foto66.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">THOR Love and Thunder</h5>
        <p class="card-text">Thor dalam sebuah perjalanan yang belum pernah ia jalani pencarian ke damaian batin. Namun,masa pensiunya terganggu oleh seorang pembunuh galaksi yang dikenal sebagai Gorr sang Dewa Jagal, yang  ingin memusnahkan para dewa.</p>
      </div>
    </div>
  </div>
  
    </div>
      </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
