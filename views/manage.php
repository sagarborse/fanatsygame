
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]><html class="ie ie6 ie-lte9 ie-lte8 ie-lte7 no-js" lang="en"> <![endif]-->
<!--[if IE 7]><html class="ie ie7 ie-lte9 ie-lte8 ie-lte7 no-js" lang="en"> <![endif]-->
<!--[if IE 8]><html class="ie ie8 ie-lte9 ie-lte8 no-js" lang="en"> <![endif]-->
<!--[if IE 9]><html class="ie9 ie-lte9 no-js" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <!-- www.phpied.com/conditional-comments-block-downloads/ -->
  <!-- Always force latest IE rendering engine
       (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <![endif]-->

   <title>IPL Fantasy League</title> 
  

  <!-- http://dev.w3.org/html5/markup/meta.name.html -->
  <meta name="application-name" content="ifl" />
  <meta property="og:title" content="Official IPL Fantasy League" />
<meta property="og:description" content="You've been a spectator, a cheerleader, a critic and a commentator. Now, feel what it's to be a team owner." />
<meta property="og:image" content="https://s3-ap-southeast-1.amazonaws.com/iplimg/fav.ico"/> 

  <!-- Speaking of Google, don't forget to set your site up:
       http://google.com/webmasters -->
  <meta name="google-site-verification" content="IPL, IPL, T20, IPL Fantasy League, Fantasy League, IPL Fantasy Cricket, Fantasy Cricket, Fantasy Cricket Game, Fantasy Game, Official, IPL Contest" />
<meta name="description" content=" The official Fantasy Cricket game of the IPL. Select a squad of 11 players. Earn points based on their performance in the IPL. Win prizes."/>
  <!--  Mobile Viewport Fix
        j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
        device-width: Occupy full width of the screen in its current orientation
        initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
        user-scalable = yes allows the user to zoom in -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" href="https://s3-ap-southeast-1.amazonaws.com/iplimg/fav.ico">
  <link rel="apple-touch-icon" href="https://fantasy.iplt20.com/ifl/static/css/style.css/ifl/static/images/fav.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
  

  


  <!-- All JavaScript at the bottom, except for Modernizr which enables
       HTML5 elements & feature detects -->
 

  <!-- include stylesheets -->
  
  
  
<link href="https://fantasy.iplt20.com/ifl/static/css/style.css/ifl/static/css/style.css" rel="stylesheet" type="text/css" />
<script src="https://fantasy.iplt20.com/ifl/static/css/style.css/ifl/static/js/fix_label.js" type="text/javascript"></script><link href="/ifl/static/css/basic.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://iplimg.s3.amazonaws.com/js/jquery.js"> </script>
<script type="text/javascript" src="https://iplimg.s3.amazonaws.com/js/jquery.simplemodal.js"> </script>
<script type="text/javascript" src="https://fantasy.iplt20.com/ifl/static/css/style.css/ifl/static/js/timer.js?ver=1"> </script>
<script type="text/javascript">

jQuery(document).ready(function() {
  
        Timer.view();
    

 $('.clt20fant').addClass('selected');


  
  $("form.header-search-form .glass, form.main-search-form .glass").click(function(){

    $(this).closest("form").submit()
  });

    

      $('#menu-item-venues').click(function(evt){
        $('.dropDown').removeClass('dropDown');
        $(this).find('a').attr('class','dropDown');   
        $('#venues-drop-down').fadeIn('fast');
        $('#teams-drop-down').fadeOut('fast');
        $('#pavilion-drop-down').fadeOut('fast');
        $('#more-drop-down').fadeOut('fast'); 
        $('#menu-item-venues').data('clicked', true);
         $(document).bind('click',checkdropdownvisiblevisible);
         evt.stopPropagation();
        
        
      });
      $('#menu-item-pavilion').click(function(evt){
        $('.dropDown').removeClass('dropDown');
        $(this).find('a').attr('class','dropDown');   
        $('#more-drop-down').fadeOut('fast'); 
        $('#venues-drop-down').fadeOut('fast');
        $('#teams-drop-down').fadeOut('fast');
        $('#pavilion-drop-down').fadeIn('fast');
        $('#menu-item-pavilion').data('clicked', true);
         $(document).bind('click',checkdropdownvisiblevisible);
         evt.stopPropagation();
        
        
      });

      $('#menu-item-teams').click(function(evt){
         $('.dropDown').removeClass('dropDown');
         $(this).find('a').attr('class','dropDown');
          $('#more-drop-down').fadeOut('fast'); 
          $('#pavilion-drop-down').fadeOut('fast');
           $('#teams-drop-down').fadeIn('fast');
          $('#venues-drop-down').fadeOut('fast');
          $('#menu-item-teams').data('clicked', true);
           $(document).bind('click',checkdropdownvisiblevisible);
          evt.stopPropagation();
      
      });
       $('#menu-item-more').click(function(evt){
         $('.dropDown').removeClass('dropDown');
         $(this).find('a').attr('class','dropDown'); 
          $('#pavilion-drop-down').fadeOut('fast');
           $('#teams-drop-down').fadeOut('fast');

          $('#venues-drop-down').fadeOut('fast');
          $('#more-drop-down').fadeIn('fast');
          $('#menu-item-more').data('clicked', true);
           $(document).bind('click',checkdropdownvisiblevisible);
          evt.stopPropagation();
      
      });

      $('.teamdrop').mouseleave(function(evt){
          $('#menuTeams').removeClass('teamActive');
        
           $('#teams-drop-down').css('display','none');
          $('#venues-drop-down').fadeOut('fast');
          $('#menuTeams').data('clicked', true);
          evt.stopPropagation();
      
      });

      $('.moredrop').mouseover(function(evt){
          $('#menuMore').addClass('moreActive');
        
           $('#moreMenu').css('display','block');
          $('#venues-drop-down').fadeOut('fast');
          $('#menuMore').data('clicked', true);
          evt.stopPropagation();
      
      });

      $('.moredrop').mouseleave(function(evt){
          $('#menuMore').removeClass('moreActive');
        
           $('#moreMenu').css('display','none');
          $('#venues-drop-down').fadeOut('fast');
          $('#menuMore').data('clicked', true);
          evt.stopPropagation();
      
      });

      

      function checkdropdownvisiblevisible() {

       
        if($('#menu-item-teams').data('clicked') == true) {
          $('#menu-item-teams').find('a').removeClass('dropDown');

         // $('#menu-item-teams').toggle();
          //$('#venues-drop-down').fadeOut('fast'); 
           $('#teams-drop-down').fadeOut('fast');
          $('#menu-item-teams').data('clicked', false);
           $(document).unbind('click',checkdropdownvisiblevisible);   
        }
        else{
          
        
        }

        if($('#menuMore').data('clicked') == true) {
          $('#menuMore').toggleClass('moreActive');
          $('#moreMenu').toggle();
          //$('#venues-drop-down').fadeOut('fast'); 
          $('#menuMore').data('clicked', false);
        }
        else{
          
         // $(document).unbind('click',checkdropdownvisiblevisible);   
        }
        if($('#menu-item-venues').data('clicked') == true) {
          $('#menu-item-venues').find('a').removeClass('dropDown');
          
         // $('#menu-item-teams').toggle();
          //$('#venues-drop-down').fadeOut('fast'); 
           $('#venues-drop-down').fadeOut('fast');
          $('#menu-item-venues').data('clicked', false);
           $(document).unbind('click',checkdropdownvisiblevisible);   
        }
        else{
          
         
        }
        if($('#menu-item-pavilion').data('clicked') == true) {
          $('#menu-item-pavilion').find('a').removeClass('dropDown');
          
         // $('#menu-item-teams').toggle();
          //$('#venues-drop-down').fadeOut('fast'); 
          $('#pavilion-drop-down').fadeOut('fast');
           
          $('#menu-item-pavilion').data('clicked', false);
           $(document).unbind('click',checkdropdownvisiblevisible);   
        }
         if($('#menu-item-more').data('clicked') == true) {
          $('#menu-item-more').find('a').removeClass('dropDown');
          
         // $('#menu-item-teams').toggle();
          //$('#venues-drop-down').fadeOut('fast'); 
          $('#more-drop-down').fadeOut('fast');
           
          $('#menu-item-more').data('clicked', false);
           $(document).unbind('click',checkdropdownvisiblevisible);   
        }
  // body...
}


   
  
  var favteamid='0';
  $('.teamnameouter').css('background-image','URL("/ifl/static/images/team_band/'+favteamid+'.jpg")');
  
  
 
  
	
	if($.browser.msie && $.browser.version<=8){
			$('.masthead-menu li a').css('padding','0 13px 13px 13px');
			$('.masthead-menu li.selected a').css('padding','0px 13px 13px 13px');
		}
	
	

  $(".login").keyup(function(event)
  									{
											if(event.keyCode == 13){
												$("#signinenter").click();

											}



										});

  $(document).bind('click',checkprofilevisible);

  $('.Signinouter').bind('click',function(event){
    event.stopPropagation();
  });

                    });
  $('.userProfileDrop').bind('click',function(event){
    event.stopPropagation();
  });




function checkvisible() {
  if($('.Signinouter').data('clicked') == true) {
    
    $('.Signinouter').data('clicked', false);
  }
  else{
		$('#signinbtn_n').removeClass('signinli_kk');
    $('.Signinouter').slideUp('fast',function(){
    });
		$(document).unbind('click',checkvisible);
  }
}


function checkprofilevisible() {

  if($('.userProfileDrop').data('clicked') == true) {
    
    $('.userProfileDrop').data('clicked', false);
  }
  else{
     $('.userProfileDrop').slideUp('fast');
     $('.profilearrow').removeClass('upprofilearrow');
    
  }
  // body...
}



function animateSignIn(){
	//  $('.Signinouter').css('display','block').animate({'width':'192','height':'228'},'fast',function(){
	//    
	//  });
   
  $('#username').attr('value','');
  $('#password').attr('value','');
  $('#sinerror').css('display','none');
	$('#signinbtn_n').addClass('signinli_kk');
  
  $('.Signinouter').slideDown('fast',function(){
    $('#username').focus();
  });

  $('.Signinouter').data('clicked', true);
  $(document).bind('click',checkvisible);
}

function howToPlay() {
    $(".modalbase").modal({autoResize:true,minHeight:578, minWidth: 565,autoPosition:true,overlayClose:true,onShow: function (dialog) {
 			$('#simplemodal-container a.modalCloseImg').css({'top':'9px','right':'7px'});
 

}});
}

function animateHow(id) {
  if(id==1){
    $('#teamcomposition_k').animate({'height':'0px'},'slow',function(){
      $('#teamcomposition_k').css('display','none')
        $('#scoring_k').css('display','block').animate({'height':'431px'},'slow',function(){});
    });
    $('#changeurteam_k').animate({'height':'0px'},'slow',function(){
      $('#changeurteam_k').css('display','none')
        $('#scoring_k').css('display','block').animate({'height':'450px'},'slow',function(){});
    });
    $('#sb1').css('background-position','0 -20px');
    $('#sb2').css('background-position','-4px -31px')
    $('#sb3').css('background-position','-4px -31px')

  }
  if(id==2){

    $('#scoring_k').animate({'height':'0px'},'slow',function(){
      $('#scoring_k').css('display','none')
        $('#teamcomposition_k').css('display','block').animate({'height':'431px'},'slow',function(){});
    });
    $('#changeurteam_k').animate({'height':'0px'},'slow',function(){
      $('#changeurteam_k').css('display','none')
        $('#teamcomposition_k').css('display','block').animate({'height':'431px'},'slow',function(){});
    });
    $('#sb2').css('background-position','0 -20px');
    $('#sb1').css('background-position','-4px -31px')
    $('#sb3').css('background-position','-4px -31px')
  }
  if(id==3){
    $('#teamcomposition_k').animate({'height':'0px'},'slow',function(){
      $('#teamcomposition_k').css('display','none')
        $('#changeurteam_k').css('display','block').animate({'height':'431px'},'slow',function(){});
    });
    $('#scoring_k').animate({'height':'0px'},'slow',function(){
      $('#scoring_k').css('display','none')
        $('#changeurteam_k').css('display','block').animate({'height':'431px'},'slow',function(){});
    });
    $('#sb3').css('background-position','0 -20px');
    $('#sb2').css('background-position','-4px -31px')
    $('#sb1').css('background-position','-4px -31px')
  }
}


function animateprofile(){
  $('.userProfileDrop').data('clicked', true);
  $('.userProfileDrop').slideToggle('fast');
  $('.profilearrow').toggleClass('upprofilearrow');
  
}

function appendS(sI) {
  var s = sI;
 
  if(s[s.length-1] == "s"){
    s = s+"'"

  }

    else{s=s+"'s"};

    return s;
}
   function setfullsite() {
        $.ajax({
          type : 'POST',
          url : '/ifl/default/setfullsite',
          data : 'set=0' ,

          success : function(data) {
          window.location.reload();
        },
        error : function(xhr, status, error) {
        }
      });
      return false;
    }
</script>


    
   


  
</head>
 

<head>
	<script type="text/javascript" src="https://fantasy.iplt20.com/ifl/static/css/style.css/ifl/static/js/jquery.easing.js"></script>
	<script type="text/javascript" src="https://fantasy.iplt20.com/ifl/static/css/style.css/ifl/static/js/teamcreation.js"></script>
	<script type="text/javascript" src="https://fantasy.iplt20.com/ifl/static/css/style.css/ifl/static/js/faceall.js"></script>
	<script type="text/javascript" src="https://fantasy.iplt20.com/ifl/static/css/style.css/ifl/static/js/playerprofile.js"></script>
	<script type="text/javascript" src="https://fantasy.iplt20.com/ifl/static/css/style.css/ifl/static/js/fixture.js"></script>
	<script type="text/javascript" src="https://fantasy.iplt20.com/ifl/static/css/style.css/ifl/static/js/jquery.tinyscrollbarmin.js"></script>
	<script type="text/javascript" src="https://fantasy.iplt20.com/ifl/static/css/style.css/ifl/static/js/jquery.dd.js"></script>
 
  <link rel='stylesheet' type='text/css' href="https://fantasy.iplt20.com/ifl/static/css/style.css/ifl/static/css/dd.css"/>
  <link rel='stylesheet' type='text/css' href="https://fantasy.iplt20.com/ifl/static/css/style.css/ifl/static/css/basic.css"/>
  <script type="text/javascript" src="https://fantasy.iplt20.com/ifl/static/css/style.css/ifl/static/js/track.js"></script>

<script>

	function fbteamshare(){
  	fb_name = 'I just created my IPL Fantasy Team - "sdfggdsfg"';
  	share_lnk = 'https://fantasy.iplt20.com/ifl/homepage/homepage/1338266';
	fb_mess =  'I just created my IPL Fantasy Team - "sdfggdsfg"';
	
	fb_desc ="And I plan to win a bunch of prizes. So, where's your team?";
			initFB();
			FB.ui(
			  {
			  method: 'feed',
			  message: fb_mess,
			  name: fb_name,
			  description:fb_desc,
			  link:share_lnk,
			  picture: 'https://s3-ap-southeast-1.amazonaws.com/iplimg/emblem/232px/group4/0.png',
			 },
			 function(response) {
			 	
			   if (response && response.post_id) {
			     
			   } else {
			     
			   }
			 }
		  );
		}
	
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39217536-1']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11525770-5', 'iplt20.com');
  ga('send', 'pageview');

