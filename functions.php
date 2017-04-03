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

    //侧边栏设置
    $user_avatar = new Typecho_Widget_Helper_Form_Element_Text('user_avatar', NULL, NULL, _t('头像地址'), _t('一般为http://www.yourblog.com/image.png,支持 https:// 或 //,留空则使用站点名称'));
    $form->addInput($user_avatar->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));

    $user_name = new Typecho_Widget_Helper_Form_Element_Text('user_name', NULL, NULL, _t('侧边栏显示用户名'), _t('留空则使用站点名称'));
    $form->addInput($user_name);
    $user_bio = new Typecho_Widget_Helper_Form_Element_Text('user_bio', NULL, NULL, _t('侧边栏显示用户简介'), _t('留空则使用站点简介'));
    $form->addInput($user_bio);
    //百度统计代码
    $baidutongji = new Typecho_Widget_Helper_Form_Element_Textarea('baidutongji', NULL, NULL, _t('百度统计代码'), _t('填写你的百度统计代码，不需要script标签'));
    $form->addInput($baidutongji);

    //social-links
//    $socialweibo = new Typecho_Widget_Helper_Form_Element_Text('socialweibo', NULL, NULL, _t('输入微博链接'), _t('在这里输入微博链接,支持 http:// 或 https:// 或 //'));
//    $form->addInput($socialweibo->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
//    $socialzhihu = new Typecho_Widget_Helper_Form_Element_Text('socialzhihu', NULL, NULL, _t('输入知乎链接'), _t('在这里输入知乎链接,支持 http:// 或 https:// 或 //'));
//    $form->addInput($socialzhihu->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
//    $socialgithub = new Typecho_Widget_Helper_Form_Element_Text('socialgithub', NULL, NULL, _t('输入GitHub链接'), _t('在这里输入GitHub链接,支持 http:// 或 https://或 //'));
//    $form->addInput($socialgithub->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
//    $socialtwitter = new Typecho_Widget_Helper_Form_Element_Text('socialtwitter', NULL, NULL, _t('输入Twitter链接'), _t('在这里输入twitter链接,支持 http:// 或 https:// 或 //'));
//    $form->addInput($socialtwitter->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));

    //footer
    $footerinfo = new Typecho_Widget_Helper_Form_Element_Text('footerinfo', NULL, NULL, _t('Footer'), _t('留空则为默认值，可使用HTML标签'));
    $form->addInput($footerinfo);
}
