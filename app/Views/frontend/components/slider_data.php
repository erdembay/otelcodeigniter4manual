<?php foreach($images as $key => $value){ ?>
<li data-transition="fade">
    <img src="<?= $value['image_path']; ?>" data-bgposition="<?= $value['image_data_bg_position']; ?>" data-duration="<?= $value['image_data_duration']; ?>" data-bgpositionend="<?= $value['image_data_bg_position_end']; ?>" alt="">
    <?php if(isset($value['icon']) && ($value['icon']===true)){ ?>
    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="<?= $value['icon_data_x']; ?>" data-y="<?= $value['icon_data_y']; ?>" data-speed="<?= $value['icon_data_speed']; ?>" data-start="<?= $value['icon_data_start']; ?>" data-easing="<?= $value['icon_data_easing']; ?>">
        <img src="<?= $value['icon_path']; ?>" alt="icons">
    </div>
    <?php 
    }
    if(isset($value['subtitle']) && ($value['subtitle']===true)){ ?>
    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="<?= $value['subtitle_data_x']; ?>" data-y="<?= $value['subtitle_data_y']; ?>" data-speed="<?= $value['subtitle_data_speed']; ?>" data-start="<?= $value['subtitle_data_start']; ?>" data-easing="<?= $value['subtitle_data_easing']; ?>">
        <?= $value['subtitle_content']; ?>
    </div>
    <?php 
    }
    if(isset($value['title']) && ($value['title']===true)){ ?>
    <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="<?= $value['title_data_x']; ?>" data-y="<?= $value['title_data_y']; ?>" data-speed="<?= $value['title_data_speed']; ?>" data-easing="<?= $value['title_data_easing']; ?>"  data-start="<?= $value['title_data_start']; ?>"><?= $value['title_content']; ?></div>
    <?php
    } 
    if(isset($value['link']) && ($value['link']===true)){ ?>
    <a href="<?= $value['link_href']; ?>" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="<?= $value['link_data_x']; ?>" data-y="<?= $value['link_data_y']; ?>" data-easing="<?= $value['link_data_easing']; ?>" data-speed="<?= $value['link_data_speed']; ?>" data-start="<?= $value['link_data_start']; ?>"><?= $value['link_content']; ?></a>
    <?php } ?>
</li>
<?php } ?>