<?php

    namespace Cioppa\FormField;

    use Config, Form;

    class FormField {

        protected static $instance;
    
        public function  __call($name, $args)
        {
            $args = empty($args) ? [] : $args[0];
            $instance = static::$instance;
            if (!$instance) $instance = static::$instance = new static;
            return $instance->make($name, $args);
        }

        public function make($name, array $args){
            $wrapper = $this->createWrapper();
            $field = $this->createField($name, $args);
            return str_replace('{{FIELD}}', $field, $wrapper);
        }

        protected function createWrapper(){
            $wrapper = Config::get('form.wrapper');
            $wrapperClass = Config::get('form.wrapperClass');
            return '<' . $wrapper .  ' class = "' . $wrapperClass . '">{{FIELD}}</' . $wrapper . '>';
        }

        protected function createField($name, $args) {
            $type = array_get($args, 'type') ?: $this->guessInputType($name);
            $args = array_merge(['class' => Config::get('form.inputClass')], $args);
            $field = $this->createLabel($args, $name);
            unset($args['label']);
            return $field .= $this->createInput($type, $args, $name);
        }   

        protected function createLabel($args, $name){
            $label = array_get($args, 'label');
            is_null($label) and $label = $this->prettifyFieldName($name) . ': ';
            return $label ? Form::label($name, $label, array('class' => 'control-label')) : '';
        } 

        protected function createInput($type, $args, $name){
            return $type == 'password' 
                ? Form::password($name, $args) 
                : Form::$type($name, null, $args);
        }

        protected function guessInputType($name){
            return array_get(Config::get('form.commonInputsLookup'), $name) ?: 'text';
        }

        protected function prettifyFieldName($name){
            return ucwords(preg_replace('/(?<=\w)(?=[A-Z])/', " $1", $name));
        }

    
    }
