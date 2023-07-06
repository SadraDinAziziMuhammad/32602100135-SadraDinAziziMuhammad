<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/crud.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <title>CRUD</title>
</head>
<body>
    <header>
        <nav>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Nama / Kelas / Praktikum</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Nim</td>
                </tr>
            </table>
        </nav>
    </header>
    <?= $this->renderSection('content')?>
</body>
</html>