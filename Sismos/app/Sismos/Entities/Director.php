<?php

namespace Sismos\Entities;

class Director extends \Eloquent {
	protected $fillable = ['full_name'];
	protected $table = 'directores';
}