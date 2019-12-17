<?php


namespace Drupal\formation6;


use Twig\Environment;

class SubService {

  /**
   * @var Environment
   */
  private $twig;

  public function __construct(Environment $twig) {
    $this->twig = $twig;
  }

  public function render(array $data) {
    return $this->twig->render('help.html.twig', $data);
  }
}
