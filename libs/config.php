<?php
	include 'database.php';
	$db = new Database();
	
    $prefix="vv_";
	
	/*Get Data From Options Table*/
    $db->select($prefix.'options','base_url,site_name,site_logo,site_favicon,site_title,site_des,site_tag,footer_text,currency,currency_rate,v_token,site_author,reg_email');
    $header = $db->getResult();
    $base_url = $header[0]['base_url'];
    $site_favicon = $header[0]['site_favicon'];
    $site_logo = $header[0]['site_logo'];
    $site_name = $header[0]['site_name'];
    define('SITE_URL', 'https://vivzon.in/tools/YTPlayer/');
    
    /*Currency Formate*/
    $cur_format = 'Rs.';
    if(!empty($header[0]['currency'])){
        $cur_format = $header[0]['currency'];
    }
    
    session_start(); /*if(empty($_SESSION['uid'])){ header('location:https://vivzon.in/tools/YTPlayer/login'); } */
    //define('NAME', $_SESSION['fname']."".$_SESSION['lname']); define('USER_ROLE', $_SESSION['user']);
    
    if(!empty($_SESSION['playid']) && $_SESSION['playid']>1){
        $playid=$_SESSION['playid']-1;
        $db->select($prefix.'listing','*',null,"uid!='".$_SESSION['mob']."' AND id='".$playid."'"); 
    }else{
        $db->select($prefix.'listing','*',null,"uid!='".$_SESSION['mob']."'",'id DESC'); 
    }
    $getListingDetails = $db->getResult(); //print_r($getListingDetails);
    
    
    $url = $getListingDetails[0]['link'];
    $parts = parse_url($url);
    $output = [];
    parse_str($parts['query'], $output); // 12
    
    if(empty($output['v'])){
        $output = end (explode ('/', $url));
    }else{
        $output=$output['v'];
    }
    
    $_SESSION['playid']=$getListingDetails[0]['id'];
    
    if(!empty($_GET['id'])){ $_SESSION['views'] = substr($_GET['id'],0,1)+str_replace('1'.$_SESSION['playlink'],'',$_GET['id']); }
    
    $_SESSION['playlink']=$output;
    
    //echo $_SESSION['views'];
?>