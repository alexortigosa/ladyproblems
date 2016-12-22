<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 22/12/2016
 * Time: 12:30
 */

namespace Alex\StaticPagesBundle\Utils;

interface ISyncroStrategy
{
    public function syncroParticipaciones($account,$content);

}