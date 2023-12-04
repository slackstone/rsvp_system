<?php

namespace Drupal\rsvp_system\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class RSVPConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'rsvp_system.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'rsvp_system_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('rsvp_system.settings');

    $form['setting_one'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Setting One'),
      '#default_value' => $config->get('setting_one'),
    ];

    // Add additional settings here...

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('rsvp_system.settings')
      ->set('setting_one', $form_state->getValue('setting_one'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}

