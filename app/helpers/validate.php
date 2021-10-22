<?php


function validate(array $validations, bool $persistsImputs = false, bool $checkCsrf = false){ 


if ($checkCsrf) {
	try{
		checkCsrf();
	} catch (Exception $e){
		echo $e->getMessage();
		die();
	}
	
}


	$result = [];
	$param = '';
	foreach ($validations as $field => $validate) {
		
		$result[$field] = (!str_contains($validate, '|')) ?
		singleValidation($validate, $field, $param) : 
		multipleValidations($validate, $field, $param);

}


if ($persistsImputs) {
	setOld();
}



if(in_array(false, $result)){
	return false;
}

return $result;

}




function singleValidation($validate, $field, $param){

			if(str_contains($validate, ':')){
				[$validate, $param] = explode(':', $validate);
			}

			return $validate($field, $param);
}


function multipleValidations($validate, $field, $param){

			$explodePipeValidate = explode('|', $validate);
			$result = [];
			foreach	($explodePipeValidate as $validate){

			if(str_contains($validate, ':')){
				[$validate, $param] = explode(':', $validate);
			}


					$result[$field] = $validate($field, $param);

							
				if (isset($result[$field]) and $result[$field] === false){
					break;
				}
			
			}

			return $result[$field];
}

