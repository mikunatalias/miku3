<?php 
return array(
	'title'			=>	'Текст',
	'single'		=>	'page',
	'model'			=>	'App\Miku',
	'form_width'	=>	500,
	'columns'		=>	array('id','name','url'),
	'filters'		=>	array('name'),
	'edit_fields'	=>	array('name',
							  'body'=>array('type'=>'wysiwyg',
								     		'title'=>'содержание'),
							  'url')
			);