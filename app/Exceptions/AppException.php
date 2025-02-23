<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

use function response;

final class AppException extends Exception
{
    public function __construct(string $message, int $code = 400, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function render(Request $request): JsonResponse
    {
        return response()->json([
            'error' => [
                'status'    => $this->getCode() ?: 500,
                'message'   => $this->getMessage(),
            ],
        ], $this->getCode() ?: 500);
    }
}
