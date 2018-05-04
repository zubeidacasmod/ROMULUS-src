<?php
ob_start();
// run code in x.php file
// ...
// saving captured output to file
file_put_contents('filename.html', ob_get_contents());
// end buffering and displaying page
ob_end_flush();
?>