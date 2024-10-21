<?php

 session_destroy();
echo "<script language=\"JavaScript\" type=\"text/JavaScript\">";
echo "self.close();";
echo "</script>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\" />"; 
?>