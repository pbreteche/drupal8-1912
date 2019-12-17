<?php


namespace Drupal\formation6;


class BasicService {

  /**
   * @var \Drupal\formation6\SubService
   */
  private $subService;

  public function __construct(SubService $subService) {
    $this->subService = $subService;
  }

  public function getHelpText() {
    return $this->subService->render(['help_text' => 'Texte d\'aide']);
  }
}
