<div class="home-form-position">
    <div class="row">
        <div class="col-lg-12">
            <div class="home-registration-form p-4 mb-3">
                <form class="registration-form" method="get" action="<?php echo get_post_type_archive_link('job') ?>">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="registration-form-box">
                                <i class="fa fa-briefcase"></i>
                                <?php $s = (isset($_GET['s'])) ? $_GET['s'] : ""; ?>
                                <input type="text" id="exampleInputName1" name="s" value="<?php echo $s; ?>" class="form-control rounded registration-input-box" placeholder="Job keybords...">
                            </div>
                        </div>

                        <?php
                            //Company Box
                            $terms = new WP_Term_Query(array('taxonomy' => 'company', 'orderby' => 'name', 'order' => 'ASC'));
                            if(count($terms->get_terms()) > 0) :
                                $cur_company = "";
                                if(isset($_GET['company'])) $cur_company = $_GET['company'];
                        ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="registration-form-box">
                                <i class="fa fa-building"></i>
                                <select id="select-company" name="company" class="demo-default">
                                    <option value="">Company</option>
                                    <?php foreach($terms->get_terms() as $term) : ?>
                                        <option <?php if($cur_company == $term->slug) echo 'selected="selected"'; ?> value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php
                            //Job Category Box
                            $terms = new WP_Term_Query(array('taxonomy' => 'job_category', 'orderby' => 'name', 'order' => 'ASC'));
                            if(count($terms->get_terms()) > 0) :
                                $cur_cat = "";
                                if(isset($_GET['job_category'])) $cur_cat = $_GET['job_category'];
                        ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="registration-form-box">
                                <i class="fa fa-list-alt"></i>
                                <select id="select-category" name="job_category" class="demo-default">
                                    <option value="">Category</option>
                                    <?php foreach($terms->get_terms() as $term) : ?>
                                        <option <?php if($cur_cat == $term->slug) echo 'selected="selected"'; ?> value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <?php endif; ?>

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