</script>  	
<script>

    budgetLeft = 10000000;
    subsLeft = 75;
    isAppl = 0;
    stealthEnabled = 'F';
    userStealth = 5;
    scheduled = 'F';
    schedMatch = 40;
    schedSubs = 75;
    teamPlayer.setInits(budgetLeft,subsLeft);
    
	$(document).ready(function() {
    $('#stealthRem').html('('+userStealth+'/5 REMAINING)');
    $('.helptext').mouseenter(handlerIn).mouseleave(handlerOut);
    if(scheduled=="T"){
      
      $('.schedule_warning_squad').show();
      $('.schedule_warning_squad').html('<b style="font-weight:bold;">WARNING:</b> Subs already scheduled for Match '+40+': '+toolate_team[5]+' vs '+toolate_team[6]+'. Confirming any changes will cancel your scheduled subs.');
      $('.schedule_warning_squad_modal').show();
      $('.schedule_warning_squad_modal').html('<b style="font-weight:bold;">WARNING:</b> Subs already scheduled for Match '+40+': '+toolate_team[5]+' vs '+toolate_team[6]+'. Confirming any changes will cancel your scheduled subs.');
    }
    else{
       $('.schedule_warning_squad').hide();
        $('.schedule_warning_squad').html('');
        $('.schedule_warning_squad_modal').hide();
        $('.schedule_warning_squad_modal').html('');
    }
    if(window.location.href.indexOf("schedule") > -1 && scheduled=="F") {
      scheduleTeam1=toolate_team[5];
      scheduleTeam2=toolate_team[6];
      scheduleMatchumber=40;
      schedule_check=1;
     $('#confirmSchd').html('<p>SCHEDULING SUBS FOR MATCH '+40+': '+toolate_team[5]+' vs '+toolate_team[6]+'</p>');

     $('#cnfrmbtnmodal').find('span').html('SCHEDULE');
      $('.schedule_warning_squad').show();
      $('.schedule_warning_squad').html('You are scheduling subs for Match '+40+': '+toolate_team[5]+' vs '+toolate_team[6]+'.');
    }
    else if(window.location.href.indexOf("schedule") <= -1 && scheduled=="F"){
     
      schedule_check=0;
      $('#confirmSchd').html('<p>CONFIRM SUBSTITUTION</p>');
      $('#cnfrmbtnmodal').find('span').html('CONFIRM');
      $('.schedule_warning_squad').hide();
        $('.schedule_warning_squad').html('');
    }
         function handlerIn(){
          $('.tool').hide();
         var tooltip = $(this).attr('rtool');
         $('#'+tooltip).show();
         var ttip = tooltip+'tip';
         $('#'+ttip).show();

          
         }
         
         function handlerOut(){
          
                    $('.tool').hide();
                      $('.tip').hide();

          
         }
		an1.er(['selectteam','visited']);
		var scDD  = addCommas("0");
		$('#usersScore').html(scDD);
    var rankDD = addCommas("0");
      
      if(rankDD==0){
        $('#rankcount').html('-');

      }
      else{
        $('#rankcount').html(rankDD);
      }
	subsManager.setAppl(isAppl);
	$('.stabs').parent().removeClass('selected');
	$('.teamblnce,.elevplayers,.franchspread,.seasquota,.uncpdquota').mouseover(teamHelp.show).mouseout(teamHelp.hide);
	
   lessPlayer = 0;        
  
             
   	  teamPlayer.load();

   	  arrows.enable();
      
     
     /* $("a.offsite").live("click", function(){ alert("Goodbye!"); });*/
      $(".teamcreationselect").change(function () {
      	//playerInfo.disableProfile();
        teamPlayer.selectboxonChange($('#teamDict').val(),$('#skillDict').val(),$('#typeDict').val());    
      });
      $('#powerplayerselect').change(function(){
      	var x_org = $.merge([],teamPlayer.origTeam);
      	if(teamPlayer.myTeam.sort().join(",") != x_org.sort().join(",") || parseInt($(this).val())!=parseInt(teamPlayer.origPow)){
     		//$('.savedisable').hide();
     		tvdator.invoke();
     	}
     	else{
     		$('.savedisable').show();
     	}
      	teamPlayer.setPower($(this).val());
        var playerId = $(this).val();
        powplayerHighlighter(playerId);
       
        //console.log(playerId);
      });  	
        
        autoFill.init('#autocomp');
        $('#selectmyplayers :nth-child(12)').css('color','#B0B0B0 ');
        $('#selectmyplayers :nth-child(13)').css('color','#B0B0B0 ');
        $(document).bind('click',checkplayervisible);
        $('.playerInfo').bind('click',function(event){
     
        });
        $('.playerName').bind('click',ascendingsorting);
        $('.teamName').bind('click',ascendingsorting);
        $('.priceName').bind('click',ascendingsorting);
        $('.pointsName').bind('click',ascendingsorting);
        $('#t_reset').click(teamPlayer.reset);
        
        $('#budgetleftval').html(teamPlayer.addCommas(10000000));
        $('.dailyheader').css('display','none !important');
				});
</script>
	

</head>

