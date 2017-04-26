<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class NightStalker
 */
class NightStalker extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Night Stalker';

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
	protected $abs = 8;

	/**
	 * @var int
	 */
	protected $gilda = 9;

	/**
	 * @var array
	 */
	protected $weaknesses = array('Flame', 'Exorcism');

	/**
	 * @var array
	 */
	protected $effective_weapons = array('Magic');

	/**
	 * @var array
	 */
	protected $ineffective_weapons = array();

	/**
	 * @var array
	 */
	protected $items_dropped = array('Holy Water', 'Flame Crystal', 'Glass Material');
}
