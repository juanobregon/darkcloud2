<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class Bat
 */
class Bat extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Bat';

	/**
	 * @var string
	 */
	protected $type = 'Beast';

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
	protected $weaknesses = array('Cyclone');

	/**
	 * @var array
	 */
	protected $effective_weapons = array('Gun', 'Beam', 'Magic');

	/**
	 * @var array
	 */
	protected $ineffective_weapons = array('Wrench', 'Grenade');

	/**
	 * @var array
	 */
	protected $items_dropped = array('Holy Water', 'Wind Crystal', 'Bundle of Hay');
}
