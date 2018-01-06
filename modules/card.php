<?php

  /**
   * Represents a card in the game
   */
  class Card extends Part {
    private $type;
    private $name;
    private $color;

    function __construct($params) {
      parent::__construct($params);
      $this->name = $params['name'];
      $this->type = $params['type'];
      $this->color = $params['color'];
    }

    function getName() {
      return $this->name;
    }

    function getColor() {
      return $this->color;
    }

  }


 ?>
