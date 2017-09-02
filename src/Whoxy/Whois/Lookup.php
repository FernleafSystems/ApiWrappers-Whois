<?php

namespace FernleafSystems\Apis\Whois\Whoxy\Whois;

use FernleafSystems\Apis\Whois\Whoxy\Api;
use LayerShifter\TLDExtract\Extract;

/**
 * Class Lookup
 * @package FernleafSystems\Apis\Whois\Whoxy\Whois
 */
class Lookup extends Api {

	/**
	 * @param string $sDomain
	 * @return LookupVO
	 */
	public function lookup( $sDomain ) {
		$oLookup = new LookupVO();

		$aResult = $this->setDomain( $sDomain )
		                ->send()
		                ->getDecodedResponseBody();

		if ( is_array( $aResult ) && !empty( $aResult ) ) {
			$oLookup = $oLookup->applyFromArray( $aResult );
		}
		return $oLookup;
	}

	/**
	 * @param string $sDomain
	 * @return $this
	 */
	public function setDomain( $sDomain ) {
		return $this->setRequestDataItem( 'whois', $this->parseDomain( $sDomain ) );
	}

	/**
	 * @param string $sDomain
	 * @return null|string
	 */
	protected function parseDomain( $sDomain ) {
		return ( new Extract() )
			->parse( $sDomain )
			->getRegistrableDomain();
	}
}