<body>
<div class="helpbar" style="display:none;"></div>

	<div class="bcciGlobal">
    <div class="bcciGlobalContent">
        <div class="globalNav"> 
            <a href="http://www.bcci.tv/">BCCI.tv</a>
            <span class="globalNavSeparator">|</span>
            <a href="http://www.iplt20.com" class="selected">IPLT20.com</a>
            <span class="globalNavSeparator">|</span>
            <a href="http://www.clt20.com/">CLT20.com</a>
        </div><!-- END globalNav -->
        <div class="bcciGlobalRight">
            <div class="socialCntr">
                <div class="gplusMasthead">
                    <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background-position: initial initial; background-repeat: initial initial;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1394793674164" name="I0_1394793674164" src="https://apis.google.com/u/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;hl=en-GB&amp;origin=http%3A%2F%2Fwww.iplt20.com&amp;url=http%3A%2F%2Fwww.iplt20.com%2F&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en_GB.rwSbE9CUaK0.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Fz%3Dzcms%2Frs%3DAItRSTOc_su8suihqhvw-Sf0PcVsIFdirA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1394793674164&amp;parent=http%3A%2F%2Fwww.iplt20.com&amp;pfname=&amp;rpctoken=66485211" data-gapiattached="true" title="+1"></iframe></div>
                </div>
                <div class="twitterMasthead">      
                    <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/follow_button.1393899192.html#_=1394793675853&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=IPL&amp;show_count=true&amp;show_screen_name=true&amp;size=m" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 189px; height: 20px;"></iframe>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.async = true;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
                <div class="facebookMasthead">
                    <div class="fb-like fb_iframe_widget" data-href="http://www.facebook.com/ipl" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=294544217278772&amp;href=http%3A%2F%2Fwww.facebook.com%2Fipl&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=100"><span style="vertical-align: bottom; width: 84px; height: 20px;"><iframe name="f34c773184" width="100px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like Facebook Social Plugin" src="http://www.facebook.com/plugins/like.php?app_id=294544217278772&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FLEdxGgtB9cN.js%3Fversion%3D40%23cb%3Df88f6558%26domain%3Dwww.iplt20.com%26origin%3Dhttp%253A%252F%252Fwww.iplt20.com%252Ff2dae25e54%26relation%3Dparent.parent&amp;href=http%3A%2F%2Fwww.facebook.com%2Fipl&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=100" style="border: none; visibility: visible; width: 84px; height: 20px;" class=""></iframe></span></div>
                </div>
            </div><!-- END socialCntr -->
            <div class="search">
                <form id="search-form" class="header-search-form" action="http://www.iplt20.com/search" method="GET">
                    <span class="glass"><i></i></span>
                    <input value="" placeholder="Search" name="q" id="search-query" type="text" class="">
                </form>
            </div><!-- END search -->           
        </div><!-- END bcciGlobalRight -->        
    </div><!-- END bcciGlobalContent -->
</div>
<div class="masthead">
    <div class="mastheadContent"> 
        <div class="wrapper">
            <div class="siteLogo">
                <a href="http://www.iplt20.com/home">IPLT20.com</a>
            </div>                            
            <div class="user" id="scl"><div id="sclSignedOut" class="signIn signInButton"><a href="JavaScript:void(0);">Sign in to IPLT20</a></div></div>            
        </div>        
                                                                                                                
    <div class="primaryMenu">
        <div class="wrapper">      
            <div class="masthead-menu">
            <ul id="yw1">
<li><a href="http://www.iplt20.com/home">Home</a></li>
<li><a href="http://www.iplt20.com/news">News</a></li>
<!-- <li><a href="http://www.iplt20.com/playerauction">Auction</a></li> -->
<li class="main-menu-results"><a href="http://www.iplt20.com/schedule">Schedule & Tickets</a></li>
<li><a href="http://www.iplt20.com/results">Results</a></li>
<li class="main-menu-videos"><a href="http://www.iplt20.com/videos">Videos</a></li>
<li class="main-menu-stats"><a href="http://www.iplt20.com/stats">Stats</a></li>
<li class="teams menu-item-teams" id="menu-item-teams"><a href="javascript:void(0);">Teams</a><div class="teamDropDown" id="teams-drop-down" style="display:none; opacity: 1; left: -250px;">
        <ul>
        <li><a href="http://www.iplt20.com/teams/chennai-super-kings"><img class="tLogo16x30 CSK" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Chennai Super Kings</a></li>
          <li><a href="http://www.iplt20.com/teams/delhi-daredevils"><img class="tLogo16x30 DD" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Delhi Daredevils</a></li>
          <li><a href="http://www.iplt20.com/teams/kings-xi-punjab"><img class="tLogo16x30 KXIP" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Kings XI Punjab</a></li>
        </ul>
        <ul>
          <li><a href="http://www.iplt20.com/teams/kolkata-knight-riders"><img class="tLogo16x30 KKR" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Kolkata Knight Riders</a></li>
          <li><a href="http://www.iplt20.com/teams/mumbai-indians"><img class="tLogo16x30 MI" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Mumbai Indians</a></li>
                    <li><a href="http://www.iplt20.com/teams/rajasthan-royals"><img class="tLogo16x30 RR" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Rajasthan Royals</a></li>
        </ul>
        <ul class="last">
          
          <li><a href="http://www.iplt20.com/teams/royal-challengers-bangalore"><img class="tLogo16x30 RCB" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Royal Challengers Bangalore</a></li>
          <li><a href="http://www.iplt20.com/teams/sunrisers-hyderabad"><img class="tLogo16x30 SH" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Sunrisers Hyderabad</a></li>
        </ul>
    </div></li>
<li class="venues" id="menu-item-venues"><a href="javascript:void(0);">Venues</a><div class="venuesDropDown" id="venues-drop-down" style="display:none; opacity: 1;  left: -380px;">
        <ul>
            <li><a href="http://www.iplt20.com/venues/59/chhattisgarh-international-cricket-stadium"><img class="tLogo16x30 DD" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Chhattisgarh International Cricket Stadium</a></li>
            <li><a href="http://www.iplt20.com/venues/2/eden-gardens"><img class="tLogo16x30 KKR" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Eden Gardens</a></li>
            <li><a href="http://www.iplt20.com/venues/8/ferozshah-kotla"><img class="tLogo16x30 DD" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Ferozeshah Kotla</a></li>
            <li><a href="http://www.iplt20.com/venues/11/hpca-stadium"><img class="tLogo16x30 KXIP" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">HPCA Stadium</a></li>
        </ul>
        <ul>
            <li><a href="http://www.iplt20.com/venues/55/jsca-international-cricket-stadium"><img class="tLogo16x30 KKR" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">JSCA International Cricket Stadium</a></li>
            <li><a href="http://www.iplt20.com/venues/5/m-chinnaswamy-stadium"><img class="tLogo16x30 RCB" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">M.Chinnaswamy Stadium</a></li>
            <li><a href="http://www.iplt20.com/venues/1/m-a-chidambaram-stadium"><img class="tLogo16x30 CSK" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">M. A. Chidambaram Stadium</a></li>
            <li><a href="http://www.iplt20.com/venues/9/punjab-cricket-association-stadium"><img class="tLogo16x30 KXIP" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Punjab Cricket Association Stadium</a></li>
        </ul>
        <ul class="last">
            <li><a href="http://www.iplt20.com/venues/10/rajiv-gandhi-cricket-stadium"><img class="tLogo16x30 SH" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Rajiv Gandhi International</a></li>
            <li><a href="http://www.iplt20.com/venues/3/sawai-mansingh-stadium"><img class="tLogo16x30 RR" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Sawai Mansingh Stadium</a></li>
            <li><a href="http://www.iplt20.com/venues/7/subrata-roy-sahara-stadium"><img class="tLogo16x30 PWI" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Subrata Roy Sahara Stadium</a></li>
            <li><a href="http://www.iplt20.com/venues/4/wankhede-stadium"><img class="tLogo16x30 MI" src="https://s3-ap-southeast-1.amazonaws.com/iplimg/trans.png">Wankhede Stadium</a></li>
        </ul>
    </div></li>
    <li class="dropDownMenu" id="menu-item-pavilion"><a href="javascript:void(0);" >Pavilion</a><div class="dropDownLinks pavilionDropDown" style="opacity: 1; display: none;" id="pavilion-drop-down">
<ul id="yw1">
<li><a href="http://www.iplt20.com/twittermirror" class="dropDown">#twittermirror</a></li>
<li><a href="http://www.iplt20.com/social/player-battles" class="dropDown">#playerbattles</a></li>
</ul></div></li>


<!-- <li class="main-menu-polls"><a href="http://www.iplt20.com/polls">Polls</a></li> -->
<li class="main-menu-photos"><a href="http://www.iplt20.com/photos">Photos</a></li>
<li class="main-menu-fantasy-league selected"><a href="https://fantasy.iplt20.com/">Fantasy</a></li>
<li class="main-menu-archive"><a href="http://www.iplt20.com/archive">Archive</a></li>
<li class="dropDownMenu" id="menu-item-more"><a href="javascript:void(0);" class="">More</a><div class="dropDownLinks aboutDropDown" style="opacity: 1; display: none;" id="more-drop-down">
<ul id="yw2">
<li><a href="http://www.iplt20.com/about/2014/about-us" class="">About</a></li>
<li><a href="http://www.iplt20.com/playerauction" class="">Auction</a></li>
</ul></div></li>
</ul>            </div>
        </div>                              
    </div>

          
    
          
    
    <!-- END top-masthead -->
    </div>
</div>
  


<div class="nxtmatchdiv_r" style="margin-top: 0px;border-radius:0px;-webkit-border-radius:0px;-moz-border-radius:0px;" >
	 <div class="lst_up" style="display:none;">
      	<p id="match_no_time_l" style="color:#3B579B;width: 100%;text-align: center;font-size: 14px;font-weight: bold;margin-left: 0px;"></p>
	
        
	<p id="ifabnd" style="color: #4D4D4D;width: 83%;border-bottom: 2px solid #CCC;margin-left: 11px;text-align: center;padding-bottom: 5px;font-size:14px;">SCORES UPDATED</p>
		<span style="width: 100%;margin-left: 10px; font-weight: bold;">
        
         </span>
      </div>
<div class="lst_up_locked" style="display:none;">
	<p id="match_no_time_l_locked" style="color:#3B579B;width: 100%;text-align: center;font-size: 14px;font-weight: bold;margin-left: 0px;margin-top:4px;">


		</p>
	
         <span style="width: 100%;margin-left: 10px; font-weight: bold;">
        
         </span>

	<p id="lockingtime" style="color: #4D4D4D;width: 86%;border-bottom: 2px solid #CCC;margin-left: 9px;text-align: center;padding-bottom: 5px;font-size: 14px;"></p>
		
      </div>
	<div class="nxtlocktext" style="display:block;">
     

       
      
         <p id="match_no_time" style="font-size: 14px;color:#3B579B;font-weight: bold;width:100%;text-align: center;margin-left: 0px;margin-top:4px;"></p>
         <div class="nxtmatchteam timeteam1" id="" style="margin-left: 17px;margin-top: 10px;float:left;"></div>
         <p style="width: 100%;margin-left: 49px;margin-top: 5px;font-size: 10px;color:#4d4d4d;">VS</p>
		<div class="nxtmatchteam timeteam2" id="" style="margin-left: 17px;margin-top: 5px;float:left;margin-bottom: 10px;"></div>
		<p id="mtchDelayed_time" style="display:none;font-size: 12px;color:#e31e34;font-weight: bold;width:100%;text-align: center;margin-left: 0px;">MATCH DELAYED</p>
		 <p id="expctd_time" style="color: #4d4d4d;width: 100%;margin-left: 0px;text-align: center;font-size: 10px;"></p>
		  <p style="color: #4D4D4D;width: 100%;margin-left: 0px;text-align: center;font-size: 10px" id="expectedmatchdate"></p>
	</div>
</div>
<div class="outterwrapper">
	
	<div class = "wrapper">
		<script type="text/javascript">
	
	
	
</script>

<div class="subMenu">
    <ul id="yw1">


<!--li class="selected"><a href="#">fantasy cricket</a></li-->

