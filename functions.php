<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}

/** 输出文章缩略图 */ 
function postThumb($obj) {

  $thumb = $obj->fields->thumb;
  if (!$thumb) {
    $thumb= "https://i.loli.net/2021/01/01/59cG1kgiH6Ajyoa.png";
  }
  if (is_numeric($thumb)) {
    preg_match_all('/<img.*?src="(.*?)".*?[\/]?>/i', $obj->content, $matches);
    if (isset($matches[1][$thumb-1])) {
      $thumb = $matches[1][$thumb-1];
    } else {
      $thumb= "https://i.loli.net/2021/01/01/59cG1kgiH6Ajyoa.png";
    }
  }
  
  
  return '<img src=".$thumb."  style="width: 100%"/>';
}

/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

function themeFields($layout) {

	$thumb = new Typecho_Widget_Helper_Form_Element_Text(
		'thumb',
		NULL,
		NULL,
		_t('自定义缩略图'),
		_t('在这里填入一个图片 URL 地址, 以添加本文的缩略图，若填入纯数字，例如 <b>3</b> ，则使用文章第三张图片作为缩略图（对应位置无图则不显示缩略图），留空则默认不显示缩略图')
	);
	$thumb->input->setAttribute('class', 'w-100');
	$layout->addItem($thumb);
	
    $licenses = new Typecho_Widget_Helper_Form_Element_Radio(
		'linceses', 
    	array(
			'BY' => _t('CC BY'),
    		'BY-SA' => _t('CC BY-SA'),
    		'BY-ND' => _t('CC BY-ND'),
    		'BY-NC' => _t('CC BY-NC'),
    		'BY-NC-SA' => _t('CC BY-NC-SA'),
    		'BY-NC-ND' => _t('CC BY-NC-ND'),
			'NONE' => _t('没有')
		),
		'NONE',
		_t('许可协议'),
		_t('默认没有协议，请前往 <a href="https://creativecommons.org/licenses/" target="_blank">CreativeCommons</a> 查看更多关于协议的内容，仅支持 4.0 ( 国际 ) 协议')
	);
	$layout->addItem($licenses);
	
}

