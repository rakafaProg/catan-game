<?php

    /**
     *  An interface for every class
     *  that has to be showen on the screen.
     */
    interface IPartView {

        function getHTML();

        function setSize($size);

        function setLocation($location);
        
    }

 ?>
