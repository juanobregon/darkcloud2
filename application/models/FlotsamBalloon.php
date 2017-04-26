<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class FlotsamBalloon
 */
class FlotsamBalloon extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Flotsam Balloon';

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
	protected $abs = 10;

	/**
	 * @var int
	 */
	protected $gilda = 14;

	/**
	 * @var array
	 */
	protected $weaknesses = array('Flame', 'Lightning');

	/**
	 * @var array
	 */
	protected $effective_weapons = array('Gun', 'Grenade', 'Beam');

	/**
	 * @var array
	 */
	protected $ineffective_weapons = array('Wrench');

	/**
	 * @var array
	 */
	protected $items_dropped = array();
}
