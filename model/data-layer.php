<?php

/* data-layer.php
 * Return data for the diner app
 *
*/
class Datalayer
{
    // Get indoor interests
    static function getIndoorInterests() {
        return array("TV", "movies", "cooking", "board games", "puzzles",
            "reading", "playing cards", "video games");
    }

    // Get outdoor interests
    static function getOutdoorInterests() {
        return array("hiking", "biking", "swimming", "collecting", "walking",
            "climbing");
    }
}
