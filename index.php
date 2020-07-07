<?php

use local_interview\models\users;

require_once('../../config.php');
require_login();
$url = new moodle_url('/local/interview/index.php');
$syscontext = context_system::instance();
$PAGE->set_url($url);
$PAGE->set_context($syscontext);

echo $OUTPUT->header();

// Your code here..
$users = new users();
$users->say("Hello There!");

echo $OUTPUT->footer($PAGE->course);