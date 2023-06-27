<!DOCTYPE html>
<html lang="bg">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css?" />
    <link rel="shortcut icon" href="./images/favicon.jpg" type="image/x-icon" />
    <title>Barber Shop Fonchi | УСЛУГИ</title>
    <script
      src="https://kit.fontawesome.com/c8e4d183c2.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>

   <?php include('template/header.php')?>
    
   <section id="services-section">
      <div id="service-heading">
        <h1>НАШИТЕ УСЛУГИ</h1>
      </div>
      <div id="services">

        <?php 
        error_reporting(E_ALL);
        
 
      
       
      
      include 'connection.php';
      error_reporting(E_ALL);
      
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM services;";
        $result = $conn->query($sql);
        $image_urls = ['./images/beard-shaping.png', './images/man-haircut.png','./images/beard-shaping.png','./images/royal-shaving-on-the-head.png','./images/offer-for-father-and-son-or-friends.png'];
        if ($result->num_rows > 0) {
          $index = 0;
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo '
            <div class="service-box">
              <div class="info-side">
              <div class="service-image">
              <img src="'.$image_urls[$index].'" alt="Прическа" />
              </div>
              <div class="service-info">
              <h2>'.$row['subject_name'].'</h2>
              <p>
                    '.$row['description'].'
                    </p>
                    </div>
                    </div>
                    <div class="price-side">
                    <div class="price">
                    <p>
                    '.$row['price'].' <br />
                    BGN
                    </p>
                </div>
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
