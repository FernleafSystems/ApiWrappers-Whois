<?php

namespace FernleafSystems\Apis\Whois\Whoxy;

class Connection extends \FernleafSystems\Apis\Base\Connection {
	/**
	 * @return string
	 */
	public function getBaseUrl() {
		return 'http://api.whoxy.com/';
	}
}
