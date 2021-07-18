<?php
	session_start();
	require_once('dbconfig/config.php');
    $idcode= $_SESSION['idcode'];
    if($idcode=="")
    {header('location:userlogin.php');}
    $sql=mysqli_query($con,"select * from user_regist where idcode='$idcode' ");
    $users=mysqli_fetch_assoc($sql);
    //print_r($users);
      //phpinfo();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GPA-USER</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
   
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="assets/js/chart-master/Chart.js"></script>

<style>




ul li {
    list-style: none;
}

a, a:hover, a:focus {
    text-decoration: none;
    outline: none;
}
::selection {

    background: #68dff0;
    color: #fff;
}
::-moz-selection {
    background: #68dff0;
    color: #fff;
}

#container {
    width: 100%;
    height: 100%;
}

/* Bootstrap Modifications */
.modal-header {
	background: #68dff0;
}

.modal-title {
	color: white;
}

.btn-round {
	border-radius: 20px;
	-webkit-border-radius: 20px;
}

.accordion-heading .accordion-toggle {
	display: block;
	cursor: pointer;
	border-top: 1px solid #F5F5F5;
	padding: 5px 0px;
	line-height: 28.75px;
	text-transform: uppercase;
	color: #1a1a1a;
	background-color: #ffffff;
	outline: none !important;
	text-decoration: none;
}	



/*Theme Backgrounds*/

.bg-theme {
	background-color: #68dff0;
}

.bg-theme02 {
	background-color: #ac92ec;
}

.bg-theme03 {
  background-color: #48cfad;
}

.bg-theme04 {
  background-color: #ed5565;
}
/*Theme Buttons*/

.btn-theme {
  color: #fff;
  background-color: #68dff0;
  border-color: #48bcb4;
}
.btn-theme:hover,
.btn-theme:focus,
.btn-theme:active,
.btn-theme.active,
.open .dropdown-toggle.btn-theme {
  color: #fff;
  background-color: #48bcb4;
  border-color: #48bcb4;
}

.btn-theme02 {
  color: #fff;
  background-color: #ac92ec;
  border-color: #967adc;
}
.btn-theme02:hover,
.btn-theme02:focus,
.btn-theme02:active,
.btn-theme02.active,
.open .dropdown-toggle.btn-theme02 {
  color: #fff;
  background-color: #967adc;
  border-color: #967adc;
}

.btn-theme03 {
  color: #fff;
  background-color: #48cfad;
  border-color: #37bc9b;
}
.btn-theme03:hover,
.btn-theme03:focus,
.btn-theme03:active,
.btn-theme03.active,
.open .dropdown-toggle.btn-theme03 {
  color: #fff;
  background-color: #37bc9b;
  border-color: #37bc9b;
}

.btn-theme04 {
  color: #fff;
  background-color: #ed5565;
  border-color: #da4453;
}
.btn-theme04:hover,
.btn-theme04:focus,
.btn-theme04:active,
.btn-theme04.active,
.open .dropdown-toggle.btn-theme04 {
  color: #fff;
  background-color: #da4453;
  border-color: #da4453;
}

.btn-clear-g {
	color: #48bcb4;
	background: transparent;
	border-color: #48bcb4;
}

.btn-clear-g:hover {
	color: white;
}

hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #797979;
}



/*Helpers*/

.centered {
	text-align: center;
}

.goleft {
	text-align: left;
}

.goright {
	text-align: right;
}

.mt {
	margin-top: 25px;
}

.mb {
	margin-bottom: 25px;
}

.ml {
	margin-left: 5px;
	}

.no-padding {
	padding: 0 !important;
}

.no-margin {
	margin: 0 !important;
}

/*Exclusive Theme Colors Configuration*/

.label-theme {
	background-color: #68dff0;
}

.bg-theme {
	background-color: #68dff0;
}

ul.top-menu > li > .logout {
	color: #f2f2f2;
	font-size: 12px;
	border-radius: 4px;
	-webkit-border-radius: 4px;
	border: 1px solid #64c3c2 !important;
	padding: 5px 15px;
	margin-right: 15px;
	background: #68dff0;
	margin-top: 15px;
}


/*sidebar navigation*/

#sidebar {
    width: 210px;
    height: 100%;
    position: fixed;
    background: #424a5d;
}

#sidebar h5 {
	color: #f2f2f2;
	font-weight: 700;
}

#sidebar ul li {
    position: relative;
}

#sidebar .sub-menu > .sub li  {
    padding-left: 32px;
}

#sidebar .sub-menu > .sub li:last-child {
    padding-bottom: 10px;
}

/*LEFT NAVIGATION ICON*/
.dcjq-icon {
    height:17px;
    width:17px;
    display:inline-block;
    background: url("../img/nav-expand.png") no-repeat top;
    border-radius:3px;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    position:absolute;
    right:10px;
    top:15px;
}
.active .dcjq-icon {
    background: url("../img/nav-expand.png") no-repeat bottom;
    border-radius:3px;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
}
/*---*/

.nav-collapse.collapse {
    display: inline;
}

ul.sidebar-menu , ul.sidebar-menu li ul.sub{
    margin: -2px 0 0;
    padding: 0;
}

ul.sidebar-menu {
    margin-top: 75px;
}

#sidebar > ul > li > ul.sub {
    display: none;
}

#sidebar > ul > li.active > ul.sub, #sidebar > ul > li > ul.sub > li > a {
    display: block;
}

ul.sidebar-menu li ul.sub li{
    background: #424a5d;
    margin-bottom: 0;
    margin-left: 0;
    margin-right: 0;
}

