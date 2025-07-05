<?php
/**
 * Feature item component
 * Usage: include_partial('feature-item', ['feature' => $feature_data])
 */
?>
<div class="col-lg-3 col-md-6">
    <div class="feature-item">
        <div class="feature-icon">
            <i class="bi <?php echo $feature['icon']; ?>"></i>
        </div>
        <h5 class="fw-bold text-brand-navy"><?php echo e($feature['title']); ?></h5>
        <p class="text-muted"><?php echo e($feature['description']); ?></p>
    </div>
</div>
