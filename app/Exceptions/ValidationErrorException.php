<?php

namespace App\Exceptions;

use Exception;

class ValidationErrorException extends Exception
{
    /**
     * Render the exception as an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function render($request)
    {
        return response()->json([
            'errors' => [
                'code' => 422,
                'title' => 'Validation error',
                'detail' => 'Your request is melformed or missing fiileds',
                'meta' => json_decode($this->getMessage()),
            ]
        ], 422);
    }
}
