<?php if (isset($_SESSION['flash_success'])): ?>
    <div class="flash-success">
        <?= htmlspecialchars($_SESSION['flash_success']) ?>
    </div>

    <?php unset($_SESSION['flash_success']); ?>
<?php endif; ?>