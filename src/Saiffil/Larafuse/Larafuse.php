<?php namespace Saiffil\Larafuse;

use Eloquent;

class Larafuse extends Eloquent
{
    protected $table = 'Larafuse';

    protected $guarded = array();

    protected $primaryKey = 'Id';

    public $timestamps = false;
}
