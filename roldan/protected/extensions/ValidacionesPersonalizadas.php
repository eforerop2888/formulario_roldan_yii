<?php

Class ValidacionesPersonalizadas extends CValidator{
	
	public function validateAttribute($object, $attribute)
	{
        if ($object->$attribute == "edwar")
			$this->addError($object,$attribute,'Error no puede ser Edwar');
			exit;
	}
}
?>