<?php 

	class Connect {

		public $lib;

			public function __construct() {
				if(isset($lib)) $this->lib = $lib;
			}

			public function connect($lib) {
				switch ($lib) {
					case "vue-js":
						echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.min.js"></script>';
						echo "\n";
						break;
					case "jquery":
						echo '<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"></script>';
  						echo "\n";
						break;
  					case "video-js":
  						echo '<script src="https://vjs.zencdn.net/5.19.2/video.js"></script>
  							<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>';
  						echo "\n";
						break;
  					case "angular-js":
  						echo '<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>';
  						echo "\n";
						break;
  					case "bootstrap":
  						echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
  						echo "\n";
						break;
  					case "mui":
  						echo '<script src="//cdn.muicss.com/mui-0.9.16/js/mui.min.js"></script>';
  						echo "\n";
						break;
					default:
						return "";
						break;
				}
			}
			public function link($lib) {
				switch ($lib) {
					case "bootstrap":
						echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
						echo "\n";
						break;
					case "video-js":
						echo '<link href="http://vjs.zencdn.net/5.19.2/video-js.css" rel="stylesheet">';
						echo "\n";
						break;
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