<li><a id="c_s" class="stabs" style="padding: 0 12.5px;" href="/ifl/homepage/homepage">Fantasy Championship</a></li>
<li><a class="stabs" id="dc_s" style="padding: 0 12.5px;" href="/ifl/dailychallenge/teaminfo">Daily Challenge</a></li>
<li><a class="stabs" id="all_s" style="padding: 0 12.5px;" href="/ifl/allstars/homepage">All Stars</a></li> 
<li><a class="stabs" id="htp_s" style="padding: 0 12.5px;" href="/ifl/default/faq">How To Play</a></li>
<li onclick="howToPlay()"	><a id="rs_s" style="padding: 0 12.5px;" class="stabs" href="#">Rules & Scoring</a></li>
<li><a class="stabs" style="padding: 0 12.5px;" id="prizes_s" href="/ifl/default/prizes">Prizes</a></li> 
<li><a class="stabs" style="padding: 0 12.5px;" id="lb_s" href="/ifl/leaderboard/index">Leaderboard</a></li>  
 <!-- <li><a class="stabs" style="padding: 0 12.5px;" id="hl_s" href="/ifl/dailychallenge/halloffame">Hall Of Fame</a></li>  -->

<li><a class="stabs" style="padding: 0 12.5px;" id="pc_s" href="/ifl/research/player_researchall">Player Centre</a></li>

 <!---->





 
</ul>    </div>



<head>
  
<script>
$('#an1_register_signin').click(function(){ an1.er(['register_signin','clicked']); return false; });
</script>
  <script> 
function auth(){
$('.error').fadeOut("fast");
  var username = $('#username').val();
  var pass = $('#password').val();
  if ($('#remem').is(':checked') == true) {
  var remember = $('#remem').val();
  var data = 'username='+username+'&password='+pass+'&remember='+remember;	
  } 
  else{
  	
  	var data = 'username='+username+'&password='+pass;
  }
  
  
  //alert(username);
  //alert(pass);
    
  $.post('/ifl/default/loginajax', data, function(d) {
                if (d!='False'){
                  //alert(d);
                  window.location = d;
                } 
                else{ 
                  //alert(d);
                  $('.error').fadeIn("fast");
                  //alert('wrong username/password');
                  
                }
    }); 
}
</script>
<script type="text/javascript" src="https://connect.facebook.net/en_US/all.js"></script>
</head>
<div class="Signinouter">
  <form>
    <ul style="margin-left: 5px;">
        <li style="margin-bottom:10px;">
            <label for="username" style="margin-left: 6px;">Email:</label>
            <input name="emailid" style="margin-left: 6px;width:273px;" type="text" id="username" class="login" name="name" mandate='1' />
        </li>
        <li style="margin-bottom:10px;">
            <label for="password" style="margin-left: 6px;">Password:</label>
            <input name="password" style="margin-left: 6px;width:273px;" type="password" id="password"  class="login" name="name" mandate='1' />
        </li>
    </ul>
    <div style="position:relative;float:left;width:100%;">
    <input id="remem" name="remember" value="on" type="checkbox" style="width: auto;margin-left: 12px;margin-right: 5px;margin-top: 15px;" /><label for="remem" style="color:#4d4d4d;margin-top:14px;"> Remember Me</label>
    <div class="clearbutton30" style="position:absolute;top: 1px;left: 179px;" value="REGISTER" onclick="auth();" id="signinenter"> <!-- document.fbregForm.submit(); -->
                      <a class="GlobalRedButton30" ><span style="width: 87px;text-align: center;" >SIGN IN</span></a>
                    </div>
      </div>
                    <a style="position:relative;float:right;margin-top: 0px;margin-right: 4px;font-size: 13px;cursor:pointer;padding-top:0px;" href="/ifl/default/user/request_reset_password">Forgot Password?</a>
                    <p id="sinerror" class="error" style="display:none;position: absolute;top: 120px;left: 12px;font-size: 11px;color:#e31e24;">Invalid email or password.</p>
                    <p onclick="an1.er(['register_signin','clicked']);" id="Signinpatta">Don't have an account? <a style="cursor:pointer;" href="/ifl/default/user/register" id="an1_register_signin">Click here</a> to register.</p>
</form>
</div>


		<div class="main-content">
		
		<div class="profileheader">
    <p style="font-size:10px;cursor:pointer;margin-top:2px; display: none;">Report this profile</p>
     <div class="profileheaderinner">
        
    <p style="font-size: 12px;margin-right:3px;font-weight:bold" >WELCOME</p>
    <p style="font-size: 12px;margin-right:3px;">Romeo Sameul</p>
    
    <div class="profilearrow" id="" onclick="animateprofile()"></div>
    
    </div>
</div>
<div class="userProfileDrop">
<ul>
<a href="/ifl/default/profile"><li>EDIT PROFILE</li></a>
<a href="/ifl/default/user/change_password"><li>RESET PASSWORD</li></a>
<a href="/ifl/default/user/logout"><li style="border-bottom:0px;">SIGN OUT</li></a>

</ul>



	</div>
		
		

  
   <div class="teamnameouter">
        <div class="teamnameimage">
<img src="https://s3-ap-southeast-1.amazonaws.com/iplimg/emblem/232px/group4/0.png" /> </div>
          <div class="teamnametext" >
            <div id="teamname" style="height: 54px;width:627px;">
              <p style="font-size: 16px;width: 100%;color:#444;">Romeo Sameul's</p></br>
              <p style="margin-top: -7px;">sdfggdsfg</p>
               
            </div>
            <div id="teamdescription">
              <p></p>
<!-- <div class="clearbutton30" id="fb_in" style="margin-top:-27px;margin-right: 18px;clear:none;float:right;" value="CREATE TEAM" onclick="fbteamshare();"> 
                      <a class="GlobalRedButton30"  ><span style="margin: 0;font-size: 13px;border: none;width:auto;padding: 7px 4px 8px 36px;" onclick=>
                        <img style="position: absolute;top: 4px;left: 9px" src="/ifl/static/images/fb.png" />
                        SHARE TEAM</span></a>
                    </div> -->
            </div>
             
             </div>

            
      </div>

	
<!-- <div class="teamcreationselectouter">
	<select id="skillDict" class="teamcreationselect" >
  		<option value="0">ALL PLAYERS</option>
	</select>

	<select id="teamDict" class="teamcreationselect">
  		<option value="0">ALL TEAMS</option>
	</select>
</div> -->

  <div class="grayheader">
      <p style="margin-left: 10px;">CHAMPIONSHIP</p>
      <div class="grayheaderinner">
      <p style="margin-left: 223px;">SCORE:<span id="usersScore" style="float: right;position: relative;"></span> </p>
      <p style="margin-left:5px;margin-right:5px;">|</p>
			
      <p>SUBS REMAINING:<span id="subscount" style="float: right;position: relative;font-size:16px;">&#8734;</span></p>
			
      <p style="margin-left:5px;margin-right:5px;">|</p>
      <p>RANK:<span id="rankcount" style="float: right;position: relative;" ></span></p>
      </div>
      </div>
      <div class="timerouter" style="text-align: center;">
	<span class="timeroutermatch" style="text-align: center;">
		<div class="lst_up_s" style="float: none;display: inline-block;position: relative;">
		
		<p id="match_no_time_l_s" style="font-size: 12px; font-weight: bold;color:#3B579B;margin-top:5px;float: none;display: inline-block; "></p>
		<p id="match_no_time_l_s_up_ch" style="font-size: 12px;margin-top: 5px;float: none;display: inline-block;padding-left: 5px;padding-right: 5px;display:none;">SCORES UPDATED</p>
		<p style="font-size:12px;color:#ccc;margin-top: 4px;float: none;display: inline-block;">|</p>
		</div>
		<div class="lst_up_locked_s" style="float: none;display: inline-block;position: relative;">
	
		<p id="match_no_time_l_locked_s" style="font-size: 12px; font-weight: bold;color:#3B579B;margin-top:5px;float: none;display: inline-block; "></p>
		<p id="lockingtime_s" style="	font-size: 12px;margin-top: 5px;float: none;display: inline-block;padding-left: 5px;padding-right: 5px;"></p>
		

		<p style="font-size:12px;color:#ccc;margin-top: 4px;float: none;display: inline-block;">|</p>
		</div>
		


		

		
		
		<p id="match_no_time_s" style="font-size: 12px; font-weight: bold;color:#3B579B;margin-top:5px;float: none;display: inline-block;"></p>
	
		<p id="nextmatchsmall" style="font-size: 12px;margin-top: 5px;float: none;display: inline-block;padding-right: 5px;padding-left: 5px;"></p>
		
		
		
		<p style="font-size:12px;color:#ccc;margin-top: 4px;float: none;display: inline-block;">|</p>
    <!-- <span style="margin-right: 10px;margin-left:3px;">
         <p id="hours2" style="width: auto;margin: 0;float: left;font-size: 12px;color:#676767;"></p><p style="font-size: 12px;color: #676767;">:</p><p id="minutes2" style="width: auto;margin: 0;float: left;font-size: 12px;color: #676767;"></p>
         <p style="font-size: 12px;color:#676767;">:</p><p style="width: auto;margin: 0;float: left;font-size: 12px;color: #676767;" id="seconds2"> </p>
         </span> -->
          <span style="float: none;display: inline-block;">
          	<p id="mtchDelayed_time_small" style="font-size: 12px; font-weight: bold;margin-top:5px;float: none;display:none;color:#e31e34;">MATCH DELAYED</p>
          <p id="expctd_time_small" style="font-size: 12px; font-weight: bold;margin-top:5px;float: none;display:none;">Expected Start:</p> <p id="expectedmatchdate_small" style="font-size: 12px;margin-top: 5px;float: none;display: inline-block;padding-left: 5px;padding-right: 5px;"></p>
         </span>
	</span>
    
 </div>
 

