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

foreach ($hotels as $hotel) {

    echo "<h2>" . $hotel['name']. "</h2>";

     echo "<ul>";
      
      echo "<li> Descrizione: " . $hotel["description"] . "</li";
      echo "<br />";

      if ($hotel["parking"]) {

        echo "<li> Parcheggio: Presente</li";
      } else {
        echo "<li> Parcheggio: Assente</li";
      }
      echo "<br />";

      echo "<li> Voto: " . $hotel["vote"] . "</li";
      echo "<br />";

      echo "<li> Distanza dal centro: " . $hotel["distance_to_center"] . " Km</li";
      echo "<br />";
    
    echo "</ul>";

}
?>