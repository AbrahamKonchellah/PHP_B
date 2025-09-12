<?php
require 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'Abraham Konchellah',
    'mail_from' => 'abraham.somoine@strathmore.edu',
    'name_to' => 'Konchellah',
    'mail_to' => 'abrahamkonchellah@gmail.com',
    'subject' => 'Hello From ICS B',
    'body' => 'Welcome to ICS B! <br> This is a new semester. Let\'s have fun together.'
];

$ObjSendMail->Send_Mail($conf, $mailCnt);