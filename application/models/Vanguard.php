<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class Vanguard
 */
class Vanguard extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Vanguard';

	/**
	 * @var string
	 */
	protected $type = 'Windup';

	/**
	 * @var string
	 */
	protected $habitat = 'Underground Channel';

	/**
	 * @var int
	 */
	protected $abs = 16;

	/**
	 * @var int
	 */
	protected $gilda = 14;

	/**
	 * @var array
	 */
	protected $weaknesses = array('Lightning');

	/**
	 * @var array
	 */
	protected $effective_weapons = array();

	/**
	 * @var array
	 */
	protected $ineffective_weapons = array('Wrench', 'Sword', 'Gun', 'Beam', 'Magic');

	/**
	 * @var array
	 */
	protected $items_dropped = array('Repair Powder', 'Power Crystal', 'Hunk of Copper');
}
