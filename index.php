<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php include('meta-data.php'); ?>
    <title> Ashish Chawla | Full Stack Web Developer </title>
    <!--Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <script src="https://kit.fontawesome.com/bb027a9024.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  </head>
  <body>
    <?php include('./sidebar.php'); ?>
    <div id="mainContent">
      <section id="home">
        <?php include('home.php'); ?>
      </section>
      <section id="about">
        <?php include('about.php'); ?>
      </section>
      <section id="portfolio">
       <?php include('portfolio.php'); ?>
      </section>
      <section id="journey">
        <?php include('journey.php'); ?>
      </section>
      <section id="skills">
        <?php include('skills.php'); ?>
      </section>
      <section id="blog">
        <?php include('blog.php'); ?>
      </section> 
      <section id="contact">
        <?php include('contact.php'); ?>
      </section> 
      <section id="footer" class="sectionHeadingDark">
         <div class="social-links">
            <a href="https://github.com/ashishmchawla"><i class="fa fa-github fa-2x"></i></a>
            <a href="https://twitter.com/ashishmchawla"><i class="fa fa-twitter fa-2x"></i></a>
            <a href="https://www.instagram.com/ashishmchawla"><i class="fa fa-instagram fa-2x"></i></a>
            <a href="https://www.facebook.com/ashishmchawla"><i class="fa fa-facebook fa-2x"></i></a>
            <a href="https://www.linkedin.com/in/ashishmchawla/"><i class="fa fa-linkedin fa-2x"></i></a>
            <a href="mailto:hey@ashishchawla.tech"><i class="fa fa-envelope fa-2x"></i></a>
         </div>
         <br>
         <h5> &copy; 2020 | Crafted by Ashish Chawla  </h5> 
      </section>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>