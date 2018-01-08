<?php

  /**
   * Represents the board of the game
   */
  class GameBoard
  {
    private $boardParts = [];
    private $htmlView = [];

    function __construct($params) {
      # code...
    }

    function createBoard($parts) {
        $indexes = [];
        for ($i=0; $i < 19; $i++) {
          $indexes[$i] = $i;
        }

        $boardParts['7a'] = new BoardPart([
          'number'=> null,
          'name'=> 'Desert',
          'resorceName'=> 'nuthing',
          'index'=> 7,
          'color'=> 'black'
        ]);

        array_splice($indexes , 9 , 1);

        $boardParts['7a']->setNumber(7);
        
        $indexes = $this->createBoardArae(2,6,'a', $parts, $indexes);
        $indexes = $this->createBoardArae(8,12,'a', $parts, $indexes);
        $indexes = $this->createBoardArae(3,6,'b', $parts, $indexes);
        $indexes = $this->createBoardArae(8,11,'b', $parts, $indexes);
        
        $this->htmlView[9] = $boardParts['7a']->getHTML();
        //var_dump($this->htmlView);
        
        
          return $this->htmlView;
        
    }

    private function createBoardArae ($from, $to, $format, $parts, $indexes) {
      for ($i=$from; $i <= $to; $i++) {
        $index = rand ( 0 , count($parts) - 1);
        $boardParts[$i.$format] = $parts[$index];
        array_splice($parts , $index , 1);
        $boardParts[$i.$format]->setNumber($i);

        $index = rand ( 0 , count($indexes) - 1);
        $boardParts[$i.$format]->setIndex($indexes[$index]);
        array_splice($indexes, $index, 1);

        $this->htmlView[$boardParts[$i.$format]->getIndex()] = $boardParts[$i.$format]->getHTML();
      }
      return $indexes;
    }

  }



 ?>
