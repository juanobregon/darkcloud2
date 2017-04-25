<?php

abstract class Monster
{
	protected $name;
	protected $type;
	protected $habitat;
	protected $abs;
	protected $gilda;
	protected $weaknesses;
	protected $effective_weapons;
	protected $ineffective_weapons;
	protected $items_dropped;
	
	public function getName()
	{
		return $this->name;
	}
	public function getType()
	{
		return $this->type;
	}
	public function getHabitat()
	{
		return $this->habitat;
	}
	public function getAbs()
	{
		return $this->abs;
	}
	public function getGilda()
	{
		return $this->gilda;
	}
	public function getWeaknesses()
	{
		return $this->weaknesses;
	}
	public function getEffectiveWeapons()
	{
		return $this->effective_weapons;
	}
	public function getIneffectiveWeapons()
	{
		return $this->ineffective_weapons;
	}
	public function getItemsDropped()
	{
		return $this->items_dropped;
	}
	
	
	
}
