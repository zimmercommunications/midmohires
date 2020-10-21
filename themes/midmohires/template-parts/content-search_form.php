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
