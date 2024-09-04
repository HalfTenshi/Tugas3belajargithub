<?php
    include "database.php";

    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $message=$_POST["message"];
        $gender=$POST["gender"];

        $sql ="INSERT INTO dataa(nama, email, pesan, Gender) VALUES ('$name','$email','$message','$gender')";

    if ($conn->query($sql) === TRUE) {
        // Redirect kembali ke form dengan notifikasi berhasil
        header("Location: index.php?status=success");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2S3</title>
    <link rel="Stylesheet" href="style.css"/ >
</head>
<body>
<div id="notification" class="show">
        Form berhasil diisi! Data Anda telah masuk ke database.
    </div>
<!-- <img src="awann.png" class="awan"> -->
<div>
    <!-- konten -->
    <div class="a">
 <!-- <div class="judul"><h1>Contact Form</h1></div> -->
<form action="index.php" method="POST" onsubmit="return showNotification()">
        <label for="name">Nama</label>
        <input type="text" id="name" name="name" placeholder="Enter your name">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email">

        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Your message..."></textarea>

        <h3>Select Your Gender</h3>
        <label class="radio-container">Male
            <input type="radio" name="gender" value="male">
            <span class="checkmark"></span>
        </label>
        <label class="radio-container">Female
            <input type="radio" name="gender" value="female">
            <span class="checkmark"></span>
        </label>

        <button type="submit" name="submit">Submit! </button>
</form>
<script src="script.js"></script>
<div class="b">
    <h1 class="c">Contact</h1>
    <h1 class="c2">Form</h1>
<div class="garis"><svg xmlns="http://www.w3.org/2000/svg" width="240" height="2" viewBox="0 0 240 2" fill="none">
    <path d="M0.5 1H239.5" stroke="white"/>
    </svg></div>
<div class="d"><h5>Halo Sobat!</h5></div>
<div class="p"><p>Masukkan data dirimu dengan teliti dan sesuai dengan identitas di Kartu pelajar!,agar data dirimu bisa di tampilkan dengan benar.</p></div>
</div>
    </div>
    </div>
</body>
<footer><h3 class="f">Irsyad Hifdil I'anna By Haqi - 233140707111052</h3></footer>
</html>