<?php


namespace App\Search\Domain;


class Search extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'searches';

    public function getId()
    {
        return $this->id;
    }
}
