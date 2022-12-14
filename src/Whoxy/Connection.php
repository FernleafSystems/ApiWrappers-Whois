<?php

namespace FernleafSystems\ApiWrappers\Whois\Whoxy;

class Connection extends \FernleafSystems\ApiWrappers\Base\Connection {

	const API_URL = 'https://api.whoxy.com/';

	public function getBaseUrl() :string {
		return static::API_URL;
	}
}
