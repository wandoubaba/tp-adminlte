<?php
/**
 * 分页配置
 */
return [
    // 默认页参数
    'options' => [
        // 每页记录数
        'list_rows' => (int)env('extra_paginate.default_list_rows', '20'),
        // 除分页以外的其他url参数
        'query' => [],
        // 当前页码变量名
        'var_page' => env('extra_paginate.default_var_page', 'page'),
    ],
    // 需要过滤掉的url参数（指分页相关的参数）
    'filter' => [
        // 当前页码变量名
        env('extra_paginate.default_var_page', 'page') => '',
        // 每页记录数变量名
        env('extra_paginate.default_var_list_rows', 'list_rows') => '',
    ],
];