ul.sidebar-menu li ul.sub li:last-child{
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

ul.sidebar-menu li ul.sub li a {
    font-size: 12px;
    padding: 6px 0;
    line-height: 35px;
    height: 35px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
    color: #aeb2b7;
}

ul.sidebar-menu li ul.sub li a:hover {
	color: white;
	background: transparent;
}

ul.sidebar-menu li ul.sub li.active a {
    color: #68dff0;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
    display: block;
}

ul.sidebar-menu li{
    /*line-height: 20px !important;*/
    margin-bottom: 5px;
    margin-left:10px;
    margin-right:10px;
}

ul.sidebar-menu li.sub-menu{
    line-height: 15px;
}

ul.sidebar-menu li a span{
    display: inline-block;
}

ul.sidebar-menu li a{
    color: #aeb2b7;
    text-decoration: none;
    display: block;
    padding: 15px 0 15px 10px;
    font-size: 12px;
    outline: none;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

ul.sidebar-menu li a.active, ul.sidebar-menu li a:hover, ul.sidebar-menu li a:focus {
    background: #68dff0;
    color: #fff;
    display: block;

    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}


ul.sidebar-menu li a i {
    font-size: 15px;
    padding-right: 6px;
}

ul.sidebar-menu li a:hover i, ul.sidebar-menu li a:focus i {
    color: #fff;
}

ul.sidebar-menu li a.active i {
    color: #fff;
}


.mail-info, .mail-info:hover {
    margin: -3px 6px 0 0;
    font-size: 11px;
}

/* MAIN CONTENT CONFIGURATION */
#main-content {
    margin-left: 210px;
}

.header, .footer {
    min-height: 60px;
    padding: 0 15px;
}

.header {
    position: fixed;
    left: 0;
    right: 0;
    z-index: 1002;
}

.black-bg {
    background: #ffd777;
    border-bottom: 1px solid #c9aa5f;
}

.wrapper {
    display: inline-block;
    margin-top: 60px;
    padding-left: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    padding-top: 0px;
    width: 100%;
}

a.logo {
    font-size: 20px;
    color: #ffffff;
    float: left;
    margin-top: 15px;
    text-transform: uppercase;
}

a.logo b {
    font-weight: 900;
}

a.logo:hover, a.logo:focus {
    text-decoration: none;
    outline: none;
}

a.logo span {
    color: #68dff0;
}


/*notification*/
#top_menu .nav > li, ul.top-menu > li {
    float: left;
}

.notify-row {
    float: left;
    margin-top: 15px;
    margin-left: 92px;
}

.notify-row .notification span.label {
    display: inline-block;
    height: 18px;
    width: 20px;
    padding: 5px;
}

ul.top-menu > li > a {
    color: #666666;
    font-size: 16px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    border:1px solid #666666 !important;
    padding: 2px 6px;
    margin-right: 15px;
}

ul.top-menu > li > a:hover, ul.top-menu > li > a:focus {
    border:1px solid #b6b6b6 !important;
    background-color: transparent !important;
    border-color: #b6b6b6 !important;
    text-decoration: none;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    color: #b6b6b6 !important;
}

.notify-row .badge {
    position: absolute;
    right: -10px;
    top: -10px;
    z-index: 100;
}

.dropdown-menu.extended {
    max-width: 300px !important;
    min-width: 160px !important;
    top: 42px;
    width: 235px !important;
    padding: 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.176) !important;
    border: none !important;
    border-radius: 4px;
    -webkit-border-radius: 4px;
}

@media screen and (-webkit-min-device-pixel-ratio:0) {
    /* Safari and Chrome */
    .dropdown-menu.extended  {
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.176) !important;
    };
    }

.dropdown-menu.extended li p {
    background-color: #F1F2F7;
    color: #666666;
    margin: 0;
    padding: 10px;
    border-radius: 4px 4px 0px 0px;
    -webkit-border-radius: 4px 4px 0px 0px;
}

.dropdown-menu.extended li p.green {
    background-color: #68dff0;
    color: #fff;
}

.dropdown-menu.extended li p.yellow {
    background-color: #fcb322;
    color: #fff;
}

.dropdown-menu.extended li a {
    border-bottom: 1px solid #EBEBEB !important;
    font-size: 12px;
    list-style: none;
}

.dropdown-menu.extended li a {
    padding: 15px 10px !important;
    width: 100%;
    display: inline-block;
}

.dropdown-menu.extended li a:hover {
    background-color: #F7F8F9 !important;
    color: #2E2E2E;
}

.dropdown-menu.tasks-bar .task-info .desc {
    font-size: 13px;
    font-weight: normal;
}

.dropdown-menu.tasks-bar .task-info .percent {
    display: inline-block;
    float: right;
    font-size: 13px;
    font-weight: 600;
    padding-left: 10px;
    margin-top: -4px;
}

.dropdown-menu.extended .progress {
    margin-bottom: 0 !important;
    height: 10px;
}

.dropdown-menu.inbox li a .photo img {
    border-radius: 2px 2px 2px 2px;
    float: left;
    height: 40px;
    margin-right: 4px;
    width: 40px;
}

.dropdown-menu.inbox li a .subject {
    display: block;
}

.dropdown-menu.inbox li a .subject .from {
    font-size: 12px;
    font-weight: 600;
}

.dropdown-menu.inbox li a .subject .time {
    font-size: 11px;
    font-style: italic;
    font-weight: bold;
    position: absolute;
    right: 5px;
}

.dropdown-menu.inbox li a .message {
    display: block !important;
    font-size: 11px;
}

.top-nav  {
    margin-top: 7px;
}

.top-nav ul.top-menu > li .dropdown-menu.logout {
    width: 268px !important;

}

.top-nav li.dropdown .dropdown-menu {
    float: right;
    right: 0;
    left: auto;
}

.dropdown-menu.extended.logout > li {
    float: left;
    text-align: center;
    width: 33.3%;
}

.dropdown-menu.extended.logout > li:last-child {
    float: left;
    text-align: center;
    width: 100%;
    background: #a9d96c;
    border-radius: 0 0 3px 3px;
}

