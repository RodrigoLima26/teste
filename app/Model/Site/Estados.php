<?php
	namespace App\Model\Site;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;
	use Illuminate\Support\Facades\DB;

	class Estados extends Model{
		protected $table = 'estados';
		protected $fillable = array('nome', 'sigla', 'fuso');

		/* se tem use SoftDeletes, cade o 'deleted_at' column na migration ? */
		// use SoftDeletes;
	}
?>