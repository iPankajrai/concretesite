<?php

defined('C5_EXECUTE') or die('Access Denied.');

/** @var \Concrete\Core\Block\View\BlockView $view */
/** @var \Concrete\Core\Express\Form\Renderer|null $renderer */
/** @var string|null $success */
/** @var string $bID */
/** @var \Concrete\Core\Error\ErrorList\ErrorList|null $error */
/** @var \Concrete\Core\Captcha\CaptchaInterface|null $captcha */
/** @var string $displayCaptcha "0" or "1" */
/** @var string $submitLabel */
?>
<div class="ccm-block-express-form">
    <?php if (isset($renderer)) {
    ?>
        <div class="ccm-form">
            <a name="form<?=$bID; ?>"></a>

            <?php if (isset($success)) {
        ?>
                <div class="alert alert-success">
                    <?=$success; ?>
                </div>
            <?php
    } ?>

            <?php if (isset($error) && is_object($error)) {
        ?>
                <div class="alert alert-danger">
                    <?=$error->output(); ?>
                </div>
            <?php } ?>

            <form enctype="multipart/form-data" id="contactusform" class="wow fadeInUp form-stacked" data-wow-delay="0.6s" method="post" action="<?=('index.php/renderview')?>">
                
                <!-- $renderer->render(); -->
                <div class="col-md-6 col-sm-6">
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <div class="col-md-6 col-sm-6">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="col-md-12 col-sm-12">
                    <textarea class="form-control" placeholder="Message" rows="7" name="message"></textarea>
                </div>
                <?php
                if ($displayCaptcha) {
                    ?>
                    <div class="form-group captcha">
                        <?php
                        $captchaLabel = $captcha->label();
                        if (!empty($captchaLabel)) {
                            ?>
                            <label class="control-label"><?php echo $captchaLabel; ?></label>
                            <?php } ?>

                        <div><?php $captcha->display(); ?></div>
                        <div><?php $captcha->showInput(); ?></div>
                    </div>
                <?php } ?>



                <!-- <div class="form-actions">
                    <button type="submit" name="Submit" class="btn btn-primary form-control" value = "SEND MESSAGE"><?=t($submitLabel); ?></button>
                </div> -->
                <div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8 form-actions">
                    <input type="submit" name="submit" class="form-control" value="SEND MESSAGE">
                </div>
            </form>

            <!-- <form enctype="multipart/form-data" action="index.php/renderview" id="contactusform" method="post" class="wow fadeInUp form-stacked" data-wow-delay="0.6s">
                <div class="col-md-6 col-sm-6">
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <div class="col-md-6 col-sm-6">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="col-md-12 col-sm-12">
                    <textarea class="form-control" placeholder="Message" rows="7" name="message"></textarea>
                </div>
                <div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8 form-actions">
                    <input type="submit" name="submit" class="form-control" value="SEND MESSAGE">
                </div>
            </form> -->
        </div>
    <?php
} else {
        ?>
        <p><?=t('This form is unavailable.'); ?></p>
    <?php
    } ?>
</div>


