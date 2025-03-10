<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'), // роут для приветственной страницы, можно удалить
		new Route('/my-page1/', 'page', 'show1'),
		new Route('/my-page2/', 'page', 'show2'),
		new Route('/test1/', 'test', 'act1'),
		new Route('/test2/', 'test', 'act2'),
		new Route('/test3/', 'test', 'act3'),
		new Route('/user/all/', 'user', 'all'),
		new Route('/nums/:n1/:n2/:n3/', 'num', 'act'),
		new Route('/user/first/:n/', 'user', 'first'),
		new Route('/user/:id/:key/', 'user', 'info'),
		
		
	];
	
