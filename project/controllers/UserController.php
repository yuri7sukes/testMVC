<?php
namespace Project\Controllers;
use \Core\Controller;

class UserController
{
    private $users;

    public function __construct()
    {
        $this->users = [
            1 => ['name'=>'user1', 'age'=>'23', 
                'salary' => 
                1000], 
            2 => ['name'=>'user2', 'age'=>'24', 
                'salary' => 
                2000], 
            3 => ['name'=>'user3', 'age'=>'25', 
                'salary' => 
                3000], 
            4 => ['name'=>'user4', 'age'=>'26', 
                'salary' => 
                4000], 
            5 => ['name'=>'user5', 'age'=>'27', 
                'salary' => 
                5000], 
        ];
    }

    public function show($params)
    {
        echo $this->users[ $params['id'] ]['name']; // выводим страницу по номеру 
    }

    public function info($params)
    {
        echo $this->users[$params['id']][$params['key']];
    }

    public function all()
    {
        // echo "<pre>";
        // print_r($this->users);
        // echo "</pre>";
        
        foreach ($this->users as $user) {
            echo $user['name'] . '<br>';
        }
    }

    public function first($params)
    {
        

    }
}