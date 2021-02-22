<?php

namespace Drupal\webcam_capture\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class.
 */
class WebcamCapture extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function content() {
    return [
      '#theme' => 'capture_page',
      '#name' => "Ashhad Sameer",
    ];
  }

}