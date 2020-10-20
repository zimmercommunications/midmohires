
<?php
$company = get_the_terms(get_the_ID(), 'company');

$jobCategory = get_the_terms(get_the_ID(), 'job_category');

$term = get_queried_object();


//accessing the array w/n the terms "company" and accessing the first (and only) term which is the assigned company.
$square = get_field('square_logo', $company[0]);
if($square){
    $rawLogo = $square;
} else {
    $rawLogo = get_field('logo', $company[0]);
}

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

<div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
    <div class="lable text-center pt-2 pb-2">
        <ul class="list-unstyled best text-white mb-0 text-uppercase">
            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
        </ul>
    </div>
    <div class="p-4">
        <div class="row align-items-center">
            <div class="col-md-2">
                <div class="mo-mb-2 logo-container">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo $logo;?>" alt="<?php echo $logo; ?>" />
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <h5 class="f-18"><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_field('display_name'); ?></a></h5>
                    <p class="text-muted mb-0"><?php if(isset($company[0])) : ?><a href="<?php echo get_term_link($company[0]); ?>"><?php echo $company[0]->name; ?></a><?php endif; ?></p>
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i> <?php echo $location ?></p>
                </div>
            </div>
            <div class="col-md-2">
                <div>
                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary"></span><?php echo $salary; ?></p>
                </div>
            </div>
            <div class="col-md-2">
                <div>
                    <p class="text-muted mb-0"><?php echo $jobType; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
