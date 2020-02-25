<?php

namespace Drupal\d_debugger\TwigExtension;


/**
 * Class DDebuggerTwigExtension.
 */
class DDebuggerTwigExtension extends \Twig_Extension {

   /**
    * {@inheritdoc}
    */
    public function getName() {
      return 'd_debugger.twig.extension';
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters() {
        return [
            new \Twig_SimpleFilter('console_log', [$this, 'consoleLogger']),
        ];
    }

    /**
     * @param $context
     * Print the $context in console
     */
    public function consoleLogger($context) {
        echo '<script>';
        echo 'console.log('. json_encode( $context ) .')';
        echo '</script>';
    }
}