<div class="schedule_warning_squad"></div>
<div class="column one">

        <div class="colOneSplitOne">
        <div class="unitCntr" style="width:485px;"> 
            <div class="unitHeader"><h1>Current Squad</h1></div>
            <div class="teamcreationselectouter">
               
              <div class="budgetleft" style="width: 485px;">
               <!-- <div class="onoff" id="on_glow" ></div>
                <div class="onoffglow" id="on"  ></div> -->
               <span class="statstextspan" style="font-weight:bold;margin-left: 181px;"> Budget Left:</span>
                <p id="budgetleftval" style="font-weight:bold;" >10000000</p>
              </div>
               <div class="subsleft" style="display:none;">
               <!--  <div class="onoff" id="on_glow" ></div>
                <div class="onoffglow" id="on"  ></div> -->
               <span class="statstextspan" style="font-weight:bold;margin-left: 76px;"> Subs Left:</span>
                <p class="statstextp" id="subsleftval" style="font-weight:bold;">75</p>
              </div>
              
               <div class="teamblnce">
                <div class="onoff" id="on_glow" ></div>
                <div class="onoffglow" id="off"  ></div>
                <p class="statstextp" style="line-height: 13px;margin-top: 2px;">Squad</p>
                <p class="statstextp" style="margin-top: 0px;">Balance</p>
                
              </div>
              <div class="elevplayers">
                <div class="onoff" id="on_glow" ></div>
                <div class="onoffglow" id="off"  ></div>
                 <p class="statstextp" style="line-height: 13px;margin-top: 3px;">Eleven<br /> Players</p>
                
              </div>
             
              <div class="franchspread">
                <div class="onoff" id="on_glow" ></div>
                <div class="onoffglow" id="on"  ></div>
                 <p class="statstextp" style="line-height: 13px;margin-top: 2px;">Franchise</p>
                <p class="statstextp" style="margin-top: 0px;">Spread</p>
              </div>
              <div class="seasquota">
                <div class="onoff" id="on_glow" ></div>
                <div class="onoffglow" id="on"  ></div>
                 <p class="statstextp" style="line-height: 13px;margin-top: 2px;">Overseas</p>
                <p class="statstextp" style="margin-top: 0px;">Limit</p>
              </div>
              <div class="uncpdquota">
                <div class="onoff" id="on_glow" ></div>
                <div class="onoffglow" id="off"  ></div>
                 <p class="statstextp" style="line-height: 13px;margin-top: 2px;">Uncapped</p>
                <p class="statstextp" style="margin-top: 0px;">Quota</p>
              </div>
              
            </div> 
            <div class="PlayerSorter"  id="currentteam" >
              <div class="PlayerSorterHead">
                
                <div class="playerName" style="width:205px;" ><p style="margin-left: 6px;">PLAYER</p></div>
                <div class="teamName" style="width:86px;" ><p style="margin-left: 0px;">TEAM</p></div>
                <div class="priceName" style="width:72px;" ><p style="margin-left: 22px;">PRICE</p></div>
                <div class="pointsName" style="width:67px;margin-left: 17px;"><p>POINTS</p></div>

             </div>
             <div id="selectmyplayers">
              
             </div>
            </div>
            <!-- <table id="currentteam" class="tablesorter" > 
<colgroup>
   <col width="12" height="28">
   <col width="216" height="28">
   <col width="161" height="28">
   <col width="60" height="28">
   <col width="54" height="28">
   <col width="12" height="28">
</colgroup>
<thead> 
<tr class="theader"> 
     <th></th>
     <th class="accending" style="width: 290px;padding-left:12px;">Player<a class="sorter" sort="brandAsc" style="display:none;position: absolute;font-size: 18px;line-height: 13px;left: 211px;top: 8px;" >&#9660;</a><a style="display: none;position: absolute;font-size: 18px;line-height: 13px;left: 211px;top: 8px;" class="sorter" sort="brandDsc">&#9650;</a></th>

    <th style="width: 120px;">Team<a class="sorter" sort="countryAsc" style="display:none;position: absolute;font-size: 18px;line-height: 13px;left: 392px;top: 8px;" >&#9660;</a><a style="display: none;position: absolute;font-size: 18px;line-height: 13px;left: 392px;top: 8px;" class="sorter" sort="countryDsc">&#9650;</a></th>

    <th style="width: 80px;text-align:center;">Price<a class="sorter" sort="typeAsc" style="display:none;position: absolute;font-size: 18px;line-height: 13px;left: 572px;top: 8px;" >&#9660;</a><a style="display: none;font-size: 18px;line-height: 13px;left: 572px;top: 8px;" class="sorter" sort="typeDsc">&#9650;</a></th>

    <th style="padding-right:12px;text-align:right;">Points<a class="sorter" sort="dateAsc" style="display:none;position: absolute;font-size: 18px;line-height: 13px;left: 782px;top: 8px;" >&#9660;</a><a style="display: none; font-size: 18px;line-height: 13px;left: 782px;top: 8px;" class="sorter" sort="dateDsc">&#9650;</a></th>
    <th></th>
</tr> 
</thead> 
<tbody id="selectmyplayers">
 

</tbody> 

</table>  -->
<div class="teamcreationselectouter">
  <!-- <div class="metro three-d" id="" style="margin-left:40px;"  onclick="" >AUTO COMPLETE</div> -->
  <div class="clearbutton22" style="position:absolute;left:8px;top:24px;" id="autocomp" onclick="an1.er(['autocomplete_championship','clicked']);">
                      <a class="GlobalRedButton22"  ><span style="color:#4d4d4d;">AUTO COMPLETE</span></a>
                    </div>
  <select id="powerplayerselect" class="teamcreationselect" style="width:151px;position:absolute;left:162px;top: 24px;height: 30px;margin: 0;">
        <option value="0">POWER PLAYER</option>
  </select> 
<div id="t_reset" class="clearbutton30"  style="position:absolute;left:339px;top:24px;" onclick="">
                      <a class="GlobalRedButton30"  ><span>RESET</span></a>
</div>


<div class="clearbutton31" style="position:absolute;left:416px;top:24px;" onclick="confirmationModal()"><!--sendplayersnames() -->
                      <a class="GlobalRedButton31"  ><span>SAVE</span></a>
</div>
<div class="savedisable"></div>
<p style="display:none;" class="autocompError">Too many overseas players, you can have a maximum of 4 overseas players. Why not aut.</p>
   
</div>
</div>
</div>
</div>
<div class="column two">
        <div class="colTwoSplitOne">
        <div class="unitCntr" style="width:480px;"> 
            <div class="unitHeader"><h1>Other Players</h1></div>
            <div class="teamcreationselectouter" style="width:480px;">
  <select id="skillDict" class="teamcreationselect"  >
      <option value="0">ALL ROLES</option>
  </select>

  <select id="teamDict" class="teamcreationselect">
      <option value="0">ALL TEAMS</option>
  </select>
<select id="typeDict" class="teamcreationselect" style="display:block;">
      <option value="0">ALL TYPES</option>
      <option value="1">Uncapped</option>
      <option value="2">Overseas</option>
  </select>
  
</div>  

                    <div class="PlayerSorter"  id="myTable" >
              <div class="PlayerSorterHead" style="width:477px;">
                
                <div class="playerName" style="width:205px;"><p style="margin-left: 6px;cursor: pointer;">PLAYER</p><div class="sortable" id="defaultsort"></div></div>
                <div class="teamName" style="width:86px;"><p style="margin-left: 0px;cursor: pointer;">TEAM</p><div class="sortable" id="dscsort"></div></div>
                <div class="priceName" style="width:72px;" ><p style="margin-left: 18px;cursor: pointer;">PRICE</p><div class="sortable" id="defaultsort"></div></div>
                <div class="pointsName" style="width: 83px;"><p style="margin-left: 16px;cursor: pointer;">POINTS</p><div class="sortable" id="defaultsort"></div></div>

             </div>
             <div id="scrollbarAllPlayers" style="display: block;">
<div class="scrollbar">
                  <div class="track">
                    <div class="thumb">
                      <div class="end"></div>
                    </div>
                  </div>
                </div>
                <div class="viewport">
                  <div class="overview">
             <div id="selectplayers">
              
             </div>
            </div>
           

            </div>
          </div>
 </div>
</div>
</div>
</div>


<div class="tooltipouter">
              <div class="tooltip">
            <div class="tooltip-content"></div>
            <div class="arrow"></div>
            <div class="shadow"></div>
        </div>
        </div>

        <div id="basic-modal-content" style="width:660px;position:relative;float:left;height:auto;display:none;">
  
  
<div class="modalpain" style="position:relative;float:left;width:655px;height:300px;">
<div class="updating_k_prev" style="display:none;position:absolute;width:657px;height:345px;top:30px;background-color:#fff;z-index:999;">
            <p style="width: 671px;text-align: center;margin-top: 127px;">You have already saved a new squad. <br />
Please refresh this page.</p>

            <div class="clearbutton30 simplemodal-close"  style="clear:none;margin-left: 10px;margin-right: 10px;margin-top:113px;float:right;padding-top: 1px;overflow: hidden;height: 29px;" onclick="">
                      <a class="GlobalRedButton30" href="#" ><span>GO BACK</span></a>
  </div>
  <div class="clearbutton30 simplemodal-close"  style="clear:none;margin-left: 160px;margin-right: 10px;margin-top:113px;float:right;padding-top: 1px;overflow: hidden;height: 29px;" onclick="location.reload();">
                      <a class="GlobalRedButton30" href="#" ><span>REFRESH</span></a>
  </div>
          </div>
          <div class="confirmchange" id="confirmSchd" style="width:655px;"><p>CONFIRM SUBSTITUTION</p>
          </div>
          <div id="oopsWrong" style="height:348px;"><p>There was an error saving your team. Please check the criteria and try again.</p></div>
          <div style="position:relative;float:left;height:272px;width:648px;">
           <div class="oldpayerheading" id="oldplayerremove" style="width:310px;"><p>PLAYERS OUT</p></div>
            <div class="newplayerheading" id="newplayerremove" style="width:310px;"><p>PLAYERS IN</p></div> 
            
<div id="scrollbarModalPane" style="display: block;">
<div class="scrollbar">
                  <div class="track">
                    <div class="thumb">
                      <div class="end"></div>
                    </div>
                  </div>
                </div>
                <div class="viewport">
                  <div class="overview">
             <div id="playersOutIn">
               <div class="playersOut" style="width:315px;margin-right:7px;">
           
            <div id="pl_out_r"></div>
            <div id="ppl_out_r"></div>

             
           </div>
            <div class="playersIn" style="width:315px;">

          
           <div id="pl_in_r"></div>
           <div id="ppl_in_r"></div>
          </div>
             </div>
            </div>
           

            </div>
          </div>
           </div>
          
      
         
        
<div class="cancel_confirm_outer" style="margin-top:0px;overflow:visible;">

  <p id="subsusedy" style="margin-left:10px;margin-right: 69px;color: #333;margin-top:0px;"></p>
    <div class="stealthCheckBox">
      <div class="stealthCheckBox_dis"></div>
      <input type="checkbox" style="margin-left: 10px;" id="stealthCheckBox_status">
      <p style="margin-top: 1px;margin-left: 0;">USE STEALTH MODE</p>
      <div class="helptext" rtool="pritool" style="margin-top: 3px;margin-left: 2px;">
              <div id="pritool" class="tool" style="z-index: 99999; right: -116px; bottom: 76%; display: none;width:215px;">
                  <div id="pritooltip" class="tip" style="left: 102px; height: 21px; border-bottom-style: none; display: none;"></div>
                 Hides your substitutions from public.<br /> Other people can only see your previously locked squad. New squad is revealed after next lock-in.
                 <br /> You can use this feature for any<br /> 5 matches across the tournament.
              </div>   
            
          </div>
          <p id="stealthRem" style="margin-top: 0px;margin-left: 2px;">(2/3 REMAINING)</p>
    </div>
  <div class="confirmDis" style="right: 2px;"></div>
  <img src="https://s3-ap-southeast-1.amazonaws.com/iplimg/loader.gif" class="confirmDisLoader" style="right: 47px;" />
  <div class="schedule_warning_squad_modal"></div>
  <div class="confrmrightalign" style="position:relative;float:right;margin-right:10px;padding-top: 1px;overflow: hidden;height: 29px;margin-top:-33px;">
          <div class="clearbutton30 simplemodal-close"  style="clear:none;margin-left: 8px;margin-right: 10px;" onclick="">
                      <a class="GlobalRedButton30" href="#" ><span>CANCEL</span></a>
  </div>

  <div class="clearbutton31" style="clear:none;" onclick="sendplayersnames(0,schedule_check)" id="cnfrmbtnmodal">
                      <a class="GlobalRedButton31" href="#"  ><span>CONFIRM</span></a>
  </div>
  
