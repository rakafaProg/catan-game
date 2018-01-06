<?php

  /**
   * Represents the board of the game
   */
  class GameBoard
  {
    private $boardParts = [];

    function __construct($params) {
      # code...
    }

    function createBoard($parts) {

        $boardParts['7a'] = new BoardPart([
          'number'=> null,
          'name'=> 'Desert',
          'resorceName'=> 'nuthing',
          'index'=> null,
          'color'=> 'black'
        ]);
        $boardParts['7a']->setNumber(7);
        echo $boardParts['7a']->getHTML();

        $this->createBoardArae(2,6,'a', $parts);
        $this->createBoardArae(8,12,'a', $parts);
        $this->createBoardArae(3,6,'b', $parts);
        $this->createBoardArae(8,11,'b', $parts);
    }

    private function createBoardArae ($from, $to, $format, $parts) {
      for ($i=$from; $i <= $to; $i++) {
        $index = rand ( 0 , count($parts) - 1);
        $boardParts[$i.$format] = $parts[$index];
        array_splice($parts , $index , 1);
        $boardParts[$i.$format]->setNumber($i);
        echo $boardParts[$i.$format]->getHTML();
      }
    }

  }



 ?>
