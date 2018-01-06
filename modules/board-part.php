<?php

  /**
   * Represents the areas in the board
   */
  class BoardPart extends Part {
    private $number;
    private $resorceName;
    private $index;
    private $name;
    private $color;

    function __construct($params) {
        $this->number = $params['number'];
        $this->name = $params['name'];
        $this->resorceName = $params['resorceName'];
        $this->index = $params['index'];
        $this->color = $params['color'];
    }

    function getHTML () {
      return '
        <div class="card '.$this->color.'">
        <div class="content">
          <h2 class="header">
            Number: '.$this->number.'
          </h2>
          <h3 class="meta">Name: '.$this->name.'</h3>
          </div>
        </div>
      ';
    }

    function setNumber($number) {
      $this->number = $number;
    }

  }


 ?>
