<?php
	namespace App\Model\Site;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;
	use Illuminate\Support\Facades\DB;

	class Estados extends Model{
		protected $table = 'estados';
		protected $fillable = array('nome', 'sigla', 'fuso');
		use SoftDeletes;
	}
?>