.dropdown-menu.extended.logout > li:last-child > a, .dropdown-menu.extended.logout > li:last-child > a:hover {
    color: #fff;
    border-bottom: none !important;
    text-transform: uppercase;
}

.dropdown-menu.extended.logout > li:last-child > a:hover > i{
    color: #fff;
}

.dropdown-menu.extended.logout > li > a {
    color: #a4abbb;
    border-bottom: none !important;
}

.full-width .dropdown-menu.extended.logout > li > a:hover {
    background: none !important;
    color: #50c8ea !important;
}

.dropdown-menu.extended.logout > li > a:hover {
    background: none !important;
}

.dropdown-menu.extended.logout > li > a:hover i {
    color: #50c8ea;
}

.dropdown-menu.extended.logout > li > a i {
    font-size: 17px;
}

.dropdown-menu.extended.logout > li > a > i {
    display: block;
}

.top-nav ul.top-menu > li > a {
    border: 1px solid #eeeeee;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    padding: 6px;
    background: none;
    margin-right: 0;
}
.top-nav ul.top-menu > li {
    margin-left: 10px;
}

.top-nav ul.top-menu > li > a:hover, .top-nav ul.top-menu > li > a:focus {
    border:1px solid #F1F2F7;
    background: #F1F2F7;

}

.top-nav .dropdown-menu.extended.logout {
    top: 50px;
}

.top-nav .nav .caret {
    border-bottom-color: #A4AABA;
    border-top-color: #A4AABA;
}
.top-nav ul.top-menu > li > a:hover .caret {
    border-bottom-color: #000;
    border-top-color: #000;
}

.log-arrow-up {
    background: url("../img/arrow-up.png") no-repeat;
    width: 20px;
    height: 11px;
    position: absolute;
    right: 20px;
    top: -10px;
}

/*----*/

.notify-arrow {
    border-style: solid;
    border-width: 0 9px 9px;
    height: 0;
    margin-top: 0;
    opacity: 0;
    position: absolute;
    left: 7px;
    top: -18px;
    transition: all 0.25s ease 0s;
    width: 0;
    z-index: 10;
    margin-top: 10px;
    opacity: 1;
}

.notify-arrow-yellow {
    border-color: transparent transparent #FCB322;
    border-bottom-color: #FCB322 !important;
    border-top-color: #FCB322 !important;
}
.notify-arrow-green {
    border-color: transparent transparent #68dff0;
    border-bottom-color: #68dff0 !important;
    border-top-color: #68dff0 !important;
}



/*--sidebar toggle---*/

.sidebar-toggle-box {
    float: left;
    padding-right: 15px;
    margin-top: 20px;
}

.sidebar-toggle-box .fa-bars {
    cursor: pointer;
    display: inline-block;
    font-size: 20px;
}


.sidebar-closed > #sidebar > ul {
    display: none;
}

.sidebar-closed #main-content {
    margin-left: 0px;
}

.sidebar-closed #sidebar {
    margin-left: -180px;
}


/* Dash Side */

.ds {
	background: #ffffff;
	padding-top: 20px;
}

.ds h4 {
	font-size: 14px;
	font-weight: 700;
}

.ds h3 {
	color: #ffffff;
	font-size: 16px;
	padding: 0 10px;
	line-height: 60px;
	height: 60px;
	margin: 0;
	background: #ff865c;
	text-align: center;
}

.ds i {
	font-size: 12px;
	line-height: 16px;
}

.ds .desc {
	border-bottom: 1px solid #eaeaea;
	display: inline-block;
	padding: 15px 0;
	width: 100%;
}

.ds .desc:hover {
	background: #f2f2f2;
}

.ds .thumb {
	width: 30px;
	margin: 0 10px 0 20px;
	display: block;
	float: left;
}

.ds .details {
	width: 170px;
	float: left;
}

.ds > .desc p {
	font-size: 11px;
}

.ds p > muted {
	font-size: 9px;
	text-transform: uppercase;
	font-style: italic;
	color: #666666
}

.ds a {
	color: #68dff0;
}

/* LINE ICONS CONFIGURATION */

.mtbox {
	margin-top: 80px;
	margin-bottom: 40px;
}

.box1 {
	padding: 15px;
	text-align: center;
	color: #989898;
	border-bottom: 1px solid #989898;
}

.box1 span {
	font-size: 50px;

}

.box1 h3 {
	text-align: center;
}

.box0:hover .box1 {
	border-bottom: 1px solid #ffffff;
}

.box0 p {
	text-align: center;
	font-size: 12px;
	color: #f2f2f2;
}

.box0:hover p {
	color: #ff865c;
}

.box0:hover {
	background: #ffffff;
	box-shadow: 0 2px 1px rgba(0, 0, 0, 0.2);
}

/* MAIN CHART CONFIGURATION */
.main-chart {
	padding-top: 20px;
}

.mleft {
}

.border-head h3 {
    margin-top: 20px;
    margin-bottom: 20px;
	margin-left: 15px;	
    padding-bottom: 5px;
    font-weight: normal;
    font-size: 18px;
    display: inline-block;
    width: 100%;
    font-weight: 700;
    color: #989898;
}

.custom-bar-chart {
    height: 290px;
    margin-top: 20px;
    margin-left: 20px;
    position: relative;
    border-bottom: 1px solid #c9cdd7;
}

.custom-bar-chart .bar {
    height: 100%;
    position: relative;
    width: 6%;
    margin: 0px 4%;
    float: left;
    text-align: center;
    z-index: 10;
}

.custom-bar-chart .bar .title {
    position: absolute;
    bottom: -30px;
    width: 100%;
    text-align: center;
    font-size: 11px;
}

.custom-bar-chart .bar .value {
    position: absolute;
    bottom: 0;
    background: #ff865c;
    color: #68dff0;
    width: 100%;
    -webkit-border-radius: 5px 5px 0 0;
    -moz-border-radius: 5px 5px 0 0;
    border-radius: 5px 5px 0 0;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}



