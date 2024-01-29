<?php  /*Initializzation File*/ include "./auto/init.php";?>

<?php
  // ## PAGE & CSS-PAGE ##
  if (!isset($_GET["page"])){
    $page = "home";
  }else{
    if (file_exists("./pages/".$_GET["page"].".php")){
      $page = ($_GET["page"]);
    }else{
      $page = "404";
    }
  }
?>

<?php /*Template Header*/ include "./template/header.php";?>

<?php /*Page Switching*/ include "./pages/" . $page . ".php";?>

<?php /*Template Footer*/ include "./template/footer.php";?>