</div>
</div>
<div class="cancel_confirm_outer_late" style="display:none;margin-top:0px;">
<p style="width: 100%;font-size: 13px;text-align: center;" class="toolatecopy"></p>
<div class="clearbutton22" style="clear: none;margin-left: 148px;display: block;margin-top: 6px;margin-right: 46px;padding-top:1px;overflow:hidden;height:29px;" onclick="">
                      <a class="GlobalRedButton22" href="/ifl/homepage/homepage"><span style="color:#4d4d4d;">ABANDON CHANGES</span></a>
  </div>
  
  <img src="https://s3-ap-southeast-1.amazonaws.com/iplimg/loader.gif"  id="toolate_enb_k_ld" style="right: 201px;top: 33px;display:none;" />
  <div class="clearbutton22" style="clear:none;margin-left: 8px;display: block;margin-top: 6px;padding-top:1px;overflow:hidden;height:29px;" id="toolate_enb_k" onclick="">
                      <a class="GlobalRedButton22" href="javascript:void(0)"><span style="color:#4d4d4d;">SAVE CHANGES</span></a>
  </div>
<span style="font-size: 10px;margin-left: 148px;">Will redirect to Championship Home.</span>

</div>
        </div>
      </div>
      
      <div id="second-modal-content" style="display:none;">
        <div class="updating_k_prev" style="display:none;position:absolute;width:305px;height:190px;top:30px;background-color:#fff;z-index:999;">
            <p style="width: 297px;text-align: center;margin-top: 43px;">You have already saved a new squad. <br />
Please refresh this page.</p>
            <div class="clearbutton30 simplemodal-close"  style="clear:none;margin-left: 92px;margin-right: 10px;margin-top:63px;" onclick="location.reload();">
                      <a class="GlobalRedButton30" href="#" ><span>REFRESH</span></a>
  </div>

  <div class="clearbutton30 simplemodal-close"  style="clear:none;margin-left: 10px;margin-right: 10px;margin-top:63px;" onclick="">
                      <a class="GlobalRedButton30" href="#" ><span>GO BACK</span></a>
  </div>
          </div>
           <div class="confirmDis" style="top:150px;right:6px;"></div>
           <img src="https://s3-ap-southeast-1.amazonaws.com/iplimg/loader.gif" class="confirmDisLoader" style="top:158px;right:51px;" />
					<div class="confirmchange" ><p style="width:100%;margin-top: 5px;margin-left: 5px;font-weight: bold;">NO POWER PLAYER SELECTED</p>
          </div>
          			<p style="width: 90%; padding: 5px;font-size: 12px;">You have not selected a Power Player.<br/><br/>The Power Player's points are doubled, and you can change your Power Player as many times as you want. </p>
					<div class="clearbutton30 simplemodal-close"  style="clear:none;margin-left: 85px;margin-right: 10px;margin-top:24px;padding-top:1px;overflow:hidden;height:29px;" onclick="">
                      <a class="GlobalRedButton30" href="#" ><span>GO BACK</span></a>
  </div>

  <div class="clearbutton31" style="clear:none;margin-top:24px;padding-top:1px;overflow:hidden;height:29px;" onclick="sendplayersnames(0,schedule_check)" >
                      <a class="GlobalRedButton31" href="#"  ><span>CONTINUE</span></a>
  </div>
				</div>

           <div id="fourth-modal-content" style="display:none;">
        <div class="updating_k_prev" style="position:absolute;width:305px;height:190px;top:30px;background-color:#fff;z-index:999;">
            <p style="width: 297px;text-align: center;margin-top: 43px;">You have already saved a new squad.<br />
Please refresh this page.</p>
            <div class="clearbutton30 simplemodal-close"  style="clear:none;margin-left: 92px;margin-right: 10px;margin-top:62px;padding-top:1px;overflow:hidden;height:29px;" onclick="location.reload();">
                      <a class="GlobalRedButton30" href="#" ><span>REFRESH</span></a>
  </div>
   <div class="clearbutton30 simplemodal-close"  style="clear:none;margin-left: 10px;margin-right: 10px;margin-top:62px;padding-top:1px;overflow:hidden;height:29px;" onclick="">
                      <a class="GlobalRedButton30" href="#" ><span>GO BACK</span></a>
  </div>
          </div>
           
        </div>

        <div id="fifth-modal-content" style="display:none;">
        <div class="updating_k_prev" style="position:absolute;width:347px;height:190px;top:30px;background-color:#fff;z-index:999;">
            <div class="toolatecopy" style="position: relative;float: left;text-align: center;"></div>
            
            <div class="clearbutton30 simplemodal-close"  style="clear:none;margin-left: 13px;margin-right: 10px;margin-top:42px;padding-top:1px;overflow:hidden;height:29px;" onclick="">
                      <a class="GlobalRedButton30" href="#" ><span>ABANDON CHANGES</span></a>
  </div>
            <div class="clearbutton30 simplemodal-close"  style="clear:none;margin-top:42px;padding-top:1px;overflow:hidden;height:29px;" onclick="sendplayersnames(1,schedule_check)">
                      <a class="GlobalRedButton30" href="#" ><span>SAVE CHANGES</span></a>
  </div>
   <p style="font-size: 10px;margin-left: 16px;margin-top: 1px;text-align: center;">Abandoning changes will redirect <br />you to your Championship home page.</p>
          </div>
           
        </div>

<div class="playerInfo">
 
</div>

    <div class="upcmg_k">
      <div class="cominup_k"></div>

    </div>
   
<div class="lessplayer" style="display: none;">

		  	<div class="headinner" style="margin: 2px;">
					<h1 style="margin-left: 5px;width:556px;">Rules & Scoring</h1>
					
				</div>

				
<p style="padding-left: 5px;font-size: 12px;margin-left: 4px;color: #4D4D4D;margin-top: 4px;border-bottom: 1px solid #676767;width:550px;padding-bottom: 5px;">Great, now it's time to pick your XI.<br /> You will make changes to your squad through the course of the tournament, so this is the initial squad. We recommend you pick players from teams playing the next few matches. </p>
										
				<div class="headinner" style="background-color: #9A1037;width: 545px;margin-left: 9px;margin-top: 10px;">
					<h1 style="width: 518px;cursor: pointer;" onclick="animateHowz(5);">Squad Composition</h1>
					<div class="smallbutton" id="sb5" style="background-position:0 -20px;"  onclick="animateHowz(5);"> </div>
				</div>
				
				<div class="scoring" id="teamcomposition_k1" style="display:block;">
					<p class="points">BALANCE</p>
					<ul class="modaltext">
						<li class="labeltext">
							<label class="lefttext">Batsmen:</label>
							<p style="margin-top: 5px;font-size: 12px;">At least 4</p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext">All-Rounders:</label>
							<p style="margin-top: 5px;font-size: 12px;">At least 1</p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext">Wicket Keeper:</label>
							<p style="margin-top: 5px;font-size: 12px;">Exactly 1 (you can pick variable role wicket keepers as batsmen)</p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext">Bowlers:</label>
							<p style="margin-top: 5px;font-size: 12px;">At least 2</p>
						 </li>
						 <li class="labeltext">
						 	<p style="margin-top: 5px;font-size: 12px; margin-left: 10px;">Your squad must have at least 5 players who can bowl, i.e., bowlers and all rounders.</p>
						 </li>
					</ul>
					<p class="points">OVERSEAS LIMIT</p>
					<ul class="modaltext">
						<li class="labeltext">
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">You can pick a maximum of <b style="font-weight:bold;">4 overseas</b> players in your squad.</p>
						 </li>
					</ul>
					<p class="points">UNCAPPED QUOTA</p>
					<ul class="modaltext">
						<li class="labeltext">
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">Your squad must have at least <b style="font-weight:bold;">1 uncapped</b> player. An uncapped player is an Indian cricketer who has not played in any ODIs, Tests or T20 Internationals.</p>
						 </li>
					</ul>	
					<p class="points">FRANCHISE SPREAD</p>
					<ul class="modaltext">
						<li class="labeltext">
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">You can pick a maximum of <b style="font-weight:bold;">6 players</b> from a single IPL Team.<br /> For the All Stars, you can pick a minimum of 1 and maximum of 2 players from each IPL Team.</p>
						 </li>
				

					<ul class="modaltext">
						<li class="labeltext">
							<p style="margin-top: 5px;font-size: 12px;margin-left: 5px; font-style: italic;">
								<span style="font-weight: bold; font-size:12px;width: 100%;margin-top: 7px;">Variable Roles Explained: </span><br />There are many instances of players whose roles in a team are not fixed.<br />Variable Roles give you the flexibility to pick such players for any of their roles. The following combinations have been introduced - Batsman/All Rounder, Batsman/Wicket Keeper,<br /> Bowler/All Rounder.<br />While selecting your squad, you don’t need to explicitly choose the role of the player. The system will automatically consider the playing role that would satisfy the squad balance criteria.<br />
								<t style="font-style: italic;">To learn more, <a href="/ifl/default/faq#selectxi_vr" style="color:#000;text-decoration: underline;" target="_blank" onclick="$.modal.close();">click here</a>.</t>
						 	</p>							
						 </li>
					</ul>
				</div>
				<div class="headinner" style="background-color: #3B579B;width: 545px;margin-left: 9px;margin-top: 5px;">
					<h1 style="width: 518px;cursor: pointer;" onclick="animateHowz(4);">Scoring</h1>
					<div class="smallbutton" id="sb4" onclick="animateHowz(4);"></div>
				</div>
				<div class="scoring" id="scoring_k1" style="display: none;">
					<p class="points">BATTING POINTS</p>
					<ul class="modaltext">
						
						<li class="labeltext">
							<label class="lefttext">Base Score:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:45px;float: left;font-size: 12px;font-weight: bold;">1 point</span>per run.</p>
						</li>
						<li class="labeltext">
							<label class="lefttext">Impact Score:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:51px;float: left;font-size: 12px;font-weight: bold;">2 points</span>per six,</p>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:14px;float: left;font-size: 12px;font-weight: bold;">-5</span>for a duck.</p>
						</li>
						<li class="labeltext">
							<label class="lefttext">Milestone Bonus:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">10 points</span>for every 25 runs scored.</p>
							
						</li>
						<li class="labeltext">
							<label class="lefttext">Pace Bonus:</label>
							<p style="margin-top: 5px;font-size: 12px;"> Runs Scored – Balls faced.</p>
						</li>
					</ul>
					<p class="points" style="margin-top: 2px;">BOWLING POINTS</p>
						<ul class="modaltext">
						<li class="labeltext">
							<label class="lefttext">Base Score:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">20 points</span>per wicket.</p>
						</li>
						<li class="labeltext">
							<label class="lefttext">Impact Score:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:45px;float: left;font-size: 12px;font-weight: bold;">1 point</span>per dot ball,</p>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">20 points</span>for a maiden over.</p>
						</li>
						<li class="labeltext">
							<label class="lefttext">Milestone Bonus:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">10 points</span>for the 2nd wicket,</p>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">10 points</span>for each subsequent wicket.</p>
						</li>
						<li class="labeltext">
							<label class="lefttext">Pace Bonus:</label>
							<p style="margin-top: 5px;font-size: 12px;"> 1.5 x Balls – Runs conceded. If it is positive, it is doubled.</p>
						</li>
						</ul>
						<p class="points" style="margin-top: 2px;">FIELDING POINTS</p>
						<ul class="modaltext">
						<li class="labeltext">
							<label class="lefttext">Catch:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">10 points.</span></p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext">Stumping:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">15 points.</span></p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext">Direct Hit:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">15 points.</span></p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext">Run Out:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">10 points</span>for each player involved.</p>
						 </li>
						</ul>
						<p class="points" style="margin-top: 2px;">BONUS POINTS</p>
						<ul class="modaltext">
						<li class="labeltext">
							<label class="lefttext">Player of the Match:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">25 points.</span></p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext">Victory bonus:</label>
														<p style="margin-top: -14px;font-size: 12px;margin-left: 149px;"><span style="width:59px;float: none;font-size: 12px;font-weight: bold;"> 5 points </span> for victory in League Stage.
								<span style="width:59px;float: none;font-size: 12px;font-weight: bold;"> 10 points </span> for victory in Playoffs.</p>
						 </li>
						 <p style="font-size: 12px;margin-left: 10px;margin-top: 10px;"><span class="notestyle" style="position: relative;float: left;font-size: 12px;font-style: italic;font-weight: bold;">NOTE: </span><t style="font-size: 12px;font-style:italic;margin-top:0px; "> &nbsp; All players earn batting, bowling and fielding points, regardless of the roles they have been assigned. All the above points get doubled for your Power Player. Scoring rules remain the same across the three game modes. </t></p>
						 
						</ul>
				</div>			
		        <div class="headinner" style="background-color: #F7931E ;width: 545px;margin-left: 9px;margin-top:5px;">
					<h1 style="width: 518px;cursor: pointer;" onclick="animateHowz(6);">CHANGING YOUR SQUAD</h1>
					<div class="smallbutton" id="sb6" onclick="animateHowz(6);"></div>
				</div>
				<div class="scoring" id="changeurteam_k1" style="display:none;">
					<p class="points">SUBSTITUTIONS</p>
					<ul class="modaltext">
						<li class="labeltext">
							<label class="lefttext" style="width: 220px;">Before the tournament:</label>
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;"> Unlimited subs.</p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext" style="width: 220px;">Match 1 to Match 56:</label>
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;"> 75 subs.</p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext" style="width: 220px;">After Match 56 and before Qualifier 1:</label>
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;"> Unlimited subs.</p>
						 </li>
						 <li class="labeltext" >
							<label class="lefttext" style="width: 220px;">Qualifier 1 to Final:</label>
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;"> 10 subs.</p>
						 </li>
						 
					</ul>
					<p class="points">FREE UNCAPPED SUBS</p>
					<ul class="modaltext">
						<li class="labeltext">
							
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">Every match, you can bring in one uncapped player into the squad without it counting as a substitution. So, picking an uncapped player for each match is a great strategy.</p>
						 </li>
						</ul>
					<p class="points">POWER PLAYER</p>
					<ul class="modaltext">
						<li class="labeltext">
							
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">You can change your Power Player as many times as you want. So remember to change it for every match.</p>
						 </li>
						</ul>
					<p class="points">LOCK IN</p>
					<ul class="modaltext">
						<li class="labeltext">
						<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">Teams are locked when the first ball of a match is bowled.<br />Changes made after the first ball of a match is bowled will not affect points earned in that match. So if you drop a player after the first ball of the match is bowled, he’ll still earn points for you in that match.</p>
						 </li>
						 <li class="labeltext">
						<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">For the Daily Challenge, you can make unlimited substitutions till the first ball of the first match of the day is bowled. You cannot make any changes to your squad for that day after the first ball of the day is bowled. </p>
						<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">For the All Stars, you can make unlimited changes to your squad before the first ball of the tournament is bowled.
						</p>
						 </li>
						 
						</ul>
				</div>
			

		
