<?php
  session_start();
  if (!isset($_SESSION["username"])) {
    header("Location: ../index.php");
  }
?>

<html>
  <head>
    <title>Career</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/career.css" />
  </head>
  <body>
    <div id="header">
      <div id="menu">
        <img src="../images/icons/menu.png" />
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
        <span class="header-text">Career</span>
      </div>
      <div class="header-button">
        <img src="../images/icons/career.png" />
      </div>
      <div class="header-button">
        <a href="home.php"><img src="../images/icons/home.png" /></a>
      </div>
    </div>
    <div id="content">
      <div id="education">
        <span>
          I am currently in my 3rd year of Computer Science at the Lebanese
          American University. Under this institution, I have complete numerous
          projects involving technologies such as SQL, Flutter, Java, and more.
          Before this, I graduated from Brummana High School as the
          valedictorian of my section. There, I was part of a rich and diverse
          community with people from all around the world. I have detailed some
          of the projects and work experience I have acquired to the right.
        </span>
        <div>
          <a href="https://bhs.edu.lb/"><img src="../images/bhs.jpg" /></a>
          <a href="https://www.lau.edu.lb/"><img src="../images/lau.jpg" /></a>
        </div>
      </div>
      <div class="experience-column">
        <div class="experience-card">
          <span
            >Kabasna Event Manager is an event manager with the purpose of
            making it as easy as possible for locals and tourists to find and
            book events all around Lebanon.
          </span>
          <br /><br />
          <span>Tech Used:</span>
          <ul>
            <li>Flutter (Mobile App)</li>
            <li>Java Swing (Desktop App)</li>
            <li>Google Firebase (JSON Database)</li>
          </ul>
        </div>
        <div class="experience-card">
          <span
            >Dinner with Jay-Z is a database design for a restaurant chain where
            customers get the opportunity to dine with celebrities.
          </span>
          <br /><br />
          <span>Tech/Concepts Used:</span>
          <ul>
            <li>Oracle DBMS (Relational DB)</li>
            <li>SQL (Querying and Testing DB)</li>
            <li>Database Normalization</li>
          </ul>
        </div>
      </div>
      <div class="experience-column">
        <div class="experience-card">
          <span
            >Robotics Summer Camp Teacher: I was in charge of designing and
            carrying out a robotics summer camp held at Brummana High School for
            children aged 7-15.
          </span>
          <br /><br />
          <span>Skills Used:</span>
          <ul>
            <li>EV3 Robot Programming</li>
            <li>Curriculum Design</li>
            <li>Communication and Designing Challenges</li>
          </ul>
        </div>
        <div class="experience-card">
          <span
            >Software Engineering Intern: I undertook an internship program at
            Tomorrow Services where I was in charge of developing an OCR feature
            for an existing mobile app.
          </span>
          <br /><br />
          <span>Tech Used:</span>
          <ul>
            <li>React Native (Mobile App)</li>
            <li>PHP/Laravel/MySQL (Backend and DB)</li>
            <li>Google Cloud Vision (AI OCR provider)</li>
          </ul>
        </div>
      </div>
    </div>
    <div id="footer">
      <div id="social-medias">
        <a href="https://www.twitter.com" target="_blank"
          ><img src="../images/icons/twitter.png"
        /></a>
        <a
          href="https://open.spotify.com/user/y74hmya3dklwhy5e2zdbx1uiu?si=fc0a43d5e50a417a"
          target="_blank"
          ><img src="../images/icons/spotify.png"
        /></a>
        <a href="https://instagram.com/juanpghantoush" target="_blank"
          ><img src="../images/icons/instagram.png"
        /></a>
        <a href="https://www.linkedin.com/in/juanghantous/" target="_blank"
          ><img src="../images/icons/linkedin.png"
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
  </body>
</html>
