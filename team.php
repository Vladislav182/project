<!DOCTYPE html>
<html lang="bg">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="shortcut icon" href="./images/favicon.jpg" type="image/x-icon" />
    <script
      src="https://kit.fontawesome.com/3087601fb4.js"
      crossorigin="anonymous"
    ></script>
    <title>Barber Shop Fonchi | ЕКИП</title>
  </head>

  <body>

  <?php include('template/header.php')?>
  
    <section class="responsive-container-block container">
      <p class="text-blk team-head-text">
        ОБСЛУЖВАТ ВИ ПРОФЕСИОНАЛНИ БАРБЕРИ&nbsp;
      </p>
      <div class="responsive-container-block">
        
      <?php 
      
      include 'connection.php';
      
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM team;";
        $result = $conn->query($sql);
        $image_urls = ['./images/barber-1.jpg', './images/barber-2.jpg','./images/barber-3.jpg','./images/barber-4.jpg','/images/offer-for-father-and-son-or-friends.png'];
        if ($result->num_rows > 0) {
          $index = 0;
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo ' <div class="responsive-cell-block card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image" src="'.$image_urls[$index].'" />
              </div>
              <p class="text-blk name">'.$row['full_name'].'</p>
              <p class="text-blk position">'.$row['position'].'</p>
              <p class="text-blk feature-text">
                "'.$row['person_description'].'"
              </p>
            </div>
            <div class="icons">
              <a href="https://www.facebook.com/" target="_blank">
                <i class="fa-brands fa-facebook"></i>
              </a>
              <a href="https://www.instagram.com/" target="_blank">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="https://twitter.com/?lang=bg" target="_blank">
                <i class="fa-brands fa-twitter"></i>
              </a>
            </div>
          </div>';
            $index++;
          }
        } else {
          echo "0 results";
        }
        $conn->close();
        
        ?>
      </div>
    </section>
    
    <?php include('template/footer.php')?>

    <script src="./js/nav.js"></script>
  </body>
</html>
