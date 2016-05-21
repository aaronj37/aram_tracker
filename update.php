<?php
include 'connect.php';

$query="Select * from champions";

$result=pg_query($query);
while($row = pg_fetch_assoc($result))
{
 $u_query="Update champion_stats set c_id={$row['c_id']} where c_name='{$row['c_name']}'";
 $u_result=pg_query($u_query);
}





/*







$champions = array("Aatrox", "Ahri", "Akali", "Alistar", "Amumu", "Anivia", "Annie", "Ashe", "Blitzcrank", "Brand", "Caitlyn", "Cassiopeia", "Chogath", "Corki", "Darius", "Diana", "Dr. Mundo", "Draven", "Elise", "Evelynn", "Ezreal", "Fiddlesticks", "Fiora", "Fizz", "Galio", "Gangplank", "Garen", "Gragas", "Graves", "Hecarim", "Heimerdinger", "Irelia", "Janna", "Jarvan IV", "Jayce", "Jax", "Jinx", "Karma", "Karthus", "Kassadin", "Katarina", "Kayle", "Kennen", "KhaZix", "KogMaw", "LeBlanc", "Lee Sin", "Leona", "Lissandra","Lucian", "Lulu", "Lux", "Malphite", "Malzahar", "Maokai", "Master Yi", "Miss Fortune", "Mordekaiser", "Morgana", "Nami", "Nasus", "Nautilus", "Nidalee", "Nocturne", "Nunu", "Olaf", "Orianna", "Pantheon", "Poppy", "Quinn", "Rammus", "Renekton","Rengar", "Riven", "Rumble", "Ryze", "Sejuani", "Shaco", "Shen", "Shyvana", "Singed", "Sion", "Sivir", "Skarner", "Sona", "Soraka", "Swain", "Syndra", "Talon", "Taric", "Teemo", "Thresh", "Tristana", "Trundle", "Trydamere", "Twisted Fate", "Twitch", "Udyr", "Urgot", "Varus", "Vayne", "Veigar","Vi", "Viktor", "Vladimir", "Volibear", "Warwick", "Wukong", "Xerath", "Xin Zhao", "Yasuo", "Yorick", "Zac", "Zed", "Ziggs", "Zilean", "Zyra");
for($i=0;$i<count($champions);$i++)
{$wins=0;
$games=0;
	$losses=0;
	$kills=0;
	$deaths=0;
	$assists=0;
	$avgKDA=0;
	$KDA=0;
 $sql3="SELECT * FROM games";
 $result3 = pg_query($sql3) or die ("Error in query: $sql3. ");
$totalgames=pg_num_rows($result3);


 $sql="SELECT * FROM games where c_name='".$champions[$i]."'";
 $result = pg_query($sql) or die ("Error in query: $sql. " );

 while($row = pg_fetch_assoc($result))
  { $games+=1;
	if( $row['won'])
	{
		$wins+=1;
	}
	else
	{
		$losses+=1;
	}
	$kills+=$row['kills'];
	$deaths+=$row['deaths'];
	$assists+=$row['assists'];
	$avgKDA+=$row['kda'];
  }
  if($games>0)
  {
  $winrate=$wins/$games*100;
  $avgKDA/=$games;
  $KDA=($kills+.5*$assists)/($deaths);
  $playrate=$games/$totalgames*100;
  echo($games." ".$totalgames);
 $sql2="SELECT * FROM champion_stats WHERE c_name ='".$champions[$i]."'";
 $result2 = pg_query($sql2) or die ("Error in query:$sql2 " );
 if (pg_num_rows($result2) == 1) {
pg_query("UPDATE champion_stats SET wins='$wins', losses='$losses', win_rate='$winrate',games_Played='$games',play_Rate='$playrate',kills='$kills',deaths='$deaths',assists='$assists',kda='$KDA',avg_kda='$avgKDA' Where c_name = '$champions[$i]' ")or die ("Error in query:  " );;
 }
 else
 {pg_query("INSERT INTO champion_stats (c_name,wins,losses,win_rate,games_played,play_rate,kills,deaths,assists,kda,avg_kda) VALUES ('$champions[$i]','$wins','$losses','$winrate','$games','$playrate','$kills','$deaths','$assists','$KDA','$avgKDA')")or die ("Error in query: $query. " . mysql_error());;
 }
 }
}
*/
?>