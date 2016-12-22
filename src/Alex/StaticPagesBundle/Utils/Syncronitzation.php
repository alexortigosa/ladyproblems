<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 22/12/2016
 * Time: 12:24
 */

namespace Alex\StaticPagesBundle\Utils;

use Alex\StaticPagesBundle\Utils\ISyncroStrategy;
use Alex\StaticPagesBundle\Utils\SyncroTwitterStrategy;

class Syncronitzation
{

    private $accounttosearch;
    private $syncroStrategy;
    private $content;
    /**
     * Syncronitzation constructor.
     */
    public function __construct($account,$strategy,$content)
    {
        $this->accounttosearch=$account;
        $this->syncroStrategy= new SyncroTwitterStrategy();
        $this->content=$content;
    }

    public function execute(){
        $this->syncroStrategy->syncroParticipaciones($this->accounttosearch,$this->content);
    }
}