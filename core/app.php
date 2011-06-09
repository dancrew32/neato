<?php
class app {
	protected static $_data = array();

	public static function set($key, $value) {
		self::$_data[$key] = $value;
	}

	public static function get($key, $default = null) {
		if (array_key_exists($key, self::$_data)) {
			return self::$_data[$key];
		}
		return $default;
	}

	// Auto Include files in a folder
	public function getClasses($folder='lib') {
		foreach (glob($folder . '/*.php') as $class) {
			include $class;
		}
	}

	// Template parser
	public function view($template) {
		$data = self::get('data');
		ob_start();
		include($template);
		$pageHTML = ob_get_contents();
		ob_end_clean();
		return $pageHTML;
	}

	public static function setRoutes ($urls) {
		$method = strtoupper($_SERVER['REQUEST_METHOD']);
		$path = $_SERVER['REQUEST_URI'];

		$found = false;

		krsort($urls);

		foreach ($urls as $regex => $class) {
			$regex = str_replace('/', '\/', $regex);
			$regex = '^' . $regex . '\/?$';
			if (preg_match("/$regex/i", $path, $matches)) {
				$found = true;
				if (class_exists($class)) {
					$obj = new $class;
					if (method_exists($obj, $method)) {
						$obj->$method($matches);
					} else {
						throw new BadMethodCallException("Method, $method, not supported.");
					}
				} else {
					throw new Exception("Class, $class, not found.");
				}
				break;
			}
		}
		if (!$found) {
			throw new Exception("URL, $path, not found.");
		}
	}

	public function isAjax() {
		return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
			strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
	}

	public function setHeaders($fileType, $seconds=null) {
		if ($seconds != null) {
			header('Cache-Control: max-age='. $seconds);
			header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + $seconds));
		} else {
			header('Cache-Control: no-cache, must-revalidate');
			header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		}
		header('Content-type: '. $fileType);
	}
}
