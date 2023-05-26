<?php

  $drinks = json_decode(file_get_contents('drinks.json'));

  //echo $drinks;

  foreach($drinks as $drink) {
    echo '<li>'.$drink->name.' $'.$drink->price.'</li>';
  }

?>
