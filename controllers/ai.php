<?php

  /**
   *
   */
  class AI
  {
    static public $resorcesCards;

    static function run($params) {

    }

    static function init() {

      $colors = ['blue', 'pink', 'green', 'yellow'];
      $dataHandler = new BLL();

      $cards = $dataHandler->getCards();
      self::$resorcesCards = $cards;
      // create players
      //echo '<div class="ui cards">';


      $players[0] = new Player(['name'=>'Rakkafa', 'color' => $colors[0]]);
      $players[1] = new Player(['name'=>'Ram', 'color' => $colors[0]]);
      $players[2] = new Player(['name'=>'Michal', 'color' => $colors[0]]);

      $players[0]->getResorce('lumber', 1);
      $players[0]->getResorce('wool', 1);
      $players[0]->getResorce('lumber', 1);
      $players[1]->getResorce('ore', 1);
      $players[1]->getResorce('ore', 1);
      $players[2]->getResorce('wool', 1);
      $players[1]->getResorce('brick', 1);
      $players[0]->getResorce('wool', 1);
      $players[2]->getResorce('ore', 1);
      $players[1]->getResorce('grain', 1);
      $players[2]->getResorce('brick', 1);

      foreach ($players as $player) {
        //echo $player->getHtml();
      }

      //echo '</div>';
      initBoard(
        ['players' => $players]
      );
      require_once 'controllers/game-board-html.php';
    }



  }

  function initBoard($params) {
      $GLOBALS['boardParams'] = $params;
  }

    //initBoard('x');


 ?>
