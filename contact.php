<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  
  $title = 'Contact';
  include('header.php');

?>
<!-- End Header -->

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
        <iframe style="border: 0; width: 100%; height: 350px"
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d817.3637445712994!2d28.651970547616052!3d-12.968068655509523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sndola%20chamber%20of%20commerce!5e0!3m2!1sen!2szm!4v1690838741802!5m2!1sen!2szm"
            width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section id="contact" class="contact">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>
                                    Building 4, Office 18,Rekays Mall, Ndola,Copperbelt,
                                    zambia
                                </p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@ndolachamber.com</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+260 955928311</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <?php

                      error_reporting(0);

                      if(isset($_POST['submit'])){
                        $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
                        $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
                        $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
                        $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
                        if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
                          $name_error = 'Invalid name';
                        }
                        if(!preg_match("/^[A-Za-z .'-]+$/", $subject)){
                          $subject_error = 'Invalid subject';
                        }
                        if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
                          $email_error = 'Invalid email';
                        }
                        if(strlen($message) === 0){
                          $message_error = 'Your message should not be empty';
                        }
                      }
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"
                        class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" value="name" class="form-control" id="name"
                                    placeholder="Your Name" />
                                <p class="text-danger lead">
                                    <?php if(isset($name_error)) echo $name_error; ?>
                                </p>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" value="email" id="email"
                                    placeholder="Your Email" />
                                <p class="text-danger lead"> <?php if(isset($email_error)) echo $email_error; ?></p>
                            </div>
                        </div>
                        <input type="text" name="honeypot" style="display: none;">
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" value="subject" id="subject"
                                placeholder="Subject" />
                            <p class="text-danger lead"><?php if(isset($subject_error)) echo $subject_error; ?></p>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" val rows="5" placeholder="Message"></textarea>
                            <p class="text-danger lead"><?php if(isset($message_error)) echo $message_error; ?></p>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" value="Submit">Send Message</button>
                        </div>

                        <?php 
                          if(isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
                            $to = 'info@ndolachamber.com'; // edit here
                            $body = " Name: $name\n E-mail: $email\n Message:\n $message";
                            if(mail($to, $subject, $body)){
                              echo '<small class"text-sucess lead">Message sent</small>';
                            }else{
                              echo '<small class="text-danger lead">Error occurred, please try again later</small>';
                            }
                          }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<?php 
  
  include('footer.php');

?>