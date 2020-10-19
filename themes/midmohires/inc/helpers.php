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
