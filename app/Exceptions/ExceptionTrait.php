<?php
namespace App\Exceptions;
use Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use symfony\Component\HttpFoundation\Response;

trait ExceptionTrait

{
  public function apiException($request,$e)
  {
    if ($e instanceof ModelNotFoundException){
      return response()->json([
        'error'=>'Product Model not Found'
      ],400);
    }

    if($e instanceof NotFoundHttpException){
      return response()->json([
        'error'=> 'Incorect Route'
      ],400);
    }
    return parent::render($request, $e);
}

  }
