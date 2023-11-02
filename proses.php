<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';  // Gantikan dengan jalur ke autoload PHPMailer

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];

  $to = "ikhsanraffli2770@gmail.com";
  $subject = "Pesan dari Formulir Portofolio kamu";
  $message = "Nama: $nama\nEmail: $email\nPesan: $pesan";

  // Konfigurasi PHPMailer
  $mail = new PHPMailer(true);
  try {
    // Server Settings
    $mail->SMTPDebug = 2; // Ganti dengan 2 untuk debugging lebih lanjut
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sansflly.bot@gmail.com';
    $mail->Password = 'Dugjedaghder16@linux';
    $mail->SMTPSecure = 'tls'; // Ganti menjadi 'ssl' jika diperlukan
    $mail->Port = 587; // Ganti port sesuai dengan pengaturan server

    // Recipients
    $mail->setFrom('sansflly.bot@gmail.com', 'Bot Portofolio');
    $mail->addAddress($to);

    // Content
    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();

    // Redirect kembali ke halaman formulir atau tampilkan pesan sukses
    header("Location: index.php");
    exit();
  } catch (Exception $e) {
    echo "Pesan tidak dapat dikirim. Kesalahan: {$mail->ErrorInfo}";
  }
}
?>
