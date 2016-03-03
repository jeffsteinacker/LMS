<?php
/**
 * @file
 * Opigno statistics app - User - General informations template file
 *
 * @param $general_informations
 *  $general_informations['picture']
 *  $general_informations['name']
 *  $general_informations['email']
 *  $general_informations['date_joined']
 *  $general_informations['last_access']
 */
?>
<div class="opigno-statistics-app-widget col col-3-out-of-4 clearfix" id="opigno-statistics-app-user-widget-general-informations">
  <div class="col col-1-out-of-4">
    <?php print theme('image', array('path' => $general_informations['picture'], 'width' => 150)); ?>
  </div>
  <div class="col col-2-out-of-4">
    <p>
      <b><?php print t('Name'); ?>: </b><br/><span><?php print $general_informations['name']; ?></span>
    </p>
    <p>
      <b><?php print t('Email'); ?>: </b><br/><span><?php print $general_informations['email']; ?></span>
    </p>
  </div>
  <div class="col col-1-out-of-4">
    <p>
      <b><?php print t('Date joined'); ?>:</b><br/><span><?php $date=new DateTime('@' . $general_informations['date_joined']); print $date->format('Y-m-d'); ?></span>
    </p>
    <p>
      <b><?php print t('Last access'); ?>:</b><br/><span><?php $date=new DateTime('@' . $general_informations['last_access']); print $date->format('Y-m-d'); ?></span>
    </p>
  </div>
</div>