.custom-bar-chart .bar .value:hover {
    background: #2f2f2f;
    color: #fff;
}

.y-axis {
    color: #555555;
    position: absolute;
    text-align: left;
    width: 100%;
    font-size: 11px;
}

.y-axis li {
    border-top: 1px dashed #dbdce0;
    display: block;
    height: 58px;
    width: 100%;
}

.y-axis li:last-child {
    border-top: none;
}

.y-axis li span {
    display: block;
    margin: -10px 0 0 -60px;
    padding: 0 10px;
    width: 40px;
}


/*Donut Chart Main Page Conf*/
.donut-main {
	display: block;
	text-align: center;
}

.donut-main h4 {
	font-weight: 700;
	font-size: 16px;
}

/* *************************************************************************************
PANELS CONFIGURATIONS
*************************************************************************************** */

/*Panel Size*/

.pn {
	height: 250px;
	box-shadow: 0 2px 1px rgba(0, 0, 0, 0.2);
}

.pn:hover {
	box-shadow: 2px 3px 2px rgba(0, 0, 0, 0.3);
	
}

/*Grey Panel*/

.grey-panel {
	text-align: center;
	background: #dfdfe1;
}
.grey-panel .grey-header {
	background: #ccd1d9;
	padding: 3px;
	margin-bottom: 15px;
}
.grey-panel h5 {
	font-weight: 200;
	margin-top: 10px;
}
.grey-panel p {
	margin-left: 5px;
}
/* Specific Conf for Donut Charts*/
.donut-chart p {
	margin-top: 5px;
	font-weight: 700;
	margin-left: 15px;
}
.donut-chart h2 {
	font-weight: 900;
	color: #FF6B6B;
	font-size: 38px;
}

/* Dark Blue*/

.darkblue-panel {
	text-align: center;
	background: #444c57;
}
.darkblue-panel .darkblue-header {
	background: transparent;
	padding: 3px;
	margin-bottom: 15px;
}
.darkblue-panel h1 {
	color: #f2f2f2;
}
.darkblue-panel h5 {
	font-weight: 200;
	margin-top: 10px;
	color: white;
}
.darkblue-panel footer {
	color: white;
}
.darkblue-panel footer h5 {
	margin-left:10px; 
	margin-right: 10px;
	font-weight: 700;
}

/*Green Panel*/
.green-panel {
	text-align: center;
	background: #68dff0;
}
.green-panel .green-header {
	background: #43b1a9;
	padding: 3px;
	margin-bottom: 15px;
}
.green-panel h5 {
	color: white;
	font-weight: 200;
	margin-top: 10px;
}
.green-panel h3 {
	color: white;
	font-weight: 100;
}
.green-panel p {
	color: white;
}

/*White Panel */
.white-panel {
	text-align: center;
	background: #ffffff;
	color: #ccd1d9;
}

.white-panel p {
	margin-top: 5px;
	font-weight: 700;
	margin-left: 15px;
}
.white-panel .white-header {
	background: #f4f4f4;
	padding: 3px;
	margin-bottom: 15px;
	color: #c6c6c6;
}
.white-panel .small {
	font-size: 10px;
	color: #ccd1d9;
}

.white-panel i {
	color: #68dff0;
	padding-right: 4px;
	font-size: 14px;
}

/*STOCK CARD Panel*/
.card {
  background: white;
  box-shadow: 0 2px 1px rgba(0, 0, 0, 0.2);
  margin-bottom: 1em; 
  height: 250px;
}
.stock .stock-chart {
  background: #00c5de;
}
.stock .stock-chart #chart {
    height: 10.7em;
    background: url(http://i.imgbox.com/abmuNQx2) center bottom no-repeat; 
}    
.stock .current-price {
  background: #1d2122;
  padding: 10px; 
}
.stock .current-price .info abbr {
    display: block;
    color: #f8f8f8;
    font-size: 1.5em;
    font-weight: 600;
    margin-top: 0.18em;
}
.stock .current-price .changes {
    text-align: right; 
}
.stock .changes .up {
	color: #4fd98b
}
.stock .current-price .changes .value {
      font-size: 1.8em;
      font-weight: 700; 
}
.stock .summary {
    color: #2f2f2f;
    display: block;
    background: #f2f2f2;
    padding: 10px;
	text-align: center;
}
.stock .summary strong {
	font-weight: 900;
	font-size: 14px;
}

/*Content Panel*/
.content-panel {
	background: #ffffff;
	box-shadow: 0px 3px 2px #aab2bd;
	padding-top: 15px;
	padding-bottom: 5px;
}
.content-panel h4 {
	margin-left: 10px;
}

/*WEATHER PANELS*/

/* Weather 1 */
.weather {
	background: url(../img/weather.jpg) no-repeat center top;
	text-align: center;
	background-position: center center;
}
.weather i {
	color: white;
	margin-top: 45px;
}
.weather h2 {
	color: white;
	font-weight: 900;
}
.weather h4 {
	color: white;
	font-weight: 900;
	letter-spacing: 1px;
}

/* Weather 2 */
.weather-2 {
	background: #e9f0f4;
}
.weather-2 .weather-2-header {
	background: #54bae6;
	padding-top: 5px;
	margin-bottom: 5px;
}
.weather-2 .weather-2-header p {
	color: white;
	margin-left: 5px;
	margin-right: 5px;
}
.weather-2 .weather-2-header p small {
	font-size: 10px;
}
.weather-2 .data {
	margin-right: 10px;
	margin-left: 10px;
	color: #272b34;
}
.weather-2 .data h5 {
	margin-top: 0px;
	font-weight: lighter;
}
.weather-2 .data h1{
	margin-top: 2px;
}

