<?php

    /**
     * Player details
     */
    class Player extends Part{
      private $name;
      private $resorces;
      private $color;
      private $score;

      function __construct($params) {
          parent::__construct($params);
          $this->name = $params['name'];
          $this->resorces = [
            'brick'=>0,
            'grain'=>0,
            'lumber'=>0,
            'ore'=>0,
            'wool'=>0
          ];
          $this->color = $params['color'];
          $this->score = 0;
      }

      function getName () {
        return $this->name;
      }

      function getScore () {
        return $this->score;
      }

      function getResorces() {
        return $this->resorces;
      }


      function getResorce($name, $amount) {
        $this->resorces[$name] += $amount;
      }


    }



 ?>
