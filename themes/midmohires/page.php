<?php get_header(); ?>

    <section class="section page-next-level">
        <?php get_template_part("template-parts/content", "hero"); ?>
    </section>

    <!-- CONTACT FORM START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-dark mb-0">Get In Touch :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-7 mt-4 pt-2">
                    <div class="custom-form rounded border p-4">
                        <div id="message"></div>
                        <form method="post" action="#" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Name</label>
                                        <input name="name" id="name2" type="text" class="form-control resume" placeholder="Enter Name..">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Email address</label>
                                        <input name="email" id="email1" type="email" class="form-control resume" placeholder="Enter Email..">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Subject</label>
                                        <input type="text" class="form-control resume" id="subject" placeholder="Subject..">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Message</label>
                                        <textarea name="comments" id="comments" rows="5" class="form-control resume" placeholder="Message.."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 mt-4 pt-2">
                    <div class="border rounded text-center p-4">
                        <h5 class="text-dark pb-3">Zimmer Communications</h5>
                        <div class="contact-location rounded mt-5 p-4" style="position: relative;">
                            <div class="contact-location-icon bg-white text-primary rounded-pill">
                                <i class="mdi mdi-map-marker"></i>
                            </div>
                            <p class="text-muted pt-4 f-20 mb-0">3215 Lemone Industrial Blvd. Columbia, MO 65201</p>
                        </div>
                        <div class="contact-location rounded mt-5 p-4" style="position: relative;">
                            <div class="contact-location-icon bg-white text-primary rounded-pill">
                                <i class="mdi mdi-phone"></i>
                            </div>
                            <p class="text-muted pt-4 f-20 mb-0"><a href="tel:573-875-1099">(573) 875-1099</a></p>
                        </div>
                        <h6 class="text-muted mt-4 mb-0">Share</h6>
                        <ul class="list-unstyled social-icon mt-3 mb-0">
                            <li class="list-inline-item"><a href="https://www.facebook.com/ZimmerMidMo?" class=""><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/ZRGMarketing" class=""><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/zimmercommunications/?hl=en" class=""><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/company/zimmer-radio-group" class=""><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM END -->


<?php get_footer(); ?>