/* Weather 3 */
.weather-3 {
	background: #ffcf00;
}

.weather-3 i {
	color: white;
	margin-top: 30px;
	font-size: 70px;
}
.weather-3 h1 {
	margin-top: 10px;
	color: white;
	font-weight: 900;
}
.weather-3 .info {
	background: #f2f2f2;
}
.weather-3 .info i {
	font-size: 15px;
	color: #c2c2c2;
	margin-bottom: 0px;
	margin-top: 10px;
}
.weather-3 .info h3 {
	font-weight: 900;
	margin-bottom: 0px;
}
.weather-3 .info p {
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 16px;
	color: #c2c2c2;
	font-size: 15px;
	font-weight: 700;
}


/*Twitter Panel*/
.twitter-panel {
	background: #4fc1e9;
	text-align: center;
}
.twitter-panel i {
	color: white;
	margin-top: 40px;
}
.twitter-panel p {
	color: #f5f5f5;
	margin: 10px;
}
.twitter-panel .user {
	color: white;
	font-weight: 900;
}


/* Instagram Panel*/
.instagram-panel {
	background: url(../img/instagram.jpg) no-repeat center top;
	text-align: center;
	background-position: center center;
}
.instagram-panel i {
	color: white;
	margin-top: 35px;
}
.instagram-panel p {
	margin: 5px;
	color: white;
}

/* Product Panel */
.product-panel {
	background: #dadad2;
	text-align: center;
	padding-top: 50px;
	height: 100%;
}

/* Product Panel 2*/
.product-panel-2 {
	background: #dadad2;
	text-align: center;
}
.product-panel-2 .badge {
	position: absolute;
	top: 20px;
	left: 35px;
}
.badge-hot {
	background: #ed5565;
	width: 70px;
	height: 70px;
	line-height: 70px;
	font-size: 18px;
	color: #fff;
	text-align: center;
	border-radius: 100%;
}

/* Soptify Panel */
#spotify {
	background: url(../img/lorde.jpg) no-repeat center top;
	margin-top: -15px;
	background-attachment: relative;
	background-position: center center;
	min-height: 220px;
	width: 100%;
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
#spotify .btn-clear-g {
	top: 15%;
	right: 10px;
	position: absolute;
	margin-top: 5px;
}
#spotify .sp-title {
	bottom: 15%;
	left: 25px;
	position: absolute;
	color: #efefef;
}
#spotify .sp-title h3 {
	font-weight: 900;
}
#spotify .play{
	bottom: 18%;
	right: 25px;
	position: absolute;
	color: #efefef;
	font-size: 20px
}
.followers {
	margin-left: 5px;
	margin-top: 5px;
}

/* BLOG PANEL */
#blog-bg {
	background: url(../img/blog-bg.jpg) no-repeat center top;
	margin-top: -15px;
	background-attachment: relative;
	background-position: center center;
	min-height: 150px;
	width: 100%;
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
#blog-bg .badge {
	position: absolute;
	top: 20px;
	left: 35px;
}
.badge-popular {
	background: #3498db;
	width: 70px;
	height: 70px;
	line-height: 70px;
	font-size: 13px;
	color: #fff;
	text-align: center;
	border-radius: 100%;
}
.blog-title {
	background: rgba(0,0,0,0.5);
	bottom: 100px;
	padding: 6px;
	color: white;
	font-weight: 700;
	position: absolute;
	display: block;
	width: 120px;
}
.blog-text {
	margin-left: 8px;
	margin-right: 8px;
	margin-top: 15px;
	font-size: 12px;
}

/* Calendar Configuration */
#calendar {
	color: white;
	padding: 0px !important;
}
.calendar-month-header {
	background: #43b1a9;
}

/* TODO PANEL */
.steps{
  display: block;
}
.steps input[type=checkbox] {
  display: none;
}
.steps input[type=submit]{
  background: #f1783c;
  border: none;
  padding: 0px;
  margin: 0 auto;
  width: 100%;
  height: 55px;
  color: white;
  text-transform: uppercase;
  font-weight: 900;
  font-size: 11px;
  letter-spacing: 1px;
  cursor: pointer;
  transition: background 0.5s ease
}
.steps input[type=submit]:hover{
  background: #8fde9c;
}
.steps label{
  background: #393D40;
  height: 65px;
  line-height: 65px;
  width: 100%;
  display: block;
  border-bottom: 1px solid #44494e;
  color: #889199;
  text-transform: uppercase;
  font-weight: 900;
  font-size: 11px;
  letter-spacing: 1px;
  text-indent: 52px;
  cursor: pointer;
  transition: all 0.7s ease;
  margin: 0px;
}
.steps label:before{
  content:"";
  width: 12px;
  height: 12px;
  display: block;
  position: absolute;
  margin: 26px 0px 0px 18px;
  border-radius: 100%;
  transition: border 0.7s ease
}
.steps label:hover{
  background: #2B2E30;
  color: #46b7e5
}
.steps label:hover:before{
  border: 1px solid #46b7e5;
}
#op1:checked ~ label[for=op1]:before,
#op2:checked ~ label[for=op2]:before,
#op3:checked ~ label[for=op3]:before{
  border: 2px solid #96c93c;
  background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAHCAYAAAA1WQxeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAGFJREFUeNpinHLMhgEHKADia0xQThIQs6JJ9gPxZhYQAcS6QHwDiI8hSYJAC0gBPxDLAvFcIJ6JJJkDxFNBVtgBcQ8Qa6BLghgwN4A4a9ElQYAFSj8C4mwg3o8sCQIAAQYA78QTYqnPZuEAAAAASUVORK5CYII=') no-repeat center center;
}

