
<div class="vac-wrapper">
    <div class= "vac-wrapper__count"> <?php echo ('0'. $index.'.') ?></div>
        <?php if( get_field('vacancy_tag') ): ?>
    <div class= "vac-wrapper__tag"><?php the_field('vacancy_tag'); ?>_</div>
        <?php endif; ?>
    <a href="<?php the_permalink();?>" target=_blank>
        <div class= "vac-wrapper__read"><p>Bekijk vacature.</p></div>
    </a>
</div>