<?php

	namespace Cioppa\FormField;

	use Illuminate\Support\ServiceProvider;

	class FormFieldServiceProvider extends ServiceProvider {

		public function register() {
            $this->app->bind('FormField', '\Cioppa\FormField\FormField');
        }

	}
