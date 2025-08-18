<?php
    include './db_con.php';

    if (isset($_GET['id'])) {
        $project_id = $_GET['id'];
        $query = "SELECT * FROM projects WHERE id = $project_id ";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $project = mysqli_fetch_array($result);
        }
    } else {
        echo "Project ID is missing.";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>AAS - Projects</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="portfolio-details-page">
  <main class="main">
    <div class="page-title" data-aos="fade"> 
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="./index.php">Home</a></li>
            <li class="current">Project Details</li>
          </ol>
        </div>
      </nav>
    </div>
    <section id="portfolio-details" class="portfolio-details section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="assets/img/portfolio/<?php echo htmlspecialchars($project['image_name']); ?>" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Project Title :</strong><?php echo $project['title'] ?></li>
                <li><strong>Category :</strong><?php echo $project['category'] ?></li>
                <li><strong>Technologies :</strong><?php echo $project['technologies'] ?></li>
                <li><strong>Project date :</strong><?php echo $project['project_date'] ?></li>
                <li><strong>Project URL :</strong><a href="<?php echo $project['project_url'] ?>"><?php echo $project['project_url'] ?></a></li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Project Description</h2>
              <p>
                <?php echo nl2br(htmlspecialchars($project['description'])); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h1>"Everything Has It's Replacement"</h1>
      <div class="container">
        <div class="copyright">
          &copy; copyright 2025 by <span>Anayatul Ahad Shoikot</span>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>