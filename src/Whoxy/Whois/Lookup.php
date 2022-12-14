<?php

namespace FernleafSystems\ApiWrappers\Whois\Whoxy\Whois;

use FernleafSystems\ApiWrappers\Whois\Whoxy\Api;
use LayerShifter\TLDExtract\Extract;

class Lookup extends Api {

	public function lookup( string $domain ) :LookupVO {
		$result = $this->setDomain( $domain )
					   ->send()
					   ->getDecodedResponseBody();
		return ( new LookupVO() )->applyFromArray( $result );
	}

	protected function getVO() :LookupVO {
		return new LookupVO();
	}

	public function setDomain( string $domain ) :self {
		return $this->setRequestDataItem( 'whois', $this->parseDomain( $domain ) );
	}

	protected function parseDomain( string $domain ) :?string {
		return ( new Extract() )
			->parse( $domain )
			->getRegistrableDomain();
	}
}