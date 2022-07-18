<?php
abstract class Db
{
    protected $file = '';
    protected $content = [];

    function getFromFile()
    {
        $this->content = json_decode(
            file_get_contents($this->file), true
        );
    }
    function setFromFile()
    {
        file_put_contents($this->file, json_encode($this->content));
    }
}

class Users extends Db{
    protected $file = 'user.json';

    function setContect($userDetails){
        
        $this->content = array_merge($this->content, $userDetails);
        var_dump($this->content);
        
    }
}

class Orders extends Db{

}

$users1 = new Users();
$users1 -> getFromFile();
$users1 -> setContect(["meir"=>["id"=>4,"status"=> 'inActive']]);
$users1 -> setFromFile();
