<?php
namespace Akademik;

class UserRole{
	private $role;
	public function __invoke($role)
	{
		$this->role = $role;
	}
	public function __toString()
	{
		return $this->role;
	}
}