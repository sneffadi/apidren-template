<?php
    $gaID = "UA-XXXXXXXX-1";
    $liveChat = true;
    $typekit = ""; //add typekit id
    $googlefont = "Source+Sans+Pro:400,600,700,300,900"; // example: Source+Sans+Pro:400,600,700,300
    $host =  $_SERVER['HTTP_HOST']; //without www
    $url = "http://" . $_SERVER['HTTP_HOST'];
    $formURL = "https://secure." . $host . "/secure-checkout/";
    $buy1 = "test1"; //UC buy 1
    $buy2 = "test2"; //UC buy 2
    $buy3 = "test3"; //UC buy 2
    $productName = "Hairlastin";
    $phoneNumber = "888-697-4964";
    $hrefNumber = preg_replace("/\D/", "", $phoneNumber);
    $companyPhone = "801-319-9865"; //for company contact info (privacy policy and t&c)
    $supportEmail = "support@" . $host;
    $companyName = "Synergistic Nutritional Compounds, LLC";
    $addressOne = "4778 North 300 West";
    $addressTwo = "Suite 120";
    $cityStateZip = "Provo, UT 84604";

