<?php
namespace Lib;
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

			public function lib($lib, $jqueryVersion = null) {
					$libs = [
						'vuejs' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.min.js"></script>',
						'jquery' => '<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>',
						'videojs' => '<script src="https://vjs.zencdn.net/5.19.2/video.js"></script>',
						'bootstrap' => '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>',
						'mui' => '<script src="//cdn.muicss.com/mui-0.9.16/js/mui.min.js"></script>',
						'lessjs' => '<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>',
						'metroui' => '<script src="http://cdn.metroui.org.ua/js/metro.min.js"></script>'
					];
					$newLine = "\n";
					if (array_key_exists($lib, $libs)) {
						if ($lib == 'jquery' && $jqueryVersion != null) {
							$libs['jquery'] = '<script src="https://code.jquery.com/jquery-' . $jqueryVersion . '.min.js"></script>';
							$checkingInCase = curl_init();
							// curl_setopt($checkingInCase, CURL_OPT_HEADER, 1);
							// echo curl_getinfo($checkingInCase, CURLINFO_HTTP_CODE);
							// echo curl_getinfo($checkingInCase, CURLINFO_HTTP_CODE);
							// curl_exec($checkingInCase);
							$checking = curl_setopt($checkingInCase, CURLOPT_URL, 'https://code.jquery.com/jquery-' . $jqueryVersion . '.min.js');
							$checking = curl_setopt($checkingInCase, CURLOPT_HEADER, 1);
							$checking = curl_setopt($checkingInCase, CURLOPT_FOLLOWLOCATION, 1);
							$checking = curl_setopt($checkingInCase, CURLOPT_RETURNTRANSFER, 1);
							$checking = curl_exec($checkingInCase);
							$information = curl_getinfo($checkingInCase);
							// if (curl_errno($checkingInCase)) return false;
							// else ;
							curl_close($checking);
							// echo $information['http_code'];
							if ($information['http_code'] != 200) return false;
						}

						$result =  $libs[$lib] . $newLine;
						return $result;
					}

					return false;
			}
			public function link($lib) {
				switch ($lib) {
					# Connecting Bootstrap
					case "bootstrap":
						echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
						echo "\n";
						break;
					# Connecting Video JS stylesheet file
					case "videojs":
						echo '<link href="https://vjs.zencdn.net/5.19.2/video-js.css" rel="stylesheet">';
						echo "\n";
						break;
					# Connecting Material UI
					case "mui":
						echo '<link href="//cdn.muicss.com/mui-0.9.16/css/mui.min.css" rel="stylesheet" type="text/css">';
						echo "\n";
						break;
					# Connecting MetroUI
					case "metroui":
						echo '<link rel="stylesheet" href="http://cdn.metroui.org.ua/css/metro.min.css">';
						echo "\n";
						break;
					default:
						return "";
						break;
				}
			}


	}
