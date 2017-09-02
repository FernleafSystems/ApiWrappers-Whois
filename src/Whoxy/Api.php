<?php

namespace FernleafSystems\Apis\Whois\Whoxy;

use FernleafSystems\Apis\Base\BaseApi;

/**
 * Class Api
 * @package FernleafSystems\Apis\Whois\Whoxy
 */
class Api extends BaseApi {

	const REQUEST_METHOD = 'get';

	/**
	 * @return array
	 */
	protected function prepFinalRequestData() {
		$this->setParam( 'key', $this->getConnection()->getApiKey() );
		return parent::prepFinalRequestData();
	}

	/**
	 * @return string
	 */
	protected function getBaseUrl() {
		/** @var Connection $oCon */
		$oCon = $this->getConnection();
		$sBase = sprintf( $oCon->getBaseUrl() );
		return rtrim( $sBase, '/' ) . '/';
	}
}