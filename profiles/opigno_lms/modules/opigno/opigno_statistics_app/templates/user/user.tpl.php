<?php
/**
 * @file
 * User template file
 *
 * @param array $general_informations
 * @param array $badges_earned
 * @param array $total_number_of_page_view
 * @param array $users_results
 */
?>
<div id="opigno-statistics-app-user">
  <div class="col col-4-out-of-4 clearfix">
    <?php print theme('opigno_statistics_app_user_widget_general_informations', compact('general_informations')); ?>
  </div>
  <div class="col col-2-out-of-4">
    <?php print theme('opigno_statistics_app_user_widget_badges_earned', compact('badges_earned')); ?>
  </div>
  <div class="col col-2-out-of-4">
    <?php print theme('opigno_statistics_app_user_widget_total_number_of_page_view', compact('total_number_of_page_view')); ?>
  </div>
  <div class="col col-4-out-of-4">
    <?php print theme('opigno_statistics_app_user_widget_courses_results', compact('courses_results')); ?>
  </div>
</div>