<?php

  include_once 'card-data.php';

  class BLL {

    function getCards() {
        $cardsArray = [];
        foreach ($GLOBALS['cardsDataDemo'] as $name => $card) {
            $cardsArray[$name] = new Card($card);
        }

        return $cardsArray;
        foreach ($cardsArray as $name => $card) {
          echo 'Name: ' . $name;
          echo $card->getHtml();
        }
    }

  }

?>
