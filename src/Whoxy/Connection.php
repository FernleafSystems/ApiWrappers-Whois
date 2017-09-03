<?php

namespace FernleafSystems\ApiWrappers\Whois\Whoxy;

/**
 * Class Connection
 * @package FernleafSystems\ApiWrappers\Whois\Whoxy
 */
class Connection extends \FernleafSystems\ApiWrappers\Base\Connection {
	/**
	 * @return string
	 */
	public function getBaseUrl() {
		return 'http://api.whoxy.com/';
	}
}
