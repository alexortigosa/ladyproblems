<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 14/12/2016
 * Time: 22:17
 */

namespace Alex\StaticPagesBundle\Utils;


class Utils
{
    static public function getMentionsUsers($twits){
        $res=array();
        foreach ($twits as $t){
            array_push($res,$t->user->screen_name);
        }
        return $res;
    }
    static public function getUsersAndDates($twits){
        $res=array();
        foreach ($twits->statuses as $t){
            array_push($res,array(
                "user" => $t->user->screen_name,
                "fecha" => $t->created_at
                )
            );
        }
        return $res;
    }
}