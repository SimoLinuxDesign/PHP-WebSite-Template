<?php 
/*Dinamic Logo*/
function checkLogo($bool, $url, $alt=""){
  if ($bool === true){
    $urlLink = '<a href="?page=home&title=Home" class="logo-cont">'.$url.'</a>';
  }else{
    $urlLink = '<a href="?page=home&title=Home" class="logo-cont"><img class="logo-image" src="'.$url.'" alt="'.$alt.'"></a>';
  }

  return $urlLink;
}
?>