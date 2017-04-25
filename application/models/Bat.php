<?php

include 'Monster.php';

class Bat extends Monster
{
	protected $name = 'Bat';
	protected $type = 'Beast';
	protected $habitat = 'Underground Channel';
	protected $abs = 6;
	protected $gilda = 6;
	protected $weaknesses = array('Cyclone');
	protected $effective_weapons = array('Gun', 'Beam', 'Magic');
	protected $ineffective_weapons = array('Wrench', 'Grenade');
	protected $items_dropped = array('Holy Water', 'Wind Crystal', 'Bundle of Hay');
}
