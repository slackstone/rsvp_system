<?php

namespace Drupal\rsvp_system\FormAlterations;

use Drupal\Core\Form\FormStateInterface;

class FormAlterationsHandler {

  public static function handleFormAlter(&$form, FormStateInterface $form_state, $form_id) {
    // Your code here
    if ($form_id === 'node_rsvp_location_form' || $form_id === 'node_rsvp_location_edit_form') {
      if (isset($form['title'])) {
        $form['title']['#title'] = t('Location Name');
      }
    }
  }

}
