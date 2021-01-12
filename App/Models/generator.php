<?php



namespace App\Controllers;
// require '../../Core/bootstrap.php'; huh waarom werkt dit niet?

// use App\Libraries\View;



class QuoteController
{
    public function random($id, $philosophers)
    {
          
       $sql = "SELECT 'id' FROM `" . $philosophers . "` WHERE 'id'=". $id;
    
       $res = MySql::query($sql);

       return $res->rowCount() > 0;

       print_r($row);

    }

}