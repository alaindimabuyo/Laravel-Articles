<?php 

namespace App;

class Example{

    // public function go(){
    //     dd('it works');
    // }
    protected $collaborator;
    protected $foo;

    public function __construct(Collaborator $collaborator, $foo){
        $this->collaborator = $collaborator;
        $this->foo = $foo;
    }
  
}