/* PROFILE PANELS */
/* Profile 01*/
#profile-01 {
	background: url(../img/profile-01.jpg) no-repeat center top;
	margin-top: -15px;
	background-attachment: relative;
	background-position: center center;
	min-height: 150px;
	width: 100%;
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
#profile-01 h3 {
	color: white;
	padding-top: 50px;
	margin: 0px;
	text-align: center;
}
#profile-01 h6 {
	color: white;
	text-align: center;
	margin-bottom: 0px;
	font-weight: 900;
}
.profile-01 {
	background: #68dff0;
	height: 50px;
}
.profile-01:hover {
	background: #2f2f2f;
  -webkit-transition: background-color 0.6s;
  -moz-transition: background-color 0.6s;
  -o-transition: background-color 0.6s;
  transition: background-color 0.6s;
  cursor: pointer;
}
.profile-01 p {
	color: white;
	padding-top: 15px;
	font-weight: 400;
	font-size: 15px;
}

/* Profile 02*/
#profile-02 {
	background: url(../img/profile-02.jpg) no-repeat center top;
	margin-top: -15px;
	background-attachment: relative;
	background-position: center center;
	min-height: 200px;
	width: 100%;
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
#profile-02 .user {
	padding-top: 40px;
	text-align: center;
}
#profile-02 h4 {
	color: white;
	margin:0px;
	padding-top: 8px;
}
.pr2-social a {
	color: #cdcdcd;
}
.pr2-social a:hover {
	color: #68dff0;
}
.pr2-social i {
	margin-top: 15px;
	margin-right: 12px;
	font-size: 20px;
}


/*spark line*/
.chart {
    display: inline-block;
    text-align: center;
    width: 100%;
}
.chart .heading {
    text-align: left;
}
.chart .heading span {
    display: block;
}
.panel.green-chart .chart-tittle {
    font-size: 16px;
    padding: 15px;
    display: inline-block;
    font-weight:normal;
    background: #99c262;
    width: 100%;
    -webkit-border-radius: 0px 0px 4px 4px;
    border-radius: 0px 0px 4px 4px;
}
#barchart {
    margin-bottom: -15px;
    display: inline-block;
}
.panel.green-chart .chart-tittle .value {
    float: right;
    color: #c0f080;
}
.panel.green-chart {
    background: #a9d96c;
    color: #fff;
}
.panel.terques-chart {
    background: transparent;
    color: #797979;
}
.panel.terques-chart .chart-tittle .value {
    float: right;
    color: #fff;
}
.panel.terques-chart .chart-tittle .value a {
    color: #2f2f2f;
    font-size: 12px;
}
.panel.terques-chart .chart-tittle .value a:hover, .panel.terques-chart .chart-tittle .value a.active {
    color: #68dff0;
    font-size: 12px;
}
.panel.terques-chart .chart-tittle {
    font-size: 16px;
    padding: 15px;
    display: inline-block;
    font-weight:normal;
    background: #39b7ac;
    width: 100%;
    -webkit-border-radius: 0px 0px 4px 4px;
    border-radius: 0px 0px 4px 4px;
}
.inline-block {
    display: inline-block;
}

/* showcase background */
.showback {
	background: #ffffff;
	padding: 15px;
	margin-bottom: 15px;
	box-shadow: 0px 3px 2px #aab2bd;
}



/* Calendar Events - Calendar.html*/
.external-event {
	cursor: move;
	display: inline-block !important;
	margin-bottom: 7px !important;
	margin-right: 7px !important;
	padding: 10px;
}

.drop-after {
	padding-top: 15px;
	margin-top: 15px;
	border-top: 1px solid #ccc;
}

.fc-state-default, .fc-state-default .fc-button-inner {
	background: #f2f2f2;
}

.fc-state-active .fc-button-inner {
	background: #FFFFFF;
}

/* Gallery Configuration */
.photo-wrapper {
  display: block;
  position: relative;
  overflow: hidden;
  background-color: #68dff0;
  -webkit-transition: background-color 0.4s;
  -moz-transition: background-color 0.4s;
  -o-transition: background-color 0.4s;
  transition: background-color 0.4s;
}
.project .overlay {
  position: absolute;
  text-align: center;
  color: #fff;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  transition: opacity 0.4s;
  
}

.project:hover .photo-wrapper {
  background-color: #68dff0;
	background-image:url(../img/zoom.png);
	background-repeat:no-repeat;
	background-position:center;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	position: relative;
}
.project:hover .photo {
  opacity: 10;
  filter: alpha(opacity=4000);
  opacity: 0.1;
  filter: alpha(opacity=40);
}
.project:hover .overlay {
  opacity: 100;
  filter: alpha(opacity=10000);
  opacity: 1;
  filter: alpha(opacity=100);
}



/* EZ Checklist */
.ez-checkbox {
	margin-right: 5px;
}

.ez-checkbox, .ez-radio {
	height: 20px;
	width: 20px;
}

.brand-highlight {
background: #fffbcc !important;
}


/* FORMS CONFIGURATION */
.form-panel {
	background: #ffffff;
	margin: 10px;
	padding: 10px;
	box-shadow: 0px 3px 2px #aab2bd;
	text-align: left;
}

label {
	font-weight: 400;
}

.form-horizontal.style-form .form-group {
	border-bottom: 1px solid #eff2f7;
	padding-bottom: 15px;
	margin-bottom: 15px;
}

.round-form {
	border-radius: 500px;
	-webkit-border-radius: 500px;
}

@media (min-width: 768px) {
		.form-horizontal .control-label {
		text-align: left;
	}
}

#focusedInput {
	border: 1px solid #ed5565;
	box-shadow: none;
}

.add-on {
	float: right;
	margin-top: -37px;
	padding: 3px;
	text-align: center;
}

.add-on .btn {
	height: 34px;
}

