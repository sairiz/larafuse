<?php namespace Sairiz\Larafuse;

use Eloquent;

class Larafuse extends Eloquent
{
    protected $table = 'Larafuse';

    protected static $unguarded = true;

    protected $primaryKey = 'Id';

    public $timestamps = false;
}
