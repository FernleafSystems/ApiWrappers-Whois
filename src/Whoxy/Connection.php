<?php

namespace FernleafSystems\Apis\Whoxy\Whois;

class Connection extends \FernleafSystems\Apis\Base\Connection {
	/**
	 * @return string
	 */
	public function getBaseUrl() {
		return 'http://api.whoxy.com/';
	}
}
