<?php

namespace Drupal\formation3\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\formation3\Formation3Interface;

/**
 * Defines the formation3 entity class.
 *
 * @ContentEntityType(
 *   id = "formation3",
 *   label = @Translation("formation3"),
 *   label_collection = @Translation("formation3s"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\formation3\Formation3ListBuilder",
 *     "views_data" = "Drupal\views\EntityViewsData",
 *     "access" = "Drupal\formation3\Formation3AccessControlHandler",
 *     "form" = {
 *       "add" = "Drupal\formation3\Form\Formation3Form",
 *       "edit" = "Drupal\formation3\Form\Formation3Form",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   base_table = "formation3",
 *   admin_permission = "access formation3 overview",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "title",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/content/formation3/add",
 *     "canonical" = "/formation3/{formation3}",
 *     "edit-form" = "/admin/content/formation3/{formation3}/edit",
 *     "delete-form" = "/admin/content/formation3/{formation3}/delete",
 *     "collection" = "/admin/content/formation3"
 *   },
 * )
 */
class Formation3 extends ContentEntityBase implements Formation3Interface {

  /**
   * {@inheritdoc}
   */
  public function getTitle() {
    return $this->get('title')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setTitle($title) {
    $this->set('title', $title);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {

    $fields = parent::baseFieldDefinitions($entity_type);

    $fields['title'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Title'))
      ->setDescription(t('The title of the formation3 entity.'))
      ->setRequired(TRUE)
      ->setSetting('max_length', 255)
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('view', TRUE);

    return $fields;
  }

}
