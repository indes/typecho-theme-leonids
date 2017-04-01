<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/4/1
 * Time: 20:47
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
    //图标设置
    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里输入图标链接,带http:// ,不填则使用主题自带的Favicon'));
    $form->addInput($favicon);

    $user_avatar = new Typecho_Widget_Helper_Form_Element_Text('user_avatar', NULL, NULL, _t('头像地址'), _t('一般为http://www.yourblog.com/image.png,支持 https:// 或 //,留空则使用站点名称'));
    $form->addInput($user_avatar->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));

    //百度统计代码
    $GoogleAnalytics = new Typecho_Widget_Helper_Form_Element_Textarea('GoogleAnalytics', NULL, NULL, _t('Google Analytics代码'), _t('填写你从Google Analytics获取到的Universal Analytics跟踪代码，不需要script标签'));
    $form->addInput($GoogleAnalytics);
}
