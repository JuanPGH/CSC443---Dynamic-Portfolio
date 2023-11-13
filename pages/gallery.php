<?php
  $json = file_get_contents("../photo-names.json");
  $photoNames = json_decode($json, true);
  $gallery = $photoNames["gallery"];
?>

<html>
  <head>
    <title>Gallery</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/gallery.css" />
  </head>
  <body>
    <div id="header">
      <div id="menu">
        <img src="../icons/menu.png" />
        <div id="menu-content">
          <ul>
            <a href="home.php"><li>Home</li></a>
            <a href="career.php"><li>Career</li></a>
            <a href="gallery.php"><li>Gallery</li></a>
            <a href="games.php"><li>Games</li></a>
            <a href="contact.php"><li>Contact</li></a>
          </ul>
        </div>
      </div>
      <div id="title">
        <span class="header-text">Gallery</span>
      </div>
      <div class="header-button">
        <img src="../icons/gallery.png" />
      </div>
      <div class="header-button">
        <a href="home.php"><img src="../icons/home.png" /></a>
      </div>
    </div>
    <div id="content">
      <div id="gallery">
        <?php
          for ($i = 1; $i <sizeof($gallery)+1; $i++) {
            echo (
              '<a href="#overlay-'.$i.'">
                <div class="image-container">
                  <img class="gallery-image" src="../images/'.$gallery[$i-1].'"/>
                </div>
              </a>'
            );
          }
        ?>
      </div>
    </div>
    <div id="footer">
      <div id="social-medias">
        <a href="https://www.twitter.com" target="_blank"
          ><img src="../icons/twitter.png"
        /></a>
        <a
          href="https://open.spotify.com/user/y74hmya3dklwhy5e2zdbx1uiu?si=fc0a43d5e50a417a"
          target="_blank"
          ><img src="../icons/spotify.png"
        /></a>
        <a href="https://instagram.com/juanpghantoush" target="_blank"
          ><img src="../icons/instagram.png"
        /></a>
        <a href="https://www.linkedin.com/in/juanghantous/" target="_blank"
          ><img src="../icons/linkedin.png"
        /></a>
      </div>
      <div id="course-text">
        <span class="footer-text">
          CSC443 - Dynamic Portfolio - Fall 2023
        </span>
      </div>
      <div id="contact-link">
        <a href="contact.php">
          <span class="footer-text">Contact Information</span>
        </a>
      </div>
    </div>
    <?php
      for ($i = 1; $i <sizeof($gallery)+1; $i++) {
        echo (
          '<div class="image-overlay" id="overlay-'.$i.'">
            <a href="#header"><img class="overlay-image" src="../images/'.$gallery[$i-1].'" /></a>
          </div>'
        );
      }
    ?>
  </body>
</html>
