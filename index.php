<?php

use local_interview\users;

require_once('../../config.php');

require_login();

$url = new moodle_url('/local/interview/index.php');
$syscontext = context_system::instance();

$PAGE->set_url($url);
$PAGE->set_context($syscontext);

echo $OUTPUT->header();

/*
 * Your code here..
 *
 * List of users
 * View table of users:
 *          first name, surname
 *
 * View one user's information:
 *          first name, surname
 *          enrolled courses, date enrolled, role in course
 *
 * Edit user in code only (no ui required):
 *          Edit name, surname
 *
 * If anything is unclear then assume the answer, but please clarify all assumptions made.
 * Moodle docs for coding style: https://meet.google.com/linkredirect?authuser=0&dest=https%3A%2F%2Fdocs.moodle.org%2Fdev%2FCoding_style
 */

echo $OUTPUT->footer($PAGE->course);
