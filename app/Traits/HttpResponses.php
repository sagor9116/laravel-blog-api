<?php

namespace App\Traits;

/**
 * 
 */
trait HttpResponses
{
  public function successResponse($responseData, $message) {
     $successData = [
      'status'  => true,
      'data'    => $responseData,
      'message' => $message
     ];

     return response()->json($successData, 200);
  }

  public function errorResponse($error, $errorMessages = [], $code = 404) {
    $errorData = [
      'status'  => false,
      'message' => $error
    ];

    if(!empty($errorMessages)) {
      return $errorData['data'] = $errorMessages;
    }

    return response()->json($errorData);
  }
}
