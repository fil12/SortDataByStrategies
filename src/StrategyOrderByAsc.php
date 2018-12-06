<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 05.12.18
 * Time: 16:55
 */

namespace App;


final class StrategyOrderByAsc implements DataSorterStrategyInterface
{

    const ORDER = ASC;

    public function sorting($data)
    {
        sort($data);

        return $data;
    }
}