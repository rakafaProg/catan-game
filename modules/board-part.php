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
        <div class="board-part '.$this->name.'" >
          <div class="ui circular label header big '.$this->color.'">'
            .$this->number.
          '</div>
        </div>';
    }

    function setNumber($number) {
      $this->number = $number;
    }

    function setIndex ($number) {
      $this->index = $number;
    }

    function getIndex () {
      return $this->index;
    }
  }


 ?>
