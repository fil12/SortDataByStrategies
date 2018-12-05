<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 05.12.18
 * Time: 16:56
 */

namespace App;


class StrategyDesc implements StrategyInterface
{
    public function sorting($data)
    {
        rsort($data);

        return $data;
    }
}