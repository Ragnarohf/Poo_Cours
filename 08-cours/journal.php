<?php

namespace App;

interface Journal
{
    public const NUMERO = 452;
    public function lireJournal();
    public function ecrireJournal();
}
