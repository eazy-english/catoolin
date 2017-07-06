<?php

	class RealControllerModel {

		private static $model;

			public static function get() {
				return self::startModel();
			}

			public static function startModel() {
				if(self::$model === null) return $model = new RealControllerModel;
			}

			public function getAllMice() {
				echo "Cats rule";
			}


	}