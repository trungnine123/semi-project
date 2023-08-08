<?php

namespace App\Helpers;

class Helper
{
 public static function menus($menu, $parent_id = 0, $char = '')
 {
    $html = '';

    foreach ($menu as $key => $menu){
        if($menu['parent_id'] == $parent_id){
            $html .= '
                <tr>
                    <td>'. $menu-> id .'</td>
                    <td>'. $char . $menu->name.'</td>
                    <td>'. $menu->active.'</td>
                    <td>'. $menu->update_at.'</td>
                    <td>&nbsp;</td>
                </tr>
                     ';

                unset($menu[$key]);

                $html .= self::menus($menu, $menu->id, $char.'---');
        }
    }

    return $html;
 }   
}