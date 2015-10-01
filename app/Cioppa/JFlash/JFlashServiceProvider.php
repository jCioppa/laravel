<?php

	namespace Cioppa\JFlash;

	use Illuminate\Support\ServiceProvider;

	class JFlashServiceProvider extends ServiceProvider {

		public function register() {
			$this->app->bind('JFlash', '\Cioppa\JFlash\JFlash');
		}

	}
