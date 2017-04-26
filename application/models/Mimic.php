<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class Mimic
 */
class Mimic extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Mimic';

	/**
	 * @var string
	 */
	protected $type = 'Magical Creature';

	/**
	 * @var string
	 */
	protected $habitat = 'Underground Channel';

	/**
	 * @var int
	 */
	protected $abs = 8;

	/**
	 * @var int
	 */
	protected $gilda = 12;

	/**
	 * @var array
	 */
	protected $weaknesses = array('Flame', 'Smash');

	/**
	 * @var array
	 */
	protected $effective_weapons = array('Beam');

	/**
	 * @var array
	 */
	protected $ineffective_weapons = array('Gun');

	/**
	 * @var array
	 */
	protected $items_dropped = array('Destruction Crystal');
}
