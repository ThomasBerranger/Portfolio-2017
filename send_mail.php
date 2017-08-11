<?php
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'FROM:' . htmlspecialchars($_POST['email']);
$to = 'ThomasBerrangerPro@gmail.com';
$subject = htmlspecialchars($_POST['name']) .' - ' . htmlspecialchars($_POST['email']). ' - Vous a contacté depuis votre site thomasberranger.fr';
$message_content = '
  <table>
  <tr>
  <td><b>Emetteur du message:</b></td>
  </tr>
  <tr>
  <td>'. $subject . '</td>
  </tr>
  <tr>
  <td><b>Contenu du message:</b></td>
  </tr>
  <tr>
  <td>'. htmlspecialchars($_POST['message']) .'</td>
  </tr>
  </table>
  ';
mail($to, $subject, $message_content, $headers);
header('Location: http://thomasberranger.fr');
