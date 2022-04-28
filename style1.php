<style>
  * {box-sizing: border-box;margin: 0;}
  body {background-color: #171b24;overflow: hidden!important;font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";}
  	.image-background {width:100%;height:100%;position:fixed;top:0;left:0;background-image:url(<?php echo $img_bg; ?>);background-size:cover!important;background-repeat:no-repeat!important;}
  	.image-bg-overlay,.auth {position:fixed;left:0;top:0;height:100%;width:100%;border:0;}
  	.image-bg-overlay{background: linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%),
            linear-gradient(127deg, rgba(0,255,0,.8), rgba(0,255,0,0) 70.71%),
            linear-gradient(336deg, rgba(0,0,255,.8), rgba(0,0,255,0) 70.71%);}
  #header,#footer {background: white;height:59px;width:100%;z-index:1000;position:fixed;top:0;left:0;box-sizing:border-box;border-bottom: 1px solid rgba(240,240,240,1);box-shadow: rgb(0 0 0 / 25%) 0px -2px 6px;}
  #footer{top:auto;bottom:0;height:34px;border-top: 1px solid #e1e1e1;box-shadow:none}
  #logo-wrap {top: 14px;left: 20px;position: fixed;height: 32px;width: 220px;padding-left: 40px;text-align: left;}
  #logo-wrap svg {fill:#4b64af;height: 100%;width: 40px;position: absolute;top: 0px;left: -4px;}
  .logo, .sub {top: -1px;left: 44px;position: absolute;font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";font-weight: 700;font-size: 15px;}
  .sub {font-size: 13px;top: 17px;font-weight: 500;margin-top:0px!important}
  .noscroll{overflow: hidden!important}
  .card__close svg {pointer-events:none}
  	.gn-icon {position:absolute;top:50%;transform:translateY(-50%);left:14px;height:34px}
  	.gn-logo {position:absolute;top:50%;transform:translateY(-50%);left:56px;height:22px;width:56px;fill:white}
  	.gn-desc {line-height:22px;position:absolute;left:55px;top:50px;background: -webkit-linear-gradient(45deg, rgb(194, 79, 144), rgb(252, 176, 15) 70%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;height:22px;font-size:15px;font-weight:bold}
  	.gn-btns {height:66px;position:absolute;top:-4px;right:6px;width:auto;z-index:100;overflow:hidden}
  	.gn-btns a {text-align:center;text-decoration:none;border-radius:24px;float:left;pointer-events:all;padding:7px;margin-right:10px;min-width:82px;font-size:14px;color:white;background:none;border:1px solid white;position:relative;top:50%;transform:translateY(-50%);cursor:pointer;font-family:Rotunda-Regular., Helvetica, Arial, sans-serif;font-weight: 700}
  	.gn-btns .secondary {background:rgb(55,120,222);border:1px solid rgb(55,120,222)}
    .gn-tabs {pointer-events:none;cursor:pointer;width:100%;height:58px;position:absolute;left:175px;bottom:-1px;z-index:100000000;background:none;-webkit-transition: all ease-out .3s;-moz-transition: all ease-out .3s;-o-transition: all ease-out .3s;transition: all ease-out .3s;}
  		.tabs {pointer-events:all;max-height: 58px;min-width:570px;width:570px;overflow:hidden;max-width:none!important;position:sticky;bottom:0;z-index:100}
      .tabs__bar {max-height: 58px;position: relative;display: flex;width: 100%;background-color:none!important;border-radius: 3px 3px 0 0;overflow: auto;-webkit-overflow-scrolling: touch;}
      .tabs__bar-wrap.has-left-overflow::before {content: '';position: absolute;z-index: 10;top: 0;bottom: 0;width: 30px;pointer-events: none;}
      .tabs__bar-wrap.has-right-overflow::after {content: '';position: absolute;z-index: 10;top: 0;bottom: 0;width: 30px;pointer-events: none;}
      .tabs__bar-wrap.has-left-overflow::before {left: 0;background: linear-gradient(-90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.95) 100%);}
      .tabs__bar-wrap.has-right-overflow::after {right: 0;background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.95) 100%);}
      .tabs__line {box-sizing:border-box;border-left:30px solid transparent;border-right:30px solid transparent;background:transparent;display:none;position:absolute;left:0;right:0;bottom:0;height:2px;will-change:transform;transform-origin:left}
  		.tabs__line::after {z-index:1000;content:'';background:#4b64af;position:absolute;bottom:0px;width:100%;height:2px;left:0;right:0;margin:0 auto}
  		.tabs__controls {margin:0px 6.5px;line-height:18px;color:rgba(25,25,25,.6);flex: 0 0 auto;display: block;padding: 20px 10px;padding-left:38px;text-align: center;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;cursor: pointer;font-weight: 600;letter-spacing: 1px;position:relative}
      .tabs__controls.is-active {color:#4b64af}
      .tabs__controls:active {-webkit-user-select: none;user-select: none;}
      .tabs__controls span {position:relative;top:-10px;top:0;letter-spacing:0.2px;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";font-weight:500;}
      .tabs__controls span svg {height:20px;width:20px;position:absolute;left:-30px}
      .tabs__content {position: relative;display: flex;align-items: flex-start;width: calc(600px * 3);overflow-y: hidden;will-change: transform, height;}
      .tabs__content.has-grab {cursor: grabbing;}
      .tabs__section {padding: 30px;width: 600px;}
  		.tab_content {width:100%;transition-duration:.4s;top:-5px;position:relative;height:auto;float:left;padding-left:0px;}
  		.tab_content::before{z-index:100000000;display:block;content:'';position:sticky;top:0;right:0;width:100%;height:8px}
  		.tab-hide {display:none;     /* remove display none if you want the tabs to keep scroll position then remove the onclick top on the tabs */      opacity:0;transition-duration:0s!important;pointer-events:none;max-height:0px;height:0px;position:absolute;}
  @media (min-width: 480px) {
    .tabs__bar {min-width: auto;overflow: hidden}
    .tabs__controls {min-width: auto}
  }
  
  @media (max-width: 625px) {  
    .image-bg-overlay {background:rgba(255,255,255,.97)}
    #logo-wrap {left:14px;top:10px}
    .tabs__bar {min-width: auto;}
    .gn-tabs {padding-left:7px;background:white;width:100%!important;top:44px;left:0px!important;overflow:initial!important}
    .tabs {min-width:calc(100% - 12px)!important;max-width:100px!important}
    #conaier {width:100%!important;background:none!important}
  }
  @media (min-width: 960px) {
    .image-bg-overlay {background:rgba(233,232,231,1);background:#f9fafb}
    .avatar,.u-img {width: 100px!important;height: 100px!important;margin:0 auto!important}
    .side-container-ab{min-width:300px;min-height:590px!important;background-color: #fff!important;box-shadow: rgb(0 0 0 / 10%) 0px 1.5px 5px;border-radius: 6px!important}
    .side-container-ab article {top:4px!important;left:0;right:0;width:calc(100% - 8px);margin:0 auto}
    .settings-container {width: calc(100% - 300px)!important;left: 300px!important;}
    #profile__avatar {position: absolute;bottom: -30px;left: 0;right: 0;margin: 0 auto;}
    #profile__name {width:100%;text-align:center;margin-top:34px;font-size:17px}
    #profile__username {width:100%;text-align:center;margin-top:-14px;color:#959595;font-weight:300;font-size:13px}
    #profile__stats {white-space: nowrap;margin:0 auto;margin-top:10px;width:260px;height:50px;position:relative}
    	#profile__stats ul {padding-inline-start:10px!important}
    	#profile__stats li {min-width:82px;left:-6px;position:relative;list-style: none;display: inline-block;text-align: center;padding: 0 15px;border-left: 1px solid #e3e9ed;text-transform: lowercase;}
  		#profile__stats li:first-child {border-left: none;padding-left: 0;left:0px;}
    	#profile__stats li:last-child{left:-11px}
    	#profile__stats .stat {font-size: 14px;display: block;}
    	#profile__stats .statID {font-size: 13px;display: block;text-transform:capitalize}
    #profile__bio {white-space: nowrap;margin:0 auto;margin-top:10px;width:260px;height:50px;position:relative}
  
  
  
  
  
  
  }
  @media (max-width: 1073px) {
    
  }
  @media (min-width: 1074px) {
    
  }
  /* LOGIN / SIGN UP */
  .updateform{padding: 22px;}
  .content {padding-top:20px;width: 375px;min-width: 375px;height: auto;margin: 0 auto;right: auto;left: auto;position: relative;border: 2px solid #dadce0;transform: translateY(-50%);top: 50%;background-color: #f8f8f8;background-image: -webkit-linear-gradient(top, #f8f8f8, #f1f1f1);background-image: -moz-linear-gradient(top, #f8f8f8, #f1f1f1);background-image: linear-gradient(top, #f8f8f8, #f1f1f1);box-shadow: rgb(0 0 0 / 50%) 0px 3px 20px;border-radius:16px;}
  .content article {position: relative;right: 0;left:0;width:100%;padding-top:24px;border:0}
  .content h1,.content h2 {width:100%;position:relative; text-align:center; font-size: 28px; font-weight: bold;margin-block-end: 0.2em!important;font-family: 'Poppins', sans-serif;font-size: 28px;color: #323232;text-rendering: optimizeLegibility;-webkit-font-smoothing: antialiased;}
  .content h2 {font-size:14.5px; font-weight:400} 
  .content h2 span {cursor:pointer;color:#1473e6;border-bottom:1px solid #1473e6}
  .content p, .content label {margin-block-start: 0!important;color: #323232;}
  .content label {font-size: 14px;top:-9px;position:relative}
  .content label a {cursor:pointer;float:right;position:relative;top:0px;text-decoration:none;color:#2b64cf}
  ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */ color: rgba(0,0,0,.35); font-style:italic; opacity: 1; /* Firefox */}
	:-ms-input-placeholder { /* Internet Explorer 10-11 */ color: rgba(0,0,0,.35); font-style:italic}
	::-ms-input-placeholder { /* Microsoft Edge */ color: rgba(0,0,0,.35); font-style:italic}
  .content input {background: #fff;width:100%;margin-top: 5px;padding: 11px 25px 11px 10px;border-radius:9.5px;border: #CCC 1px solid;font-family: sans-serif;font-size: 100%;line-height: 1.15;margin: 0;}
  .btn-type-submit {border-radius:6px; height:44px; width:100%; line-height:1px; font-size:16px; padding: 10px 20px 10px 20px;}
  .btn-type-submit span {position:relative}
  .btn-type-submit svg {width:20px;height:19px;position:absolute;right:-124px;top:0px}
  	.lin-grad-blue {background: linear-gradient(180deg,#3b70df 0,#2c5dc7 100%); border: 1px solid #5584e4; color:white}
  	.lin-grad-green {background: linear-gradient(180deg,#00c535 0,#00a32e 100%); border: 1px solid #009126; color:white}
  .alert-error {height:40px;line-height: 10px;top:-10px;padding:15px 0px 5px 13px;display: none;color: #bd1c1c;position: relative;border-radius: 10px;border:1px solid rgba(246,189,193,1);background-color: #ffe3e6;outline: none;font-size: 14px;margin-bottom: 10px;}
  .alert-error svg {width:24px;height:30px;position:absolute;top:50%;transform:translateY(-50%);right:10px}
  .error {border:1px solid #bd1c1c!important;outline:#bd1c1c!important}
  /* SUPPORT / SETTINGS */
  .dividerbyhalf {display:block;width:100%;height:auto;overflow:hidden;border-bottom:16px solid transparent;padding-top:0px}
  .dividerbyhalf span {width:calc(50% - 10px);display:block;float:left}
  .dividerbyhalf .r {margin-left:20px}
</style>