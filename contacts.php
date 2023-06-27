<?php
include "connection.php";

  if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"]; 

    $insert = "insert into contacts(full_name,email,message) values ('$name','$email','$message')";
    $result = mysqli_query($conn, $insert);
  }
?>

<!DOCTYPE html>
<html lang="bg">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="shortcut icon" href="./images/favicon.jpg" type="image/x-icon" />
    <title>Barber Shop Fonchi | КОНТАКТИ</title>
    <script
      src="https://kit.fontawesome.com/c8e4d183c2.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
  <?php include('template/header.php')?>
  
    <section id="contact">
      <div id="content">
        <h2>СВЪРЖЕТЕ СЕ С НАС</h2>
        <p>Тук може да се свържете с нас и да опишете това, което желаете.</p>
      </div>
      <div id="container">
        <div id="contactInfo">
          <div class="box">
            <div class="icon">
              <img
                src="./images/location-dot-solid.svg"
                alt="Location Icon"
                width="30"
                height="30"
              />
            </div>
            <div class="text">
              <h3>АДРЕС</h3>
              <p>Перуша 4, <br />2161 Център, <br />гр. Правец</p>
            </div>
          </div>
          <div class="box">
            <div class="icon">
              <img
                src="./images/envelope-solid.svg"
                alt="Envelope Icon"
                width="30"
                height="30"
              />
            </div>
            <div class="text">
              <h3>ИМЕЙЛ</h3>
              <p>barbershhop.fonchi@gmail.com</p>
            </div>
          </div>
          <div class="box">
            <div class="icon">
              <img
                src="./images/phone-solid.svg"
                alt="Phone Icon"
                width="30"
                height="30"
              />
            </div>
            <div class="text">
              <h3>ТЕЛЕФОН</h3>
              <p>071 332 224</p>
            </div>
          </div>
        </div>
        <div id="contactForm">
          <form method = "post">
            <h2>ИЗПРАТЕТЕ СЪОБЩЕНИЕ</h2>
            <div class="inputBox">
              <input type="text" name = "name" required="reqired" />
              <span>Пълно Име</span>
            </div>
            <div class="inputBox">
              <input type="text" name = "email"required="reqired" />
              <span>Имейл</span>
            </div>
            <div class="inputBox">
              <textarea required="required" name = "message"></textarea>
              <span>Напишете вашето съобщение...</span>
            </div>
            <div class="inputBox">
              <input type="submit" name = "submit" value="ИЗПРАТЕТЕ" />
            </div>
          </form>
        </div>
      </div>
      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2922.9589888141263!2d23.90626341566122!3d42.89481200915474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa501c0b8edab5%3A0xac087e49b5a10460!2z0J_QtdGA0YPRiNCwIDQsIDIxNjEg0KbQtdC90YLRitGALCDQn9GA0LDQstC10YY!5e0!3m2!1sbg!2sbg!4v1674729599841!5m2!1sbg!2sbg"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>

    <?php include('template/footer.php')?>

    <script src="./js/nav.js"></script>
  </body>
</html>
