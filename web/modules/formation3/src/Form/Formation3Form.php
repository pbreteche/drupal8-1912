<?php

namespace Drupal\formation3\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the formation3 entity edit forms.
 */
class Formation3Form extends ContentEntityForm {

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
      $this->messenger()->addStatus($this->t('New formation3 %label has been created.', $message_arguments));
      $this->logger('formation3')->notice('Created new formation3 %label', $logger_arguments);
    }
    else {
      $this->messenger()->addStatus($this->t('The formation3 %label has been updated.', $message_arguments));
      $this->logger('formation3')->notice('Updated new formation3 %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.formation3.canonical', ['formation3' => $entity->id()]);
  }

}
