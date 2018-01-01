

<section id="contact">

<!-- Heading -->
<h2 class="mb-5 font-weight-bold text-center">Contact Me</h2>

<!--Grid row-->
<?php 
                    
                    if(isset($_POST['submit'])){
                        $cs_name = $_POST['name'];
                        $cs_email = $_POST['email'];
                        $cs_subject = $_POST['subject'];
                        $cs_message = $_POST['message'];
                        if(empty($cs_name) or empty($cs_email) or empty($cs_subject) or empty($cs_message)){
                          $error_msg = "All feilds are Required";  
                        }
                        else{
                            $cs_query = "INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES(NULL,'$cs_name', '$cs_email', '$cs_subject', '$cs_message');";
                            if(mysqli_query($con, $cs_query)){
                                $msg = "Message sent";
                                $cs_name = "";
                                $cs_email = "";
                                $cs_subject = "";
                                $cs_message = "";
                            }
                            else{
                                $error_msg = "Message not sent";
                            }
                        }
                    }
                    ?>
<div class="row">

    <!--Grid column-->
    <div class="col-lg-5 col-md-12">

        <!-- Form contact -->
        <form class="p-5" method="post">

            <div class="md-form form-sm">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" name="name" id="form3" value="<?php if(isset($cs_name)){echo $cs_name;}?>" class="form-control">
                <label for="form3">Your name</label>
            </div>

            <div class="md-form form-sm">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="text" id="form2" name="email"  value="<?php if(isset($cs_email)){echo $cs_email;}?>"  class="form-control">
                <label for="form2">Your email</label>
            </div>

            <div class="md-form form-sm">
                <i class="fa fa-tag prefix grey-text"></i>
                <input type="text" id="form32" name="subject" value="<?php if(isset($cs_subject)){echo $cs_subject;}?>"  class="form-control">
                <label for="form34">Subject</label>
            </div>

            <div class="md-form form-sm">
                <i class="fa fa-pencil prefix grey-text"></i>
                <textarea type="text" id="form8" name="message" <?php if(isset($cs_message)){echo $cs_message;}?> class="md-textarea" style="height: 100px"></textarea>
                <label for="form8">Your message</label>
            </div>

            <div class="text-center">
                <input type="submit" name="submit" class="btn btn-primary">
              
            </div>
            <?php
                 if(isset($error_msg)){
                    echo "<span style='color:red;' class='pull-right'>$error_msg</span>";
                    }
                    else if(isset($msg)){
                        echo "<span style='color:green;' class='pull-right'>$msg</span>";
                    }
            ?>

        </form>
        <!-- Form contact -->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7 col-md-12">

        <!--Grid row-->
        <div class="row text-center">

            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-3">

                <p>
                    <i class="fa fa-map fa-1x mr-2 grey-text"></i>1/5299 St. no.11 Balbir Nagar Ext. shahdara Delhi-110032</p>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-3">

                <p>
                    Nipunvats09@gmail.com</p>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-3">

                <p>
                    <i class="fa fa-phone fa-1x mr-2 grey-text"></i>9599885554</p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Google map-->
        <div id="map-container" class="z-depth-1-half map-container" style="height: 400px"></div>

    </div>
    <!--Grid column-->

</div>
<!--Grid row-->

</section>