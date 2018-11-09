<?php

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;

function valuance_form_system_theme_settings_alter(&$form, FormStateInterface $form_state)
{
    // Disclaimer Text 
	$form['disclaimer_text'] = [
		'#type' => 'textfield',
		'#title' => t('Disclaimer Text'),
		'#default_value' => theme_get_setting('disclaimer_text'),
		'#description' => t("Legal disclaimer that appears in footer of all pages in website."),
	];

    // Copyright Text 
	$form['copyright'] = [
		'#type' => 'textfield',
        '#default_value' => theme_get_setting('copyright'),
		'#title' => t('Copyright'),
	];

    // Default Background Image 
    $form['default_background_image'] = [
        '#type' => 'managed_file',
        '#default_value' => theme_get_setting('default_background_image'),
        '#title' => t('Default Background Image'),
        '#upload_location' => file_default_scheme() . '://theme/backgrounds/',
        '#upload_validators' => array(
          'file_validate_extensions' => array('gif png jpg jpeg'),
        ),
    ];

}