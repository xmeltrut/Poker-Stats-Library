{extends file="Standard.tpl"}

{block name="body"}
<h1>Starting Hands</h1>

<p>
	This is a training exercise to teach you whether you should play a hand or not. You will been shown a hand below, and you have to select the worst position it would still be advisable to play it from.
</p>

<p>
	This is your hand:
</p>

<p>
	<img src="{$card1Path}" alt="" />
	<img src="{$card2Path}" alt="" />
</p>

<p>
	Where should you play this:
</p>

<form action="" method="post" id="choices">
	<input type="hidden" name="card1" value="" />
	<input type="hidden" name="card2" value="" />
	<input type="button" class="choice" name="position" value="Early" />
	<input type="button" class="choice" name="position" value="Mid" />
	<input type="button" class="choice" name="position" value="Late" />
	<input type="button" class="choice" name="position" value="Never" />
</form>

<script type="text/javascript">
var positionToPlay = {$positionToPlay};

$(document).ready(function() {
	$("input.choices").attr("disabled", "");
});

$("input.choice").click(function() {

	// initialise variables
	var choice = $(this).val();
	var choiceVal;
	
	// disable button
	$(this).attr("disabled", "disabled");
	
	// convert choice into position
	if (choice == "Early") {
		choiceVal = 3;
	} else if (choice == "Mid") {
		choiceVal = 2;
	} else if (choice == "Late") {
		choiceVal = 1;
	} else {
		choiceVal = 0;
	}
	
	if (choiceVal == positionToPlay) {
		alert("Correct");
		$("#choices").submit();
	} else {
		alert("Incorrect, try again...");
	}

});
</script>
{/block}