<?php

  /**
   * Represents the cubes in the game.
   * the cobes would be controlled by the AI
   */
  class Cube extends Part {
    private $cube1;
    private $cube2;
    private $cubesImagesLocation;

    function __construct($params) {
      $this->cubesImagesLocation = './assets/icons/dice/dice';
      $this->roll();
    }

    function roll() {
      $this->cube1 = rand (1,6);
      $this->cube2 = rand (1,6);
      return $this->cube1 + $this->cube2;
    }

    function getView () {
      echo 'Cubes: '.$this->cube1 . ' ' . $this->cube2;
      echo '<img class="cube" src="'.$this->cubesImagesLocation.$this->cube1.'.jpg" />';
      echo '<img class="cube" src="'.$this->cubesImagesLocation.$this->cube2.'.jpg" />';
    }

  }


 ?>
