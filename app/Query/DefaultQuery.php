<?php

namespace App\Query;

abstract class DefaultQuery
{
    public abstract static function getQuery(): string;
}