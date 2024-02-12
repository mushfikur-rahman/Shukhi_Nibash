<?php

  include 'inc/header.php';
  include 'Controller/Message.php';
  $msg = new Message();

  if(isset($_POST['sendmsg'])){
    $result = $msg->adminmsg($_POST);
  }

  include 'inc/navbar.php';
  include 'inc/cover.php';
  include 'inc/about.php';
  include 'inc/contact.php';
  include 'inc/footer.php';
 ?>
 <script>
 $(function(){
   $( "#main_range_cover" ).slider({
         range: true,
         min: 5000,
         max: 100000,
         values: [<?php if(isset($range1) && isset($range2)){
           echo $range1.','.$range2;}
           else{?> 5000,100000 <?php } ?>],
         slide: function( event, ui ) {
           $( "#input_range_cover" ).val( "TK " + ui.values[ 0 ] + " - TK " + ui.values[ 1 ] );
         }
    });
    $( "#input_range_cover" ).val( "TK " + $( "#main_range_cover" ).slider( "values", 0 ) +
     " - TK " + $( "#main_range_cover" ).slider( "values", 1 ) );
   });
 </script>
