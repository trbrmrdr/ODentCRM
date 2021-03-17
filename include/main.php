<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 17.03.2021
 * Time: 14:59
 */


function write_main_header($theme_name = 'theme-default')
{
    echo <<<EOD
<!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,600,700,800' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="/assets/css/{$theme_name}/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="/assets/css/{$theme_name}/materialadmin.css"/>
    <link type="text/css" rel="stylesheet" href="/assets/css/{$theme_name}/font-awesome.min.css"/> <!--Font Awesome Icon Font-->
    <link type="text/css" rel="stylesheet" href="/assets/css/{$theme_name}/material-design-iconic-font.min.css"/> <!--Material Design Iconic Font-->
    
    <link type="text/css" rel="stylesheet" href="/assets/css/{$theme_name}/libs/jquery-ui/jquery-ui-theme.css?1423393666" />
	<link type="text/css" rel="stylesheet" href="/assets/css/{$theme_name}/libs/fullcalendar/fullcalendar.css?1425466619" />
    <!-- Additional CSS includes -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/assets/js/libs/utils/html5shiv.js"></script>
    <script type="text/javascript" src="/assets/js/libs/utils/respond.min.js"></script>
    <![endif]-->
EOD;
}


function write_main_js_libs()
{
    echo <<<EOD
<!-- BEGIN JAVASCRIPT -->
<script src="/assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="/assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="/assets/js/libs/bootstrap/bootstrap.min.js"></script>
<script src="/assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>

<!-- Put App.js last in your javascript imports -->
<!--<script src="/assets/js/core/source/App.min.js"></script>-->

<!--<script src="/assets/js/libs/jquery/jquery-1.11.2.min.js"></script>-->
<!--<script src="/assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>-->
<script src="/assets/js/libs/jquery-ui/jquery-ui.min.js"></script>
<!--<script src="/assets/js/libs/bootstrap/bootstrap.min.js"></script>-->
<script src="/assets/js/libs/spin.js/spin.min.js"></script>
<script src="/assets/js/libs/autosize/jquery.autosize.min.js"></script>
<script src="/assets/js/libs/moment/moment.min.js"></script>
<!--<script src="/assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>-->
<script src="/assets/js/libs/fullcalendar/fullcalendar.min.js"></script>
<script src="/assets/js/core/source/App.js"></script>
<script src="/assets/js/core/source/AppNavigation.js"></script>
<script src="/assets/js/core/source/AppOffcanvas.js"></script>
<script src="/assets/js/core/source/AppCard.js"></script>
<script src="/assets/js/core/source/AppForm.js"></script>
<script src="/assets/js/core/source/AppNavSearch.js"></script>
<script src="/assets/js/core/source/AppVendor.js"></script>
<script src="/assets/js/core/demo/Demo.js"></script>
<script src="/assets/js/core/demo/DemoCalendar.js"></script>
EOD;
}