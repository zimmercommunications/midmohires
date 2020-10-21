<?php

//Should check if link exists for job, and if not, returns company link, else will return null
function getApplyNowLink($company){
  $jobApplyNowLink = get_field('website_url');
  $companyApplyNowLink = get_field('website_url', $company);
  if($jobApplyNowLink){
    echo $jobApplyNowLink;
  }
  elseif($companyApplyNowLink){
    echo $companyApplyNowLink;
  }
  else{
    echo "";
  }
}

//Jesse's Function to simplify array displaying
function showArray($array){
    echo "<pre>";
    echo print_r($array);
    echo "</pre>";
}

//Class to help with counters template section on the home template
class Counters{
  public static function jobs(){
    $count = 0;
    foreach( get_posts( array('post_type' => 'Job')) as $i){
      // what to do while in each item of the array
      $count += 1;
    }
    echo $count;
  }
  public static function companies(){
    $count = 0;
    foreach( get_terms( array('taxonomy' => 'Company')) as $i){
      // what to do while in each item of the array
      $count += 1;
    }
    echo $count;
  }
}

//Class to help with picking between company information
class Info_Sort{
  function pick_address($arg_id){
    $company = get_the_terms($arg_id, 'company');
    $company_location = get_fields('location', $company);
    $job_address = get_field('location', $arg_id );

    if($job_address != null && $company_location != null){
      echo $job_address;
    }
    elseif($job_address != null && $company_location == null){
      echo $job_address;
    }
    elseif($job_address == null && $company_location != null){
      echo $company_location;
    }
  }
  function pick_website($arg_id){
    $company = get_the_terms($arg_id, 'company');
    $company_website = get_fields('website_url', $company);
    $job_website = get_field('website_url', $arg_id );

    if($job_website != null && $company_website != null){
      echo $job_website;
    }
    elseif($job_website != null && $company_website == null){
      echo $job_website;
    }
    elseif($job_website == null && $company_website != null){
      echo $company_website;
    }
    else{
    echo "Test";
    }
  }
}

function pick_job_address($arg_id = false){
  if(!$arg_id) $arg_id = get_the_ID();
  return Info_Sort::pick_address($arg_id);
}

function pick_job_website($arg_id = false){
  if(!$arg_id) $arg_id = get_the_ID();
  return Info_Sort::pick_website($arg_id);
}
