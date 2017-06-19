<?php 
	/* Connect class, by Mr CaT
	For connecting js, css libraries (for example: Bootstrap, Material UI, Vue JS, Angular JS, Video JS)
	Script had been written in 2017 by Mr CaT
	Copyright (c) 2017 -> Mr CaT
	*/
	class Connect {

		# Our Library, variable for "libs"
		public $lib;

			public function __construct() {
				# If our var is set, we just return our var
				if(isset($lib)) $this->lib = $lib;
			}

			public function connect($lib) {
				switch ($lib) {
					# Connectiong Vue JS
					case "vue-js":
						echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.min.js"></script>';
						echo "\n";
						break;
					# Connecting JQuery
					case "jquery":
						echo '<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"></script>';
  						echo "\n";
						break;
					# Connecting Video JS
  					case "video-js":
  						echo '<script src="https://vjs.zencdn.net/5.19.2/video.js"></script>
  							<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>';
  						echo "\n";
						break;
					# Connecting Angular JS
  					case "angular-js":
  						echo '<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>';
  						echo "\n";
						break;
					# Connecting Bootstrap plugins
  					case "bootstrap":
  						echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
  						echo "\n";
						break;
					# Connecting Material UI ` s plugins
  					case "mui":
  						echo '<script src="//cdn.muicss.com/mui-0.9.16/js/mui.min.js"></script>';
  						echo "\n";
						break;
					# Connecting Less JS
					case "less-js":
  						echo '<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>';
  						echo "\n";
						break;

					default:
						return "";
						break;
				}
			}
			public function link($lib) {
				switch ($lib) {
					# Connecting Bootstrap
					case "bootstrap":
						echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
						echo "\n";
						break;
					# Connecting Video JS stylesheet file
					case "video-js":
						echo '<link href="https://vjs.zencdn.net/5.19.2/video-js.css" rel="stylesheet">';
						echo "\n";
						break;
					# Connecting Material UI
					case "mui":
						echo '<link href="//cdn.muicss.com/mui-0.9.16/css/mui.min.css" rel="stylesheet" type="text/css">';
						echo "\n";
						break;
					default:
						return "";
						break;
				}
			}


	}
?>