<?php

class User extends AppModel {

   public $useTable = 'usuarios';
   public $hasOne = 'Address';

}

?>