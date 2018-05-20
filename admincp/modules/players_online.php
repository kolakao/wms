<?php
/**
* @+===========================================================================+
* @¦ 						POZDRO_GM KURŁA  				                   ¦
* @+===========================================================================+
*/

echo "
\n\t<table width=\"90%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"table_panel\" style=\"margin-top: 20px\">
\n<tr>
\n<td align=\"center\" class=\"panel_title\" colspan=\"5\">Accounts Online</td>
\n</tr>
\n<tr>
\n<td align=\"left\" class=\"panel_title_sub2\">Account</td>
\n<td align=\"left\" class=\"panel_title_sub2\">Characters</td>
\n</tr>
\n\t\n\t";

$accounts_online = $core_db2-> Execute("Select * from MEMB_STAT where ConnectStat='1'");
$count = 0;

while ( !$accounts_online->EOF )
{
	$account_online = $core_db2-> Execute("Select * from AccountCharacter where id=?", array($accounts_online->fields[0]));
	++$count;
	$tr_color = $count % 2 ? "" : "even";
	echo "
	<tr class=\"".$tr_color."\">
	\n\t\t\t<td align=\"left\" ><strong>".$account_online->fields[1]."</strong></td>
	\n\t\t\t<td align=\"left\" >
		<table width=\"90%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"table_panel\" style=\"margin-top: 20px\">
		\n<tr>
		\n</tr>
		\n<tr>
		\n<td align=\"left\" class=\"panel_title_sub2\">Character</td>
		\n<td align=\"left\" class=\"panel_title_sub2\">Level</td>
		\n<td align=\"left\" class=\"panel_title_sub2\">Map</td>
		\n<td align=\"left\" class=\"panel_title_sub2\">Coordinates</td>
		\n</tr>
		".characterRow($account_online->fields[2],$core_db2)."
		".characterRow($account_online->fields[3],$core_db2)."
		".characterRow($account_online->fields[4],$core_db2)."
		".characterRow($account_online->fields[5],$core_db2)."
		".characterRow($account_online->fields[6],$core_db2)."
		</table>
	</td>
	</tr>\n\t\t\t";
	$accounts_online->MoveNext( );
}
if ( $count == "0" )
{
	echo "<tr>\n\t\t<td align=\"center\" colspan=\"3\" class=\"panel_text_alt_list\"><em>No accounts online</em></td>\n\t\t</tr>";
}


function characterRow($char_name,$db)
{
	if($char_name===null){
		return null;
	}
	else{
		$char= $db->Execute("Select Name,cLevel,mapNumber,mapPosX,mapPosY from Character where Name=?",array($char_name));
		return "<tr>
		<td align=\"left\" ><strong>".$char->fields[0]."</strong></td>
		<td align=\"left\" ><strong>".$char->fields[1]."</strong></td>
		<td align=\"left\" ><strong>".decode_map($char->fields[2])."</strong></td>
		<td align=\"left\" ><strong>".$char->fields[3].",".$char->fields[4]."</strong></td>
		</tr>";
	}
}

?>