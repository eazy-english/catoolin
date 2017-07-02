<?php

	class SomeController {

			public function method() {
				echo "Lorem";
			}

			public function methodName() {
				SomeControllerModel::go();
				include_once("view/index.php");
			}

			public function methodView() {
				include_once("view/viewbitch.php");
			}

			public function method404() {
				include_once("view/404.php");
			}


}