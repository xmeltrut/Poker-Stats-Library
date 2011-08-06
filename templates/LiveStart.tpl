{extends file="Standard.tpl"}

{block name="body"}

<table cellpadding="3" cellspacing="1" border="1" class="cardTable">
	<tr>
		<td id="playFrom" colspan="8">
			Select your hand...
		</td>
	</tr>
	<tr>
		<th>First card</th>
		<th colspan="2">Second card</th>
	</tr>
	<tr>
		<th>Any</th>
		<th>Suited</th>
		<th>Unsuited</th>
	</tr>
	{foreach $rows as $row}
	<tr>
		<td class="card card1" id="1C{$row["value"]}">{$row["name"]}</td>
		<td class="card card2" id="2C{$row["value"]}">{$row["name"]}</td>
		<td class="card card2" id="2S{$row["value"]}">{$row["name"]}</td>
	</tr>
	{/foreach}
</table>

<script type="text/javascript">
var card1 = "";
var card2 = "";

$("td.card").click(function() {

	// get the card selected
	cardVal = $(this).attr("id");
	
	// which card was it?
	if (cardVal.substring(0, 1) == "1") {
		card1 = cardVal.substring(1);
		$("td.card1").removeClass("highlightCell");
	} else {
		card2 = cardVal.substring(1);
		$("td.card2").removeClass("highlightCell");
	}
	
	// highlight this cell
	$(this).addClass("highlightCell");
	
	// do we have both?
	if (card1 != "" && card2 != "") {
		$.get("index.php?page=LiveStart&card1=" + card1 + "&card2=" + card2, function (data) {
			$("#playFrom").html(data);
		});
		//alert(card1 + ", " + card2);
	}

});
</script>

{/block}