<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miralis
 * Date: 4/15/2016
 * Time: 6:12 PM
 */
include 'connect.php';


//$name=$_POST['name'];
$SummonerName='Jampants';
$SummonerId=GetSummonerId($SummonerName);
//$current_game=get_current_game($id);
//$game=get_game($id);
//$GameHistory= GetGameHistory($SummonerId);
//ProcessGameHistorySummoner($GameHistory,$SummonerId);
//$CurrentPlayers=null;
$CurrentPlayers=GetCurrentPlayers($SummonerId);
if($CurrentPlayers!=null) {
    ProcessCurrentPlayers($CurrentPlayers);
}
else
{
    echo "No ARAM Game found for $SummonerName";
}
//echo $id;

function GetSummonerId($SummonerName) //Gets Summoner Id from riot API using summoner name
{
    global $APIKey;
    $url = "https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/$SummonerName?api_key=$APIKey";
    $data=GetData($url);
    $data=json_decode($data,true);
    //var_dump($data);
    foreach ($data as $k => $v) {
        $value=$data[$k]['id'];

        //var_dump();
        //break;
    }
   // var_dump($value);
    return $value;

}


function GetCurrentGame($SummonerId) //Get current game using summoner id
{
    global $APIKey;
    $url = "https://na.api.pvp.net/api/lol/na/v1.3/game/by-summoner/$SummonerId/recent?api_key=$APIKey";
    $data=GetData($url);
    $data=json_decode($data,true);
    $data=$data['games'][0];
    //['stats'];
    var_dump($data);
    /*foreach ($data as $k => $v) {
        $value=$data[$k]['id'];

        //var_dump();
        //break;
    }*/
    // var_dump($value);
    return $data;

}

function GetGameHistory($SummonerId) //Get game history using summoner id
{
    global $APIKey;
$url = "https://na.api.pvp.net/api/lol/na/v1.3/game/by-summoner/$SummonerId/recent?api_key=$APIKey";
    $data=GetData($url);
    $data=json_decode($data,true);
    $data=$data['games'];
    return $data;

}

function GetCurrentPlayers($SummonerId) //Get current game players using summoner ID
{
    global $APIKey;
    global $GameJson;
    //echo $GameJson;
    $url="https://na.api.pvp.net/observer-mode/rest/consumer/getSpectatorGameInfo/NA1/$SummonerId?api_key=$APIKey";
   $data=GetData($url);

    //var_dump($data);
    //$data=$GameJson;
    $g=json_decode($data,true);
    //var_dump($g);
    if(isset($g['status'])&&$g['status']!=200)
    {
        return null;
    }
    $GameMode=$g['gameMode'];
    $GameType=$g['gameType'];
    //if( $GameMode=="ARAM"&&$GameType=="MATCHED_GAME")
    //{
    //$GameId=$g['gameId'];
    $players=array();
    foreach($g['participants'] as $p)
    {

        array_push($players,array($p['summonerName'],$p['summonerId'],$p['championId'],$p['teamId']));
    }
//var_dump($players);
    //}
//$data=array($GameId,$players);
//var_dump($data);
 //var_dump($g['participants']);

    return $players;
}

function ProcessCurrentPlayers($Players)
{
    $table="<table><tr><th>Summoner Name</th><th>Champion</th><th>Role</th><th>AoE Damage</th><th>AoE CC</th><th>Burst Damage</th><th>Healing</th><th>Single CC</th><th>Engage</th><th>Poke</th><th>Survivability</th><th>Score</th></tr>";
$count=0;
    $team1_score=array(0,0,0,0,0,0,0,0,0,0);
    $team2_score=array(0,0,0,0,0,0,0,0,0,0);
    foreach($Players as $p)
    {
        if($count==5)
        {
            $team1_score[0]/=5;
            $team1_score[1]/=5;
            $team1_score[2]/=5;
            $team1_score[3]/=5;
            $team1_score[4]/=5;
            $team1_score[5]/=5;
            $team1_score[6]/=5;
            $team1_score[7]/=5;
            $team1_score[8]/=5;

            $table.="<tr><td>Team 1 Averages</td><td></td><td></td><td>{$team1_score[0]}</td><td>{$team1_score[1]}</td><td>{$team1_score[2]}</td><td>{$team1_score[3]}</td><td>{$team1_score[4]}</td><td>{$team1_score[5]}</td><td>{$team1_score[6]}</td><td>{$team1_score[7]}</td><td>{$team1_score[8]}</td>";
            $table.="</tr><tr><td>|</td></tr><tr><td>|</td></tr>";
        }



        $table.="<tr><td>{$p[0]}</td>";



       // var_dump($p);
      $cs=GetChampionScore($p[2]);
        $table.="<td>{$cs['champion_name']}</td><td>{$cs['role']}</td><td>{$cs['aoe_damage']}</td><td>{$cs['aoe_cc']}</td><td>{$cs['burst_damage']}</td><td>{$cs['healing']}</td><td>{$cs['single_cc']}</td><td>{$cs['engage']}</td><td>{$cs['poke']}</td><td>{$cs['survivability']}</td><td>{$cs['score']}</td>";
        $table.="</tr>";

        if($count<5)
        {
            $team1_score[0]+=$cs['aoe_damage'];
            $team1_score[1]+=$cs['aoe_cc'];
            $team1_score[2]+=$cs['burst_damage'];
            $team1_score[3]+=$cs['healing'];
            $team1_score[4]+=$cs['single_cc'];
            $team1_score[5]+=$cs['engage'];
            $team1_score[6]+=$cs['poke'];
            $team1_score[7]+=$cs['survivability'];
            $team1_score[8]+=$cs['score'];
        }
        if($count>=5)
        {
            $team2_score[0]+=$cs['aoe_damage'];
            $team2_score[1]+=$cs['aoe_cc'];
            $team2_score[2]+=$cs['burst_damage'];
            $team2_score[3]+=$cs['healing'];
            $team2_score[4]+=$cs['single_cc'];
            $team2_score[5]+=$cs['engage'];
            $team2_score[6]+=$cs['poke'];
            $team2_score[7]+=$cs['survivability'];
            $team2_score[8]+=$cs['score'];
        }
$count++;
        if($count==10)
        {
            $team2_score[0]/=5;
            $team2_score[1]/=5;
            $team2_score[2]/=5;
            $team2_score[3]/=5;
            $team2_score[4]/=5;
            $team2_score[5]/=5;
            $team2_score[6]/=5;
            $team2_score[7]/=5;
            $team2_score[8]/=5;

            $table.="<tr><td>Team 2 Averages</td><td></td><td></td><td>{$team2_score[0]}</td><td>{$team2_score[1]}</td><td>{$team2_score[2]}</td><td>{$team2_score[3]}</td><td>{$team2_score[4]}</td><td>{$team2_score[5]}</td><td>{$team2_score[6]}</td><td>{$team2_score[7]}</td><td>{$team2_score[8]}</td>";
            $table.="</tr><tr><td></td></tr>";
        }

    }
    $table.="</table>";
    echo $table;
    if($team1_score[8]>$team2_score[8])
    {
        echo "Prediction: Team 1";
    }
    else
    {
        echo "Prediction: Team 2";
    }
}

