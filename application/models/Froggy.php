<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class Froggy
 */
class Froggy extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Froggy';

	/**
	 * @var string
	 */
	protected $type = 'Aquatic';

	/**
	 * @var string
	 */
	protected $habitat = 'Underground Channel';

	/**
	 * @var int
	 */
	protected $abs = 6;

	/**
	 * @var int
	 */
	protected $gilda = 6;

	/**
	 * @var array
	 */
	protected $weaknesses = array('Chill', 'Lightning', 'Scale');

	/**
	 * @var array
	 */
	protected $effective_weapons = array('Sword');

	/**
	 * @var array
	 */
	protected $ineffective_weapons = array();

	/**
	 * @var array
	 */
	protected $items_dropped = array('Sea Dragon Crystal', 'Poison');
}
