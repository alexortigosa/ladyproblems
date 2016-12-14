<?php

/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 14/12/2016
 * Time: 21:04
 */
namespace Alex\CustomTweetBundle\Twiteer;

use Endroid\Twitter\Twitter;

class CustomTweeter extends Twitter
{
    public function query($name, $method = 'GET', $format = 'json', $parameters = array())
    {
        $baseUrl = $this->apiUrl.$name.'.'.$format;

        $headers = array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: '.$this->getAuthorization($baseUrl, $method, $parameters),
        );

        $queryParameters = $this->getQueryParameters($parameters);
        if ($queryParameters) {
            $baseUrl .= "?$queryParameters";
        }

        return $this->call($method, $baseUrl, $headers);
    }


}