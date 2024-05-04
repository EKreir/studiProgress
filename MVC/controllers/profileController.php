<?php
require_once '/home/eliess/studiwork/MVC/models/user.php';
class ProfileController {
   public function index() {
      if($_SERVER['REQUEST_METHOD'] === "POST") {
         require_once '/home/eliess/studiwork/MVC/views/profile.php';
      }
   }
}

//j'ai un message qui s'affiche à la ligne 4 m'indiquant"index accesses the super-global variable $_SERVER" ?!
