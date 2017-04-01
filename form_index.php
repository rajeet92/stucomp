<?php

if (detectDevice() == 'Computer') {
    include './slider.php';
} else {
    include './slider_mobile.php';
    include './form_mobile.php';
}
?>                   

