<?php

  class MainController {

    public function methodIndex() {
      $connect = new Core\Connect;
      return include('view/index.php');
    }
  }
