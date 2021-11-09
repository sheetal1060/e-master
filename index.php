<!DOCTYPE html>
<html lang="en">

<head>
  <title>home</title>
  <?php include "css/index.php" ?>
  <?php include "links/links.php" ?>


</head>
</body>
<?php include "header.php" ?>
<section id="hero" top center; class="d-flex justify-content-center align-items-center">
  <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">

    <h1>Learning Today,<br>Leading Tomorrow</h1>
    <h2>We are team of talented Mentors to guid you.</h2>
    <a href="login.php" class="btn-get-started">Get Started</a>
  </div>
</section>

<main id="main">

  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src='imgandjs/images/about.jpg' class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h2> ONLY YOU HAVE TO KNOW ONE THINGH,<br> YOU CAN LEARN ANYTHING.</h2>
          <hr><br>
          <h4>Transform your life through education
          </h4><br>
          <ul>
            <h5>
              <li><i class="fa fa-check-circle"></i> Learners around the world are launching new careers, advancing in their fields, and enriching their lives.
            </h5>
            </li>
            <h5>
              <li><i class="fa fa-check-circle"></i> Instructors from around the world teach millions of students on e-Master. We provide the tools and skills to teach what you love..</li>
            </h5>
            <h5>
              <li><i class="fa fa-check-circle"></i> No school can work except to achieve the objectives of it. The pain is to blame for the pleasure of the trideta storacalaperda mastiro pain to escape from the pain no resultant.</li>
            </h5>
          </ul>

        </div>
      </div>
    </div>
  </section><br>


  <section id="skills">
    <div class="row ">
      <div class="col-6">

        <img src="imgandjs/images/home1.jpg" alt="people in contact" height="250" width="350">
        <div class="options">
          <h2>Connect with people who can help.</h2>
          <a href="contact.html"><button type="button" class="btn option optiontext  btn-lg m-md-3 btn-outline-dark">Connect with
              people.</button></a>
        </div>
      </div>
      <div class="col-6">

        <img src="imgandjs/images/g2.jpg" alt="learn skills" height="250" width="350">
        <div class="options">
          <h2>Learn the skills that can help you now.</h2>
          <div class="dropdown">
            <a class="btn option optiontext  btn-lg m-md-3 btn-outline-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              choose skills.
            </a>

            <ul class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuLink">
              <li> <a class="dropdown-item" active" href="https://www.w3schools.com/whatis/">Web develeopment</a></li>
              <li><a class="dropdown-item" href="https://docs.python.org/3/tutorial/">Python</a></li>
              <li><a class="dropdown-item" href="https://www.tutorialspoint.com/cplusplus/index.htm">C++</a></li>
              <li><a class="dropdown-item" href="https://docs.oracle.com/javase/tutorial/">java</a></li>
              <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=hiEb1m7CXH4">Digital marketing</a>
              </li>
              <li><a class="dropdown-item" href="#">Graphical designer</a></li>
              <li><a class="dropdown-item" href="#">Data science</a></li>
              <li>
                <a class="dropdown-item" href="#">software develeopment</a>
              </li>
              <li><a class="dropdown-item" href="#">sales</a></li>
              <li><a class="dropdown-item" href="#">Database managment</a></li>
              <li><a class="dropdown-item" href="https://www.coursera.org/courses?query=project%20management">Project
                  managment</a></li>
              <li><a class="dropdown-item" href="#">C++</a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>

  </section>

</main>

<section id="post">

  <div class="talent-finder-cta">
    <div class="row">
      <div class="col-6">
        <h2 class="talent-finder-cta__header">Teach the world online.<br>
          You can help many student by create a course vedio, <br>and reach students across the world:-</h2>
      </div>
      <div class="col-6">
     <button type="button" class="btn postbtn  btn-light btn-lg"><a class="optiontext" href='admin.php'>
            Teach on e-master
          </a></button>
      </div>
    </div>
  </div>
</section>
<?php include "footer.php"; ?>

</body>

</html>