<!doctype html>
<html lang="tr">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="main.css" rel="stylesheet">
    <title>Login</title>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </head>
  <body>
    
 <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
   <div class="container-fluid">
     <a class="navbar-brand" href="Giris.html"><img src="istanbull.png" width="300px" height="150px">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" href="Giris.html">Hakkımda</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Mirasimiz.html">Mirasımız</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Sehrim.html">Şehrim</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="OzGecmis.html">Özgeçmiş</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Iletisim.html">İletişim</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      
    </ul>

  </div>
   </div>
 </nav>

 
 <div class="container" id="main">
  <br><br>
  <form method="POST" >
    <div class="form-group">      
      <div class="row mt-4">
        <div class="col-md-3"></div>
        <span><strong><h5>Kullanıcı Adı:</h5></strong></span>
        <div class="col-md-5">
          <input class="form-control" type="text" name="ad" required >    
        </div>
      </div>  
    </div>
    <div class="form-group">      
      <div class="row mt-3">
        <div class="col-md-3"></div>
        <span><strong><h5>ŞİFRE :</h5></strong></span>
        <div class="col-md-5">
          <input class="form-controll" type="text" name="şifre" required >    
        </div>
      </div>  
    </div>
 <br>  <br>
    <div class="row">
      <div class="col-md-3"></div>
     <button class="button"  type="submit"name="submit" id="sub">Gönder</button>
      <div class="mx-2"></div>    
    </div>
  </form>

  </body>
  </html>


  <?php
  if(isset($_POST['submit'])){

    $un=$_POST['ad'];
    $pw=$_POST['şifre'];

    if($un=='b191210026@sakarya.edu.tr' && $pw=='123') {
        header("location:Login.html");
        exit();
    }
    else{
        echo_"Yanlış şifre veya kullanıcı adı!";

    }
    
  }


  ?>