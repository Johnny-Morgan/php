<?php
    # Datetime

    echo date('d'); // Day
    echo '<br>';
    echo date('m'); // Month
    echo '<br>';
    echo date('Y'); // Year
    echo '<br>';
    echo date('d/m/Y');
    echo '<br>';
    echo date('h'); // Hour
    echo '<br>';
    echo date('i'); // Min
    echo '<br>';
    echo date('s'); // Seconds
    echo '<br>';
    echo date('a'); // AM or PM
    echo '<br>';
    echo date('h:i:sa');
    echo '<br>';

    // Set time Zone
    date_default_timezone_set('Europe/Dublin');
    echo date('h:i:sa');
    echo '<br>';

    $timestamp = mktime(9, 25, 30, 5, 11, 1981); // Number of seconds since 1/1/1970
    echo $timestamp;
    echo '<br>';

    echo date('d/m/Y', $timestamp);
    echo '<br>';
    echo date('d/m/Y h:i:sa', $timestamp);
    echo '<br>';

    $timestamp2 = strtotime('4:30pm December 27 2014');
    echo date('d/m/Y h:i:sa', $timestamp2);
    echo '<br>';

    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Monday');
    $timestamp5 = strtotime('+8 days');

    echo '<br>';
    echo date('d/m/Y', $timestamp3);
    echo '<br>';
    echo date('d/m/Y', $timestamp4);
    echo '<br>';
    echo date('d/m/Y', $timestamp5);

?>