<?php

return [
'POST' => [
'/login' => 'Login@store',
'/user/store' => 'User@store',
'/secret/super/user' => 'Admin@store',
'/question/resp' => 'Question@respo',
'/question/answer' => 'Answer@question',
'/question/add' => 'QuestionAdd@questionAdd'

],


'GET' => [
	'/' => 'Home@index',
	'/user/create' => 'User@create',
	'/user/[0-9]+' => 'User@show',
	'/api/states' => 'States@index',
	'/api/cites' => 'Cite@index',
	'/resp/[0-9]+' => 'Resp@show',
	'/login' => 'Login@index',
	'/question/online_tests' => 'Online_tests@show',
	'/question' => 'Question@show',
	'/logout' => 'Login@destroy',
	'/logout/admin' => 'Admin@destroy',
	'/secret/super/user' => 'Admin@secret',
	'/secret/super/admin_logado' => 'Admin@logged',

	'/question/answer' => 'Answer@listar',
	'/questionadd' => 'QuestionAdd@questionAddNew',
	'/question/estudent/[0-9]' => 'QuestionAdd@estudent',
	'/question/estudents/[0-9]' => 'QuestionAdd@estudents',
	'/questions/[0-9]+' => 'Answer@show',
	'/subquestion/[0-9]+' => 'QuestionAdd@subcategoria'


]

];

?>