</div>	 
<div class="music" style="position:absolute;display:block;top:0;"></div>
</div>
        <div class="modalbase" style="display: none;">

		  	<div class="confirmchange" style="width:561px;">
					<p style="margin-top: 3px;font-weight: bold;">RULES & SCORING</p>
					
				</div>

				
                
               
										
				<div class="headinner" style="background-color: #9A1037;width: 545px;margin-left: 9px;margin-top: 10px;">
					<h1 style="width: 518px;cursor: pointer;" onclick="animateHow(2);">Squad Composition</h1>
					<div class="smallbutton" id="sb2" style="background-position:0 -20px;margin-right: 5px;" onclick="animateHow(2);"> </div>
				</div>
				
				<div class="scoring" id="teamcomposition_k" style="display:block;">
					<p class="points">BALANCE</p>
					<ul class="modaltext">
						<li class="labeltext">
							<label class="lefttext">Batsmen:</label>
							<p style="margin-top: 5px;font-size: 12px;">At least 4</p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext">All-Rounders:</label>
							<p style="margin-top: 5px;font-size: 12px;">At least 1</p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext">Wicket Keeper:</label>
							<p style="margin-top: 5px;font-size: 12px;float:none;margin-left: 148px;">Exactly 1 (you can pick variable role wicket keepers as batsmen)</p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext">Bowlers:</label>
							<p style="margin-top: 5px;font-size: 12px;">At least 2</p>
						 </li>
						 <li class="labeltext">
						 	<p style="margin-top: 5px;font-size: 12px; margin-left: 10px;">Your squad must have at least 5 players who can bowl, i.e., bowlers and all rounders.</p>
						 </li>
					</ul>
						</ul>
					<p class="points">OVERSEAS LIMIT</p>
					<ul class="modaltext">
						<li class="labeltext">
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">You can pick a maximum of <b style="font-weight:bold;">4 overseas</b> players in your squad.</p>
						 </li>
					</ul>
					<p class="points">UNCAPPED QUOTA</p>
					<ul class="modaltext">
						<li class="labeltext">
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">Your squad must have at least <b style="font-weight:bold;">1 uncapped</b> player. An uncapped player is an Indian cricketer who has not played in any ODIs, Tests or T20 Internationals.</p>
						 </li>
					</ul>	
					<p class="points">FRANCHISE SPREAD</p>
					<ul class="modaltext">
						<li class="labeltext">
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">You can pick a maximum of <b style="font-weight:bold;">6 players</b> from a single IPL Team.<br /> For the All Stars, you can pick a minimum of 1 and maximum of 2 players from each IPL Team.</p>
						 </li>
				

					<ul class="modaltext">
						<li class="labeltext">
							<p style="margin-top: 5px;font-size: 12px;margin-left: 5px; font-style: italic;">
								<span style="font-weight: bold; font-size:12px;width: 100%;margin-top: 7px;">Variable Roles Explained: </span><br />There are many instances of players whose roles in a team are not fixed.<br />Variable Roles give you the flexibility to pick such players for any of their roles. The following combinations have been introduced - Batsman/All Rounder, Batsman/Wicket Keeper,<br /> Bowler/All Rounder.<br />While selecting your squad, you don’t need to explicitly choose the role of the player. The system will automatically consider the playing role that would satisfy the squad balance criteria.<br />
								<t style="font-style: italic;">To learn more, <a href="/ifl/default/faq#selectxi_vr" style="color:#000;text-decoration: underline;" target="_blank" onclick="$.modal.close();">click here</a>.</t>
						 	</p>							
						 </li>
					</ul>
				</div>
				<div class="headinner" style="background-color: #3B579B;width: 545px;margin-left: 9px;margin-top: 5px;">
					<h1 style="width: 518px;cursor: pointer;" onclick="animateHow(1);">Scoring</h1>
					<div class="smallbutton" id="sb1" onclick="animateHow(1);" style="margin-right: 5px;"></div>
				</div>
				<div class="scoring" id="scoring_k" style="display: none;">
					<p class="points">BATTING POINTS</p>
					<ul class="modaltext">
						
						<li class="labeltext">
							<label class="lefttext">Base Score:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:45px;float: left;font-size: 12px;font-weight: bold;">1 point</span>per run.</p>
						</li>
						<li class="labeltext">
							<label class="lefttext">Impact Score:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:51px;float: left;font-size: 12px;font-weight: bold;">2 points</span>per six,</p>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:14px;float: left;font-size: 12px;font-weight: bold;">-5</span>for a duck.</p>
						</li>
						<li class="labeltext">
							<label class="lefttext">Milestone Bonus:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">10 points</span>for every 25 runs scored.</p>
							
						</li>
						<li class="labeltext">
							<label class="lefttext">Pace Bonus:</label>
							<p style="margin-top: 5px;font-size: 12px;"> Runs Scored – Balls faced.</p>
						</li>
					</ul>
					<p class="points" style="margin-top: 2px;">BOWLING POINTS</p>
						<ul class="modaltext">
						<li class="labeltext">
							<label class="lefttext">Base Score:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">20 points</span>per wicket.</p>
						</li>
						<li class="labeltext">
							<label class="lefttext">Impact Score:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:45px;float: left;font-size: 12px;font-weight: bold;">1 point</span>per dot ball,</p>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">20 points</span>for a maiden over.</p>
						</li>
						<li class="labeltext">
							<label class="lefttext">Milestone Bonus:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">10 points</span>for the 2nd wicket,</p>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">10 points</span>for each subsequent wicket.</p>
						</li>
						<li class="labeltext">
							<label class="lefttext">Pace Bonus:</label>
							<p style="margin-top: 5px;font-size: 12px;"> 1.5 x Balls – Runs conceded. If it is positive, it is doubled.</p>
						</li>
						</ul>
						<p class="points" style="margin-top: 2px;">FIELDING POINTS</p>
						<ul class="modaltext">
						<li class="labeltext">
							<label class="lefttext">Catch:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">10 points.</span></p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext">Stumping:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">15 points.</span></p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext">Direct Hit:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">15 points.</span></p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext">Run Out:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">10 points</span>for each player involved.</p>
						 </li>
						</ul>
						<p class="points" style="margin-top: 2px;">BONUS POINTS</p>
						<ul class="modaltext">
						<li class="labeltext">
							<label class="lefttext">Player of the Match:</label>
							<p style="margin-top: 5px;font-size: 12px;"><span style="width:59px;float: left;font-size: 12px;font-weight: bold;">25 points.</span></p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext">Victory bonus:</label>
							<p style="margin-top: -14px;font-size: 12px;margin-left: 149px;"><span style="width:59px;float: none;font-size: 12px;font-weight: bold;"> 5 points </span> for victory in League Stage.
								<span style="width:59px;float: none;font-size: 12px;font-weight: bold;"> 10 points </span> for victory in Playoffs.</p>
						 </li>
						 <p style="font-size: 12px;margin-left: 10px;margin-top: 10px;"><span class="notestyle" style="position: relative;float: left;font-size: 12px;font-style: italic;font-weight: bold;">NOTE: </span><t style="font-size: 12px;font-style:italic;margin-top:0px; "> &nbsp; All players earn batting, bowling and fielding points, regardless of the roles they have been assigned. All the above points get doubled for your Power Player. Scoring rules remain the same across the three game modes.</t></p>
						 
						</ul>
				</div>			
		        <div class="headinner" style="background-color: #F7931E ;width: 545px;margin-left: 9px;margin-top:5px;">
					<h1 style="width: 518px;cursor: pointer;" onclick="animateHow(3);">CHANGING YOUR SQUAD</h1>
					<div class="smallbutton" id="sb3" onclick="animateHow(3);" style="margin-right: 5px;"></div>
				</div>
				<div class="scoring" id="changeurteam_k" style="display:none;">
					<p class="points">SUBSTITUTIONS</p>
					<ul class="modaltext">
						<li class="labeltext">
							<label class="lefttext" style="width: 220px;">Before the tournament:</label>
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;"> Unlimited subs.</p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext" style="width: 220px;">Match 1 to Match 56:</label>
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;"> 75 subs.</p>
						 </li>
						 <li class="labeltext">
							<label class="lefttext" style="width: 220px;">After Match 56 and before Qualifier 1:</label>
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;"> Unlimited subs.</p>
						 </li>
						 <li class="labeltext" >
							<label class="lefttext" style="width: 220px;">Qualifier 1 to Final:</label>
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;"> 10 subs.</p>
						 </li>
						 
					</ul>
					<p class="points">FREE UNCAPPED SUBS</p>
					<ul class="modaltext">
						<li class="labeltext">
							
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">Every match, you can bring in one uncapped player into the squad without it counting as a substitution. So, picking an uncapped player for each match is a great strategy.</p>
						 </li>
						</ul>
					<p class="points">POWER PLAYER</p>
					<ul class="modaltext">
						<li class="labeltext">
							
							<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">You can change your Power Player as many times as you want. So remember to change it for every match.</p>
						 </li>
						</ul>
					<p class="points">LOCK IN</p>
					<ul class="modaltext">
						<li class="labeltext">
						<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">Teams are locked when the first ball of a match is bowled.<br />Changes made after the first ball of a match is bowled will not affect points earned in that match. So if you drop a player after the first ball of the match is bowled, he’ll still earn points for you in that match.</p>
						 </li>
						 <li class="labeltext">
						<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">For the Daily Challenge, you can make unlimited substitutions till the first ball of the first match of the day is bowled. You cannot make any changes to your squad for that day after the first ball of the day is bowled. </p>
						<p style="margin-top: 5px;font-size: 12px;margin-left: 10px;">For the All Stars, you can make unlimited changes to your squad before the first ball of the tournament is bowled.
						</p>
						 </li>
						</ul>
				</div>
			

		
