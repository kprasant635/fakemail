<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Temp Email</title>
    {{-- <title> @yield('title')</title> --}}
    <!-- <base href="" /> -->
    <meta name="description" content="Welcome">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{!! csrf_token() !!}">

    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="{{ asset('cssadmin/vendors.bundle.css') }}">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="{{ asset('cssadmin/app.bundle.css') }}">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="{{ asset('cssadmin/themes/cust-theme-3.css') }}">
    <link id="myskin" rel="stylesheet" media="screen, print" href="{{ asset('cssadmin/skins/skin-master.css') }}">
    <link id="myskin" rel="stylesheet" media="screen, print" href="{{ asset('cssadmin/custom.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('cssadmin/site.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg" color="#5bbad5') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('cssadmin/datagrid/datatables/datatables.bundle.css') }}">
    <link rel="stylesheet" media="screen, print"
        href="{{ asset('cssadmin/notifications/sweetalert2/sweetalert2.bundle.css') }}">
    <link rel="stylesheet" media="screen, print"
        href="{{ asset('cssadmin/formplugins/bootstrap-datepicker/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('cssadmin/formplugins/summernote/summernote.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('cssadmin/summernote.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('cssadmin/print-page.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/cssadmin/iziToast.min.css"/>
    <style>
        #loader {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100%;
                background: rgba(0,0,0,0.75) url("{{ asset('img/Loading_2.gif') }} ") no-repeat center center;
                z-index: 99999;
            }
    </style>
 
</head>

<body class="mod-bg-1 mod-nav-link mod-nav-link">
    <script>
        /**
         *  This script should be placed right after the body tag for fast execution
         *  Note: the script is written in pure javascript and does not depend on thirdparty library
         **/
        'use strict';
        var classHolder = document.getElementsByTagName("BODY")[0],
            /**
             * Load from localstorage
             **/
            themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {},
            themeURL = themeSettings.themeURL || '',
            themeOptions = themeSettings.themeOptions || '';
        /**
         * Load theme options
         **/
        if (themeSettings.themeOptions) {
            classHolder.className = themeSettings.themeOptions;
            console.log("%c✔ Theme settings loaded", "color: #148f32");
        } else {
            console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...",
                "color: #ed1c24");
        }
        if (themeSettings.themeURL && !document.getElementById('mytheme')) {
            var cssfile = document.createElement('link');
            cssfile.id = 'mytheme';
            cssfile.rel = 'stylesheet';
            cssfile.href = themeURL;
            document.getElementsByTagName('head')[0].appendChild(cssfile);
        } else if (themeSettings.themeURL && document.getElementById('mytheme')) {
            document.getElementById('mytheme').href = themeSettings.themeURL;
        }
        /**
         * Save to localstorage
         **/
        var saveSettings = function() {
            themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item) {
                return /^(nav|header|footer|mod|display)-/i.test(item);
            }).join(' ');
            if (document.getElementById('mytheme')) {
                themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
            };
            localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
        }
        /**
         * Reset settings
         **/
        var resetSettings = function() {
            localStorage.setItem("themeSettings", "");
        }
    </script>
