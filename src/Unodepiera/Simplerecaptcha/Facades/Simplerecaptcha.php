<?php

namespace Unodepiera\Simplerecaptcha\Facades;

use Illuminate\Support\Facades\Facade;

class Simplerecaptcha extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'simplerecaptcha';
	}
} 