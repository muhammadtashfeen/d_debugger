<?php

namespace Drupal\d_debugger;

/**
 * Class DDebuggerService.
 */
class DDebuggerService implements DDebuggerServiceInterface {

  public function printToConsole($context)
  {
      echo '<script>';
      echo 'console.log('. json_encode( $context ) .')';
      echo '</script>';
  }

}
