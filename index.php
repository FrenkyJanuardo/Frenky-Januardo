<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>MOVIES</title>
   
</head>
<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
      <h3><b>MOVIES</b></h3>
      <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="Search" name="cari"></input>
      </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li>  
        </ul>
      </div>
    </nav>
  </header>

<div class="container-2">
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo " <br><h1>Hasil Pencarian</h1><hr>";

            $url = 'http://www.omdbapi.com/?apikey=7c5cba69&s="'.$judul.'"';

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
                echo '<img src= "'.$movie['Poster'].'">';
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
            }    
        }
        ?>
</div>
<br><hr>

<div class="container-new">
<div class="container">
  <div class="row mt-3 text-center">
    <div class="col text-white">
      <br>
      <h1><b>Action Movie</b></h1>
    </div>
  </div>
  <br>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="6.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title"><b>Red Notice</b></h5>
        <p class="card-text">Red Notice adalah sebuah film komedi laga Amerika Serikat yang ditulis dan disutradarai oleh Rawson Marshall Thurber. Film tersebut menampilkan Dwayne Johnson, Ryan Reynolds dan Gal Gadot. Film tersebut menandai kolaborasi ketiga antara Johnson dan Thurber setelah Central Intelligence dan Skyscraper.</p>
        <center><a class="btn btn-primary" href="https://www.youtube.com/watch?v=Pj0wz7zu3Ms" role="button">Trailer</a></center>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="5.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title"><b>Why Women Kill</b></h5>
        <p class="card-text">Why Women Kill adalah serial televisi antologi drama komedi gelap Amerika Serikat yang dibuat oleh Marc Cherry untuk Paramount+. Berlatar dalam beberapa periode waktu, serial ini menggambarkan peristiwa kematian yang terjadi setelah masing-masing suami dari tiga wanita melakukan kesalahan.</p>
        <center><a class="btn btn-primary" href="https://www.youtube.com/watch?v=yynQ98otI-s" role="button">Trailer</a></center>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="4.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title"><b>My Name</b></h5>
        <p class="card-text">My Name adalah seri televisi streaming Korea Selatan tahun 2021 yang disutradarai oleh Kim Jin-min dan dibintangi oleh Han So-hee, Park Hee-soon, dan Ahn Bo-hyun. Seri ini tentang seorang wanita yang bergabung dengan geng untuk membalas kematian ayahnya kemudian menyamar sebagai polisi.</p>
        <center><a class="btn btn-primary" href="https://www.youtube.com/watch?v=d2h92UnKr6s" role="button">Trailer</a></center>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="2.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title"><b>Vagabond</b></h5>
        <p class="card-text">Vagabond adalah seri televisi Korea Selatan tahun 2019 yang dibintangi oleh Lee Seung-gi, Bae Suzy dan Shin Sung-rok. Seri ini ditayangkan di SBS TV mulai 20 September hingga 23 November 2019.</p>
        <center><a class="btn btn-primary" href="https://www.youtube.com/watch?v=PndjeodkGj8" role="button">Trailer</a></center>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="1.jpeg" class="card-img-top" height="400px" width="100">
      <div class="card-body">
        <h5 class="card-title"><b>Fall</b></h5>
        <p class="card-text">Becky dan Hunter adalah dua orang yang suka menghadapi ketakutan dan suka menantang diri mereka hingga batas terakhir. Tetapi, setelah mereka memanjat sebuah tower radio terbengkalai setinggi 600-an meter, mereka menemukan diri mereka terjebak di atas tanpa jalan turun.</p>
        <center><a class="btn btn-primary" href="https://youtu.be/aa5MXOMN1lM" role="button">Trailer</a></center>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="3.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title"><b>Roald Dahl's The Witches</b></h5>
        <p class="card-text">Roald Dahl's The Witches adalah sebuah film komedi fantasi gelap Meksiko-Amerika tahun 2020 yang disutradarai oleh Robert Zemeckis dan ditulis oleh Zemeckis, Kenya Barris, dan Guillermo del Toro.</p>
        <center><a class="btn btn-primary" href="https://www.youtube.com/watch?v=9nlhmJF5FNI" role="button">Trailer</a></center>
      </div>
    </div>
  </div>
  </div>
  <br><br><br>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
