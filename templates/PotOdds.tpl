{extends file="Standard.tpl"}

{block name="body"}
<h1>Pot Odds</h1>

<p>
	This is a simple pot odds calculator.
</p>

{if $value}
<p>
	<strong>The call is {$value}%, do you have this chance of winning?</strong>
</p>
{/if}

<form action="" method="post">
	Pot size:
	<input type="text" name="pot" value="{$potSize}" />
	
	Price to call:
	<input type="text" name="call" value="{$priceToCall}" />
	
	<input type="hidden" name="act" value="calculate" />
	<input type="submit" value="Caculate" />
</form>
{/block}