<?php

return [
    'subscribe/mail'                                               => 'subscribe/mail',
    'subscribe/activate/<code:\\w+>'                               => 'subscribe/activate',

    'cabinet/objects'                                              => 'cabinet/requests',
    'cabinet/profile'                                              => 'cabinet/profile',

    'password/recover'                                             => 'auth/password_recover',
    'password/recover/activate/<code:\\w+>'                        => 'auth/password_recover_activate',
    'registration'                                                 => 'auth/registration',

    'captcha'                                                      => 'site/captcha',

    'checkBoxTreeMask/add'                                         => 'check_box_tree_mask/add',
    'checkBoxTreeMask/addInto'                                     => 'check_box_tree_mask/add_into',
    'checkBoxTreeMask/delete'                                      => 'check_box_tree_mask/delete',

    'upload/upload'                                                => 'upload/upload',
    'upload/HtmlContent2'                                          => 'html_content/upload',

    'admin/subscribe'                                              => 'admin_subscribe/index',
    'admin/subscribe/add'                                          => 'admin_subscribe/add',
    'admin/subscribe/send'                                         => 'admin_subscribe/send',
    'admin/subscribe/delete'                                       => 'admin_subscribe/delete',
    'admin/subscribe/add/simple'                                   => 'admin_subscribe/add_simple',
    'admin/subscribe/<id:\\d+>'                                    => 'admin_subscribe/view',
    'admin/subscribe/<id:\\d+>/edit'                               => 'admin_subscribe/edit',

    'admin/events'                                                 => 'admin_events/index',
    'admin/events/add'                                             => 'admin_events/add',
    'admin/events/<id:\\d+>/delete'                                => 'admin_events/delete',
    'admin/events/<id:\\d+>/edit'                                  => 'admin_events/edit',
    'admin/events/<id:\\d+>/subscribe'                             => 'admin_events/subscribe',

    'admin/articleList'                                            => 'admin_article/index',
    'admin/articleList/add'                                        => 'admin_article/add',
    'admin/articleList/<id:\\d+>/delete'                           => 'admin_article/delete',
    'admin/articleList/<id:\\d+>/edit'                             => 'admin_article/edit',
    'admin/articleList/<id:\\d+>/subscribe'                        => 'admin_article/subscribe',

    'admin/users'                                                  => 'admin_users/index',
    'admin/users/<id:\\d+>/delete'                                 => 'admin_users/delete',
    'admin/users/<id:\\d+>/edit'                                   => 'admin_users/edit',

    'admin/dictionary'                                             => 'admin_dictionary/index',
    'admin/dictionary/add'                                         => 'admin_dictionary/add',
    'admin/dictionary/<id:\\d+>/delete'                            => 'admin_dictionary/delete',
    'admin/dictionary/<id:\\d+>/edit'                              => 'admin_dictionary/edit',
    'admin/dictionary/<id:\\d+>/subscribe'                         => 'admin_dictionary/subscribe',

    'shop'                                                         => 'shop/index',


    '/'                                                            => 'site/index',
    'log'                                                          => 'site/log',
    'activate/<code:\\w+>'                                         => 'site/activate',
    'logDb'                                                        => 'site/log_db',
    'contact'                                                      => 'site/contact',
    'login'                                                        => 'site/login',
    'logout'                                                       => 'site/logout',
    'articles'                                                     => 'site/articles',
    'about'                                                        => 'site/about',
    'dictionary'                                                   => 'site/dictionary',
    'dictionary/<id:\\d+>'                                         => 'site/dictionary_item',
    'events'                                                       => 'site/events',
    'events/<id:\\d+>'                                             => 'site/events_item',
    'articles/<year:\\d{4}>/<month:\\d{2}>/<day:\\d{2}>/<id:\\w+>' => 'site/article',


];