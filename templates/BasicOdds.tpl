{extends file="Standard.tpl"}

{block name="body"}
<h1>Basic Odds</h1>

<p>
	This table shows you the basic probabilities of hitting a hand at each stage.
</p>

<table cellpadding="5" cellspacing="1" border="1">
	<tr>
		<th>Hand</th>
		<th>Deal</th>
		<th>Flop</th>
		<th>Turn</th>
		<th>River</th>
	</tr>
	{foreach $probabilities as $probability}
	<tr>
		<td>{$probability[0]}</td>
		<td>{$probability[1]}</td>
		<td>{$probability[2]}</td>
		<td>{$probability[3]}</td>
		<td>{$probability[4]}</td>
	</tr>
	{/foreach}
</table>
{/block}