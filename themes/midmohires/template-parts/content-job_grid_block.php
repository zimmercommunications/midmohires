<?php
$company = get_the_terms(get_the_ID(), 'company');

$jobCategory = get_the_terms(get_the_ID(), 'job_category');

$term = get_queried_object();


//accessing the array w/n the terms "company" and accessing the first (and only) term which is the assigned company.
$rawLogo = get_field('logo', $company[0]);

//setting the logo size var
$logoSize = 'medium';
//accessing the array for the image. path: terms(company)->term(company)->'logo'->'sizes'->
$logo = $rawLogo['sizes'][$logoSize];
//Vars for Apply Now Links
$jobApplyNowLink = get_field('website_url');
$companyApplyNowLink = get_field('website_url', $company[0]);


$location = get_field("location");

$salary = get_field("salary");


$jobType = get_field("job_type")[0];


?>
<div class="col-lg-4 col-md-6 mt-4 pt-2">
    <div class="list-grid-item rounded">
        <div class="grid-item-content p-3">
            <ul class="list-inline mb-0">
                <?php
                    if(isset($job_type[0])) :
                        $badge = "badge-success";
                        if($job_type == 'Part Time') $badge = "badge-info";
                ?>
                <li class="list-inline-item f-15"><span class="badge <?php echo $badge; ?>"><?php echo $job_type; ?></span></li>
                <?php endif; ?>
            </ul>
            <div class="grid-list-img mt-3 job-grid-image">
                <a href="<?php the_permalink(); ?>"><img src="<?php if($logo) echo $logo; ?>" alt="<?php the_title(); ?>" class="img-fluid d-block"></a>
            </div>
            <div class="grid-list-desc mt-3">
                <h5 class="mb-1"><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_field('display_name') ?></a></h5>
                <p class="text-muted f-14 mb-1"><?php echo pick_job_address(); ?></p>
                <p class="text-muted mb-1">$700 - $800/month</p>
                <p class="text-muted mb-1">3 Years Exp.</p>
            </div>
        </div>

        <div class="apply-button p-3 border-top">
            <a href="#" class="btn btn-primary btn-sm">Apply Now</a>
        </div>
    </div>
</div>
