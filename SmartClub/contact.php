<html>

<head>
    <title>Contact Form Tutorial by Bootstrapious.com</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    

</head>

<body>
    <?php 
    include "header.php";
    ?>
    <div class="col-sm-12" style="background-color:white">


        <div class="col-sm-4">
            <h1>
                Contact US....!
            </h1>
            <strong>
                Ph:+92 304-6043943
            </strong>
            <br>
            <b>muhammadfayzan92@gmail.com</b>
        </div>

        <div class="col-sm-8" style="background-color:white">

       
                <form id="contact-form" method="post" action="contact.php" role="form">
                    <div class="controls">
                        <div class="row" style="background-color:white">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="form_name">Firstname *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="form_lastname">Lastname *</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="background-color:white">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="form_phone">Phone</label>
                                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <center>

                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                                <div class="help-block with-errors"></div>
                            </div>
                        </center>
                        <center>
                            <input type="submit" class="btn btn-success btn-send" value="Send message">
                        </center>
                    </div>

                </form>

        </div>

    </div>
    <script src='https://www.google.com/recaptcha/api.js'></script>


    <?php 
   include "footer.php";
    ?>
</body>

</html>
