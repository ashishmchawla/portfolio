<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- <script src="https://kit.fontawesome.com/bb027a9024.js" crossorigin="anonymous"></script> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="fb:app_id" content="534218220259246" />
    <meta property="og:url" content="https://ashishchawla.tech/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Ashish Chawla | Full Stack Web Developer" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="favicon/apple-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <meta name="msapplication-TileColor" content="#3aafa9">
    <meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#3aafa9">

    <title> Ashish Chawla | Full Stack Web Developer </title>
  </head>
  <body>
    <?php include('./sidebar.php'); ?>
    <div class="d-none d-md-block" id="sidebar">
        <div class="logo-lg">
            <img src="./images/logo_colored.png" width="100" height="100">
        </div>
        <div class="linkList">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#portfolio">Projects</a>
            <a href="#journey">Journey</a>
            <a href="#tech">Tech Stack</a>
            <a href="#blog">Blog</a>
            <a href="#contact">Contact</a>
        </div>
    </div>  
    <div id="mainContent">
      <section id="home">
        <h1>
          <small>Hello, </small>
          I'm Ashish Chawla 
          <br><small> I craft websites and applications...</small>
        </h1>

        <p id="home_description"> I am a Full Stack Web Developer from Mumbai. I love to create web-based solutions with anything between a small landing page to a feature-rich complete application. </p>
        <img id="hero_image" src="images/developer_custom.png" class="img-responsive">
        <br><br>
      </section>
      <section id="about">
        <?php include('about.php'); ?>
      </section>
      <section id="portfolio">
        <h3 class="sectionHeadingLight"> Recent Projects </h3>
        <br>
        <div class="row">

          <div class="col-md-4">
            <div class="cardContainer">
              <img src="images/4farmers.png" alr="4 Farmers" class="cardImage">
              <div class="overlay">
                <div class="cardText">
                  <h4> 4 Farmers </h4>
                  <h5> An online grocery store delivering fresh fruits, vegetables and essentials even during the COVID-19 Crisis to certain parts of Mumbai.</h5>
                  <a href="https://4farmers.in"><i class="material-icons">language</i>&nbsp; 4farmers.in</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="cardContainer">
              <img src="images/royalSwag.png" alr="4 Farmers" class="cardImage">
              <div class="overlay">
                <div class="cardText">
                  <h4> The Royal Swag </h4>
                  <h5> An online fashion store for specialized t-shirts for guys and girls that carry a swag! </h5>
                  <a href="https://theroyalswag.com"><i class="material-icons">language</i>&nbsp; theroyalswag.com</a>
                </div>
              </div>
            </div>
          </div>
          

        </div>
      </section>
      <section id="journey">
        <h3 class="sectionHeadingDark">Journey so far...</h3>
        <?php include('experience.php'); ?>
      </section>
    </div>  

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>