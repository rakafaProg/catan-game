<?php

  $boardPiecesData = [];


  function createBoardData($name, $resorce, $color, $amount, $icon) {
    for ($i=0; $i < $amount; $i++) {
      array_push($GLOBALS['boardPiecesData'], new BoardPart([
        'number'=> null,
        'name'=> $name,
        'resorceName'=> $resorce,
        'index'=> null,
        'icon'=>$icon,
        'color'=> $color
      ]));
    }
  }

  createBoardData('Field', 'grain', 'yellow', 4, 'icon');
  createBoardData('Forest', 'lumber', 'brown', 4, 'icon');
  createBoardData('Hill', 'brick', 'orange', 3, 'icon');
  createBoardData('Pasture', 'wool', 'olive', 4, 'icon');
  createBoardData('Mountain', 'ore', 'grey', 3, 'icon');


 ?>
