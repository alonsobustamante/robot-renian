<?php

namespace App\Interfaces;

use App\Models\Code;

interface CodeRepositoryInterface
{
    public function getCodes();

    public function updateStatus(Code $code, $value);

    public function searchRenian(Code $code);

}
