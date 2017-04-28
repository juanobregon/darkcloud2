<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class Pumpkinhead
 */
class Pumpkinhead extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Pumpkinhead';

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
	protected $abs = 10;

	/**
	 * @var int
	 */
	protected $gilda = 12;

	/**
	 * @var array
	 */
	protected $weaknesses = array('Flame', 'Lightning');

	/**
	 * @var array
	 */
	protected $effective_weapons = array();

	/**
	 * @var array
	 */
	protected $ineffective_weapons = array();

	/**
	 * @var array
	 */
	protected $items_dropped = array('Antidote Drink');
}
