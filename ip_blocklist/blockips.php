<?php
/*
Plugin Name: VPN IP Block
Description: This plugin uses PHP to block known VPN IP addresses from accessing your site.
*/
/* 
PHP Code from: https://www.hashbangcode.com/article/blocking-multiple-ip-addresses-php
IP List of VPNs: https://github.com/X4BNet/lists_vpn
 */
if ( !file_exists('blocklist.txt') ) 
{
 $deny_ips = file('blocklist.txt');
}
// read user ip adress:
$ip = isset($_SERVER['REMOTE_ADDR']) ? trim($_SERVER['REMOTE_ADDR']) : '';
 
// search current IP in $deny_ips array
if ( (array_search($ip, $deny_ips))!== FALSE ) {
 // address is blocked:
 echo 'Your IP adress ('.$ip.') was blocked!';
 exit;
}  
  
/* Stop Adding Functions Below this Line */
?>



