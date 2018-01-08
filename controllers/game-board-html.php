<?php

  $boardParams = $GLOBALS['boardParams'];
  if(!isset($boardParams)) {
    echo "not set";
    die;
  }


 ?>

 <header>
   <h1>The Settlers of Catan</h1>
   <h1>.</h1>
 </header>
 <div class="ui grid">

   <!-- Board -->
   <div class="teal ten wide column">
     <h2 class="header">Board:</h2>
     <div class="board-container">
     <?php
      
         $myBoard = new GameBoard('');
         $htmlView = $myBoard->createBoard($GLOBALS['boardPiecesData']);
         

       ?>

        <div class="first-row">
            <?php  for ($i=0; $i < 3; $i++)  echo $htmlView[$i];  ?>
        </div>
        <div class="second-row">
            <?php  for ($i=3; $i < 7; $i++)  echo $htmlView[$i];  ?>
        </div>
        <div class="third-row">
            <?php  for ($i=7; $i < 12; $i++)  echo $htmlView[$i];  ?>
        </div>
        <div class="forth-row">
            <?php  for ($i=12; $i < 16; $i++)  echo $htmlView[$i];  ?>
        </div>
        <div class="fifth-row">
            <?php  for ($i=16; $i < 19; $i++)  echo $htmlView[$i];  ?>
        </div>
</div>
     <!--<div class="board-container">
        
     </div>
-->
     <style>
      .board-container {
        position: relative;
        width: 500px;
        height: 500px;
        background-color: lightblue;
      }
      .board-part {
        float: left;
        width: 87px;
        height: 112px;
        padding: 30px;
        font-size: 20px;
        
      }
      .break-line {
        float: none;
      }
      .mountain {
        background-image: url('./assets/icons/board/mountain.png');
        background-repeat: no-repeat;
        background-size: contain;
      }
      .field {
        background-image: url('./assets/icons/board/field.png');
        background-repeat: no-repeat;
        background-size: contain;
      }
      .forest {
        background-image: url('./assets/icons/board/forest.png');
        background-repeat: no-repeat;
        background-size: contain;
      }
      .hill {
        background-image: url('./assets/icons/board/hill.png');
        background-repeat: no-repeat;
        background-size: contain;
      }
      .pasture {
        background-image: url('./assets/icons/board/pasture.png');
        background-repeat: no-repeat;
        background-size: contain;
      }
      .desert {
        background-image: url('./assets/icons/board/desert.png');
        background-repeat: no-repeat;
        background-size: contain;
      }
      .first-row {
        position: absolute;
        top: 20px;
        left: 107px;
      }
      .second-row {
        position: absolute;
        top: 95px;
        left: 63px;
      }
      .third-row {
        position: absolute;
        top: 170px;
        left: 20px;
      }
      .forth-row {
        position: absolute;
        top: 245px;
        left: 63px;
      }
      .fifth-row {
        position: absolute;
        top: 320px;
        left: 107px;
      }
     </style>

     <div class="ui cards">
       
     </div>

   </div>
   <!-- End of board -->


   <!-- Players: -->
   <div class="blue six wide column"><h2 class="header">Players:</h2><div class="ui cards">


       <?php foreach($boardParams['players'] as $player) { ?>
       <div class="card"><div class="content">
          <h2 class="header"><?= $player->getName() ?></h2>
          <h3 class="meta"><b>Score:</b> <?= $player->getScore() ?></h3>

          <!-- Resorces: -->
          <div class="ui two column grid">
          <?php foreach ($player->getResorces() as $name => $amount) {
            if ($amount > 0) {
              $resorce = AI::$resorcesCards[$name]; ?>
            <div class="ui column"><div class="ui fluid card">
                <div class="content">
                  <div class="floating ui <?= $resorce->getColor() ?> circular label"><?= $amount ?></div>
                  <img class="right floated small ui image" src="<?= $resorce->getIcon() ?>">
                  <a class="ui <?= $resorce->getColor() ?> right ribbon label"><?= $resorce->getName() ?></a>
                </div>
            </div></div>
          <?php } } ?>
          </div>
          <!-- End of resorces -->

        </div></div>
      <?php } ?>
    </div></div>
    <!-- End of Players -->



   </div>

 </div>
