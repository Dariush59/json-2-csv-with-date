<?php 

namespace Convertor\Service;

use Exception;
use stdClass;
use function var_dump;

class Filter 
{
	
	protected $startTimestamp = '';

	protected $endTimestamp	= '';

	protected $filteredProducts = [];


	function __construct( string $startTime, string $endTime )
	{
		$this->startTimestamp = strtotime($startTime);
		$this->endTimestamp = strtotime($endTime);
	}


	public function getFilteredProducts(array $resources) : array
	{
        $inquiries = [];
        if ( !isset( $resources['inquiries'] ))
            throw new Exception( 'Product availabilities request has some issues.' );

        foreach ( $resources['inquiries'] as $inquiry ) {
            if ( $this->getActivityStartDatetimeStatus($inquiry))
                $inquiries[] = $inquiry;
        }
        return $inquiries;
	}


	private function getActivityStartDatetimeStatus($inquiry) : bool
	{
		$status = false;
		if ( $inquiry['inquiry_date'] ) {
			$timestamp = strtotime(date("Y-m-d", strtotime($inquiry['inquiry_date'])));
			if ( $timestamp >= $this->startTimestamp && $timestamp <= $this->endTimestamp )
				$status = true;
		}
		return $status;
	}

}



?>