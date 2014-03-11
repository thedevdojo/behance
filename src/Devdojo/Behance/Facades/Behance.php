<?php namespace Devdojo\Behance\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Behance extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'behance'; }
 
}