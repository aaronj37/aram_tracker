<?php
$user='postgres';
$password='db';
$server='localhost';
$database="postgres";
$APIKey="bd9cbfef-5a84-4523-a8fa-5a5e33eb56a9";
$con = pg_connect("host=$server port=5432 dbname=$database user=$user password= $password")
        or die('Error Connecting to PG DataBase');

$GameJson='{
   "gameLength": 0,
   "gameMode": "CLASSIC",
   "mapId": 11,
   "bannedChampions": [
      {
         "pickTurn": 1,
         "championId": 245,
         "teamId": 100
      },
      {
         "pickTurn": 2,
         "championId": 104,
         "teamId": 200
      },
      {
         "pickTurn": 3,
         "championId": 105,
         "teamId": 100
      },
      {
         "pickTurn": 4,
         "championId": 16,
         "teamId": 200
      },
      {
         "pickTurn": 5,
         "championId": 77,
         "teamId": 100
      },
      {
         "pickTurn": 6,
         "championId": 203,
         "teamId": 200
      }
   ],
   "gameType": "MATCHED_GAME",
   "gameId": 2160645586,
   "observers": {"encryptionKey": "tHSDZ6br5WLafoe1V9ond10633AUSn0T"},
   "gameQueueConfigId": 410,
   "gameStartTime": 0,
   "participants": [
      {
         "masteries": [
            {
               "rank": 5,
               "masteryId": 6111
            },
            {
               "rank": 1,
               "masteryId": 6122
            },
            {
               "rank": 5,
               "masteryId": 6212
            },
            {
               "rank": 1,
               "masteryId": 6223
            },
            {
               "rank": 5,
               "masteryId": 6232
            },
            {
               "rank": 1,
               "masteryId": 6242
            },
            {
               "rank": 5,
               "masteryId": 6252
            },
            {
               "rank": 1,
               "masteryId": 6262
            },
            {
               "rank": 5,
               "masteryId": 6312
            },
            {
               "rank": 1,
               "masteryId": 6322
            }
         ],
         "bot": false,
         "runes": [
            {
               "count": 9,
               "runeId": 5245
            },
            {
               "count": 9,
               "runeId": 5289
            },
            {
               "count": 9,
               "runeId": 5317
            },
            {
               "count": 1,
               "runeId": 5335
            },
            {
               "count": 2,
               "runeId": 5406
            }
         ],
         "spell2Id": 11,
         "profileIconId": 917,
         "summonerName": "SANDALF DA BROWN",
         "championId": 113,
         "teamId": 100,
         "summonerId": 39903232,
         "spell1Id": 4
      },
      {
         "masteries": [
            {
               "rank": 5,
               "masteryId": 6114
            },
            {
               "rank": 1,
               "masteryId": 6122
            },
            {
               "rank": 5,
               "masteryId": 6134
            },
            {
               "rank": 1,
               "masteryId": 6141
            },
            {
               "rank": 5,
               "masteryId": 6311
            },
            {
               "rank": 1,
               "masteryId": 6322
            },
            {
               "rank": 5,
               "masteryId": 6331
            },
            {
               "rank": 1,
               "masteryId": 6343
            },
            {
               "rank": 5,
               "masteryId": 6351
            },
            {
               "rank": 1,
               "masteryId": 6362
            }
         ],
         "bot": false,
         "runes": [
            {
               "count": 9,
               "runeId": 5273
            },
            {
               "count": 9,
               "runeId": 5290
            },
            {
               "count": 9,
               "runeId": 5317
            },
            {
               "count": 3,
               "runeId": 5357
            }
         ],
         "spell2Id": 7,
         "profileIconId": 745,
         "summonerName": "Ratar",
         "championId": 81,
         "teamId": 100,
         "summonerId": 23771856,
         "spell1Id": 4
      },
      {
         "masteries": [
            {
               "rank": 5,
               "masteryId": 6111
            },
            {
               "rank": 1,
               "masteryId": 6121
            },
            {
               "rank": 5,
               "masteryId": 6134
            },
            {
               "rank": 1,
               "masteryId": 6141
            },
            {
               "rank": 5,
               "masteryId": 6312
            },
            {
               "rank": 1,
               "masteryId": 6322
            },
            {
               "rank": 5,
               "masteryId": 6331
            },
            {
               "rank": 1,
               "masteryId": 6343
            },
            {
               "rank": 5,
               "masteryId": 6351
            },
            {
               "rank": 1,
               "masteryId": 6361
            }
         ],
         "bot": false,
         "runes": [
            {
               "count": 1,
               "runeId": 5245
            },
            {
               "count": 1,
               "runeId": 5251
            },
            {
               "count": 7,
               "runeId": 5253
            },
            {
               "count": 9,
               "runeId": 5289
            },
            {
               "count": 9,
               "runeId": 5317
            },
            {
               "count": 3,
               "runeId": 5335
            }
         ],
         "spell2Id": 7,
         "profileIconId": 7,
         "summonerName": "Noire Jolie",
         "championId": 202,
         "teamId": 100,
         "summonerId": 69221708,
         "spell1Id": 4
      },
      {
         "masteries": [
            {
               "rank": 5,
               "masteryId": 6114
            },
            {
               "rank": 1,
               "masteryId": 6123
            },
            {
               "rank": 5,
               "masteryId": 6134
            },
            {
               "rank": 1,
               "masteryId": 6142
            },
            {
               "rank": 5,
               "masteryId": 6311
            },
            {
               "rank": 1,
               "masteryId": 6322
            },
            {
               "rank": 5,
               "masteryId": 6332
            },
            {
               "rank": 1,
               "masteryId": 6342
            },
            {
               "rank": 5,
               "masteryId": 6351
            },
            {
               "rank": 1,
               "masteryId": 6362
            }
         ],
         "bot": false,
         "runes": [
            {
               "count": 9,
               "runeId": 5273
            },
            {
               "count": 9,
               "runeId": 5296
            },
            {
               "count": 9,
               "runeId": 5316
            },
            {
               "count": 3,
               "runeId": 5357
            }
         ],
         "spell2Id": 3,
         "profileIconId": 512,
         "summonerName": "honeycutt227",
         "championId": 26,
         "teamId": 100,
         "summonerId": 19187549,
         "spell1Id": 4
      },
      {
         "masteries": [
            {
               "rank": 5,
               "masteryId": 6111
            },
            {
               "rank": 1,
               "masteryId": 6122
            },
            {
               "rank": 5,
               "masteryId": 6131
            },
            {
               "rank": 1,
               "masteryId": 6142
            },
            {
               "rank": 5,
               "masteryId": 6211
            },
            {
               "rank": 1,
               "masteryId": 6223
            },
            {
               "rank": 5,
               "masteryId": 6231
            },
            {
               "rank": 1,
               "masteryId": 6242
            },
            {
               "rank": 5,
               "masteryId": 6252
            },
            {
               "rank": 1,
               "masteryId": 6261
            }
         ],
         "bot": false,
         "runes": [
            {
               "count": 9,
               "runeId": 5245
            },
            {
               "count": 9,
               "runeId": 5289
            },
            {
               "count": 9,
               "runeId": 5317
            },
            {
               "count": 3,
               "runeId": 5412
            }
         ],
         "spell2Id": 12,
         "profileIconId": 550,
         "summonerName": "Lann the Clever",
         "championId": 122,
         "teamId": 100,
         "summonerId": 35126976,
         "spell1Id": 4
      },
      {
         "masteries": [
            {
               "rank": 5,
               "masteryId": 6211
            },
            {
               "rank": 1,
               "masteryId": 6223
            },
            {
               "rank": 5,
               "masteryId": 6232
            },
            {
               "rank": 1,
               "masteryId": 6241
            },
            {
               "rank": 5,
               "masteryId": 6252
            },
            {
               "rank": 1,
               "masteryId": 6263
            },
            {
               "rank": 5,
               "masteryId": 6311
            },
            {
               "rank": 1,
               "masteryId": 6322
            },
            {
               "rank": 5,
               "masteryId": 6332
            },
            {
               "rank": 1,
               "masteryId": 6342
            }
         ],
         "bot": false,
         "runes": [
            {
               "count": 9,
               "runeId": 5273
            },
            {
               "count": 9,
               "runeId": 5289
            },
            {
               "count": 9,
               "runeId": 5317
            },
            {
               "count": 3,
               "runeId": 5357
            }
         ],
         "spell2Id": 4,
         "profileIconId": 1109,
         "summonerName": "XpectiT",
         "championId": 53,
         "teamId": 200,
         "summonerId": 45223580,
         "spell1Id": 3
      },
      {
         "masteries": [
            {
               "rank": 5,
               "masteryId": 6114
            },
            {
               "rank": 1,
               "masteryId": 6122
            },
            {
               "rank": 5,
               "masteryId": 6131
            },
            {
               "rank": 1,
               "masteryId": 6142
            },
            {
               "rank": 5,
               "masteryId": 6312
            },
            {
               "rank": 1,
               "masteryId": 6322
            },
            {
               "rank": 5,
               "masteryId": 6331
            },
            {
               "rank": 1,
               "masteryId": 6343
            },
            {
               "rank": 5,
               "masteryId": 6352
            },
            {
               "rank": 1,
               "masteryId": 6362
            }
         ],
         "bot": false,
         "runes": [
            {
               "count": 8,
               "runeId": 5245
            },
            {
               "count": 1,
               "runeId": 5251
            },
            {
               "count": 5,
               "runeId": 5289
            },
            {
               "count": 4,
               "runeId": 5301
            },
            {
               "count": 5,
               "runeId": 5315
            },
            {
               "count": 4,
               "runeId": 5317
            },
            {
               "count": 1,
               "runeId": 5335
            },
            {
               "count": 2,
               "runeId": 5337
            }
         ],
         "spell2Id": 7,
         "profileIconId": 590,
         "summonerName": "ApophisNA",
         "championId": 236,
         "teamId": 200,
         "summonerId": 21356259,
         "spell1Id": 4
      },
      {
         "masteries": [
            {
               "rank": 5,
               "masteryId": 6114
            },
            {
               "rank": 1,
               "masteryId": 6121
            },
            {
               "rank": 5,
               "masteryId": 6134
            },
            {
               "rank": 1,
               "masteryId": 6141
            },
            {
               "rank": 5,
               "masteryId": 6212
            },
            {
               "rank": 1,
               "masteryId": 6221
            },
            {
               "rank": 5,
               "masteryId": 6231
            },
            {
               "rank": 1,
               "masteryId": 6241
            },
            {
               "rank": 5,
               "masteryId": 6251
            },
            {
               "rank": 1,
               "masteryId": 6262
            }
         ],
         "bot": false,
         "runes": [
            {
               "count": 8,
               "runeId": 5245
            },
            {
               "count": 1,
               "runeId": 5247
            },
            {
               "count": 1,
               "runeId": 5277
            },
            {
               "count": 8,
               "runeId": 5289
            },
            {
               "count": 9,
               "runeId": 5317
            },
            {
               "count": 3,
               "runeId": 5337
            }
         ],
         "spell2Id": 4,
         "profileIconId": 507,
         "summonerName": "GGGGGGGGGGGGg",
         "championId": 64,
         "teamId": 200,
         "summonerId": 30563170,
         "spell1Id": 11
      },
      {
         "masteries": [
            {
               "rank": 5,
               "masteryId": 6211
            },
            {
               "rank": 1,
               "masteryId": 6223
            },
            {
               "rank": 5,
               "masteryId": 6231
            },
            {
               "rank": 1,
               "masteryId": 6241
            },
            {
               "rank": 5,
               "masteryId": 6251
            },
            {
               "rank": 1,
               "masteryId": 6261
            },
            {
               "rank": 5,
               "masteryId": 6312
            },
            {
               "rank": 1,
               "masteryId": 6323
            },
            {
               "rank": 5,
               "masteryId": 6331
            },
            {
               "rank": 1,
               "masteryId": 6342
            }
         ],
         "bot": false,
         "runes": [
            {
               "count": 9,
               "runeId": 5245
            },
            {
               "count": 9,
               "runeId": 5290
            },
            {
               "count": 9,
               "runeId": 5317
            },
            {
               "count": 3,
               "runeId": 5335
            }
         ],
         "spell2Id": 12,
         "profileIconId": 6,
         "summonerName": "Kuba1990",
         "championId": 78,
         "teamId": 200,
         "summonerId": 20563607,
         "spell1Id": 4
      },
      {
         "masteries": [
            {
               "rank": 5,
               "masteryId": 6111
            },
            {
               "rank": 1,
               "masteryId": 6122
            },
            {
               "rank": 5,
               "masteryId": 6131
            },
            {
               "rank": 1,
               "masteryId": 6142
            },
            {
               "rank": 5,
               "masteryId": 6311
            },
            {
               "rank": 1,
               "masteryId": 6323
            },
            {
               "rank": 5,
               "masteryId": 6331
            },
            {
               "rank": 1,
               "masteryId": 6343
            },
            {
               "rank": 5,
               "masteryId": 6351
            },
            {
               "rank": 1,
               "masteryId": 6362
            }
         ],
         "bot": false,
         "runes": [
            {
               "count": 9,
               "runeId": 5247
            },
            {
               "count": 9,
               "runeId": 5297
            },
            {
               "count": 9,
               "runeId": 5317
            },
            {
               "count": 3,
               "runeId": 5357
            }
         ],
         "spell2Id": 4,
         "profileIconId": 512,
         "summonerName": "eska joe",
         "championId": 268,
         "teamId": 200,
         "summonerId": 21142274,
         "spell1Id": 14
      }
   ],
   "platformId": "NA1"
}';

?>
