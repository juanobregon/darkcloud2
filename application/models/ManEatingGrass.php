<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class ManEatingGrass
 */
class ManEatingGrass extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'ManEating Grass';

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
	protected $weaknesses = array('Flame');

	/**
	 * @var array
	 */
	protected $effective_weapons = array('Sword');

	/**
	 * @var array
	 */
	protected $ineffective_weapons = array('Wrench');

	/**
	 * @var array
	 */
	protected $items_dropped = array('Battan', 'Earth Element');
}
