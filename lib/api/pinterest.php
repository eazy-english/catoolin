<?php

	/* PinterestAPI class, by Mr CaT for working with Pinterest API
	Created just for working with Pinterest API, u won't do math
	Copyright (c) 2017 by Mr CaT */
	#####	#	##   #	#######	#####	#####	#####	#####	#######
	#    #	#	# #  #	   #	#		#	 #  #		#		   #
	#####	#	#  # #	   #	###		#####	###		#####	   #
	#		#	#   ##	   #	#		#	 #	#			#	   #
	#		#	#   ##     #	#####	#	 #	#####	#####	   #
	
	class PinterestAPI {


		# Access Token, with this u work with API

		public $token;

		# THE NAME of PIN or BOARD

		public $name;

		# The Description of our Pin or Board

		public $description;

		# Our note for pin

		public $note;

		# Our image to our pin

		public $img_url;

		# Board , in board, u carry pins

		public $board_id;

		# Pin , it'll be a picture with description

		public $pin;

			# Simple construct
			public function __construct() {
				# The NAME TO OUR Board or Pin
				if(isset($name)) $this->name = $name;
				# The Description of our BOARD or Pin
				if(isset($description)) $this->description = $description;
				# Our ACCESS TOKEN
				if(isset($token)) $this->token = $token;
				# Note ypur Pin
				if(isset($note)) $this->note = $note;
				# Image for our pin
				if(isset($img_url)) $this->img_url = $img_url;
				# Board ID for deleting boards, pins, actually for creating pins
				if(isset($board_id)) $this->board_id = $board_id;
				# Pin ID, for deleting pins
				if(isset($pin)) $this->pin = $pin;
			}

			public function showBoard($token) {
				# Getting "data" from $get var
				$get = file_get_contents("https://api.pinterest.com/v1/me/boards/?access_token=".$token);
				# Decoding JSON to simple string
				$get = json_decode($get);
				# Getting Object
				foreach($get->data as $v) {
					echo "id of board => " , $v->id , " => " , $v->name , "<br />";
				}
			}

			public function showPin($board_id, $token) {
				# Getting "data" from $get var
				$get = file_get_contents("https://api.pinterest.com/v1/boards/" . $board_id ."/pins/?access_token=".$token);
				# Decoding JSON to simple string
				$get = json_decode($get);
				foreach($get->data as $v) {
					echo "ID of the pin => " , $v->id  , '<br/><a target="_blank" href="', $v->url , '">' , $v->note , '</a><br/>';
				}
			}

			# Creating boards
			public function createBoard($name, $description, $token) {
				# Our "data" for creating boards
				$data = ['name' => $name, 'description' => $description];
				# But now we encode it, that SERVER could understand what we had sent him
				$encoded = json_encode($data);
				# Init cURL session
				$ch = curl_init();
				# Showing the URL
				curl_setopt($ch, CURLOPT_URL, "http://api.pinterest.com/v1/boards/?access_token" , $token);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				# Selecting POST Request
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				# Turning it on
				curl_setopt($ch, CURLOPT_POST, true);
				# Now we showed our JSON ENCODED "data"
				curl_setopt($ch, CURLOPT_POSTFIELDS, $encoded);
				curl_setopt($ch, CURLOPT_HEADER, true);
				curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type" => "application/json","Content-Length" . strlen($encoded)
				]);
				$out = curl_exec($ch);
				print_r($out);
				curl_close($ch);
			}

			# Deleting Boards
			public function deleteBoard($token, $board_id) {
				# Board ID
				$board_id = (int) $board_id;
				# Init cURL session
				$ch = curl_init();
				# Showing the URL
				curl_setopt($ch, CURLOPT_URL, "http://api.pinterest.com/v1/boards/" , $board_id , "?access_token".$token);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				# Choosing in this time DELETE Request
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
				curl_setopt($ch, CURLOPT_HEADER, true);
				$out = curl_exec($ch);
				print_r($out);
			}

			# Creating Pins
			public function createPins($note, $img_url, $token, $board_id) {
				# Our data
				$data = ['board' => $board_id, 'note' => $note, 'image_url' => $img_url];
				# Encoding to JSON
				$encoded = json_encode($data);

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "http://api.pinterest.com/v1/pins/?access_token" , $token);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				# Selecting POST Request
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				# Turning it on
				curl_setopt($ch, CURLOPT_POST, true);
				# Now we showed our JSON ENCODED "data"
				curl_setopt($ch, CURLOPT_POSTFIELDS, $encoded);
				curl_setopt($ch, CURLOPT_HEADER, true);
				curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type" => "application/json","Content-Length" .strlen($encoded)]);
				$out = curl_exec($ch);
				print_r($out);
				curl_close($ch);
			}

			# Deleting Pins
			public function deletePins($token, $board_id, $pin) {
				# Our Pin ID for creating DELETE Request
				$pin = (int) $pin;
				# Init cURL session
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "http://api.pinterest.com/v1/pins/$pin?access_token" , $token);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				# In this time, we choose DELETE Request
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
				curl_setopt($ch, CURLOPT_HEADER, true);
				$out = curl_exec($ch);
				print_r($out);
			}

	}

?>
