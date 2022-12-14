<?php

namespace FernleafSystems\ApiWrappers\Whois\Whoxy\Whois;

use FernleafSystems\ApiWrappers\Base\BaseVO;

/**
 * @property string|array $domain_status
 * @property string[]     $name_servers
 * @property string       $whois_server
 * @property string       $domain_registered
 * @property int          $status
 * @property string       $domain_name
 * @property string[]     $domain_registrar
 * @property string       $query_time
 * @property string       $create_date
 * @property string       $expiry_date
 * @property string       $update_date
 */
class LookupVO extends BaseVO {

	/**
	 * @return int|string
	 */
	public function getDateCreated( bool $asTimestamp = true ) {
		$date = $this->create_date;
		return $asTimestamp ? strtotime( $date ) : $date;
	}

	/**
	 * @return int|string
	 */
	public function getDateExpiry( bool $asTimestamp = true ) {
		$date = $this->expiry_date;
		return $asTimestamp ? strtotime( $date ) : $date;
	}

	/**
	 * May not be available.
	 * @return int|string
	 */
	public function getDateUpdated( $asTimestamp = true ) {
		$date = $this->update_date;
		return $asTimestamp ? strtotime( $date ) : $date;
	}

	public function getDomainName() :?string {
		return $this->domain_name;
	}

	/**
	 * @return string[]
	 */
	public function getDomainRegistrar() {
		return $this->domain_registrar;
	}

	/**
	 * @return string|array
	 */
	public function getDomainStatus() {
		return $this->domain_status;
	}

	/**
	 * May not be available.
	 * @return string[]
	 */
	public function getNameServers() {
		return $this->name_servers;
	}

	/**
	 * @return int|string
	 */
	public function getQueryTime( bool $asTimestamp = true ) {
		$date = $this->query_time;
		return $asTimestamp ? strtotime( $date ) : $date;
	}

	public function getWhoisServer() :?string {
		return $this->whois_server;
	}

	public function isDomainRegistered() :bool {
		return strtolower( $this->domain_registered ) === 'yes';
	}

	public function isValid() :bool {
		return $this->status == 1 && !empty( $this->getDomainName() );
	}
}