<?php include_once("head.php");
$typeClass = array('batsmen'=>'s4', 'bowler' => 's3', 'wicketkeeper' => 's1', 'allrounder' => 's2');
?>
<div class="main-content">
	<div class="profileheader">
		<div class="profileheaderinner">
			<p style="font-size: 12px;margin-right:3px;font-weight:bold" >WELCOME</p>
			<p style="font-size: 12px;margin-right:3px;"><?php echo $_SESSION['username']; ?></p>
		<div class="profilearrow" id="" onclick="animateprofile()"></div>
    </div>
</div>


<div class="userProfileDrop">
	<ul>
		<a><li style="border-bottom:0px;"><form action="" method="post"><input type="hidden" name="action" value="logout"><input type="submit" value="SIGN OUT"></form></li></a>
	</ul>
</div>
    
<div class="teamnameouter">
	<div class="teamnameimage">
	  <img src="assets/images/0.png" /> 
	</div>
	<div class="teamnametext" >
		<div id="teamname" style="height: 54px;width:627px;">
		  <p style="font-size: 16px;width: 100%;color:#444;"><?php echo $_SESSION['username']; ?></p></br><?php echo $_SESSION['teamname']; ?></p>  
		</div>
	</div>
</div> <!-- teamnameouter End -->
<div class="PlayerSorter" id="currentteam" style="height:100%; width:100%; overflow:hidden; background:url('assets/images/fc-bg.jpg'); background-size: 979px 420px;">
	<div class="allplayers_dc" style="width:100%;margin-top:40px;height:316px;">
		<div class="teamplayerlist" style="width:100%;margin-left:0;">
			<ul class="teamlist_dc" style="width:100%;">
				<div id="selectmyplayers" style="width:100%;height:100%;">
				<?php 
					if (!empty($currentSquad)) {
						foreach($currentSquad as $key => $value) 
						 {
							echo '<li class="playercard_dc" style="left: 58px; display: block; width: 140px;" uncapped="1" overseas="2" value="210" ss="K Pollard" st="MI" pulse_id="210" s="2" t="6" d="20" a="%playername1%" p="1,100,000"><div class="playerimgback_dc" style="background-image: url(assets/images/6.jpg); background-position: initial initial; background-repeat: no-repeat no-repeat;"><img class="playerimg_dc" src="assets/images/players/'.$value['playerid'].'.png" style="height: 80px;margin-top: 4px;margin-left: 4px;"></div><div class="skill_outer_hm"><div class="skilllogos s20" style="margin:0 auto;float:none;margin-top:2px;margin-left: 2px;" id="'.$typeClass[$value['type']].'"></div></div><p id="teamnamek_dc" style="margin-top: 11px;">'.$value['teamname'].'</p><div align="center" style="width:94%;padding-left:2px;position:relative;float:left;"><p id="player_namek_dc">'.$value['name'].'</p></div><p id="price_dc">$'.$value['price'].'</p></li>';
						 }	
					}	else{echo "<h1 style='color: white; font-size: 20px; text-align: center;'> Team not created. Click on Manage Team tab to create a team</h1>";}
				?>
				</div>
	        </ul>
		</div> <!-- teamplayerlist End -->
	</div> 
	<div class="teamcreationselectouter" style="margin-top: 0px;height:50px;width:100%;padding-top: 18px;background-color:#15223E;">
	<div class="clearbutton30" id="changeSquad_btn" style="clear:none;margin-left: 10px;display:block" >
		<form action="" method="post"><input type="hidden" name="action" value="manageteam"><input class="GlobalRedButton30" type="submit" value="Manage Team"></form>
	</div> 
</div> <!-- PlayerSorter End -->
</div>