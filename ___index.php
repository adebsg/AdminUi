<html>
   <head>
      <title>Second mod_rewrite example</title>
   </head>
   <body>
      <p>
         The requested page was:
         
         <?php 
         	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
         	echo $actual_link; 
         
         ?>
      </p>
   </body>
</html>