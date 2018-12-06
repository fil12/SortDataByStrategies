<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 06.12.18
 * Time: 15:15
 */

namespace App;


final class StrategyOrderByNull implements DataSorterStrategyInterface
{
    const ORDER = 'NULL';
    public function sorting($data)
    {
    }
}