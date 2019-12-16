<?php

namespace Drupal\formation2\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\formation2\FormationConfigInterface;

/**
 * Defines the formation config entity type.
 *
 * @ConfigEntityType(
 *   id = "formation_config",
 *   label = @Translation("formation config"),
 *   label_collection = @Translation("formation configs"),
 *   label_singular = @Translation("formation config"),
 *   label_plural = @Translation("formation configs"),
 *   label_count = @PluralTranslation(
 *     singular = "@count formation config",
 *     plural = "@count formation configs",
 *   ),
 *   handlers = {
 *     "list_builder" = "Drupal\formation2\FormationConfigListBuilder",
 *     "form" = {
 *       "add" = "Drupal\formation2\Form\FormationConfigForm",
 *       "edit" = "Drupal\formation2\Form\FormationConfigForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm"
 *     }
 *   },
 *   config_prefix = "formation_config",
 *   admin_permission = "administer formation_config",
 *   links = {
 *     "collection" = "/admin/structure/formation-config",
 *     "add-form" = "/admin/structure/formation-config/add",
 *     "edit-form" = "/admin/structure/formation-config/{formation_config}",
 *     "delete-form" = "/admin/structure/formation-config/{formation_config}/delete"
 *   },
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "description"
 *   }
 * )
 */
class FormationConfig extends ConfigEntityBase implements FormationConfigInterface {

  /**
   * The formation config ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The formation config label.
   *
   * @var string
   */
  protected $label;

  /**
   * The formation config status.
   *
   * @var bool
   */
  protected $status;

  /**
   * The formation_config description.
   *
   * @var string
   */
  protected $description;

}
