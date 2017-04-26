<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class Clown
 */
class Clown extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Clown';

	/**
	 * @var string
	 */
	protected $type = 'Darkling';

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
	protected $weaknesses = array('Flame', 'Chill');

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
	protected $items_dropped = array('Bread', 'Protector Crystal', 'Sugar Cane');
}
