<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // /**  The attributes that are mass assignable.
     //*
     //* @var array
     //*/
    //protected $fillable = ['title', 'description'];

      /**  The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
