<?php
	namespace model;
	trait Traits {
		
		public function traits(Array $arr){
			$atributos = get_class_vars(__CLASS__);
			foreach ($arr as $key => $value) {
				if(array_key_exists($key, $atributos)){
					$this->$key = $value;
				}
			}
		}
	}

