<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_j.css">
    <link rel="stylesheet" href="css/styles.css" />

    <title>210 Elizabeth Street - Coming Soon</title>
  </head>
  <body>

    <!-- Section Opening Loader -->
    <div class="openingloader">
        <div class="tb">
          <div class="cell">
              <div class="wrapspin">
                  <div class="loader"></div>
              </div>
          </div>
        </div>
    </div>
    
    <!-- Head -->
    <!-- <div class="head">
        <img src="images/logo11.png" class="img-fluid" alt="logo">
    </div> -->
    
    <!-- Copyrights -->
    <!-- <div class="cp">
        <p>&copy; <?php echo date('Y'); ?> Jebog</p>
    </div> -->
    
    <!-- Main content -->
    <div class="wrapblock">
        <div class="block block1 hidesmooth">
          <div class="tb">
            <div class="cell">
              <div id="daypost"></div>
            </div>
          </div>
        </div>
        <div class="block block2 blocktransform">
          <div class="tb">
            <div class="cell">
              <div class="content">
                <div class="top">
                  <img src="images/header-image.jpg" style="width: 90%;" />
                  <img
                    src="images/logo.png"
                    width="200px"
                    style="margin: 5px 0 10px;"
                  />
                  <p style="font-size: 20px;">
                    A line of text to here regarding words LOFTS and OFFICES
                  </p>
                </div>
                <div class="bottom"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="block block3 opensmooth">
          <div class="tb">
            <div class="cell">

              <div class="wrap">

                <p>A line of text to here regarding if one has questions
or wants to contact us</p>

                <form method="POST" action="thank-you.php" id="contact-form">
                  <div class="wrapinput">
                    <label for="name" class="left-label">Name</label>
                    <input id="name" type="text" name="name" required="" />
                  </div>

                  <div class="wrapinput">
                    <fieldset id="broker">
                        <label class="left-label" style="margin-top: 0;">Are you a Broker?</label>

                        <span style="margin-right: 30px;">
                          <input type="radio" id="broker-yes" name="broker" value="yes"
                                checked>
                          <label for="broker-yes">YES</label>
                        </span>

                        <span>
                          <input type="radio" id="broker-no" name="broker" value="no">
                          <label for="broker-no">NO</label>
                        </span>
                    </fieldset>
                  </div>

                  <div class="wrapinput">
                    <label for="email" class="left-label">Email</label>
                    <input id="email" type="email" name="email" required="" />
                  </div>

                  <div class="wrapinput">
                    <label for="phone" class="left-label">Phone Number</label>
                    <input id="phone" type="tel" name="phone" required="" />
                  </div>

                  <div class="wrapinput">
                    <label for="message" class="left-label">Message / Question?</label>
                    <textarea id="message" rows="3" name="message"></textarea>
                  </div>

                  <div class="wrapinput">
                    <?php
                      session_start();
                      $_SESSION['val1'] = rand(1,9);
                      $_SESSION['val2'] = rand(1,9);
                    ?>
                    <label
                    for="sec-ques"
                    style="
                      text-align: left !important;
                      width: 45% !important;
                      max-width: 400px !important;
                      display: block;
                      margin: 0 auto;
                    "
                    ><img src="images/padlock.png" alt="padlock" class="padlock"> Security question! <?php echo $_SESSION['val1']. "+" .$_SESSION['val2']. "="; ?></label>
                    <input type="number" name="answer" placeholder="Your anwer here..." required="">
                  </div>
                  
                  <div class="wrapinput" style="
                    text-align: right !important;
                    width: 45% !important;
                    max-width: 400px !important;
                    margin: 0 auto !important;
                  ">
                    <input type="submit" name="submit" value="SUBMIT">
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>

        <div class="mobile mobile-footer">
          <img src="images/footer-image.jpg" width="100%" />
        </div>
    </div>
    

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>