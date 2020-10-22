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

  //Should take the field_name argument and use it to look up similar fields in both Company & Job //Will Default to $job_field if data of $company_field is null
  // Will only work if FIELD NAMES MATCH
  function pick_field($field_name, $arg_id){
    $companyTerms = get_the_terms($arg_id, 'company');
    $company_field = get_fields($field_name, $companyTerms);
    $job_field = get_field($field_name, $arg_id );

    if($job_field != null && $company_field != null){
      echo $job_field;
    }
    elseif($job_field != null && $company_field == null){
      echo $job_field;
    }
    elseif($job_field == null && $company_field != null){
      echo $company_field;
    }
    else{
      echo "Test";
    }
  }
}
// Will take an array of field data, check if it exists, and then display the data as a sm logo.
function display_logos($array){
  foreach($array as $k => $v){
    if($v){
      echo '<li class="list-inline-item"><a href="' .  $v . '" class="rounded"><i class="mdi mdi-' . $k . '"></i></a></li>';
    }

  }
}

//DEPRICATED: Set to expire in 10/2023
function isPresent($array){
  display_logos($array);
}

//Helper Functions!

function pick_job_address($arg_id = false){
  if(!$arg_id) $arg_id = get_the_ID();
  return Info_Sort::pick_address($arg_id);
}

function pick_job_website($arg_id = false){
  if(!$arg_id) $arg_id = get_the_ID();
  return Info_Sort::pick_website($arg_id);
}

function pick_job_field($field_name, $arg_id = false){
  if(!$arg_id) $arg_id = get_the_ID();
  return Info_Sort::pick_field($field_name, $arg_id);
}
?>