</div>	
		<div class="unitCntr" style="width:976px;margin-bottom:15px;margin-top:0px;">
<div class="partners">   
        <h1>
            <span class="titleSponsor">Title Sponsor</span>
            <span class="officialPartners">Official Partners</span>
            <span class="umpireSponsors">Umpires Sponsor</span>
            <span class="tvPartner">Official Broadcasters</span>
        </h1>
        <ul>
            <li><a href="javascript:void(0);"><span class="dlf">DLF</span></a></li>
            <li><a href="javascript:void(0);"><span class="vodafone">Vodafone</span></a></li>
            <li><a href="javascript:void(0);"><span class="starPlus">Star Plus</span></a></li>            
            <li><a href="javascript:void(0);"><span class="yesBank">yesBank</span></a></li>
            <li><a href="javascript:void(0);"><span class="mcDowell">McDowell's</span></a></li>
            <li><a href="javascript:void(0);"><span class="sony">Sony</span></a></li>
            <li><a href="javascript:void(0);"><span class="sonySix">Sony SIX</span></a></li>
            <li class="last"><a href="javascript:void(0);"><span class="toi">TOI</span></a></li>
        </ul>
        <div class="cl"></div>
    </div>
</div>
		<!--just to check-->
	</div>
</div>
    
<div class="footer">
    <div class="footerContent">
        <div class="footerLogo"></div>
        <div class="footerNav">
            <div class="footerNavSection footer-nav-quick-links">
                <p class="">Quick Links</p>
                <ul class="mainNav">
                    <li class="footer-nav-home"><a href="http://www.iplt20.com">Home</a></li>
                    <li class="footer-nav-news"><a href="http://www.iplt20.com/news">News</a></li>
                    <!--<li class="footer-nav-schedule"><a href="">Schedule</a></li>-->
                    <li class="footer-nav-results"><a href="http://www.iplt20.com/results">Results</a></li>
                                                            <li class="footer-nav-videos"><a href="http://www.iplt20.com/videos">Videos</a></li> 
                    <li class="footer-nav-photos"><a href="http://www.iplt20.com/photos">Photos</a></li>
                    <li class="footer-nav-fantasy-league"><a href="http://www.iplt20.com/fantasy">Fantasy League</a></li>
                    <!-- <li class="footer-nav-mobile-site"><a class="switchWebsiteViewType" data-to="smart_phone" href="JavaScript:void(0);">Mobile Site</a></li> -->                    
                                    </ul>
                <div class="cl"></div>
            </div><!-- END footerNavSection -->

            <div class="footerNavSection footer-nav-teams">
                <p class="">Teams</p>
                <ul class="mainNav">
                    <li><a href="http://www.iplt20.com/teams/chennai-super-kings">Chennai Super Kings</a></li>
                    <li><a href="http://www.iplt20.com/teams/delhi-daredevils">Delhi Daredevils</a></li>
                    <li><a href="http://www.iplt20.com/teams/kings-xi-punjab">Kings XI Punjab</a></li>
                    <li><a href="http://www.iplt20.com/teams/kolkata-knight-riders">Kolkata Knight Riders</a></li>
                    <li><a href="http://www.iplt20.com/teams/mumbai-indians">Mumbai Indians</a></li>
                                        <li><a href="http://www.iplt20.com/teams/rajasthan-royals">Rajasthan Royals</a></li>
                    <li><a href="http://www.iplt20.com/teams/royal-challengers-bangalore">Royal Challengers Bangalore</a></li>
                    <li><a href="http://www.iplt20.com/teams/sunrisers-hyderabad">Sunrisers Hyderabad</a></li>
                </ul>
                <div class="cl"></div>
            </div> 
            
                        <div class="footerNavSection">
                <p class="">About</p>
                <ul class="mainNav">    
                                <li>
                                    <a href="http://www.iplt20.com/about/2013/about-us">
                                        About Us                                    </a>
                                </li>   
                                 
                                <li>
                                    <a href="http://www.iplt20.com/about/2013/anti-corruption-policy">
                                        Anti Corruption Policy                                    </a>
                                </li>   
                                 
                                <li>
                                    <a href="http://www.iplt20.com/about/2013/anti-doping-policy">
                                        Anti Doping Policy                                    </a>
                                </li>   
                                 
                                <li>
                                    <a href="http://www.iplt20.com/about/2013/anti-racism-policy">
                                        Anti Racism Policy                                    </a>
                                </li>   
                                 
                                <li>
                                    <a href="http://www.iplt20.com/about/2013/clothing-regulations">
                                        Clothing Regulations                                    </a>
                                </li>   
                                 
                                <li>
                                    <a href="http://www.iplt20.com/about/2013/code-of-conduct-for-players-and-team-officials">
                                        Code of Conduct for Players and Team Officials                                    </a>
                                </li>   
                                 
                                <li>
                                    <a href="http://www.iplt20.com/about/2013/code-of-conduct-for-umpires">
                                        Code of Conduct for Umpires                                    </a>
                                </li>   
                                 
                                <li>
                                    <a href="http://www.iplt20.com/about/2013/governing-council">
                                        Governing Council                                    </a>
                                </li>   
                                 
                                <li>
                                    <a href="http://www.iplt20.com/about/2013/ipl-committees">
                                        IPL Committees                                    </a>
                                </li>   
                                 
                                <li>
                                    <a href="http://www.iplt20.com/about/2013/match-playing-conditions">
                                        Match Playing Conditions                                    </a>
                                </li>   
                                 
                                <li>
                                    <a href="http://www.iplt20.com/about/2013/pmoa-minimum-standard">
                                        PMOA Minimum Standard                                    </a>
                                </li>   
                                 
                                <li>
                                    <a href="http://www.iplt20.com/about/2013/suspect-action-policy">
                                        Suspect Action Policy                                    </a>
                                </li>   
                             </ul>  
            </div><!-- END footerNavSection -->
                        
            <div class="footerNavSection">
                <p class="">Contact</p>
                <ul class="mainNav">
                    <!--<li><a href="#">Accreditation</a></li>-->
                    <li><a href="http://www.iplt20.com/about/contact/0">Feedback</a></li>
                    <!--<li><a href="#">Information</a></li>-->
                    <li><a href="http://www.iplt20.com/about/contact/1">Marketing</a></li>
                    <li><a href="http://media.iplt20.com">Media Accreditation</a></li>
                    <li><a href="http://www.iplt20.com/about/contact/2">Operations</a></li>
                    <li><a href="http://www.iplt20.com/about/contact/3">Press / Media</a></li>
                    <li><a href="http://www.iplt20.com/mediahandbook">Media Handbook</a></li>
                </ul>
                <div class="cl"></div>
            </div><!-- END footerNavSection -->
        </div><!-- END footerNav -->
        <div class="cl"></div>
        <div class="footerInfo">
            <p class="first">© Copyright IPL, BCCI 2014. All Rights reserved.</p>
            <p><span class="globalNavSeparator">|</span><a href="http://www.iplt20.com/about/2013/terms-and-conditions">Terms and Conditions</a><span class="globalNavSeparator">|</span></p>
            <p><a href="http://www.iplt20.com/about/2013/privacy-policy">Privacy Policy</a><span class="globalNavSeparator">|</span></p>
            <!--            <p><a href="#">Site Map</a><span class="globalNavSeparator">|</span></p>-->
            <p><a href="#">Back to top</a></p>
            <p style="float:right;" onclick="setfullsite();"><a href="javascript:void(0);">Mobile Site</a></p>
            <div class="cl"></div>          
        </div><!-- END footerInfo -->
    </div><!-- END footerContent -->
</div>
</body>
</html>