/* TOGGLE CONFIGURATION */
.has-switch {
    border-radius: 30px;
    -webkit-border-radius: 30px;
    display: inline-block;
    cursor: pointer;
    line-height: 1.231;
    overflow: hidden;
    position: relative;
    text-align: left;
    width: 80px;
    -webkit-mask: url('../img/mask.png') 0 0 no-repeat;
    mask: url('../img/mask.png') 0 0 no-repeat;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
.has-switch.deactivate {
    opacity: 0.5;
    filter: alpha(opacity=50);
    cursor: default !important;
}
.has-switch.deactivate label,
.has-switch.deactivate span {
    cursor: default !important;
}
.has-switch > div {
    width: 162%;
    position: relative;
    top: 0;
}
.has-switch > div.switch-animate {
    -webkit-transition: left 0.25s ease-out;
    -moz-transition: left 0.25s ease-out;
    -o-transition: left 0.25s ease-out;
    transition: left 0.25s ease-out;
    -webkit-backface-visibility: hidden;
}
.has-switch > div.switch-off {
    left: -63%;
}
.has-switch > div.switch-off label {
    background-color: #7f8c9a;
    border-color: #bdc3c7;
    -webkit-box-shadow: -1px 0 0 rgba(255, 255, 255, 0.5);
    -moz-box-shadow: -1px 0 0 rgba(255, 255, 255, 0.5);
    box-shadow: -1px 0 0 rgba(255, 255, 255, 0.5);
}
.has-switch > div.switch-on {
    left: 0%;
}
.has-switch > div.switch-on label {
    background-color: #41cac0;
}
.has-switch input[type=checkbox] {
    display: none;
}
.has-switch span {
    cursor: pointer;
    font-size: 14.994px;
    font-weight: 700;
    float: left;
    height: 29px;
    line-height: 19px;
    margin: 0;
    padding-bottom: 6px;
    padding-top: 5px;
    position: relative;
    text-align: center;
    width: 50%;
    z-index: 1;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: 0.25s ease-out;
    -moz-transition: 0.25s ease-out;
    -o-transition: 0.25s ease-out;
    transition: 0.25s ease-out;
    -webkit-backface-visibility: hidden;
}
.has-switch span.switch-left {
    border-radius: 30px 0 0 30px;
    background-color: #2A3542;
    color: #41cac0;
    border-left: 1px solid transparent;
}
.has-switch span.switch-right {
    border-radius: 0 30px 30px 0;
    background-color: #bdc3c7;
    color: #ffffff;
    text-indent: 7px;
}
.has-switch span.switch-right [class*="fui-"] {
    text-indent: 0;
}
.has-switch label {
    border: 4px solid #2A3542;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    float: left;
    height: 29px;
    margin: 0 -21px 0 -14px;
    padding: 0;
    position: relative;
    vertical-align: middle;
    width: 29px;
    z-index: 100;
    -webkit-transition: 0.25s ease-out;
    -moz-transition: 0.25s ease-out;
    -o-transition: 0.25s ease-out;
    transition: 0.25s ease-out;
    -webkit-backface-visibility: hidden;
}
.switch-square {
    border-radius: 6px;
    -webkit-border-radius: 6px;
    -webkit-mask: url('../img/mask.png') 0 0 no-repeat;
    mask: url('../img/mask.png') 0 0 no-repeat;
}
.switch-square > div.switch-off label {
    border-color: #7f8c9a;
    border-radius: 6px 0 0 6px;
}
.switch-square span.switch-left {
    border-radius: 6px 0 0 6px;
}
.switch-square span.switch-left [class*="fui-"] {
    text-indent: -10px;
}
.switch-square span.switch-right {
    border-radius: 0 6px 6px 0;
}
.switch-square span.switch-right [class*="fui-"] {
    text-indent: 5px;
}
.switch-square label {
    border-radius: 0 6px 6px 0;
    border-color: #41cac0;
}



/*LOGIN CONFIGURATION PAGE*/
.form-login {
	max-width: 330px;
	margin: 100px auto 0;
	background: #fff;
	border-radius: 5px;
	-webkit-border-radius: 5px;
}

.form-login h2.form-login-heading {
	margin: 0;
	padding: 25px 20px;
	text-align: center;
	background: #68dff0;
	border-radius: 5px 5px 0 0;
	-webkit-border-radius: 5px 5px 0 0;
	color: #fff;
	font-size: 20px;
	text-transform: uppercase;
	font-weight: 300;
}
.login-wrap {
	padding: 20px;
}
.login-wrap .registration {
	text-align: center;
}
.login-social-link {
	display: block;
	margin-top: 20px;
	margin-bottom: 15px;
}


/*LOCK SCREEN CONF*/
#showtime {
	width: 100%;
	color: #fff;
	font-size: 90px;
	margin-bottom: 30px;
	margin-top: 250px;
	display: inline-block;
	text-align: center;
	font-weight: 400;
}

.lock-screen {
	text-align: center;
}

.lock-screen a {
	color: white;
}

.lock-screen a:hover {
	color: #48cfad
}

.lock-screen i {
	font-size: 60px;
}

.lock-screen .modal-content {
	position: relative;
	background-color: #f2f2f2;
	background-clip: padding-box;
	border: 1px solid #999;
	border: 1px solid rgba(0, 0, 0, .2);
	border-radius: 5px;
}


.btn-facebook {
  color: #fff;
  background-color: #5193ea;
  border-color: #2775e2;
}
.btn-facebook:hover,
.btn-facebook:focus,
.btn-facebook:active,
.btn-facebook.active,
.open .dropdown-toggle.btn-facebook {
  color: #fff;
  background-color: #2775e2;
  border-color: #2775e2;
}

.btn-twitter {
  color: #fff;
  background-color: #44ccfe;
  border-color: #2bb4e8;
}
.btn-twitter:hover,
.btn-twitter:focus,
.btn-twitter:active,
.btn-twitter.active,
.open .dropdown-toggle.btn-twitter {
  color: #fff;
  background-color: #2bb4e8;
  border-color: #2bb4e8;
}


