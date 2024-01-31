<?php
  // ####### Title #######
  if (!isset($_GET["title"])){
    $title = $titleSite . " | Home";
  }else{
    $title = $titleSite . " | ".($_GET["title"]);
  }
  /*##########################*/
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <!--Dinamic CSS Page-->
    <link rel="stylesheet" href="css/css-pages/<?php echo $page; ?>.css">  
    <script src="js/main.js"></script>
    <title><?php echo $title;?></title>

  </head>
  <body>
    <div class="container">
      <header class="header-main">
        <div class="logo-main"><?php echo $logoInfo; ?></a></div>
        <?php include "nav.php";?>
      </header>
      <div class="content">