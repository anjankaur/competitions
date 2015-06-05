<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model {

	protected $table = 'reviewers';
	protected $fillable = ['voted_at'];
	protected $guarded = ['id'];

	public function contests()
    {
        return $this->belongsToMany(Contest::class);
    }

}
