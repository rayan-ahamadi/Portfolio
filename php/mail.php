<?php 
require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$maxEmailsPerDay = 5;
$currentDate = date('Y-m-d');

if (!isset($_SESSION['email_attempts'])) {
    $_SESSION['email_attempts'] = 0;
    $_SESSION['last_attempt_date'] = $currentDate;
}

if ($_SESSION['last_attempt_date'] != $currentDate) {
    $_SESSION['email_attempts'] = 0;
    $_SESSION['last_attempt_date'] = $currentDate;
}

if ($_SESSION['email_attempts'] >= $maxEmailsPerDay) {
    echo json_encode(['status' => 'limited', 'message' => 'Limite d\'envoi de mails atteinte pour aujourd\'hui']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['nom'] ?? '';
  $prenom = $_POST['prenom'] ?? '';
  $email = $_POST['email'] ?? '';
  $tel = $_POST['tel'] ?? '';
  $objet = $_POST['objet'] ?? '';
  $message = $_POST['message'] ?? '';
}


try {

  $mail = new PHPMailer (true);
  $mail->isSMTP();
  $mail->SMTPAuth = true;

  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->Username = $_ENV['AUTH_MAIL'];
  $mail->Password = $_ENV['AUTH_PASS'];
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;



  $mail->setFrom($email, $name." ".$prenom);

  $mail->addAddress($_ENV['RECIPIENT_MAIL'], 'Rayan');


  $mail->isHTML(true);

  $mail->Subject = $objet;

  $mail->Body = $message;



  $mail->CharSet = 'UTF-8';
  $mail->Encoding = 'base64';

  $response = $mail->send();
  $_SESSION['email_attempts']++;
  
  if ($response && $mail->ErrorInfo == "") {
    echo json_encode(['status' => 'success', 'message' => 'Email envoyé avec succès']);
  } else {
    echo json_encode(['status' => 'error', 'message' => 'Erreur lors de l\'envoi de l\'email']);
  }
} catch (Exception $e) {
      echo "Mailer Error: ".$e->getMessage();
}


?>