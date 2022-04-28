<?php # PROFILE SETTINGS ?>
<style>
  body {overflow:initial!important}
  main{z-index:10;border:0;transition-duration:0.3s;position:absolute;right:0;top:0;width:100%;height:100%}
  #toprightops {width:300px;border:0px;box-shadow:none;background:none;position:absolute;right:34px;top:50%;transform:translateY(-50%);height:30px;text-align:left}
  #searchico {position:relative;float:right;height:28px;margin-left:20px}
  #displaypicico {position:relative;float:right;height:30px;width:30px;border-radius:50%;border:2px solid white;overflow:hidden}
  #displaypicico img {position:absolute;top:0;right:0;height:auto;width:100%}
  .btn-type-submit { border-radius:6px; height:44px; width:100%; line-height:0px }
  .lin-grad-blue { background: linear-gradient(180deg,#3b70df 0,#2c5dc7 100%); border: 1px solid #5584e4; color:white }
	.jumpTo {position:absolute;top:-84px;width:100%;height:10px;pointer-events:none}
  #vue-main {position:relative;width:1097px;height:auto;background:none;margin:0 auto;padding-left:16px;top:-76px}
  .inp-p {display:block;padding-block-start: 1em;margin-top:16px;top:-6px;font-size:16px;font-weight:bold;color: #323232;position:relative}
  #stickyel {min-height: 80px;max-height: 80px;background-color:transparent;top:0;display: block;position: sticky;position: -webkit-sticky;position: -moz-sticky;position: -ms-sticky;position: -o-sticky;}
  .webapp::before {display:none!important}
  .webapp .icon {background: linear-gradient(0deg, rgba(24,24,24,1), rgba(41,41,41,1) 100%);}
  .iconapp,#Icons *{box-sizing:initial}
  .icon .icon{box-sizing:border-box!important;background:none}
  .header-act {background-color:rgba(25,16,25,.78);}
	.dividerbyhalf {display:block;width:100%;height:auto;overflow:hidden;border-bottom:16px solid transparent;padding-top:0px}
  .dividerbyhalf span {width:calc(50% - 10px);display:block;float:left}
  .dividerbyhalf .r {margin-left:20px}
	<?php
    # Detect Devices IPHONE, WEB, ANDROID
    $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
    $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
    $webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if( $iPod || $iPhone || $iPad){
      echo '.simplebar-scrollbar:before {position:absolute;background:#ededed!important;max-width:1px;right:-40px!important;top:0.5%!important;bottom:-0.5%!important}';
    }else if($Android){
        //browser reported as an Android device -- do something here
    }else if($webOS){
      echo '.simplebar-scrollbar:before {position:absolute;background:#4c4c4c!important;max-width:2px;right:-40px!important;top:0.5%!important;bottom:-0.5%!important}';
    }
    else {
      echo '.simplebar-scrollbar:before {max-width:4px;position:absolute;background:#4c4c4c!important}';
    }
  ?> 
</style>
<style>
  /*-- SETTINGS --*/
  .side-container {z-index:100;position:sticky;top:0;right:0;width:100%;height:5px;background:none}
  	.side-container-ab {width:280px;background:rgba(45,30,70,.9);border-radius:8px;display:block;position:absolute;top:80px;left:0;min-height:640px}
  		.side-container-ab article {position:absolute;top:30px}
  		.side-container-ab article .p1 {text-transform:capitalize;margin-left:38px;display:block;}
  /*-- remove SETTINGS ABOVE for a wider profile area --*/
  .avatar {margin-left:32px;margin-bottom:27px;position:relative;width:128px;height:128px;border-radius:50%;border: #fff 1px solid;box-shadow: rgb(0 0 0 / 40%) 0px 2px 4px, inset rgb(0 0 0 / 40%) 0px 3px 2px;overflow: hidden;background-image: -webkit-linear-gradient(top left, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.3) 50%, rgba(255,255,255,0) 50%), url();background-image: -moz-linear-gradient(top left, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.3) 50%, rgba(255,255,255,0) 50%), url();background-image: linear-gradient(top left, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.3) 50%, rgba(255,255,255,0) 50%), url(); background-size: auto, 100%;}
  .u-img {position:absolute;top:50%;transform:translateY(-50%);left:-1px;width:128px;height:128px}
  
  #sidemenuoption {position:relative;top:10px;left:35px;width:calc(100% - 35px);margin-bottom:40px}
  #sidemenuoption a {text-decoration:none;color:rgba(25,25,25,1);}
  #sidemenuoption .ahrefop span {color:#252525}
  #sidemenuoption .ahrefop .fontdefault {text-transform:capitalize}
  #sidemenuoption span {color:inherit;position:relative;display:block;width:calc(270px - 36px);height:44px;padding-left:36px;}
  #sidemenuoption span svg {width:24px;position:absolute;left:0;top:50%;transform:translateY(-50%)}
  #sidemenuoption span p {font-size:14.5px;line-height:44px;margin-block-start:0em;margin-block-end:0em;}
  /*-- END OF HEADER --*/
  .settings-container{margin-bottom:4px;padding-top:30px;padding-bottom:10px;position:relative;width:calc(100% - 280px);left:280px;float:left}
	.tagline {font-family: "Rotunda-Medium.", Helvetica, Arial, sans-serif;font-size:34px;letter-spacing:-0.4px;color:#333;-webkit-text-stroke: .5px #333;}
  .fontdefault {font-size:17px;font-family:sans-serif;letter-spacing:1px;color:white}
  .category {cursor:pointer;position:relative;top:27px;padding-left:40px;min-height:75px}
  .sticky-category {border-radius:10px;position:sticky;top:75px;min-height:75px;line-height:75px;z-index:100000000;background: linear-gradient(to top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.35) 35%, rgba(0,0,0,0.6) 100%);}
  .initial{max-height:none!important;overflow:initial!important}
  .additionalkicons {position:relative;top:-27.5px;padding-left:20%;width:calc(100% - 20%);height:30px;float:left;text-align:center}
  .Dwebapp {position: absolute;border-radius: 10px;top: 24px;left: 0;right: 0;height: 150px;margin: 0 auto;width: auto;padding-top: 16px}
  .webapp {position: relative;border-radius: 10px;left: 0;right: 0;height: 120px;margin: 0 auto;width: 103px;padding-left: 17px;padding-right: 18px;padding-top: 16px;padding-bottom: 6px}
	
	@media screen and (max-width: 768px){
	  .home_component_feature-categories__3enJK {display: initial!important;grid-template-columns: auto !important;}
	  .home_component_feature-categories__3enJK div {max-width:calc(50% - 5px);min-width:calc(50% - 5px);float:left;margin-bottom:10px;}
	  .home_component_feature-categories__3enJK div span{font-size:1.1rem!important}
	  .home_component_feature-categories__3enJK div:nth-child(even) {margin-left:10px}
	}
	@media screen and (max-width: 576px){
	  .home_component_feature-categories__3enJK div {min-height:65px!important;max-height:65px!important;overflow:hidden}
	  .home_component_feature-categories__3enJK div span{font-size:0.95rem!important}
	}
  @media (min-width: 960px) {
  }
</style>

