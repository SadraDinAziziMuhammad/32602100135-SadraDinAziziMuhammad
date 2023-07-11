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
  background-color: #7D7463;
}

.navbar {
  background-color: #3F2305;
  color: #fff;
  padding: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
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
  color: black;
  text-decoration: none;
}

.banner {
  background-color: #f2f2f2;
  text-align: center;
  padding: 20px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
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

.about-us,
.about-experience {
  background-color: #fff;
  padding: 20px;
  margin-bottom: 20px;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.about-us h1,
.about-experience h1 {
  color: #333;
  margin-bottom: 10px;
}

.about-us p {
  font-size: 16px;
  color: #666;
}

.about-experience-list table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

.about-experience-list th,
.about-experience-list td {
  padding: 10px;
  border: 1px solid #333;
}

.about-experience-list th {
  background-color: #f2f2f2;
  text-align: center;
}

.about-experience-list td {
  text-align: left;
  font-size: 14px;
}

@media (min-width: 600px) {
  .navbar {
    display: flex;
    justify-content: space-between;
  }

  .navbar ul {
    display: flex;
  }

  .navbar ul li {
    margin-right: 10px;
    margin-bottom: 0;
    background-color: black;
  }

  .about-us,
  .about-experience {
    display: flex;
    flex-direction: column;
    margin-bottom: 0;
  }

  .about-experience-list td {
    font-size: 16px;
  }
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