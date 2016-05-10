<?php

/**
 * Provides a block for review form
 *
 * @Block(
 *   id = "form_display",
 *   admin_label = @Translation("Review Form Display"),
 * )
 */

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class FormDisplayBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Hello, World!'),
    );
  }
}
