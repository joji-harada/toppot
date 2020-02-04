<?php include 'config.php';?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?=$title?></title>

<!--Remy Sharp Shim --> 
<!--[if lte IE 9]> 
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" type="text/javascript" >
</script> 
<![endif]-->
    <!--viewport tag-->
<meta name="viewport" content="width=device-width" />
    <!--Meyer's Reset-->
<link href="css/meyer.css" rel="stylesheet" type="text/css">
       <!-- Font Awesome link -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- css menu maker styles -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/menumaker.css">

   <!-- JQuery UI Styles -->
<link rel="stylesheet" href="css/jquery-ui.min.css">
    
   <!-- Main Styles -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/locationstyles.css" rel="stylesheet" type="text/css">
<link href="css/menupages.css" rel="stylesheet" type="text/css">
<link href="css/careerspage.css" rel="stylesheet" type="text/css">
<link href="css/coffeepage.css" rel="stylesheet" type="text/css">
<link href="css/merchpage.css" rel="stylesheet" type="text/css">

   <!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    
   <!-- JQuery CDN links -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

   <!-- menu maker javascript -->
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>

   <!-- JQuery for parallax effect -->
<script src="js/parallax.min.js"></script>

   <!-- JQuery UI CDN -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   <!-- JQuery Form Validator CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

   

    
</head>

<body class="<?=$class?>">
    <div id="header" class="logo">
      <div class="tplogo">
         <a href="index.php"><img src="images/tplogo.png" alt="Top Pot Logo"></a>
      </div>

      

      <div id="social">
         <ul>
            <li><a href="https://www.facebook.com/TopPotDoughnuts/?ref=br_rs" target="_blank" title="visit us on facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.instagram.com/toppotdoughnuts/?hl=en" target="_blank" title="visit us on instagram"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/Toppot?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" title="visit us on twitter"><i class="fab fa-twitter"></i></a></li>
         </ul>
      </div>

    </div> <!--end HEADER div-->
    
    <!--start nav from css menu maker-->
    <div id="cssmenu" class="align-center">
      <ul>
         <li><a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a></li>
         <li><a href="contact.php"><i class="fa fa-fw fa-phone"></i> Contact &amp; Ordering</a></li>
         <li><a href="#"><i class="fa fa-fw fa-cutlery"></i> Doughnuts &amp; Coffee</a>
            <ul>
               <li><a href="coffee.php"><i class="fa fa-fw fa-coffee"></i> Coffee</a></li>
               <li><a href="#"><i class="fa fa-fw fa-circle-o"></i> Doughnuts</a>
                  <ul>
                     <li><a href="classicmenu.php">Classics</a></li>
                     <li><a href="seasonalmenu.php">Seasonal</a></li>
                  </ul>
               </li>
            </ul>
         </li>
         <li><a href="locations.php"><i class="fa fa-fw fa-map"></i> Locations</a></li>
         <li><a href="careers.php"><i class="fa fa-fw fa-briefcase"></i> Careers</a></li>
         <li><a href="merch.php"><i class="fa fa-fw fa-shopping-basket"></i> Merch</a></li>
      </ul>
</div>
    