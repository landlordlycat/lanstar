<?php
/**
 * 自制简单主题，你的star就是我的动力
 * 
 * @package Lanstar
 * @author 染念
 * @version 1.0
 * @link https://dyedd.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('includes/header.php');
 ?>
<div class="container">
    <div class="row">
        <?php $this->need('includes/nav.php');?>
    <div class="col-xl-7 col-md-6 col-12">
        <?php if ($this->options->bannerUrl):?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php echo utils::bannerHandle($this->options->bannerUrl);?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <?php endif;?>
        <div class="list">
            <?php while($this->next()): ?>
                <article>
                    <a class="post-title" data-toggle="collapse" href="#post-author-<?php $this->cid() ?>" role="button" aria-expanded="false" aria-controls="post-author-<?php $this->cid() ?>">
                        <h4><?php $this->title() ?></h4>
                    </a>
                    <div class="collapse post-author" id="post-author-<?php $this->cid() ?>">
                        <?php echo $this->author->gravatar(32);?>
                        <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
                    </div>
                    <button class="button post-datetime">
                                <span style="display: flex;align-items: center;">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="post-icon bi bi-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3.5 8a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                <?php $this->category(','); ?>
                                </span>
                    </button>
                    <div class="post-content">
                        <div class="row">
                            <?php if ($this->fields->banner && $this->fields->banner !=''):?>
                            <div class="post-cover col-xl-6">
                                <div class="post-cover-inner">
                                    <img src="<?php echo $this->fields->banner;?>" alt="cover">
                                </div>
                            </div>
                            <div class="post-content-inner col-xl-6">
                                <? else: ?>
                                <div class="post-content-inner col-md-12">
                                    <? endif; ?>
                                    <?php if($this->fields->excerpt && $this->fields->excerpt!='') {
                                        echo $this->fields->excerpt;
                                      }else{
                                        echo $this->excerpt(70);
                                      }
                                    ?>
                                    <button class="button post-plain">
                                        <a href="<?php $this->permalink() ?>">
                                        <span>
                                            阅读全文
                                            <svg width="1em" height="1em" viewBox="0 0 24 24" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                        </span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="content-action">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="p-2">
                                    <button class="button post-action">
                                        <span style="display: flex;align-items: center;">
                                            <svg width="24" height="24" viewBox="0 0 16 16" class="post-icon bi bi-eye" fill="currentColor"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd"
                                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                                                  <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                            </svg>
                                        0
                                        </span>
                                    </button>
                                </div>
                                <div class="p-2">
                                    <button class="button post-action">
                                        <span style="display: flex;align-items: center;">
                                            <svg width="20" height="20" viewBox="0 0 16 16" class="post-icon bi bi-chat-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                              <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                            </svg>
                                        <?php $this->commentsNum('0', '1', '%d'); ?>
                                        </span>
                                    </button>
                                </div>
                                <div class="p-2">
                                    <button class="button post-action">
                                        <span style="display: flex;align-items: center;">
                                            <svg width="20" height="20" viewBox="0 0 16 16" class="post-icon bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        <?php $this->commentsNum('0', '1', '%d'); ?>
                                        </span>
                                    </button>
                                </div>
                                <div class="p-2">
                                    <button class="button post-datetime">
                                        <span style="display: flex;align-items: center;">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="post-icon bi bi-clock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            </svg>
                                        <?php echo formatTime($this->created); ?>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                </article>
            <?php endwhile; ?>
            <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
        </div>
    </div>
    <?php $this->need('includes/right.php');?>
    </div>
</div>