function GetChampionScore($ChampionId)
{
    $ScoreQuery="Select c.champion_name, cs.role,cs.aoe_damage,cs.aoe_cc,cs.burst_damage,cs.healing,cs.single_cc,cs.engage,cs.poke,cs.survivability,cs.score from champion_score cs join champions c on cs.champion_id = c.champion_id where cs.champion_id ='$ChampionId'";
    $result=pg_query($ScoreQuery);
    $row=pg_fetch_assoc($result);
    //var_dump($row);
    echo "</br>";
    return $row;
}


function ProcessGameHistorySummoner($GameHistory,$SummonerId) //gets the match history and adds ARAM games to the database for only the current summoner
{
    foreach($GameHistory as $gh)
    {
        $GameMode=$gh['gameMode'];
        $GameType=$gh['gameType'];

        if( $GameMode=="ARAM"&&$GameType=="MATCHED_GAME")
        { $GameId=$gh['gameId'];
            $ChampionId=$gh['championId'];
            $TimeStamp=$gh['createDate'];

            $Epoch = floor($TimeStamp/1000);

           $GameDate=date('Y-m-d', $Epoch);
         // echo $date.'</br>';
            //var_dump($gh);
            $s=$gh['stats'];
            $Kills=$s['championsKilled'];
            $Deaths=$s['numDeaths'];
            $Assists=$s['assists'];
            $Kda=($Kills+$Assists)/max(1,$Deaths);
            $Length=$s['timePlayed'];

            $Won=$s['win'];
            $Won=$Won?1:0;
            InsertGame($GameId,$SummonerId,$ChampionId,$GameDate,$Length,$Won,$Kills,$Deaths,$Assists,$Kda);
            //echo "Game Id: $GameId Summoner Id: $id Champion Id: $ChampionId Won:$Won Date: $Date Kills: $Kills Deaths: $Deaths Assists: $Assists KDA: $kda Length: $Length";
        }
    }
}

Function InsertGame($GameId,$SummonerId,$ChampionId,$GameDate,$Length,$Won,$Kills,$Deaths,$Assists,$Kda) //Insert Game data into Database
{
    $query="Insert into games Select $GameId,$SummonerId,$ChampionId,'$GameDate',$Length,$Won,$Kills,$Deaths,$Assists,$Kda where NOT EXISTS(Select 1 from games where game_id=$GameId and summoner_id=$SummonerId)";
   echo $query."</br>";
    pg_query($query);
}


//$url='https://na.api.pvp.net/observer-mode/rest/consumer/getSpectatorGameInfo/NA1/Thond?api_key=bd9cbfef-5a84-4523-a8fa-5a5e33eb56a9';
    function GetData($url) //Gets data from Riot API
    {
try {
    $ch = curl_init();

    if (FALSE === $ch)
        throw new Exception('failed to initialize');

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 'false');
   // curl_setopt(/* ... */);

    $content = curl_exec($ch);

    if (FALSE === $content)
        throw new Exception(curl_error($ch), curl_errno($ch));

    return $content;
    // ...process $content now
} catch(Exception $e) {

    trigger_error(sprintf(
        'Curl failed with error #%d: %s',
        $e->getCode(), $e->getMessage()),
        E_USER_ERROR);

}
}

