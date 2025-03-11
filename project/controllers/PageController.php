<?php
namespace Project\Controllers;
use \Core\Controller;

class PageController extends Controller
{
    public function show1()
    {
        echo '1';
    }
    
    public function act()
    {
        return $this->render('page/act', [
            'header' => 'список юзеров',
			'users'  => ['user1', 'user2', 'user3'],
		]);
    }
    
}