<?php
require_once './home/eliess/studiwork/MVC/models/user.php';
class ProfileController {
   public function index() {
      if($_SERVER['REQUEST_METHOD'] === "POST") {
         require_once './home/eliess/studiwork/MVC/views/profile.php';
      }
   }
}
