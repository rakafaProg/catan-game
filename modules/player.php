<?php

    /**
     * Player details
     */
    class Player extends Part{
      private $name;
      private $resorces;
      private $color;

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
      }

      function getHTML() {
        $x =  '
        <div class="ui card '.$this->color.'-bg">
          <div class="content">
            <div class="header">'.$this->name.'</div>
            <div class="meta">
              <span class="category"></span>
            </div>
            <div class="description">
              <p>
              <div class="ui two column grid">';
                foreach ($this->resorces as $name => $amount) {
                  
                    for ($i=0; $i < $amount; $i++) {
                      $x= $x. AI::$resorcesCards[$name]->getHtml();
                    }


                }
          $x= $x. '</div>
              </p>
            </div>
          </div>
          <div class="extra content">
            <div class="right floated author">
              '.parent::getHtml().'
            </div>
          </div>
          </div>
        ';
        return $x;
      }

      function setSize($size) {

      }

      function setLocation($location) {

      }

      function getResorce($name, $amount) {
        $this->resorces[$name] += $amount;
      }


    }



 ?>
