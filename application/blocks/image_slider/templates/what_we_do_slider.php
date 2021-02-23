<?php defined('C5_EXECUTE') or die("Access Denied.");
$navigationTypeText = (0 == $navigationType) ? 'arrows' : 'pages';
$c = Page::getCurrentPage();
if ($c->isEditMode()) {
    $loc = Localization::getInstance();
    $loc->pushActiveContext(Localization::CONTEXT_UI); ?>
    <div class="ccm-edit-mode-disabled-item" style="<?php echo isset($width) ? "width: $width;" : ''; ?><?php echo isset($height) ? "height: $height;" : ''; ?>">
        <i style="font-size:40px; margin-bottom:20px; display:block;" class="fa fa-picture-o" aria-hidden="true"></i>
        <div style="padding: 40px 0px 40px 0px"><?php echo t('Image Slider disabled in edit mode.'); ?>
            <div style="margin-top: 15px; font-size:9px;">
                <i class="fa fa-circle" aria-hidden="true"></i>
                <?php if (count($rows) > 0) {
        ?>
                    <?php foreach (array_slice($rows, 1) as $row) {
            ?>
                        <i class="fa fa-circle-thin" aria-hidden="true"></i>
                        <?php
        }
    } ?>
            </div>
        </div>
    </div>
    <?php
    $loc->popActiveContext();
} else {
    ?>





<?php       
    if (count($rows) > 0) {
?> 
    <?php 
        foreach ($rows as $row) {
    ?>
        <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">

            <!-- Link -->
            <?php if ($row['linkURL']) {
                ?>
                    <a href="<?php echo $row['linkURL']; ?>" class="mega-link-overlay"></a>
                <?php
            } ?>

            <?php
            $f = File::getByID($row['fID']); 
            ?>

            <!-- Icon -->
            <div style="display: inline-block; margin: auto;">
                <?php if (is_object($f)) {
                $tag = Core::make('html/image', [$f, false])->getTag();
                if ($row['title']) {
                    $tag->alt(h($row['title']));
                } else {
                    $tag->alt("slide");
                }
                echo $tag; ?>
                <?php
                } ?>
            </div>

            <!-- Title -->
            <?php 
            if ($row['title']) {
            ?>
            <h3><?php echo h($row['title']); ?></h3>
            <?php
            } ?>
            <hr>

            <!-- Description -->
            <p><?php echo $row['description']; ?></p>
        </div>
        <?php
        } ?>

    <?php
    } else {
        ?>
        <div class="ccm-image-slider-placeholder">
            <p><?php echo t('No Slides Entered.'); ?></p>
        </div>
        <?php
    } ?>


<?php
} ?>



