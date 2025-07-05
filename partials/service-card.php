<?php
/**
 * Service card component
 * Usage: include_partial('service-card', ['service' => $service_data])
 */
?>
<div class="col-lg-4 col-md-6">
    <div class="service-card card h-100">
        <div class="service-icon">
            <i class="bi <?php echo $service['icon']; ?>"></i>
        </div>
        <h4 class="fw-bold mb-3 text-brand-navy"><?php echo e($service['title']); ?></h4>
        <p class="text-muted">
            <?php echo e($service['description']); ?>
        </p>
    </div>
</div>
