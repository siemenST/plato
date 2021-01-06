<?php

namespace App\Models;

class PhilosopherModel extends Model
{
    // Name of the table
    protected $model = "philosophers";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $protectedFields = [
        'id',
        'name',
        'quote',
    
    ];

    public function __construct()
    {
        parent::__construct(
            $this->model, 
            $this->limit, 
            $this->protectedFields
        );
    }

}

new PhilosopherModel;
