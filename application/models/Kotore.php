<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class Kotore
 */
class Kotore extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Kotore';

	/**
	 * @var string
	 */
	protected $type = 'Flora';

	/**
	 * @var string
	 */
	protected $habitat = 'Butterfly Wood';

	/**
	 * @var int
	 */
	protected $abs = 0;

	/**
	 * @var int
	 */
	protected $gilda = 0;

	/**
	 * @var array
	 */
	protected $weaknesses = array('Flame', 'Lightning');

	/**
	 * @var array
	 */
	protected $effective_weapons = array('Grenade');

	/**
	 * @var array
	 */
	protected $ineffective_weapons = array();

	/**
	 * @var array
	 */
	protected $items_dropped = array();
}
