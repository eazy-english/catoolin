<?php

	class RealController {


			public function method() {
				include_once("view/cat.php");
			}

			public function require() {
				$multi = Multi::getMulti();
				$multi->reqo("view/cat.php");

			}

			public function methodGetMice() {
				$model = RealControllerModel::startModel();
				return RealControllerModel::get()->getAllMice();
			}


	}
	$class = new RealController();
	$class->require();