<?php
SESSION_START();
echo "waiting for logout";
SESSION_DESTROY();
header("location: /FORUM/index.php?logout=true");
// header("location: /FORUM/index.php"); ?>