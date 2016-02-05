<?php namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class opciones_perfiles extends Model
{

    protected $table = "opciones_perfiles";

    //protected  $table="opciones";

    static function  menu($id, $user)
    {

        /*          return DB::select('SELECT * FROM surags.opciones WHERE id IN(SELECT id_opcion FROM surags.opciones_perfiles where id_opcion NOT IN ( 1, 7 ) )');*/

        return DB::select("select o.id, o.nombre,o.url ,Deriv1.Count from opciones o inner join opciones_perfiles op on o.id = op.id_opcion
    LEFT OUTER JOIN (
    SELECT padre, COUNT( * ) AS Count
    FROM opciones
    GROUP BY padre
    )Deriv1 ON o.id = Deriv1.padre
    WHERE o.padre =" . $id . " AND o.estatus = 1 AND op.id_usuario=" . $user);


    }


    static function menu_complete($user)

    {

        $nemo = \App\Models\opciones_perfiles::menu(0, $user);

        echo "<ul class='nav navbar-nav'>";



              foreach ($nemo as $men) { //@foreach()
            if ($men->Count > 0) {  //@if()

                echo '<li class="dropdown">';
                echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>" . $men->nombre . "<span class='caret'></span></a>";

                if ($men->Count > 0) { //@if()
                    $hijo = \App\Models\opciones_perfiles::menu($men->id, $user);


                    echo '<ul class="dropdown-menu" role="menu">';
                    foreach ($hijo as $hi) {

                        if ($hi->Count > 0) {
                            echo '<li class="dropdown-submenu">';
                            echo '<a href="#">' . $hi->nombre . '</a>';
                            $nieto = \App\Models\opciones_perfiles::menu($hi->id, $user);

                            echo '<ul class="dropdown-menu">';
                            foreach ($nieto as $ni) {
                                echo '<li><a href="' . $ni->url . '">' . $ni->nombre . '</a></li>';

                            }
                            echo '</ul>';

                        } else {
                            echo '<li>';
                            echo '<a href="' . $hi->url . '">' . $hi->nombre . '</a>';

                        }

                        echo '</li>';

                    } //endforeach
                    echo '</ul>';


                }//endif

                echo '</li>';

            } //@else
            else {

                echo "<li>";

                echo "<a href='$men->url'>" . $men->nombre . "</a>";
                echo "</li>";

            }//@endif

        }//endforeach
        echo "</ul>";


    }


    /*<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">DEFINICIONES <span class="caret"></span></a>

    <ul class="dropdown-menu" role="menu">
    <li><a href="#">Unidades administrativas</a></li>

    <li class="dropdown-submenu">
    <a href="#">Secretaria</a>
    <ul class="dropdown-menu">
    <li><a href="#">nueva</a></li>
    <li><a href="#">consulta</a></li>
    </ul>
    </li>


    <li><a href="#">Another action</a></li>

    </ul>
    </li>*/


    static function display_children($parent, $level)
    {

        $clases = [1 => 'dropdown-toggle', 2 => 'dropdown-menu', 3 => 'dropdown-toggle'];

        $data = opciones_perfiles::menu($parent);


        echo '<ul class="nav navbar-nav">';
        foreach ($data as $que) {

            if ($que->Count > 0) {

                echo "<li class='dropdown'>
                    <a    class='" . $clases[$level] . "' href='" . $que->url . "'>" . $level . "  " . $que->nombre . "</a> <span class='caret'></span></a>";

                opciones_perfiles::display_children($que->id, $level + 1);


                echo "</li>";

            } elseif ($que->Count == 0) {


                echo "<li><a href='" . $que->url . "'>" . $que->nombre . "</a></li>";

            } else;


        }
        echo "</ul>";


    }

}