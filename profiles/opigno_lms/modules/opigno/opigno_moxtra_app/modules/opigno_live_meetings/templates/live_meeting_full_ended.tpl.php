<?php
  $mox_binder_id = $node->schedule_binder_id[LANGUAGE_NONE][0]['value'];
  $files = opigno_live_meetings_api_get_files_list($node->uid, $mox_binder_id);
?>
<?php echo theme('live_meeting_teaser', compact('node', 'live_meeting_info', 'view_mode')); ?>

<?php if($files->data->files): ?>
  <div class="field">
    <div class="field-label"><?php print t('Files'); ?>:&nbsp;</div>
    <div class="field-items">
    <?php foreach($files->data->files as $file): ?>
      <div class="field-item">
        <a title="<?php print $file->name; ?>" href="<?php print opigno_live_meetings_api_get_file_info($node->uid, $mox_binder_id, $file->file_id)->data->url; ?>"><?php print $file->name?: t('Unnamed'); ?></a>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>
