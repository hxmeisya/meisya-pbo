<?php
// include 'dbcontroller.php';
require_once('dbcontroller.php');
$db = new dbController();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary mb-3" style="background-color: #FFB6C1;">
  <div class="container">
    <a class="navbar-brand" href="#">SMK Negeri 40 Jakarta</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jurusan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Siswagi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->

<!-- Cards 1 -->
<div class="container mt-80">  
<h1 class="text-center mb-5">Kelas</h1>
 <div class="row text-center justify-content-center">

 <?php
    $sql = "select * from t_kelas";
    $row = $db->getALL($sql);
    foreach ($row as $value) :
?> 

<div class="col-md-4 mb-5">
<div class="card" style="width: 18rem;">
  <img src="img/<?php echo $value['f_nama']; ?>.jpg" class="card-img-top" alt="KELAS">
  <div class="card-body">
    <h5 class="card-title">
      
    <?php echo $value['f_nama']; ?>
  
  </h5>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic ex aperiam accusantium. Odit eos illo officia. Assumenda fuga, corrupti tenetur, natus rem vero porro pariatur magnam facilis doloribus enim expedita.
    </p>
    <a href="#" class="btn btn-primary">Selengkapnya</a>
  </div>
  </div>
  </div>

  <?php
    endforeach
?>
</div>

</div>
<!-- Akhir Cards 1 -->

<!-- Cards 2 -->
<div class="container mt-80">  
<h1 class="text-center mb-5">Jurusan</h1>
 <div class="row text-center justify-content-center">

 <?php
    $sql = "select * from t_jurusan";
    $row = $db->getALL($sql);
    foreach ($row as $value) :
?> 

<div class="col-md-4 mb-5">
<div class="card" style="width: 18rem;">
  <img src="img/<?php echo $value['f_nama']; ?>.jpg" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">
      
    <?php echo $value['f_nama']; ?>
  
  </h5>
<p class="card-text" style="font-size: 14px;">
  <?php echo $value['f_deskripsi']; ?>
    </p>
    <a href="#" class="btn btn-primary">Selengkapnya</a>
  </div>
  </div>
  </div>

  <?php
    endforeach
?>
</div>

</div>
<!-- Akhir Cards 2 -->

<!-- Cards 3 -->
<div class="container mt-80">  
<h1 class="text-center mb-5">Guru</h1>
 <div class="row text-center justify-content-center">

 <?php
    $sql = "select * from t_guru";
    $row = $db->getALL($sql);
    foreach ($row as $value) :
?> 

<div class="col-md-4 mb-5">
<div class="card" style="width: 18rem;">
  <img src="img/<?php echo $value['f_nama']; ?>.jpg" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">
      
    <?php echo $value['f_nama']; ?>
  
  </h5>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic ex aperiam accusantium. Odit eos illo officia. Assumenda fuga, corrupti tenetur, natus rem vero porro pariatur magnam facilis doloribus enim expedita.
    </p>
    <a href="#" class="btn btn-primary">Selengkapnya</a>
  </div>
  </div>
  </div>

  <?php
    endforeach
?>
</div>

</div>
<!-- Akhir Cards 3 -->

<!-- Table -->
<section id="siswa">
<div class="row text-center mb-3">
          <div class="col"><h2>Siswa</h2></div>
     </div>

<div class="row justify-content-center mb-5">
  <div class="col-8">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jurusan</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">

  <?php
    $i=1;
    $sql = "select t_siswa.f_nama, t_kelas.f_nama as f_kelas, t_jurusan.f_nama as f_jurusan from t_siswa
            inner join t_kelas
            on t_siswa.f_idkelas=t_kelas.f_idkelas
            inner join t_jurusan
            on t_siswa.f_idjurusan=t_jurusan.f_idjurusan
            order by t_siswa.f_idjurusan, t_siswa.f_idkelas, t_siswa.f_nama";
    $row = $db->getALL($sql);
    foreach ($row as $siswa) :
    
?>  

    <tr>
      <th scope="row">
      <?php echo $i++; ?>
      </th>
      <td><?php echo $siswa['f_nama']?></td>
      <td><?php echo $siswa['f_kelas']?></td>
      <td><?php echo $siswa['f_jurusan']?></td>
    </tr>

      <?php endforeach ?>

  </tbody>
</table>
</div>
</section>
<!-- Akhir table -->

    <!--footer-->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,234.7C384,245,480,235,576,208C672,181,768,139,864,128C960,117,1056,139,1152,138.7C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <footer class="bg-primary text-white text-center pb-3">
        <p>Created with <i class="bi bi-heart-fill text-danger"></i> by
            <a href="https://instagram.com/sasyyaw?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" class="text-white fw-bold">Sasyyaw</a> </a>
        </p>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <!--Akhir footer-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</body>
</html>