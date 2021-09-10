<?php
$movie = '{
    "Instructions": "delete everything in this object and make your own JSON object using different data.",
    "Title": "The Graduate",
    "Year": "1967",
    "Rated": "Approved",
    "Released": "22 Dec 1967",
    "Runtime": "106 min",
    "Genre": [
      "Comedy",
      "Drama",
      "Romance"
    ],
    "Director": "Mike Nichols",
    "Writers": [
      "Calder Willingham (screenplay)",
      "Buck Henry (screenplay)",
      "Charles Webb (based on the novel by)"
    ],
    "Actors": [
      "Anne Bancroft",
      "Dustin Hoffman",
      "Katharine Ross",
      "William Daniels"
    ],
    "Plot": "Ben has recently graduated college, with his parents now expecting great things from him. At his \"Homecoming\" party, Mrs. Robinson, the wife of his fathers business partner, has Ben drive her home, which leads to an affair between the two. The affair eventually ends, but comes back to haunt him when he finds himself falling for Elaine, Mrs. Robinsons daughter.",
    "Language": "English",
    "Country": "USA",
    "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
    "poster":"https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg",
    "imdbRating": "8.1",
    "imdbVotes": "183,131",
    "imdbID": "tt0061722"
  }';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILM</title>
</head>
<body>

    
    <?php $data = json_decode($movie);?>
    <center><h1><?php echo $data->Title . "<br>";?></h1></center> 
    <center><img src="https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg" width="200" height="300"></center> 
    <p style="text-align:left;">
    <?php echo "Plot     :" . $data->Plot . "<br>";?>
    <?php echo "Year     :" . $data->Year . "<br>";?>
    <?php echo "Released :" . $data->Released . "<br>";?>
    <?php echo "Runtime  :" . $data->Runtime . "<br>";?>
    <?php echo "Genre    : " . implode(" , ", $data->Genre) . "<br>";?>
    <?php echo "Language :" . $data->Language . "<br>";?>
    <?php echo "Country  :" . $data->Country . "<br>";?>
    <?php echo "Director :" . $data->Director . "<br>";?>
    <?php echo "Writers  : " . implode(" , ", $data->Writers) . "<br>";?>
    <?php echo "Actors   : " . implode(" , ", $data->Actors) . "<br>";?>  
    <?php echo "imdbRating :" . $data->imdbRating . "<br>";?>
    <?php echo "imdbVotes :" . $data->imdbVotes . "<br>";?>
    <?php echo "imdbID   :" . $data->imdbID . "<br>";?>
    </p>
</body>
</html>