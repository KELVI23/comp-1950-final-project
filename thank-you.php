<?php 

$pgName = 'Thank You';
$pgClass = 'pg-thank-you';

include './templates/header.php';

?>


<body class="wrapper">
    <div class="page-wrapper">
        <nav >
            <div class="nav">
                <div class="banner-nav">
                    <div class="nav-toggle">
                        <div class="nav-toggle-bar">
                        </div>
                    </div>
                </div>
                
                <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About the Course</a></li>
                        <li><a href="schedule.html">Schedule</a></li>
                        <li><a href="lessons.html">Lessons</a></li>
                        <li><a href="contact.html">Contact</a></li>
                </ul>   
            </div>
            <div class="bcit-mobile-navigation">
                    <img src="images/bcit-logo.svg" alt="">
            </div>
            <section class="desktop-nav">
                <ul >
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About the Course</a></li>
                  <li><a href="schedule.html">Schedule</a></li>
                  <li><a href="lessons.html">Lessons</a></li>
                  <li><a href="contact.html">Contact</a></li>
              </ul>   
              </section>
        </nav>  
    <section class="thank-you">

        <h1>Thank You</h1>

        <?php if(isset($_POST['fn'])): ?>

        <p>Thank you <?php echo trim(ucwords(strtolower($_POST['fn']))); ?> for contacting us. We will get back to you soon.</p>

        <p>The COMP1950 Team!</p>

        <?php endif ?>

    </section>
    <footer>
        <h2 class="course-header">Course Info</h2>
        <ul class="course">
            <li><a href="#">Outline</a></li>
            <li><a href="#">Schedule</a></li>
            <li><a href="#">Lessons</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <h2 class="reg-header">Registration Info</h2>
        <ul class="registration">
            <li><a href="#0">Talk With An Advisor</a></li>
            <li><a href="#0">Sign Up For a Tour</a></li>
            <li><a href="#0">Attend An Info Night</a></li>
            <li><a href="#0">Register</a></li>
        </ul>
        <h2 class="address">Find Us</h2>
        <div class="address-info">
            <p>British Columbia Institue of Technology</p>
            <p>3700 Willingdon Avenue</p>
            <p>Burnaby, British Columbia</p>
            <p>Canada, V5G 3H2</p>
        </div>
      </footer> 
        </body>  
<?php 

// include './templates/footer.php';

?>