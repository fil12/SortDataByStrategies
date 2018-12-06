<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 05.12.18
 * Time: 16:56
 */

namespace App;


final class StrategyOrderByDesc implements DataSorterStrategyInterface
{
    const ORDER = DESC;

    public function sorting($data)
    {
        rsort($data);

        return $data;
    }
}