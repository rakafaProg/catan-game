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

  createBoardData('Field', 'grain', 'yellow', 4, 'assets/icons/board/field.png');
  createBoardData('Forest', 'lumber', 'brown', 4, 'assets/icons/board/forest.png');
  createBoardData('Hill', 'brick', 'orange', 3, 'assets/icons/board/hill.png');
  createBoardData('Pasture', 'wool', 'olive', 4, 'assets/icons/board/pasture.png');
  createBoardData('Mountain', 'ore', 'grey', 3, 'assets/icons/board/mountain.png');

  var_dump($boardPiecesData);

 ?>
