<?php
//whether ip is from share internet
$instance_id = shell_exec('ec2-metadata --instance-id 2> /dev/null | cut -d " " -f 2');
// if its not set make it 0
if (empty($instance_id)) {
    $instance_id = 0;
}
echo "<br>";
echo " instance Id = $instance_id";
echo "<br>";


echo "<br>";

$instance_ip = shell_exec('ec2-metadata  --public-ipv4 2> /dev/null | cut -d " " -f 2');
// if its not set make it 0
if (empty($instance_ip)) {
    $instance_ip = 0;
}
echo "instance ip =  $instance_ip";

?>
