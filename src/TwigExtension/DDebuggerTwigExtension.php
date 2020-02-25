<?php

namespace Drupal\d_debugger\TwigExtension;


use Drupal\social_media_links\Plugin\SocialMediaLinks\Platform\Drupal;

/**
 * Class DDebuggerTwigExtension.
 */
class DDebuggerTwigExtension extends \Twig_Extension {

   private $printService;

   public function __construct() {
       $this->printService = \Drupal::service('d_debugger.console');
   }

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
            new \Twig_SimpleFilter('console_log', [$this, 'print']),
        ];
    }

    /**
     * @param $context
     * Print the $context in console
     */
    public function print($context) {
        $this->printService->printToConsole($context);
    }
}
