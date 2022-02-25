<?php
  class Movie {
    public $NameMovie;
    public $DateMovie;
    public $GenreMovie;
    
    function __construct(array $InfoMovie) {
      $this->NameMovie = $InfoMovie["NameMovie"];    
      $this->DateMovie = $InfoMovie["DateMovie"];    
      $this->GenreMovie = $InfoMovie["GenreMovie"];    
  }
  public function stamp() {
    return "<h1>Titolo: " . $this->NameMovie . "</h1>" . 
            "<p>Rilasciato: " . $this->DateMovie . "</p>" .
            "<p>Genere: " . $this->GenreMovie . "</p>" ;
  }
}
$film1 = new Movie ([
    "NameMovie" => "Ritorno al Futuro",
    "DateMovie" => "1984",
    "GenreMovie" => "Fantasy"
]);
$film2 = new Movie ([
  "NameMovie" => "Ritorno al Futuro II",
  "DateMovie" => "1989",
  "GenreMovie" => "Fantasy"
]);
$film3 = new Movie ([
  "NameMovie" => "Ritorno al Futuro III",
  "DateMovie" => "1990",
  "GenreMovie" => "Fantasy"
]);

$movies = array($film1, $film2, $film3);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="moviebox">
        <?php 
            for($i = 0; $i < count($movies); $i++) {
                echo $movies[$i]->stamp();
            }
        ?>  
      </div>
  </div>
</body>
</html>