<?php
/**
 * 简体中文语言包
 * 需要在lang.php中设置开启语言分组
 */
return [

    /**
     * 页面标题
     */
    'pagetitle' => [
        'console_index' => '控制台首页',
    ],
    /* END 页面标题 */

    /**
     * 获取器对应的内容
     */
    'getter' => [
    ],
    /* END 获取器对应的内容 */

    /**
     * 其他内容
     */
    'success' => '操作成功',
    'failed' => '操作失败',
    'no_data' => '数据不存在',
    'has_apps' => '存在关联应用',
    'has_templates' => '存在关联模板',
    'has_signs' => '存在关联签名',
    'other' => '其它',
    /* END 其他内容 */

    /**
     * 字段名称
     * （主要用于验证器的多语言，由于编码量太大，所以暂时不往下做了，机制保留）
     */
    'field' => [
    ],
    /* END 字段名称 */

    /**
     * 验证器规则
     * （主要用于验证器的多语言，由于编码量太大，所以暂时不往下做了，机制保留）
     */
    'validate' => [
        'not_null' => '不能为空',
        'is_number' => '应该是纯数字',
        'rangelength' => '长度不符合要求',
    ],
    /* END 验证器规则 */

];
