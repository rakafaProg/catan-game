<?php

  include_once 'card-data.php';

  class BLL {

    function getCards() {
        $cardsArray = [];
        foreach ($GLOBALS['cardsDataDemo'] as $card) {
            array_push($cardsArray, new Card($card));
        }

        foreach ($cardsArray as $card) {
          echo $card->getHtml();
        }
    }

  }

?>
