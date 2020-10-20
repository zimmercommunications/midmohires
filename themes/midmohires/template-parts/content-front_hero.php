<section class="bg-home">
    <div class="back">
        <div class="bg-layer"></div>
        <img class="people" src="<?php echo get_template_directory_uri() . '/assets/img/job-fair-dude.jpg'; ?>" />
        <img class="hands blend--color-dodge" src="<?php echo get_template_directory_uri() . '/assets/img/handshake.png'; ?>" />
    </div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="title-heading text-center text-white">
                            <h6 class="small-title text-uppercase text-light mb-3">Find jobs, create trackable resumes and enrich your applications.</h6>
                            <h1 class="heading font-weight-bold mb-4">The Easiest Way to Get Your New Job</h1>
                        </div>
                    </div>
                </div>
                <div class="home-form-position">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="home-registration-form p-4 mb-3">
                                <form class="registration-form" method="get" action="<?php echo get_post_type_archive_link('job') ?>">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="registration-form-box">
                                                <i class="fa fa-briefcase"></i>
                                                <input type="text" id="exampleInputName1" name="s" class="form-control rounded registration-input-box" placeholder="Job keybords...">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="registration-form-box">
                                                <i class="fa fa-building"></i>
                                                <select id="select-company" name="company" class="demo-default">
                                                    <option value="">Company</option>
                                                    <option value="1">Zimmer Communications</option>
                                                    <option value="2">Fuze32</option>
                                                    <option value="3">Inside Columbia Magazine</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="registration-form-box">
                                                <i class="fa fa-list-alt"></i>
                                                <select id="select-category" name="job_category" class="demo-default">
                                                    <option value="">Categories...</option>
                                                    <option value="4">Accounting</option>
                                                    <option value="1">IT & Software</option>
                                                    <option value="3">Marketing</option>
                                                    <option value="5">Publishing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="registration-form-box">
                                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
