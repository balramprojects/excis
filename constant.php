<?php

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    // Local environment
    $desktop_url = 'http://localhost/excis/';
    $desktop_images = 'http://localhost/excis/assets/images/';

} else {
    // Production environment
    $desktop_url = 'http://www.exc1s.com/';
    $desktop_images = 'http://www.exc1s.com/assets/images/';
}



