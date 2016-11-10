<?php

namespace Drupal\bootstrap_search_block\Element;

use Drupal\Core\Render\Element\Search;
/**
 * Provides an HTML5 input element with type of "bootstrap_search".
 *
 * Usage example:
 * @code
 * $form['search'] = array(
 *   '#type' => 'bootstrap_search',
 *   '#title' => $this->t('Search'),
 * );
 * @endcode
 *
 * @see \Drupal\Core\Render\Element\Textfield
 *
 * @FormElement("bootstrap_search")
 */
class BootstrapSearch extends Search  {
    /**
     * {@inheritdoc}
     */
    public function getInfo() {

        $return = parent::getInfo();
        unset($return["#theme_wrappers"]);

        return $return;
    }

    /**
     * {@inheritdoc}
     */
    public static function preRenderSearch($element) {

        $element = parent::preRenderSearch($element);

        $element['#attributes']['type'] = 'bootstrap_search';
        static::setAttributes($element, array('form-control'));

        return $element;
    }

}