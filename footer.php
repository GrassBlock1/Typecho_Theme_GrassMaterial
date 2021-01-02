<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
	<p id="hitokoto"><a href="#" id="hitokoto_text">:D 获取中...</a></p>
<!-- 现代写法，推荐(不支持 IE) -->
<script>
  fetch('https://v1.hitokoto.cn')
    .then(response => response.json())
    .then(data => {
      const hitokoto = document.getElementById('hitokoto_text')
      hitokoto.href = 'https://hitokoto.cn/?uuid=' + data.uuid
      hitokoto.innerText = data.hitokoto
    })
    .catch(console.error)
</script>
<!-- 一言 -->
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.
</footer><!-- end #footer -->
<!-- 加载提示 -->
<loader>
    <div class="plane"></div>
</loader>
<script>
	var pjax = new Pjax({
  // 在页面进行 PJAX 时需要被替换的元素或容器，一条一个 CSS 选择器，数组形式
  selectors: [
    "title",
    "meta", // 如果是全部 meta 替换的话，只需要写 meta
    "main"
  ],
  cacheBust: false
})

// 开始 PJAX 执行的函数
document.addEventListener('pjax:send', function (){
    ks.select("loader").classList.add("active");
});

// PJAX 完成之后执行的函数，可以和上面的重载放在一起
document.addEventListener('pjax:complete', function (){
    ks.select("loader").classList.add("active");
}); </script>
<!-- Meting div -->
<meting-js
	server="netease"
	type="song"
	id="506092035"
	fixed=true >
</meting-js>
<div class="mdui-fab-wrapper" id="float">
   <button class="mdui-fab mdui-ripple mdui-color-theme-accent">
    <!-- 默认显示的图标 -->
    <i class="mdui-icon material-icons">add</i>
    <!-- 在拨号菜单开始打开时，平滑切换到该图标，若不需要切换图标，则可以省略该元素 -->
    <i class="mdui-icon mdui-fab-opened material-icons">create</i>
  </button>
  <div class="mdui-fab-dial">
    <button class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-pink"><i class="material-icons">backup</i></button>
    <button class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-red"><i class="mdui-icon material-icons">bookmark</i></button>
    <button class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-orange"><i class="mdui-icon material-icons">access_alarms</i></button>
    <button class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-blue"><i class="mdui-icon material-icons">touch_app</i></button>
  </div>
</div>
<?php $this->footer(); ?>
</body>
</html>
