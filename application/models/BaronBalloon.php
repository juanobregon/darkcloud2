<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class BaronBalloon
 */
class BaronBalloon extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Baron Balloon';

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
	protected $gilda = 9;

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
	protected $items_dropped = array('Bomb Nut', 'Wind Crystal');
}
