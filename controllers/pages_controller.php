<?php
class PagesController {
    public function home() {
        require_once('views/pages/home.php');
    }

    public function quest() {
        require_once('views/pages/quest.php');
    }

    public function newQuest() {
        require_once('views/pages/newQuest.php');
    }

    public function error() {
        require_once('views/pages/error.php');
    }
}
?>