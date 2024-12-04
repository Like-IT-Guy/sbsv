<!-- Start about-top Area -->
<section class="">
    <div class="container-fluid">
        <div class="row bg-light" style="margin-top:12%;">
            <div class="col-lg-8">
                <h1><?= $title ?></h1>
                <?php echo  $text; ?>
                    <img class="img-responsive img-rounded" style="height: 260px;" src="<?php echo base_url(). 'assets/web/img/' . $img; ?>" />
            </div>
            <div class="col-lg-3">
                <div class="row formDv" style="top:133px;">
                    <div class="col-md-12 col-sm-12 col-xs-12 booking-right" style="background-color:#05034d;">
                        <h4 class="text-white" style=" text-align: center; font-family: 'Helvetica Neue' ,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 600;">Free Consultation</h4>
                        <form action="<?= base_url().'Leads/added_ca_consultation ' ?>" method="POST" enctype="multipart/form-data" onsubmit="return submitUserForm();">
                            <input class="form-control required" type="text" id="name" name="name" placeholder="Your Name" required />
                            <input class="form-control required" type="email" id="email" name="email" placeholder="Email Address" required />
                            <input id="phone_no" class="form-control required" type="text" name="phone_no" placeholder="Phone Number" value="" required />
                            <div class="form-group text-white">
                                <p>Are you a permanent resident/Canadian citizen:</p>
                                <input type="radio" id="yes" name="permanent" value="yes" required>
                                <label for="male">Yes</label>
                                <input type="radio" id="no" name="permanent" value="no" required>
                                <label for="no">No</label>
                            </div>
                            <select id="type1" name="que" class="form-control form-control-lg" required>
                                <option value="" disabled="" selected="">How did you hear about us?</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Google">Google</option>
                                <option value="Twitter">Twitter</option>
                                <option value="Flyers or Brochures">Flyers or Brochures</option>
                                <option value="Referred by a Friend">Referred by a Friend</option>
                                <option value="Others">Others</option>
                            </select>
                            <input type="hidden" name="id" />
                            <div class="form-group">
                                <textarea class="form-control" rows="2" id="message" name="message" placeholder="Leave us a message with your requirements" required></textarea>
                            </div>
                            <div class="form-group">
                                <div class="gcontainer">
                                    <div class="g-recaptcha" data-sitekey="6Lf3y5kUAAAAAOr9LF226e4-4RYl4GKkl8EWgEOX"></div>
                                    <div id="g-recaptcha-error"></div>
                                </div>
                            </div>
                            <button class="bg-light btn btn-default btn-lg btn-block text-center submit"><span class="text-primary">Request a Free Consultation</span></button>
                            <div class="msg"></div>
                            <p>
                                <script>
                                    function fun1() {
                                        return jQuery('#ff').form('validate');
                                    }
                                </script>
                            </p>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End about-top Area -->
