<?php

	namespace Cioppa\Facades;

	use Illuminate\Support\Facades\Facade;

	class JFlash extends Facade {

		protected static function getFacadeAccessor() {
			return "JFlash";
		}

	}
