<!DOCTYPE html>
<html lang="en">

  <?php include "components/head.php" ?>

  <body>

    <!-- Navigation -->
    <?php include "components/nav.php" ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row my-4">
            <div class="col-12">
                <form name="contactform" method="post" action="/server/send_form_email.php">
                    <div class="row">
                        <div class="col-12 col-sm-6 contact-item">
                            <div class="col-12">
                                <label class="contact-label" for="first_name">First Name *</label>
                            </div>
                            <div class="col-12">
                                <input class="contact-input" type="text" name="first_name" maxlength="50" size="30">
                            </div>
                            
                        </div>
                        <div class="col-12 col-sm-6 contact-item">
                            <div class="col-12">
                                <label class="contact-label" for="last_name">Last Name *</label>
                            </div>
                            <div class="col-12">
                                <input class="contact-input" type="text" name="last_name" maxlength="50" size="30">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 col-sm-6 contact-item">
                            <div class="col-12">
                                <label class="contact-label" for="email">Email Address *</label>
                            </div>
                            <div class="col-12">
                                <input class="contact-input" type="text" name="email" maxlength="80" size="30">
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6 contact-item">
                            <div class="col-12">
                                <label class="contact-label" for="telephone">Telephone Number</label>
                            </div>
                            <div class="col-12">
                                <input class="contact-input" type="text" name="telephone" maxlength="30" size="30">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-8">
                            <div class="col-12">
                                <label class="contact-input" for="comments">Comments *</label>
                            </div>
                            <div class="col-12">
                                <textarea class="contact-textbox" name="comments" maxlength="1000" rows="6"></textarea>
                            </div> 
                        </div>
                    </div>
                    <div class="col-12">
                        <input class="btn-send" type="submit" value="Submit">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "components/footer.php" ?>

  </body>

</html>
