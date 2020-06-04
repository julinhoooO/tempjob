<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  /**
   * Create a new AuthController instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth:api');
  }
}
