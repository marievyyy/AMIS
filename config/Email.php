<?php

defined('BASEPATH') OR exit('No direct script access allowed');


$config['protocol'] = "smtp";
$config['smtp_host'] = "smtp.mail.yahoo.com";
$config['smtp_user'] = "pup.access@yahoo.com";
$config['smtp_pass'] = "asda123numbersign";
$config['smtp_port'] = '465';
$config['smtp_timeout'] = '60';
$config['smtp_crypto'] = 'ssl';
$config['wordwrap'] = TRUE;
$config['mailtype'] = 'html';
$config['charset'] = 'iso-8859-1';
$config['validate'] = TRUE;

$config['charset']='utf-8';
$config['newline']="\r\n";
$config['crlf'] = "\r\n";