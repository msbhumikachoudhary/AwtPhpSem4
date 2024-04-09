<!-- Write a PHP script to get the PHP version and configuration information -->
<?php
$phpVersion = phpversion();
echo "PHP Version: " . $phpVersion . "<br><br>";
$phpInfo = phpinfo();
echo $phpInfo;
?>
