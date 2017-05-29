<?php
	/* PinterestAPI class, by Mr CaT for working with Pinterest API
	Created just for working with Pinterest API, u won't do math
	Copyright (c) 2017 by Mr CaT */
	
	class PinterestAPI {

		public $data = [];
		public $token;
		public $board;
		public $pin;

			# Cimple construct
			public function __construct() {
				if(isset($data)) $this->data = json_encode($data);
				if(isset($token)) $this->token = $token;
				if(isset($board)) $this->board = $board;
				if(isset($pin)) $this->pin = $pin;
			}

			public function showBoard($token) {
				$get = file_get_contents("http://api.pinterest.com/v1/me/boards/?access_token=".$token);
				$get = json_decode($get);
				foreach($get as $key => $v) {
					for($i=0;$i < sizeof($key); $i++) {
						echo $key[$i];
					}
				}
			}

			public function showPin($board, $token) {

			}

			# Creating boards
			public function createBoard($data, $token, $board) {
				$get = file_get_contents("http://api.pinterest.com/v1/boards/")
			}

			# Deleting Boards
			public function deleteBoard($token, $board) {

			}

			# Creating Pins
			public function createPins($data, $token, $board, $pin) {

			}

			# Deleting Pins
			public function deletePins($token, $board, $pin) {

			}

	}

?>