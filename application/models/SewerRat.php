<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class SewerRat
 */
class SewerRat extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Sewer Rat';

	/**
	 * @var string
	 */
	protected $type = 'Beast';

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
	protected $weaknesses = array('Flame', 'Beast');

	/**
	 * @var array
	 */
	protected $effective_weapons = array('Sword');

	/**
	 * @var array
	 */
	protected $ineffective_weapons = array();

	/**
	 * @var array
	 */
	protected $items_dropped = array('Hunter Crystal', 'Rolling Log');
}
