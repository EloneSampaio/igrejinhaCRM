<?php
use ChurchCRM\dto\SystemURLs;
use ChurchCRM\Service\SystemService;

?>
    <div style="background-color: white; padding-top: 5px; padding-bottom: 5px; text-align: center; position: fixed; bottom: 0; width: 100%">
      <strong><?= gettext('Copyright') ?> &copy; <?= SystemService::getCopyrightDate() ?> <a href="#" target="_blank"><b>Igreja</b>CRM</a>.</strong> <?= gettext('All rights reserved')?>.
    </div>


  <script src="<?= SystemURLs::getRootPath() ?>/skin/external/select2/select2.min.js"></script>

  <!-- Bootstrap 3.3.5 -->
  <script src="<?= SystemURLs::getRootPath() ?>/skin/external/bootstrap/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?= SystemURLs::getRootPath() ?>/skin/external/iCheck/icheck.min.js"></script>

  <!-- AdminLTE App -->
  <script src="<?= SystemURLs::getRootPath() ?>/skin/external/adminlte/adminlte.min.js"></script>

  <!-- InputMask -->
  <script src="<?= SystemURLs::getRootPath() ?>/skin/external/inputmask/jquery.inputmask.bundle.min.js"></script>
  <script src="<?= SystemURLs::getRootPath() ?>/skin/external/inputmask/inputmask.date.extensions.min.js"></script>
  <script src="<?= SystemURLs::getRootPath() ?>/skin/external/inputmask/inputmask.extensions.min.js" ></script>
  <script src="<?= SystemURLs::getRootPath() ?>/skin/external/bootstrap-datepicker/bootstrap-datepicker.min.js" ></script>

  <!-- Bootbox -->
  <script src="<?= SystemURLs::getRootPath() ?>/skin/external/bootbox/bootbox.min.js"></script>

  <script nonce="<?= SystemURLs::getCSPNonce() ?>">
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
  <?php

    //If this is a first-run setup, do not include google analytics code.
    if ($_SERVER['SCRIPT_NAME'] != '/setup/index.php') {
        include_once('analyticstracking.php');
    }
 ?>
</body>
</html>
