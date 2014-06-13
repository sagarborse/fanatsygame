<?php 
	include_once("head.php");  
	$countryClass = array('CSK'=>'t1', 'MI' => 't6', 'KXIP' => 't4', 'RCB' => 't9');
	$typeClass = array('batsmen'=>'s4', 'bowler' => 's3', 'wicketkeeper' => 's1', 'allrounder' => 's2');
?>


<div class="main-content">
	<div class="profileheader">
	<div class="profileheaderinner">
		<p style="font-size: 12px;margin-right:3px;font-weight:bold" >WELCOME</p>
		<p style="font-size: 12px;margin-right:3px;"><?php echo $_SESSION['username']?></p>
	<div class="profilearrow" id="" onclick="animateprofile()"></div>
	</div>
	</div><!--profileheader End-->

	<div class="userProfileDrop">
		<ul>
			<a><li style="border-bottom:0px;"><form action="" method="post"><input type="hidden" name="action" value="logout"><input type="submit" value="SIGN OUT"></form></li></a>

		</ul>
  </div><!-- userProfileDrop End-->
    
   <div class="teamnameouter">
        <div class="teamnameimage">
		  <img src="assets/images/0.png" /> 
		</div>
        <div class="teamnametext" >
            <div id="teamname" style="height: 54px;width:627px;">
              <p style="font-size: 16px;width: 100%;color:#444;"><?php echo $_SESSION['username']; ?></p></br>
              <p style="margin-top: -7px;"><?php echo $_SESSION['teamname']; ?></p>  
            </div>
        </div>
		<div style="float:left"><a href="">Home</a></div>
   </div> <!-- teamnameouter End -->

<div class="column one">
	<div class="colOneSplitOne">
		<div class="unitCntr" style="width:485px;"> 
			<div class="unitHeader"><h1>Current Squad</h1><h1 class="budgetLeftdiv" style="font-size: 16px; color: red; margin-left: 128px"> Budget Left =   </h1></div>
				<div class="teamcreationselectouter">
					<div class="budgetleft" style="width: 485px;"></div>
					<div class="teamblnce">
						<div class="onoff" id="on_glow" ></div>
						<div class="onoffglow" id="off"  ></div>
						<p class="statstextp" style="line-height: 13px;margin-top: 2px;">Squad</p>
						<p class="statstextp" style="margin-top: 0px;">Balance</p>
					</div>
					<div class="elevplayers">
						<div class="onoff" id="on_glow" ></div>
						<div class="onoffglow" id="off"  ></div>
						<p class="statstextp" style="line-height: 13px;margin-top: 3px;">Eight<br /> Players</p>
					</div>
				</div> <!-- teamcreationselectouter End -->

				<div class="PlayerSorter"  id="currentteam" >
					<div class="PlayerSorterHead">
						<div class="playerName" style="width:237px;" ><p style="margin-left: 6px;">PLAYER</p></div>
						<div class="teamName" style="width:126px;" ><p style="margin-left: 0px;">TEAM</p></div>
						<div class="priceName"  ><p style="margin-left: -22px;">PRICE</p></div>
					</div> <!-- PlayerSorterHead End -->
					<div id="selectmyplayers">
					<?php 
							$i=0;

							if (!empty($currentSquad)) {
								foreach($currentSquad as $list => $value) 
								{
									echo '<div id='.++$i.' class="playerlist" d="42" s="4" t="1" a="Francois du Plessis" p="950000" f="385"><div align="center" class="addarrow"></div><div class="namesorting" style="width: 166px;" uncapped="1"><input class="playerid" type="hidden" value="'.$value["playerid"].'"><span class="align" style="">'.$value["name"].'</span></div><div class="skilllogos" id="'.$typeClass[$value["type"]].'" skill="'.$value["type"].'"></div><div class="teamsorting"><div class="teamlogos" id="'.$countryClass[$value["teamname"]].'" src="" country="2"></div><span class="align" style="">'.$value["name"].'</span></div><div class="pricevalues" style="text-align: center;"><span class="align" style="float:right;margin-right: 17px;">'.$value["price"].'</span></div>
										<div align="center" class="delarrow"></div></div>';
								}
							} else {
								echo "<h1 id='remove_abc' style='color: red; font-size: 20px; text-align: center;'> Please click on the arrows to select players from right</h1>";
							}
					?>
					</div><!-- selectmyplayers End -->
            </div> <!-- PlayerSorter End -->
			<div class="teamcreationselectouter">
				<div class="clearbutton31" style="position:absolute;left:416px;top:24px;">
                      <a class="GlobalRedButton31"  ><span>SAVE</span></a>
				</div>
				<div class="savedisable"></div>
			</div><!-- teamcreationselectouter End -->
		</div><!-- unitCntr End -->
	</div>
</div><!-- column one End -->


<div class="column two">
	<div class="colTwoSplitOne">
		<div class="unitCntr" style="width:480px;"> 
			<div class="unitHeader"><h1>Other Players</h1></div>
            <div class="teamcreationselectouter" style="width:480px;">
				<div style="font-size: 10px;">
					Rule : 
					1. There Should be 8 players in the Current Squad<br>
					2. The 8 player combination should be as follows:<br>
					i) 3 batsmen, 1 wicketkeeper, 2 all rounders, 2 bowlers<br>
					ii) 3 ba tsmen, 1 wicketkeeper, 1 all rounders, 3 bowlers<br>
					iii) 4 batsmen, 1 wicketkeeper, 1 all rounders, 2 bowlers<br>
				</div>
			</div>  <!-- teamcreationselectouter End -->
            <div class="PlayerSorter"  id="myTable" >
				<div class="PlayerSorterHead" style="width:477px;">
					<div class="playerName" style="width:205px;"><p style="margin-left: 6px;cursor: pointer;">PLAYER</p></div>
					<div class="teamName" style="width:86px;"><p style="margin-left: 0px;cursor: pointer;">TEAM</p></div>
					<div class="teamName" style="width:86px;"><p style="margin-left: 46px;cursor: pointer;">PRICE</p></div>
				</div><!-- PlayerSorterHead End -->
				<div id="scrollbarAllPlayers" style="display: block;">
					<div class="viewport">
						<div class="overview">
							<div id="selectplayers">
								<?php
									 $i=0;
									 foreach($arrPlayersList as $list=> $value) 
									 {
										echo '<div id='.++$i.' class="playerlist" d="42" s="4" t="1" a="Francois du Plessis" p="950000" f="385"><div align="center" class="addarrow"></div><div class="namesorting" style="width: 166px;" uncapped="1"><input class="playerid" type="hidden" value="'.$value["playerid"].'"><span class="align" style="">'.$value["name"].'</span></div><div class="skilllogos" id="'.$typeClass[$value["type"]].'" skill="'.$value["type"].'"></div><div class="teamsorting"><div class="teamlogos" id="'.$countryClass[$value["teamname"]].'" src="" country="2"></div><span class="align" style="">'.$value["name"].'</span></div>
										<div class="pricevalues" style="text-align: center;"><span class="align" style="float:right;margin-right: 17px;">'.$value["price"].'</span></div>
										<div align="center" class="delarrow"></div></div>';	
									 }
								?>
							</div> <!-- selectplayers End -->
						</div>
					</div>
				</div> <!-- scrollbarAllPlayers  End-->
			</div><!-- PlayerSorter End -->
		</div><!-- unitCntr End -->
	</div>
</div><!-- column two End -->
  
  

  