<?php

  /**
   * Represents a card in the game
   */
  class Card extends Part {
    private $type;
    private $name;

    function __construct($params) {
      parent::__construct($params);
      $this->name = $params['name'];
      $this->type = $params['type'];
    }

    function getHtml() {
      return
      '

        <div class="ui fluid card">
          <div class="image">
            '.parent::getHtml().'
          </div>
          <div class="content">
            <a class="header">'.$this->name.'</a>
          </div>
        </div>
        
      ';
    }

  }


 ?>
