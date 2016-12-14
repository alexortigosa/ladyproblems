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
}