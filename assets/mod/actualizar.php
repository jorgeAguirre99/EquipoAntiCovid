 <?php

$url = 'https://covid.ourworldindata.org/data/ecdc/total_cases.csv';
$source = file_get_contents($url);
file_put_contents('media/inc/total_cases.csv', $source);
include('connect.php');


 $borrar = "ALTER TABLE `total_cases`
  DROP `COL 3`,
  DROP `COL 4`,
  DROP `COL 5`,
  DROP `COL 6`,
  DROP `COL 7`,
  DROP `COL 8`,
  DROP `COL 9`,
  DROP `COL 10`,
  DROP `COL 11`,
  DROP `COL 12`,
  DROP `COL 13`,
  DROP `COL 14`,
  DROP `COL 15`,
  DROP `COL 16`,
  DROP `COL 17`,
  DROP `COL 18`,
  DROP `COL 19`,
  DROP `COL 20`,
  DROP `COL 21`,
  DROP `COL 22`,
  DROP `COL 23`,
  DROP `COL 24`,
  DROP `COL 25`,
  DROP `COL 26`,
  DROP `COL 27`,
  DROP `COL 28`,
  DROP `COL 29`,
  DROP `COL 30`,
  DROP `COL 31`,
  DROP `COL 32`,
  DROP `COL 33`,
  DROP `COL 34`,
  DROP `COL 35`,
  DROP `COL 36`,
  DROP `COL 37`,
  DROP `COL 38`,
  DROP `COL 39`,
  DROP `COL 40`,
  DROP `COL 41`,
  DROP `COL 42`,
  DROP `COL 43`,
  DROP `COL 44`,
  DROP `COL 45`,
  DROP `COL 46`,
  DROP `COL 47`,
  DROP `COL 48`,
  DROP `COL 49`,
  DROP `COL 50`,
  DROP `COL 51`,
  DROP `COL 52`,
  DROP `COL 53`,
  DROP `COL 54`,
  DROP `COL 55`,
  DROP `COL 56`,
  DROP `COL 57`,
  DROP `COL 58`,
  DROP `COL 59`,
  DROP `COL 60`,
  DROP `COL 61`,
  DROP `COL 62`,
  DROP `COL 63`,
  DROP `COL 64`,
  DROP `COL 65`,
  DROP `COL 66`,
  DROP `COL 67`,
  DROP `COL 68`,
  DROP `COL 69`,
  DROP `COL 70`,
  DROP `COL 71`,
  DROP `COL 72`,
  DROP `COL 73`,
  DROP `COL 74`,
  DROP `COL 75`,
  DROP `COL 76`,
  DROP `COL 77`,
  DROP `COL 78`,
  DROP `COL 79`,
  DROP `COL 80`,
  DROP `COL 81`,
  DROP `COL 82`,
  DROP `COL 83`,
  DROP `COL 84`,
  DROP `COL 85`,
  DROP `COL 86`,
  DROP `COL 87`,
  DROP `COL 88`,
  DROP `COL 89`,
  DROP `COL 90`,
  DROP `COL 91`,
  DROP `COL 92`,
  DROP `COL 93`,
  DROP `COL 94`,
  DROP `COL 95`,
  DROP `COL 96`,
  DROP `COL 97`,
  DROP `COL 98`,
  DROP `COL 99`,
  DROP `COL 100`,
  DROP `COL 101`,
  DROP `COL 102`,
  DROP `COL 103`,
  DROP `COL 104`,
  DROP `COL 105`,
  DROP `COL 106`,
  DROP `COL 107`,
  DROP `COL 108`,
  DROP `COL 109`,
  DROP `COL 110`,
  DROP `COL 111`,
  DROP `COL 112`,
  DROP `COL 113`,
  DROP `COL 114`,
  DROP `COL 115`,
  DROP `COL 116`,
  DROP `COL 117`,
  DROP `COL 118`,
  DROP `COL 119`,
  DROP `COL 120`,
  DROP `COL 121`,
  DROP `COL 122`,
  DROP `COL 123`,
  DROP `COL 124`,
  DROP `COL 125`,
  DROP `COL 126`,
  DROP `COL 127`,
  DROP `COL 128`,
  DROP `COL 129`,
  DROP `COL 130`,
  DROP `COL 131`,
  DROP `COL 132`,
  DROP `COL 133`,
  DROP `COL 134`,
  DROP `COL 135`,
  DROP `COL 136`,
  DROP `COL 137`,
  DROP `COL 138`,
  DROP `COL 139`,
  DROP `COL 140`,
  DROP `COL 141`,
  DROP `COL 142`,
  DROP `COL 143`,
  DROP `COL 144`,
  DROP `COL 145`,
  DROP `COL 146`,
  DROP `COL 147`,
  DROP `COL 148`,
  DROP `COL 149`,
  DROP `COL 150`,
  DROP `COL 151`,
  DROP `COL 152`,
  DROP `COL 153`,
  DROP `COL 154`,
  DROP `COL 155`,
  DROP `COL 156`,
  DROP `COL 157`,
  DROP `COL 158`,
  DROP `COL 159`,
  DROP `COL 160`,
  DROP `COL 161`,
  DROP `COL 162`,
  DROP `COL 163`,
  DROP `COL 164`,
  DROP `COL 165`,
  DROP `COL 166`,
  DROP `COL 167`,
  DROP `COL 168`,
  DROP `COL 169`,
  DROP `COL 170`,
  DROP `COL 171`,
  DROP `COL 172`,
  DROP `COL 173`,
  DROP `COL 174`,
  DROP `COL 175`,
  DROP `COL 176`,
  DROP `COL 177`,
  DROP `COL 178`,
  DROP `COL 179`,
  DROP `COL 180`,
  DROP `COL 181`,
  DROP `COL 182`,
  DROP `COL 183`,
  DROP `COL 184`,
  DROP `COL 185`,
  DROP `COL 186`,
  DROP `COL 187`,
  DROP `COL 188`,
  DROP `COL 189`,
  DROP `COL 190`,
  DROP `COL 191`,
  DROP `COL 192`,
  DROP `COL 193`,
  DROP `COL 194`,
  DROP `COL 195`,
  DROP `COL 196`,
  DROP `COL 197`,
  DROP `COL 198`,
  DROP `COL 199`,
  DROP `COL 200`,
  DROP `COL 201`,
  DROP `COL 202`,
  DROP `COL 203`,
  DROP `COL 204`,
  DROP `COL 205`,
  DROP `COL 206`;

  $result = $conexion->query($borrar);