/*badge*/
.badge.bg-primary {
    background: #8075c4;
}

.badge.bg-success {
    background: #a9d86e;
}

.badge.bg-warning {
    background: #FCB322;
}

.badge.bg-important {
    background: #ff6c60;
}

.badge.bg-info {
    background: #41cac0;
}

.badge.bg-inverse {
    background: #2A3542;
}


/*easy pie chart*/
.easy-pie-chart {
    display: inline-block;
    padding: 30px 0;
}

.chart-info, .chart-info .increase, .chart-info .decrease {
    display: inline-block;
}

.chart-info {
    width: 100%;
    margin-bottom:5px;
}

.chart-position {
    margin-top: 70px;
}

.chart-info span {
    margin: 0 3px;
}

.chart-info .increase {
    background: #ff6c60;
    width: 10px;
    height: 10px;
}

.chart-info .decrease {
    background: #f2f2f2;
    width: 10px;
    height: 10px;
}

.panel-footer.revenue-foot {
    background-color: #e6e7ec;
    -webkit-border-radius: 0px 0px 4px 4px;
    border-radius: 0px 0px 4px 4px;
    border: none;
    padding: 0;
    width: 100%;
    display: inline-block;
}

@media screen and (-webkit-min-device-pixel-ratio:0) {
    /* Safari and Chrome */
    .panel-footer.revenue-foot {
        margin-bottom: -4px;
    };
    }


.panel-footer.revenue-foot ul  {
    margin: 0;
    padding: 0;
    width: 100%;
    display: inline-flex;
}

.panel-footer.revenue-foot ul li {
    float: left;
    width: 33.33%;
}

.panel-footer.revenue-foot ul li.first a:hover, .panel-footer.revenue-foot ul li.first a {
    -webkit-border-radius: 0px 0px 0px 4px;
    border-radius: 0px 0px 0px 4px;
}

.panel-footer.revenue-foot ul li.last a:hover, .panel-footer.revenue-foot ul li.last a {
    -webkit-border-radius: 0px 0px 4px 0px;
    border-radius: 0px 0px 4px 0px;
    border-right: none;

}

.panel-footer.revenue-foot ul li a{
    display: inline-block;
    width: 100%;
    padding: 14px 15px;
    text-align: center;
    border-right: 1px solid #d5d8df;
    color: #797979;
}

.panel-footer.revenue-foot ul li a:hover, .panel-footer.revenue-foot ul li.active a {
    background: #fff;
    position: relative;
}

.panel-footer.revenue-foot ul li a i {
    color: #c6cad5;
    display: block;
    font-size: 16px;
}
.panel-footer.revenue-foot ul li a:hover i, .panel-footer.revenue-foot ul li.active a i {
    color: #ff6c60;
    display: block;
    font-size: 16px;
}


/*flot chart*/
.flot-chart .chart, .flot-chart .pie, .flot-chart .bars {
    height: 300px;
}

/*todolist*/
#sortable {
    list-style-type: none;
    margin: 0 0 20px 0;
    padding: 0;
    width: 100%;
}
#sortable li {
    padding-left: 3em;
    font-size: 12px;
}
#sortable li i {
    position: absolute;
    left:6px;
    padding:4px 10px 0 10px;
    cursor: pointer;
}

#sortable li input[type=checkbox]{
    margin-top: 0;
}

.ui-sortable > li {
    padding: 15px 0 15px 35px !important ;
    position: relative;
    background: #f5f6f8;
    margin-bottom: 2px;
    border-bottom   : none !important;
}

.ui-sortable li.list-primary {
    border-left: 3px solid #41CAC0;
}

.ui-sortable li.list-success {
    border-left: 3px solid #78CD51;
}

.ui-sortable li.list-danger {
    border-left: 3px solid #FF6C60;
}

.ui-sortable li.list-warning {
    border-left: 3px solid #F1C500;
}

.ui-sortable li.list-info {
    border-left: 3px solid #58C9F3;
}

.ui-sortable li.list-inverse {
    border-left: 3px solid #BEC3C7;
}

/*footer*/
.site-footer {
    background: #68dff0;
    color: #fff;
    padding: 10px 0;
}


.go-top {
    margin-right: 1%;
    float: right;
    background: rgba(255,255,255,.5);
    width: 20px;
    height: 20px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.go-top i {
    color: #2A3542;
}

.site-min-height {
    min-height: 900px;
}






</style>





  </head>

  <body id="page-top">

<?php include('include/header.php');?>
<?php include('include/sidebar.php');?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
<section>
<section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  
                  	<div class="col-md-2 col-sm-2 box0">
                        <div>
                 
                  </div></div>



                  	
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
                                <?php 
                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$idcode."' and status is null");
$num1 = mysqli_num_rows($rt);
{?>
					  			<h3><?php echo htmlentities($num1);?></h3>
                  			</div>
					  			<p><?php echo htmlentities($num1);?> Complaints not Process yet</p>
                  		</div>
                      <?php }?>


                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_news"></span>
                    <?php 
  $status="in Process";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$idcode."' and  status='$status'");
$num1 = mysqli_num_rows($rt);
{?>
                  <h3><?php echo htmlentities($num1);?></h3>
                        </div>
                  <p><?php echo htmlentities($num1);?> Complaints Status in process</p>
                      </div>
  <?php }?>

                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_news"></span>
                       <?php 
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$idcode."' and  status='$status'");
$num1 = mysqli_num_rows($rt);
{?>
                  <h3><?php echo htmlentities($num1);?></h3>
                        </div>
                  <p><?php echo htmlentities($num1);?> Complaint has been closed</p>
                      </div>

<?php }?>
                  	
                  	
                  	</div><!-- /row mt -->	
                  
                      
                     
                    				
				
				
          </section>
      </section>
</section>
          
         

          <?php include('include/footer.php');?>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
  </body>

</html>
