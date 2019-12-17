<?php

namespace Drupal\formation4\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the formation4 entity edit forms.
 */
class Formation4Form extends ContentEntityForm {


  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {

    $entity = $this->getEntity();
    $result = $entity->save();
    $link = $entity->toLink($this->t('View'))->toRenderable();

    $message_arguments = ['%label' => $this->entity->label()];
    $logger_arguments = $message_arguments + ['link' => render($link)];

    if ($result == SAVED_NEW) {
      $this->messenger()->addStatus($this->t('New formation4 %label has been created.', $message_arguments));
      $this->logger('formation4')->notice('Created new formation4 %label', $logger_arguments);
    }
    else {
      $this->messenger()->addStatus($this->t('The formation4 %label has been updated.', $message_arguments));
      $this->logger('formation4')->notice('Updated new formation4 %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.formation4.canonical', ['formation4' => $entity->id()]);
  }

}
