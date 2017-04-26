<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class Darkness
 */
class Darkness extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Darkness';

	/**
	 * @var string
	 */
	protected $type = 'Undead';

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
	protected $gilda = 12;

	/**
	 * @var array
	 */
	protected $weaknesses = array('Exorcism');

	/**
	 * @var array
	 */
	protected $effective_weapons = array('Beam', 'Magic');

	/**
	 * @var array
	 */
	protected $ineffective_weapons = array('Wrench', 'Sword', 'Gun', 'Grenade');

	/**
	 * @var array
	 */
	protected $items_dropped = array('Bomb Nut', 'Holy Crystal', 'Silver Ball');
}
