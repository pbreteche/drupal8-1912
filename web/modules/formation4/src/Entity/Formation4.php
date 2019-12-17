<?php

namespace Drupal\formation4\Entity;

use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\RevisionableContentEntityBase;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\formation4\Formation4Interface;

/**
 * Defines the formation4 entity class.
 *
 * @ContentEntityType(
 *   id = "formation4",
 *   label = @Translation("formation4"),
 *   label_collection = @Translation("formation4s"),
 *   bundle_label = @Translation("formation4 type"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\formation4\Formation4ListBuilder",
 *     "views_data" = "Drupal\views\EntityViewsData",
 *     "form" = {
 *       "add" = "Drupal\formation4\Form\Formation4Form",
 *       "edit" = "Drupal\formation4\Form\Formation4Form",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   base_table = "formation4",
 *   revision_table = "formation4_revision",
 *   show_revision_ui = TRUE,
 *   admin_permission = "administer formation4 types",
 *   entity_keys = {
 *     "id" = "id",
 *     "revision" = "revision_id",
 *     "bundle" = "bundle",
 *     "label" = "title",
 *     "uuid" = "uuid"
 *   },
 *   revision_metadata_keys = {
 *     "revision_log_message" = "revision_log"
 *   },
 *   links = {
 *     "add-form" = "/admin/content/formation4/add/{formation4_type}",
 *     "add-page" = "/admin/content/formation4/add",
 *     "canonical" = "/formation4/{formation4}",
 *     "edit-form" = "/admin/content/formation4/{formation4}/edit",
 *     "delete-form" = "/admin/content/formation4/{formation4}/delete",
 *     "collection" = "/admin/content/formation4"
 *   },
 *   bundle_entity_type = "formation4_type",
 *   field_ui_base_route = "entity.formation4_type.edit_form"
 * )
 */
class Formation4 extends RevisionableContentEntityBase implements Formation4Interface {

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
      ->setRevisionable(TRUE)
      ->setLabel(t('Title'))
      ->setDescription(t('The title of the formation4 entity.'))
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

    $fields['description'] = BaseFieldDefinition::create('text_long')
      ->setRevisionable(TRUE)
      ->setLabel(t('Description'))
      ->setDescription(t('A description of the formation4.'))
      ->setDisplayOptions('form', [
        'type' => 'text_textarea',
        'weight' => 10,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'type' => 'text_default',
        'label' => 'above',
        'weight' => 10,
      ])
      ->setDisplayConfigurable('view', TRUE);

    return $fields;
  }

}
