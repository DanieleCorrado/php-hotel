<!DOCTYPE html>
<html lang ="en">
  <head>

  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">

  </head>

</html>

<?php 

$hotels = [

  [
      'name' => 'Hotel Belvedere',
      'description' => 'Hotel Belvedere Descrizione',
      'parking' => true,
      'vote' => 4,
      'distance_to_center' => 10.4
  ],
  [
      'name' => 'Hotel Futuro',
      'description' => 'Hotel Futuro Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 2
  ],
  [
      'name' => 'Hotel Rivamare',
      'description' => 'Hotel Rivamare Descrizione',
      'parking' => false,
      'vote' => 1,
      'distance_to_center' => 1
  ],
  [
      'name' => 'Hotel Bellavista',
      'description' => 'Hotel Bellavista Descrizione',
      'parking' => false,
      'vote' => 5,
      'distance_to_center' => 5.5
  ],
  [
      'name' => 'Hotel Milano',
      'description' => 'Hotel Milano Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 50
  ],

];

// foreach ($hotels as $hotel) {

//     echo "<h2>" . $hotel['name']. "</h2>";

//      echo "<ul>";
      
//       echo "<li> Descrizione: " . $hotel["description"] . "</li";
//       echo "<br />";

//       if ($hotel["parking"]) {

//         echo "<li> Parcheggio: Presente</li";
//       } else {
//         echo "<li> Parcheggio: Assente</li";
//       }
//       echo "<br />";

//       echo "<li> Voto: " . $hotel["vote"] . "</li";
//       echo "<br />";

//       echo "<li> Distanza dal centro: " . $hotel["distance_to_center"] . " Km</li";
//       echo "<br />";
    
//     echo "</ul>";

// }

  echo "<table class='table center'>";
  echo "
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Parcheggio</th>
        <th>Voto</th>
        <th>Distaza dal centro</th>
      </tr>
    </thead>";
  
  foreach ($hotels as $hotel) {
    echo "
      <tr>
        <td>" . $hotel['name'] . "</td>
        <td>" . $hotel['description'] . "</td>";
        if( $hotel["parking"]) {
          echo "<td>Presente</td>";
        } else {
          echo "<td>Assente</td>";
        }
    echo "
        <td>" .$hotel['vote'] . "</td>
        <td>" .$hotel['distance_to_center'] . "</td>
      </tr>";
  };

  echo "</table>";


?>