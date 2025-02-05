<?php

namespace App\Models;

class User{
    private $list = [];

    public function __construct(
        public $id = null,
        public $name = null,
        public $email = null,
        public $password = null
    ){
        
    }

    private static function data(){
        return [
            new User(1, 'ahmed', 'ahmed@gmail.com', 'test123'),
            new User(2, 'test1', 'test1@gmail.com', 'test123'),
            new User(3, 'test2', 'test2@gmail.com', 'test123'),
            new User(4, 'test3', 'test3@gmail.com', 'test123'),
            new User(5, 'test4', 'test4@gmail.com', 'test123')
        ];
    }

    public function getAll(){
        return self::data();
    }

    public function getOne($id){
        return array_filter(self::data(), function($item) use($id){
            return $item->id == $id;
        })[0] ?? null;
    }
}