<?php

namespace Drupal\bootstrap_search_block\Form;

use Drupal\search\Form\SearchBlockForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Builds the search form for the search block.
 */
class BootstrapSearchBlockForm extends SearchBlockForm {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'bootstrap_search_form_block';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {


      $form = parent::buildForm($form, $form_state);


      $form['keys']['#type'] = 'bootstrap_search';
      unset($form['keys']['#title']);

      $form['inputgroup'] = array(
          '#type' => 'container',
          '#attributes' => array(
              'class' => 'input-group',
          ),
          '#title' => null,
      );

      $form['inputgroup']['keys'] = $form['keys'];

      $form['inputgroup']['submit'] = $form['actions']['submit'];
      $form['inputgroup']['submit']['#type'] = 'button';

      $form['inputgroup']['submit']['#theme_wrappers'] = array('input__button__submit');
      $form['inputgroup']['submit']['#attributes'] = array( 'class' => array('btn','btn-default'));
      $form['inputgroup']['submit']['#markup'] = '<i class="glyphicon glyphicon-search"></i>';

      unset($form['actions']);
      unset($form['keys']);


      return $form;


  }

}
