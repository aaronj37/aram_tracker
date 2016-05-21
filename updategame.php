<?php
include 'connect.php';

$query="select g.game_id,s.summoner_id,c.champion_id,g.won,g.game_date,g.kills,g.deaths,g.assists, round( (g.kills+g.assists)/
CASE when g.deaths !=0 then g.deaths else 1 end ::numeric ,2)
 kda, round(COALESCE(g.length::numeric,0::numeric) *60,0) as length from games_old g left join champions c on g.c_name=c.champion_name left join summoners s on s.summoner_name = g.s_name
order by game_date,game_id
 ";

$result=pg_query($query);
$LastGameId=0;
while($row = pg_fetch_assoc($result))
{
    if($row['game_id']!=null)
    {
        $LastGameId=$row['game_id'];
    }
    else
    {
        $LastGameId++;
    }
    $GameId=$LastGameId;
    $SummonerId=$row['summoner_id'];
    $ChampionId=$row['champion_id'];
    $Won=$row['won'];
    $GameDate=$row['game_date'];
    $Kills=$row['kills'];
    $Deaths=$row['deaths'];
    $Assists=$row['assists'];
    $Kda=$row['kda'];
    $Length=$row['length'];

    $query="Insert into games Values ($GameId,$SummonerId,$ChampionId,'$GameDate',$Length,$Won,$Kills,$Deaths,$Assists,$Kda)";
pg_query($query);

}