<?php 
require 'apicm.php';
$satrtrt = new coinmaster;
popen('cls', 'w');
echo "API BY AHMUAY.NET\n";
$link = readline("Link : => ");
$count = readline("Count : => ");
for ($i=0; $i < $count; $i++) { 
	$start = $satrtrt->addspin($link);
	print_r("[".$i."] => ".$start."\n");
}
?>