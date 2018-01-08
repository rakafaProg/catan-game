<?php

  /**
   * Represents the board of the game
   */
  class GameBoard
  {
    private $boardParts = [];
    private $htmlView = [];
    private $parts = [];

    function __construct($params) {
      # code...
    }

    function createBoard($parts) {
        $this->parts = $parts;
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
        
        $indexes = $this->createBoardArae(2,6,'a', $indexes);
        $indexes = $this->createBoardArae(8,12,'a', $indexes);
        $indexes = $this->createBoardArae(3,6,'b', $indexes);
        $indexes = $this->createBoardArae(8,11,'b', $indexes);
        
        $this->htmlView[9] = $boardParts['7a']->getHTML();
        //var_dump($this->htmlView);
        
        
          return $this->htmlView;
        
    }

    private function createBoardArae ($from, $to, $format, $indexes) {
      for ($i=$from; $i <= $to; $i++) {
        $index = rand ( 0 , count($this->parts) - 1);
        $boardParts[$i.$format] = $this->parts[$index];
        array_splice($this->parts , $index , 1);
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
