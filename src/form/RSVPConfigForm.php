namespace Drupal\rsvp_system\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class RSVPConfigForm extends ConfigFormBase {

    /**
     * {@inheritdoc}
     */
    protected function getEditableConfigNames() {
        return ['rsvp_system.settings'];
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

        // Existing form elements...
        
        // Add a debug setting checkbox
        $form['debug'] = [
            '#type' => 'checkbox',
            '#title' => $this->t('Enable Debugging'),
            '#default_value' => $config->get('debug'),
            '#description' => $this->t('Enable or disable debug mode for the RSVP System.'),
        ];

        return parent::buildForm($form, $form_state);
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state) {
        // Save the configuration
        parent::submitForm($form, $form_state);
        $this->config('rsvp_system.settings')
            ->set('debug', $form_state->getValue('debug'))
            ->save();
    }
}
