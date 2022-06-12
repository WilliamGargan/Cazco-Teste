<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

        /** @var string $table */
        public $table = 'users';

        /** @var string $primaryKey */
        public $primaryKey = 'id';
    
        /**
         * The attributes that are mass assignable.
         *
         * @var string[]
         */
        protected $fillable = [
            'name',
            'email',
            'password'
        ];
}
