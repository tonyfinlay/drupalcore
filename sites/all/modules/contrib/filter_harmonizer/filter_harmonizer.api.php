<?php
/**
 * @file
 * This file contains no working PHP code; it exists to provide additional
 * documentation for doxygen as well as to document hooks in the standard
 * Drupal manner.
 */

/**
 * Alter the value(s) on the regular filter form.
 *
 * Allow other modules to change the filling-out of the exposed filter form.
 *
 * @param array $form
 * @param object $contextual_filter
 * @param string $value
 *   the contextual filter value, may be a space-separated string of numbers
 */
function hook_filter_harmonizer_set_alter(&$form, $contextual_filter, $value) {
  // see plugins/filter_harmonizer_geofield.inc for an example
}

/**
 * Allow modules to alter the meaning of 'empty' for regular filter values.
 *
 * @param mixed $value
 *   the value that is to be tested on "emptiness"
 * @param bool $is_empty
 *   returns whether $form_value is empty or not
 */
function hook_filter_harmonizer_filter_is_empty($value, &$is_empty) {
}