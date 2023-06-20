<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layouting</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-page">
            <ul>
                <li href="#">Home</li>
                <li href="#">About Us</li>
                <li href="#">Portofolio</li>
                <li href="#">Contact</li>
            </ul>
        </div>
        <div class="navbar-sosmed">
            <ul>
                <li>LinkedInd</li>
                <li>Instagram</li>
                <li>Facebook</li>
                <li>Whatsapp</li>
            </ul>
        </div>
    </div>
    <div class="banner">
        <span class="name">
            Sadra Din Azizi Muhammad
        </span><br>
        <span class="description">
            Mahasiswa Fakultas Teknologi Industri, Jurusan Teknik Informatika
        </span>
    </div>
    <?= $this->renderSection('content') ?>
    <style>
        /* app/Views/layout.css */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.navbar {
  display: flex;
  justify-content: space-between;
  background-color: #333;
  color: #fff;
  padding: 10px;
}

.navbar ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

.navbar ul li {
  margin-right: 10px;
}

.navbar ul li a {
  color: #fff;
  text-decoration: none;
}

.banner {
  background-color: #f2f2f2;
  text-align: center;
  padding: 50px;
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

/* CSS khusus untuk halaman konten */
.content {
  margin-top: 20px;
  padding: 20px;
}

.content h1 {
  color: #333;
}

.content p {
  color: #666;
}

    </style>
</body>
</html>