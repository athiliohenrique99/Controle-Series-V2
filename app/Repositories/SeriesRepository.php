<?php

namespace App\Repositories;

use APP\Http\Requests\SeriesFormRequest;
use App\Models\Series;

interface SeriesRepository
{
    public function add(SeriesFormRequest $request) : Series;
}
