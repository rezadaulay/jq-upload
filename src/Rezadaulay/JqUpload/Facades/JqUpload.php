<?php 

namespace Rezadaulay\JqUpload\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class JqUpload extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'JqUpload'; }
 
}