<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: /../../DNDPPMS/index.html");
   }
?>