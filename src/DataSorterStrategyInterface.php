<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 05.12.18
 * Time: 16:54
 */

namespace App;


interface DataSorterStrategyInterface
{
    public function sorting($data);
}