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
