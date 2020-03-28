<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','ssn','username','phone','tnphone','buytype',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
   public function gettablecolumns()
    {
        $qry="SELECT column_name
        FROM information_schema.columns 
        WHERE table_name = 'users'
        AND table_schema = 'laravel'";
        
        $result = DB::select($qry);
        $result = $this->transposedata($result);
        return $result;
        
    }
    public function transposedata($data){
        $result = array();
        foreach($data as $row => $columns){
            foreach($columns as $row2 => $columns2){
                $result[$row2][$row] = $columns2;
            }
        }
        return $result;
    }
    public function getall(){
       return collect(DB::select('select * from '.$this->getTable())) ;
    }
}
