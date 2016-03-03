<?php

require_once(__DIR__ . '/filter_form.inc');
require_once(__DIR__ . '/presenters.inc');

/*
 * Render course statistic page
 *
 * @param int $uid
 */
function opigno_statistics_app_user_statistics_page($uid){
  $module_path = drupal_get_path('module', 'opigno_statistics_app');
  drupal_add_css("{$module_path}/css/opigno_statistics_app_morris.css");
  drupal_add_css("{$module_path}/css/opigno_statistics_app_styles.css");
  drupal_add_js("{$module_path}/js/raphael.min.js");
  drupal_add_js("{$module_path}/js/morris.min.js");
  drupal_add_js("{$module_path}/js/circles.min.js");

  $opigno_statistics_app_user_month_year=variable_get('opigno_statistics_app_user_month_year');
  $opigno_statistics_app_user_has_month=variable_get('opigno_statistics_app_user_has_month');
  $month_year = isset($opigno_statistics_app_user_month_year[request_uri()])? $opigno_statistics_app_user_month_year[request_uri()] : mktime(0, 0, 0, 1, 1);
  $filter_month = isset($opigno_statistics_app_user_has_month[request_uri()])? $opigno_statistics_app_user_has_month[request_uri()] : FALSE;
  return theme('opigno_statistics_app_user', array(
    'general_informations' => opigno_statistics_app_present_user_general_informations($uid),
    'badges_earned' => opigno_statistics_app_present_user_badges_earned($uid),
    'total_number_of_page_view' => opigno_statistics_app_present_user_total_number_of_page_view($uid, $month_year, $filter_month),
    'courses_results' => opigno_statistics_app_present_user_courses_results($uid)
  ));
}