function balanceSquad() {
	var skill;
	var all, bats, keeper, bowl;
	all = bats = keeper = bowl = 0;
	$('#selectmyplayers  .skilllogos:visible').each(function(){
		skill = $(this).attr('skill');
		if(skill == "allrounder")all++;
		if(skill == "batsmen")bats++;
		if(skill == "wicketkeeper")keeper++;
		if(skill == "bowler")bowl++;
	});

	if(all == 2 && bats == 3 && keeper == 1 && bowl == 2) return true;

	if(all == 1 && bats == 3 && keeper == 1 && bowl == 3) return true;

	if(all == 1 && bats == 4 && keeper == 1 && bowl == 2) return true;

	return false;
}

function budget() {
	var budget=0;
	var totalbudget= 640000;
	$('#selectmyplayers .playerlist:visible .pricevalues').each(function(){
		budget = budget + parseInt($(this).children('span').text());
	});
	$('.budgetAfter').remove();
	var output = totalbudget-budget;
	$(".budgetLeftdiv").after("<span class='budgetAfter' style='font-size: 16px; color: red;'> "+output+"</span>");

	if(output >= 0) {
		return true;
	}
	return false;
	//return totalbudget-budget;
}

function saveSquad() {

	var playerid =[];
	$("#selectmyplayers .playerlist:visible .playerid").each(function(){
		playerid.push($(this).attr('value'));
	});

	$.ajax({url:'index.php?action=savesquad',data:{playerid: playerid},
			success:function(result){
				if(result)
					alert("Team Saved SuccessFully");
				}
			});

}

function animateprofile(){
  $('.userProfileDrop').data('clicked', true);
  $('.userProfileDrop').slideToggle('fast');
  $('.profilearrow').toggleClass('upprofilearrow');
  
}

function initialize() {
	if($('#selectmyplayers .playerlist:visible').length == 8){
		$('.elevplayers .onoffglow').attr('id','on');
	} else {
		$('.elevplayers .onoffglow').attr('id','off');
	}
	if(balanceSquad()) {
		$('.teamblnce .onoffglow').attr('id','on');
		$('.savedisable').hide();
	} else {
		$('.teamblnce .onoffglow').attr('id','off');
		$('.savedisable').show();
	}
	budget();
}

jQuery(document).ready(function() {

	initialize();

	$(".teamblnce").mouseover(function(){
		if(balanceSquad()){
			$('.budgetleft').append('<p style="font-size:12px">Perfect</p>');
		} else{
			$('.budgetleft').append('<p style="font-size:12px">3/4 batsmen, 1 wicketkeeper, 1/2 all rounders, 2/3 bowlers </p>');
		}
	});
	$(".teamblnce").mouseout(function(){
		$('.budgetleft').empty();
	});
	$(".elevplayers").mouseover(function(){
		if(balanceSquad()){
			$('.budgetleft').append('<p style="font-size:12px">Perfect</p>');
		} else {
			$('.budgetleft').append('<p style="font-size:12px">There should be 8 players  in the squad</p>');
		}
	});

	$(".elevplayers").mouseout(function(){
		$('.budgetleft').empty();
	});

	$(".GlobalRedButton31").click(function(){
		saveSquad();
	});

	$(".addarrow").live('click',function(e){
		 e.preventDefault();
		 $("#remove_abc").remove();
		 $(this).parent().hide('slide', {direction: 'left'}, 1000);
		 $(this).parent().clone().appendTo( "#selectmyplayers" ).show('slide', {direction: 'left'}, 1000);
		 if($('#selectmyplayers .playerlist:visible').length == 8){
			$('.elevplayers .onoffglow').attr('id','on');
		 } else {
			$('.elevplayers .onoffglow').attr('id','off');
		 }
		 if(balanceSquad()) {
			$('.teamblnce .onoffglow').attr('id','on');
			if(budget())
			$('.savedisable').hide();
		 } else {
			$('.teamblnce .onoffglow').attr('id','off');
			$('.savedisable').show();
		 }
		 budget();
	});

	$(".delarrow").live('click',function(e){
		e.preventDefault();
		 $(this).parent().hide('slide', {direction: 'right'},function(){ $(this).parents(".playerlist").remove(); }, 1000);
		 $(this).parent().clone().appendTo( "#selectplayers" ).show('slide', {direction: 'right'}, 1000);
		 if($('#selectmyplayers .playerlist:visible').length == 9){
			$('.elevplayers .onoffglow').attr('id','on');
		 } else {
			$('.elevplayers .onoffglow').attr('id','off');
		 }
		setTimeout(function() {
				 if(balanceSquad()) {
					$('.teamblnce .onoffglow').attr('id','on');
					if(budget())
						$('.savedisable').hide();
				 } else {
					$('.teamblnce .onoffglow').attr('id','off');
					$('.savedisable').show();
				 }
				 budget();
		},1000);
	});



});