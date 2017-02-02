<?php if(hasFlash('success')): ?>
    <div class="alert alert-warning"><?= getFlash('success') ?></div>
<?php endif ?>