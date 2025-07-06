<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Buku Tamu Digital STITEK Bontang</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f2f6fc;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px;
    }

    h2 {
      color:rgb(54, 88, 122);
      margin-bottom: 20px;
    }

    form {
      background: #ffffff; 
      padding: 20px 25px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: 600;
      color: #333;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
      min-height: 80px;
    }

    input[type="submit"] {
      margin-top: 20px;
      width: 100%;
      padding: 10px;
      background-color: #2c89ef;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #1f6fd0;
    }

    .error {
      color: red;
      margin-top: 15px;
      font-weight: bold;
    }

    .hasil {
      margin-top: 30px;
      background: #e8f5e9;
      padding: 20px;
      border-left: 5px solidrgb(41, 201, 46);
      border-radius: 6px;
      width: 100%;
      max-width: 400px;
    }

    .hasil p {
      margin: 6px 0;
    }
  </style>
</head>
<body>

<h2>Buku Tamu Digital STITEK Bontang</h2>

<?php
$nama = $email = $pesan = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"]) || empty($_POST["email"]) || empty($_POST["pesan"])) {
        $error = "Semua kolom harus diisi.";
    } else {
        $nama = htmlspecialchars($_POST["nama"]);
        $email = htmlspecialchars($_POST["email"]);
        $pesan = htmlspecialchars($_POST["pesan"]);
    }
}
?>

<form method="post" action="">
  <label for="nama">Nama Lengkap:</label>
  <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>">

  <label for="email">Alamat Email:</label>
  <input type="email" id="email" name="email" value="<?php echo $email; ?>">

  <label for="pesan">Pesan/Komentar:</label>
  <textarea id="pesan" name="pesan"><?php echo $pesan; ?></textarea>

  <input type="submit" value="Kirim Pesan">
</form>

<?php if (!empty($error)): ?>
  <div class="error"><?php echo $error; ?></div>
<?php endif; ?>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)): ?>
  <div class="hasil">
    <h3>Pesan berhasil dikirim!</h3>
    <p><strong>Nama:</strong> <?php echo $nama; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Pesan:</strong> <?php echo nl2br($pesan); ?></p>
  </div>
<?php endif; ?>

</body>
</html>
