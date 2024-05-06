<?php
require_once 'models/user.php';
class ProfileController {
   public function index() {
      if($_SERVER['REQUEST_METHOD'] === "POST") {
         require_once 'views/profile.php';
      }
   }
}
