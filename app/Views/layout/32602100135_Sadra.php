<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Layouting</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.navbar {
  background-color: #333;
  color: #fff;
  padding: 10px;
}

.navbar ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.navbar ul li {
  margin-bottom: 10px;
}

.navbar ul li a {
  color: #fff;
  text-decoration: none;
}

.banner {
  background-color: #f2f2f2;
  text-align: center;
  padding: 20px;
}

.banner .name {
  font-size: 24px;
  font-weight: bold;
  color: #333;
}

.banner .description {
  font-size: 16px;
  color: #666;
}

@media (min-width: 600px) {
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .navbar ul {
    display: flex;
  }

  .navbar ul li {
    margin-right: 10px;
    margin-bottom: 0;
  }
}

.navbar-toggle {
  background-color: transparent;
  border: none;
  cursor: pointer;
  padding: 0;
}

.icon-bar {
  background-color: #fff;
  display: block;
  height: 3px;
  margin-bottom: 5px;
  transition: background-color 0.3s ease-in-out;
  width: 25px;
}

.icon-bar:last-child {
  margin-bottom: 0;
}

.navbar-toggle.collapsed .icon-bar {
  background-color: #fff;
}

.dropdown-menu {
  background-color: #333;
}

.dropdown-menu li {
  padding: 10px;
}

.dropdown-menu li a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s ease-in-out;
}

.dropdown-menu li a:hover {
  color: #999;
}

/* Perubahan warna tampilan */
body {
  background-color: #f8f8f8;
}

.navbar {
  background-color: #222;
}

.navbar ul li a {
  color: #fff;
}

.banner {
  background-color: #ddd;
}

.banner .name {
  color: #333;
}

.banner .description {
  color: #777;
}


  </style>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Portfolio</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact <span class="caret"></span></a>
            <ul class="dropdown-menu" style="background-color: black;">
              <li><a href="#">LinkedInd</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Whatsapp</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="banner">
    <span class="name">
      Sadra Din Azizi Muhammad
    </span><br>
    <span class="description">
      Mahasiswa Fakultas Teknologi Industri, Jurusan Teknik Informatika
    </span>
  </div>
  <?= $this->renderSection('content') ?>
</body>

</html>
