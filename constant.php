<?php

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    // Local environment
    $desktop_url = 'http://localhost/excis/';
} else {
    // Production environment
    $desktop_url = 'http://www.exc1s.com/';
}
