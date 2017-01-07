<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sme_user';
}
class students extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'joswa';
}
class Online extends Model{
    protected $table = "sessions";
    //public $timestamps = false;
}
class Users1 extends Model{
	public $timestamps = false;
    protected $table = "sme_ueser";
    //public $timestamps = false;
}
class UserDet extends Model{
    protected $table = "sme_user";
    //public $timestamps = false;
}