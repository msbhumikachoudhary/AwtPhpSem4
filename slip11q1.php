<!-- Write a PHP script to get the PHP version and configuration information. -->
<?php
$phpVersion = phpversion();
echo "PHP Version: " . $phpVersion . "\n\n";
$phpInfo = phpinfo();
ob_start();
phpinfo();
$phpInfo = ob_get_clean();
echo "PHP Configuration:\n";
echo $phpInfo;
?>
