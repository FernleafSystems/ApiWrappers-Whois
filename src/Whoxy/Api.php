<?php

namespace FernleafSystems\ApiWrappers\Whois\Whoxy;

use FernleafSystems\ApiWrappers\Base\BaseApi;

class Api extends BaseApi {

	const REQUEST_METHOD = 'get';

	protected function prepFinalRequestData() :array {
		$this->setRequestDataItem( 'key', $this->getConnection()->api_key );
		return parent::prepFinalRequestData();
	}

	protected function getBaseUrl() :string {
		/** @var Connection $conn */
		$conn = $this->getConnection();
		return rtrim( $conn->getBaseUrl(), '/' ).'/';
	}
}