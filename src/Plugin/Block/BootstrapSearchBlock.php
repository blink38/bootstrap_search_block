<?php

namespace Drupal\bootstrap_search_block\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Search form' block.
 *
 * @Block(
 *   id = "bootstrap_search_form_block",
 *   admin_label = @Translation("Bootstrap like Search form"),
 *   category = @Translation("Forms")
 * )
 */
class BootstrapSearchBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    protected function blockAccess(AccountInterface $account) {
        return AccessResult::allowedIfHasPermission($account, 'search content');
    }

    /**
     * {@inheritdoc}
     */
    public function build() {
        return \Drupal::formBuilder()->getForm('Drupal\bootstrap_search_block\Form\BootstrapSearchBlockForm');
    }

}
