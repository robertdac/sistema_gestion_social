<?php namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usuarios';


	protected $fillable = ['name', 'email', 'password'];


	protected $hidden = ['password', 'remember_token'];


	static function usuarios($id=null){


		if( trim($id) != ""  ) {


			$users = DB::table('usuarios')
				->join('secretaria', 'usuarios.id_secretaria', '=', 'secretaria.id')
				->join('subsecretaria', 'usuarios.id_subsecre', '=', 'subsecretaria.id')
				->join('perfiles', 'usuarios.id_perfil', '=', 'perfiles.id')
				->join('cargos', 'usuarios.id_cargo', '=', 'cargos.id')
				->join('coordinacion', 'usuarios.id_coordinacion', '=', 'coordinacion.id')
				->where('usuarios.nombres','like','%'.$id.'%')
				->select('usuarios.id AS iduser', 'usuarios.id_estatus AS estatus', 'usuarios.cedula', 'usuarios.nombres', 'usuarios.apellidos', 'usuarios.email', 'secretaria.descripcion AS secre', 'subsecretaria.descripcion AS subse', 'perfiles.nombre AS per', 'cargos.nombre AS car', 'coordinacion.nombre AS coor')
				->paginate(10);
			//->get();
		}else{

			$users = DB::table('usuarios')
				->join('secretaria', 'usuarios.id_secretaria', '=', 'secretaria.id')
				->join('subsecretaria', 'usuarios.id_subsecre', '=', 'subsecretaria.id')
				->join('perfiles', 'usuarios.id_perfil', '=', 'perfiles.id')
				->join('cargos', 'usuarios.id_cargo', '=', 'cargos.id')
				->join('coordinacion', 'usuarios.id_coordinacion', '=', 'coordinacion.id')
				->select('usuarios.id AS iduser', 'usuarios.id_estatus AS estatus', 'usuarios.cedula', 'usuarios.nombres', 'usuarios.apellidos', 'usuarios.email', 'secretaria.descripcion AS secre', 'subsecretaria.descripcion AS subse', 'perfiles.nombre AS per', 'cargos.nombre AS car', 'coordinacion.nombre AS coor')
				->paginate(10);

		}



return $users;


	}


	static function ver_usuarios($id){

		$users=  DB::table('usuarios')
			->join('secretaria', 'usuarios.id_secretaria', '=', 'secretaria.id')
			->join('subsecretaria', 'usuarios.id_subsecre', '=', 'subsecretaria.id')
			->join('perfiles', 'usuarios.id_perfil', '=', 'perfiles.id')
			->join('cargos', 'usuarios.id_cargo', '=', 'cargos.id')
			->join('coordinacion', 'usuarios.id_coordinacion', '=', 'coordinacion.id')
			->select('usuarios.id AS iduser','usuarios.id_estatus AS estatus','usuarios.cedula','usuarios.nombres','usuarios.apellidos','usuarios.email','secretaria.descripcion AS secre','subsecretaria.descripcion AS subse','perfiles.nombre AS per','cargos.nombre AS car','coordinacion.nombre AS coor')
			->where('usuarios.id','=',$id)
			->get();

		return $users;


	}



	public function scopeName($query ,$name){
		if(trim($name) != ""  ) {
			$query->where('nombres', $name);
		}


	}






}
