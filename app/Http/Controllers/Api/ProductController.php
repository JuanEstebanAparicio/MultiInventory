<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductAttributeValidator;

    ProductAttributeValidator::validate(
        $request->input('attributes', []),
        $inventory->module->schema
    );

