<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class Linda
 */
class Linda extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Linda';

	/**
	 * @var string
	 */
	protected $type = 'Boss/Beast';

	/**
	 * @var string
	 */
	protected $habitat = 'Underground Channel';

	/**
	 * @var int
	 */
	protected $abs = 0;

	/**
	 * @var int
	 */
	protected $gilda = 0;

	/**
	 * @var array
	 */
	protected $weaknesses = array();

	/**
	 * @var array
	 */
	protected $effective_weapons = array();

	/**
	 * @var array
	 */
	protected $ineffective_weapons = array('Wrench', 'Gun');

	/**
	 * @var array
	 */
	protected $items_dropped = array();
}
