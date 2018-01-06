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
     <div class="ui cards">
       <?php

         $myBoard = new GameBoard('');
         $myBoard->createBoard($GLOBALS['boardPiecesData']);


       ?>
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
