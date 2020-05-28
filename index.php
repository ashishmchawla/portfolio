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
      <!-- <section id="tech">
        <?php //include('tech.php'); ?>
      </section>
      <section id="blog">
        <?php //include('blog.php'); ?>
      </section> -->
    </div>  

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>