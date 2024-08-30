<?php defined('BASEPATH') or exit('No direct script access allowed');

// Add custom values by settings them to the $config array.
// Example: $config['smtp_host'] = 'smtp.gmail.com';
// @link https://codeigniter.com/user_guide/libraries/email.html

$config['useragent'] = 'Easy!Appointments';
$config['protocol'] = 'smtp'; // or 'mail'
$config['mailtype'] = 'html'; // or 'text'
// $config['smtp_debug'] = '0'; // or '1'
$config['smtp_auth'] = TRUE; //or FALSE for anonymous relay.
$config['smtp_host'] = getenv('SMTP_HOST');
$config['smtp_user'] = getenv('SMTP_USER');
$config['smtp_pass'] = getenv('SMTP_PASS');
$config['smtp_crypto'] = getenv('SMTP_CRYPTO', 'tls'); // 'ssl' or 'tls'
$config['smtp_port'] = getenv('SMTP_PORT', 25);
$config['from_name'] = getenv('FROM_NAME');
$config['from_address'] = getenv('FROM_ADDRESS');
$config['reply_to'] = getenv('REPLY_TO');
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
