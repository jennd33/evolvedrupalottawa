<?php

namespace Drupal\helloworld\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Hello World routes.
 */
class HelloworldController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build($name = NULL) {

    if ($name) {
      $output = "Hello " . $name;
    }
    else {
      $output = "Hello World!";
    }
    $build['content'] = [
      '#type' => 'item',
      '#markup' => $output,
    ];

    return $build;
  }

}
