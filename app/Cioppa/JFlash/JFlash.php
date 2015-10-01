<?php

	namespace Cioppa\JFlash;

	class JFlash {

		static function create($title, $message, $type, $flash_type = 'flash_message'){                                              
			return session()->flash($flash_type,                                                                                 
			[                                                                                                                    
				'title' => $title,                                                                                           
				'message' => $message,                                                                                       
				'type' => $type                                                                                              
			]);                                                                                                                  
		}                                                                                                                            

		static function overlay($title, $message, $type){                                                                            
			return self::create($title, $message, $type, 'flash_message_overlay');                                               
		}                                                                                                                            

		static function message($title, $message){                                                                                   
			return self::create($title, $message, 'info');                                                                       
		}                                                                                                                            

		static function info($title, $message){                                                                                      
			return self::create($title, $message, 'info');                                                                       
		}                                                                                                                            

		static function warning($title, $message){                                                                                   
			return self::create($title, $message, 'warning');                                                                    
		}      

		static function error($title, $message){                                                                                     
			return self::create($title, $message, 'error');                                                                      
		}                                                                                                                            

		static function success($title, $message){                                                                                   
			return self::create($title, $message, 'success');                                                                    
		}                                                                                                                            

		static function getMessage(){                                                                                                
			return Session::get('flash_message.title');                                                                          
		}                                                                                                                            

		static function getTitle(){                                                                                                  
			return Session::get('flash_message.message');                                                                        
		}                                                                                                                            

		static function getType(){                                                                                                   
			return Session::get('flash_message.type');                                                                           
		}      

	}

