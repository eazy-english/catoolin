<?php 

	class Connect {

		public $lib;

			public function __construct() {
				if(isset($lib)) $this->lib = $lib;
			}

			public function connect($lib) {
				if($lib == "vue-js") echo '<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.min.js"></script>';
			}


	}
?>