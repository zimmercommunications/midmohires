<div class="home-form-position">
    <div class="row">
        <div class="col-lg-12">
            <div class="home-registration-form p-4 mb-3">
                <form class="registration-form" id="search-simple" method="get" action="<?php echo get_post_type_archive_link('job') ?>">
                    <div class="row">
                        <div class="col-lg-9 col-md-9">
                            <div class="registration-form-box">
                                <i class="fa fa-briefcase"></i>
                                <?php $s = (isset($_GET['s'])) ? $_GET['s'] : ""; ?>
                                <input type="text" id="exampleInputName1" name="s" value="<?php echo $s; ?>" class="form-control rounded registration-input-box" placeholder="Job keywords...">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
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
