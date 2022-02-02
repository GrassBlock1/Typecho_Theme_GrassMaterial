<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML><!-- standard -->
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <!-- 通过自有函数输出HTML头部信息 （从官方主题抄过来的 -->
    <?php $this->header(); ?>
    <!--引入Material Icons 来自Google官方 官方的速度还可以-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet"/>
    <!--引入css&js基本框架（将来可能会添加选项选择资源地址。#坑-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.css">
    <script src="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.js"></script>
    <!--引入aplayer css&js 方便添加漂亮的播放器-->
    <script src="https://cdn.jsdelivr.net/npm/meting@2.0.1/dist/Meting.min.js"></script>
    <!--引入meting js 方便支持各种音乐平台-->
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
 <script src="//cdn.bootcss.com/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>
   <!--PJAX，使用jQuery库（？）-->
 <!-- PJAX -->
<script>
 $(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
    container: '#main',
    fragment: '#main',
    timeout: 8000
})
</script>
</head>
<body class="mdui-theme-layout-auto mdui-theme-accent-light-green">
     <header style="height: 100%;">
       <div class="mdui-toolbar" style="position:relative;">
   <a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">menu</i></a>
  <div class="mdui-toolbar-spacer"></div>
  <div class="mdui-textfield">
    </div>
    <div class="mdui-textfield mdui-textfield-expandable mdui-float-right">
   <button class="mdui-textfield-icon mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons"><?php _e('search'); ?></i></button>
    <form method="post" role="search">
    <input class="mdui-textfield-input" type="text" placeholder="Everything..."/>
   </form>
   <button class="mdui-textfield-close mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">close</i></button>
</div>
  <a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>
  <a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">more_vert</i></a>
</div>
     <!--顶栏-->
<div class="mdui-valign mdui-typo mdui-text-color-theme-text" style="padding-top: 125px ;"> <h1 class="mdui-center" style="padding-bottom: 125px ;";> <?php $this->options->description() ?></h1>
</header><!-- 20220202T2216 GMT+8 patched by KuoHuanHuan --><!-- patch-->
<!-- BODY-->
