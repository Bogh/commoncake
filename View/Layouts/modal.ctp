<div class="modal fade fast in hide"
    data-width="<?php echo $this->fetch('width', 700); ?>">

    <?php
      echo $this->fetch('start');

      echo $this->Session->flash();
    ?>

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
      <h3>
        <?php echo $this->fetch('header'); ?>
      </h3>
    </div>

    <div class="modal-body">
      <?php echo $this->fetch('content'); ?>
    </div>

    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      <?php echo $this->fetch('buttons'); ?>
    </div>

    <?php echo $this->fetch('end'); ?>
</div>
