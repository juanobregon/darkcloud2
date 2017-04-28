<?php

include_once APPPATH . 'models/Monster.php';

/**
 * Class SkeletonSoldier
 */
class SkeletonSoldier extends Monster
{
	/**
	 * @var string
	 */
	protected $name = 'Skeleton Soldier';

	/**
	 * @var string
	 */
	protected $type = 'Undead';

	/**
	 * @var string
	 */
	protected $habitat = 'Butterfly Wood';

	/**
	 * @var int
	 */
	protected $abs = 14;

	/**
	 * @var int
	 */
	protected $gilda = 14;

	/**
	 * @var array
	 */
	protected $weaknesses = array('Flame', 'Exorcism');

	/**
	 * @var array
	 */
	protected $effective_weapons = array('Wrench');

	/**
	 * @var array
	 */
	protected $ineffective_weapons = array('Gun', 'Magic');

	/**
	 * @var array
	 */
	protected $items_dropped = array('Poison Apple', 'Holy Crystal', 'Unknown Bone');
}
