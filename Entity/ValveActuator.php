<?php
namespace Bubelbub\SmartHomePHP\Entity;

/**
 *
 * @author Ollie
 *        
 */
class ValveActuator extends Actuator {
	
	/**
	 * @var Integer
	 */
	protected $valveIndex = NULL;
	
	/**
	 */
	function __construct() {
		$this->setType(parent::DEVICE_TYPE_VALVE_ACTUATOR);
	}
	
	/**
	 * Sets the valve index.
	 * 
	 * @param Integer $valveIndex
	 * @throws \Exception
	 */
	function setValveIndex($valveIndex) {
		if(!is_int($valveIndex))
			throw new \Exception('Valve index must be an integer!');
		$this->valveIndex = $valveIndex;
	}
	
	/**
	 * Returns the valve index.
	 */
	function getValveIndex() {
		return $this->valveIndex;
	}
}

?>