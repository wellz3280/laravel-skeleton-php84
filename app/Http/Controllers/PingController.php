<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use DateTimeImmutable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use const DATE_ATOM;

final class PingController extends Controller
{
    public function handler(Request $request): Response
    {
        $date = (new DateTimeImmutable())->format(DATE_ATOM);

        return new Response(['data' => $date], 200);
    }
}
