<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit ( "Direct access not permitted." );

?>
<html>
<head>

     <meta charset="utf-8">
     <title>IG Follow Count</title>
     <meta name="robots" content="noarchive">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" type="image/png" sizes="150x150" href="<?php echo get_data( 'profile_picture' ); ?>">
     <link rel="apple-touch-icon" sizes="150x150" href="<?php echo get_data( 'profile_picture' ); ?>">
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
     <?php load_theme_styles(); ?>
     <script type="text/javascript" src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/jquery.number.min.js"></script>

</head>
<body class="<?php echo get_active_page(); ?>">
<header class="logo-header">
  <img src="img/clipboard.png" alt="IG 9recent Logo"/><h1>IG 9recent</h1>
</header>
    <main class="content">
