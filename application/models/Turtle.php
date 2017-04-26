<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class Turtle
 */
class Turtle extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Turtle';

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
	protected $weaknesses = array('Lightning', 'Smash');

	/**
	 * @var array
	 */
	protected $effective_weapons = array('Wrench', 'Grenade', 'Beam');

	/**
	 * @var array
	 */
	protected $ineffective_weapons = array('Sword', 'Gun');

	/**
	 * @var array
	 */
	protected $items_dropped = array('Stone', 'Protector Crystal', 'Water Element');
}
