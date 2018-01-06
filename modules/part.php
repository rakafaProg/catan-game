<?php

  /**
   * Any part in the game
   */
  class Part  {
    private $icon;
    private $size;
    private $position;
    private static $defaultIcon;

    function __construct($params) {
        if(isset($params['icon']))
          $this->icon = $params['icon'];
        else
          $this->icon = self::getDefaultIcon();

        if(isset($params['size']))
          $this->size = $params['size'];
        else
          $this->size = ['height'=>'20px', 'width'=>'20px'];

        if(isset($params['position']))
          $this->position = $params['position'];
        else
          $this->position = ['top'=>'0', 'left'=>'0'];

    }

    function getIcon () {
      return $this->icon;
    }

    function getHTML() {
        return '
        <img src="'.$this->icon.'"'
        .' height="'.$this->size['height'].'" width="'.$this->size['width'].'"'
        .' />';
    }

    function setSize($size) {
      // code...
    }

    function setLocation($location) {
      // code...
    }

    static function setDefaultIcon($iconUrl) {
      self::$defaultIcon = $iconUrl;
    }

    static function getDefaultIcon() {
      return self::$defaultIcon;
    }

  }

  Part::setDefaultIcon('./assets/icons/default.png');


 ?>
