<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('layout/header.php'); ?>
<div class="container">
    <div class="row m-1">
        <?php $this->need('layout/left.php'); ?>
        <div class="col-xl-7 col-md-6 col-12" id="pjax-container">
            <?php $this->need('component/page.content.php'); ?>
            <?php $this->need('layout/comments.php'); ?>

        </div>
        <?php $this->need('layout/right.php'); ?>
    </div>
</div>
<?php $this->need('component/index.footer.php'); ?>
</body>
</html>