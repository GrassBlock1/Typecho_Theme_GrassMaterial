<?php if(!defined('__TYPECHO_ROOT_DIR__'))exit;
/**
 * GrassMaterial 是一只基于MDUI设计框架的Typecho主题喵～（一度妥协，虽然我也不想重复造轮子（
 * 
 * @package GrassMaterial
 * @author Grass_block
 * @version 1.0 Pre-Release
 * @link https://blog.imgb.space/
 */
$this->need('header.php');?>
<!-- MDUI CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"
  integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw"
  crossorigin="anonymous"
/>

<!-- MDUI JavaScript -->
<script
  src="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/js/mdui.min.js"
  integrity="sha384-gCMZcshYKOGRX9r6wbDrvF+TcCCswSHFucUzUPwka+Gr+uHgjlYvkABr95TCOz3A"
  crossorigin="anonymous"
></script>
<br/>
<br/>
					
    <main class="main-content" id="main-content">
					<?php while($this->next()): ?>
						
   <div class="mdui-card">
  <div class="mdui-card-media">
  	<img src="<?php postThumb($this); ?>">
    <div class="mdui-card-media-covered">
      <div class="mdui-card-primary">
        <div class="mdui-card-primary-title"> <?php $this->title() ?></div>
        <div class="mdui-card-primary-subtitle"><span class="material-icons">
account_circle
</span>
<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>  <i class="mdui-icon material-icons">date_range</i>  <?php $this->date('F j, Y'); ?> <i class="mdui-icon material-icons">art_track</i> <?php $this->category(','); ?> <i class="mdui-icon material-icons">comment</i> <?php $this->commentsNum('%d'); ?></div>
      </div>
       <div class="mdui-card-content"> <?php $this->excerpt(50 , '...'); ?> </div>
      <div class="mdui-card-actions">
        <a href="<?php $this->permalink() ?>"> <button class="mdui-btn mdui-ripple mdui-ripple-white">继续阅读</button> </a>
        <button class="mdui-btn mdui-ripple mdui-ripple-white">action 2</button>
      </div>
    </div>
  </div>
<?php endwhile; ?>
<span> </span>	
</main>
	<?php $this->need('footer.php'); ?>
  <!--[if lt IE 9]>
<h1>本站不支持IE的说...请下载其他浏览器，<a href="https://www.mozilla.org/zh-CN/firefox/new/">Mozilla Firefox似乎不错？</a></h1>
  <![endif]-->
