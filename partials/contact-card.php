<?php
/**
 * Contact card component
 * Usage: include_partial('contact-card', ['contact' => $contact_data])
 */
?>
<div class="col-lg-4 col-md-6">
    <div class="contact-card text-center">
        <div class="mb-3">
            <i class="bi <?php echo $contact['icon']; ?> text-brand-orange" style="font-size: 3rem;"></i>
        </div>
        <h5 class="fw-bold mb-3"><?php echo e($contact['title']); ?></h5>
        <p class="mb-0">
            <a href="<?php echo $contact['href']; ?>" class="text-white text-decoration-none">
                <?php echo e($contact['text']); ?>
            </a>
        </p>
    </div>
</div>
