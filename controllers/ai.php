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
      echo '<div class="ui cards">';

      for ($i=0; $i < 4; $i++) {
        $players[$i] = new Player(['name'=>'player-'.$i, 'color' => $colors[$i]]);
      }

      $players[0]->getResorce('lumber', 1);
      $players[0]->getResorce('wool', 1);
      $players[0]->getResorce('lumber', 1);
      $players[1]->getResorce('ore', 1);
      $players[1]->getResorce('ore', 1);
      $players[2]->getResorce('wool', 1);
      $players[3]->getResorce('brick', 1);
      $players[3]->getResorce('wool', 1);
      $players[3]->getResorce('ore', 1);

      foreach ($players as $player) {
        echo $player->getHtml();
      }

      echo '</div>';
    }


  }




 ?>
