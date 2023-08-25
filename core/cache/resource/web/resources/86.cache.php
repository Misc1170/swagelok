<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 86,
    'type' => 'document',
    'pagetitle' => 'SS-6-AT-6',
    'longtitle' => '',
    'description' => '',
    'alias' => 'ss-6-at-6',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 41,
    'isfolder' => 0,
    'introtext' => NULL,
    'content' => NULL,
    'richtext' => 1,
    'template' => 3,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1692966500,
    'editedby' => 0,
    'editedon' => 0,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1692966500,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'MODX\\Revolution\\modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'ss-6-at-6',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'alias_visible' => 1,
    'price' => 
    array (
      0 => 'price',
      1 => '0',
      2 => 'default',
      3 => NULL,
      4 => 'number',
    ),
    'catalog_title' => 
    array (
      0 => 'catalog_title',
      1 => 'Фитинги - Трубные фитинги',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'catalog_path' => 
    array (
      0 => 'catalog_path',
      1 => 'https://www.swagelok.com/downloads/webcatalogs/ru/ms-01-147.pdf',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'img' => 
    array (
      0 => 'img',
      1 => 'assets/resources/images/products/fitingi/fitingi1.png',
      2 => 'default',
      3 => NULL,
      4 => 'image',
    ),
    '_content' => '<!DOCTYPE html>
<html>

<head>
    [[!$base_head]]
</head>

<body>
[[!$header]]

[[!$product_card]]

[[!$footer]]

</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'icon' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[pdoCrumbs?

                &tplWrapper=`@INLINE
                <ul class="flex flex-wrap gap-1 text-8A8A8A">[[+output]]</ul>
                `
                &tpl=`@INLINE
                <li><a href="[[+link]]"><strong>[[+menutitle]]</strong></a></li>
                `
                &tplCurrent=`@INLINE
                <li><strong>[[+menutitle]]</strong></li>
                `
                &outputSeparator=`/`
                &showCurrent=`0`
                &from=`0`
                &to=`3`]]' => '<ul class="flex flex-wrap gap-1 text-8A8A8A"><li><a href="/"><strong>Главная</strong></a></li>/<li><a href="produkcziya/"><strong>Продукция</strong></a></li></ul>',
    '[[pdoCrumbs?
                    &exclude=`1,49`
                    &tplWrapper=`@INLINE
                    <div class="flex flex-wrap gap-2">[[+output]]</div>
                    `
                    &tpl=`@INLINE <h3>[[+menutitle]]</h3>`
                    &outputSeparator=`<h3 class="">—</h3>`
                    &showCurrent=`0`]]' => '<div class="flex flex-wrap gap-2"><h3>Фитинги</h3><h3 class="">—</h3><h3>Трубные фитинги</h3><h3 class="">—</h3><h3>Переходники</h3><h3 class="">—</h3><h3>Прямые</h3></div>',
    '[[product_similiar?
&parents=`49`
&alias=fitingi/
&showTitle=`1`
&hideShowMore=`0`]]' => '
<div class="bg-F3F3F3 my-10">
    <div class="container"><h2 class="my-10">Похожие изделия</h2><div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-4 gap-y-6"><div class="flex flex-col justify-between gap-y-2 bg-white">
  <img src="assets/resources/images/products/fitingi/fitingi1.png" alt="ПРОДУКЦИЯ">
  <div class="flex flex-col px-3 gap-y-1">
    <strong>SS-6-AT-6</strong>
    <strong class="text-66B645 sm:block hidden">от 0 руб</strong>
  </div>
  <div class="flex sm:justify-end justify-between pb-4 px-3">
    <strong class="text-66B645 sm:hidden">от 0 руб</strong>
    <a class="btn-66B645 w-1/2" href=ss-6-at-6><span class="font-medium">Подробнее</span></a>
  </div>
</div>
<div class="flex flex-col justify-between gap-y-2 bg-white">
  <img src="assets/resources/images/products/fitingi/fitingi1.png" alt="ПРОДУКЦИЯ">
  <div class="flex flex-col px-3 gap-y-1">
    <strong>SS-4-P-RT</strong>
    <strong class="text-66B645 sm:block hidden">от 0 руб</strong>
  </div>
  <div class="flex sm:justify-end justify-between pb-4 px-3">
    <strong class="text-66B645 sm:hidden">от 0 руб</strong>
    <a class="btn-66B645 w-1/2" href=ss-4-p-rt><span class="font-medium">Подробнее</span></a>
  </div>
</div>
<div class="flex flex-col justify-between gap-y-2 bg-white">
  <img src="assets/resources/images/products/fitingi/fitingi1.png" alt="ПРОДУКЦИЯ">
  <div class="flex flex-col px-3 gap-y-1">
    <strong>SS-1210-S</strong>
    <strong class="text-66B645 sm:block hidden">от 0 руб</strong>
  </div>
  <div class="flex sm:justify-end justify-between pb-4 px-3">
    <strong class="text-66B645 sm:hidden">от 0 руб</strong>
    <a class="btn-66B645 w-1/2" href=ss-1210-s><span class="font-medium">Подробнее</span></a>
  </div>
</div>
<div class="flex flex-col justify-between gap-y-2 bg-white">
  <img src="assets/resources/images/products/fitingi/fitingi1.png" alt="ПРОДУКЦИЯ">
  <div class="flex flex-col px-3 gap-y-1">
    <strong>SS-4FKO-C</strong>
    <strong class="text-66B645 sm:block hidden">от 0 руб</strong>
  </div>
  <div class="flex sm:justify-end justify-between pb-4 px-3">
    <strong class="text-66B645 sm:hidden">от 0 руб</strong>
    <a class="btn-66B645 w-1/2" href=ss-4fko-c><span class="font-medium">Подробнее</span></a>
  </div>
</div>
       <div class="lg:hidden sm:flex hidden flex-col justify-end px-6 pb-2">
            <button class="btn-66B645"><span class="font-medium">Показать еще</span></button>
        </div></div><div class="lg:flex sm:hidden flex justify-end my-6">
                    <a class="btn-66B645 md:w-2/12 w-5/12" href=fitingi/><span class="font-medium">Показать еще</span></a>
        </div></div>
</div>',
  ),
  'sourceCache' => 
  array (
    'MODX\\Revolution\\modChunk' => 
    array (
      'base_head' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'base_head',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '<base href="[[++site_url]]" />
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>
    [[*pagetitle]]
</title>


<link rel="stylesheet" href="/public/css/style.css" type="text/css"/>
<script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
<script type="text/javascript" src="/assets/resources/js/main.js" defer></script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/base/chunks/html_head/base_head.html',
          'content' => '<base href="[[++site_url]]" />
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>
    [[*pagetitle]]
</title>


<link rel="stylesheet" href="/public/css/style.css" type="text/css"/>
<script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
<script type="text/javascript" src="/assets/resources/js/main.js" defer></script>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '<div class="container relative">
    <div class="container my-10 flex justify-between lg:justify-normal lg:absolute top-0 left-0 z-10">
        <div class="flex sm:justify-normal justify-between sm:flex-col flex-row-reverse">

            <!--            LOGO START-->
            <a class="flex sm:w-full w-6/12 h-full" href="/"><img class=""
                                                                  src="/assets/resources/images/logo/logo_header.png"
                                                                  alt="BANER"></a>
            <!--            LOGO END-->

            <!--Hamburger menu START-->
            [[!$hamburger_menu]]
            <!--Hamburger menu END-->
        </div>


        <!--        Кнопки ниже 768px START-->
        <div class="hidden sm:flex md:hidden flex-col justify-center">
            <button class="open-btn btn-66B645 px-6 w-full"><h6>Запросить КП</h6></button>
        </div>
        <!--        Кнопки ниже 768px END-->


        <!--        Всё меню выше 768px START-->
        <div class="md:flex hidden flex-col justify-between w-9/12">

            <div class="flex justify-end gap-10">
                <a class="text-base" href="tel:8 888 888 88 88"><span>8 888 888 88 88</span></a>
                <a class="text-base" href="mailto:mail@a-flow.ru"><span>mail@a-flow.ru</span></a>
            </div>

            <ul class="bg-F3F3F3 rounded-r-3xl flex lg:justify-end justify-between">
                <li class="bg-none text-black lg:ml-0 ml-8 flex justify-center items-center lg:w-1/4"><a
                        href="[[~49]]"><strong>Продукция</strong></a></li>
                <li class="bg-none text-black flex justify-center items-center lg:w-1/4"><a
                        href="[[~51]]"><strong>Каталоги</strong></a>
                </li>
                <button class="open-btn btn-66B645 px-6  above"><h6>Запросить КП</h6></button> <!-- lg:w-1/4 -->
            </ul>
        </div>
        <!--        Всё меню выше 768px END-->

    </div>
</div>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/base/chunks/header/header.html',
          'content' => '<div class="container relative">
    <div class="container my-10 flex justify-between lg:justify-normal lg:absolute top-0 left-0 z-10">
        <div class="flex sm:justify-normal justify-between sm:flex-col flex-row-reverse">

            <!--            LOGO START-->
            <a class="flex sm:w-full w-6/12 h-full" href="/"><img class=""
                                                                  src="/assets/resources/images/logo/logo_header.png"
                                                                  alt="BANER"></a>
            <!--            LOGO END-->

            <!--Hamburger menu START-->
            [[!$hamburger_menu]]
            <!--Hamburger menu END-->
        </div>


        <!--        Кнопки ниже 768px START-->
        <div class="hidden sm:flex md:hidden flex-col justify-center">
            <button class="open-btn btn-66B645 px-6 w-full"><h6>Запросить КП</h6></button>
        </div>
        <!--        Кнопки ниже 768px END-->


        <!--        Всё меню выше 768px START-->
        <div class="md:flex hidden flex-col justify-between w-9/12">

            <div class="flex justify-end gap-10">
                <a class="text-base" href="tel:8 888 888 88 88"><span>8 888 888 88 88</span></a>
                <a class="text-base" href="mailto:mail@a-flow.ru"><span>mail@a-flow.ru</span></a>
            </div>

            <ul class="bg-F3F3F3 rounded-r-3xl flex lg:justify-end justify-between">
                <li class="bg-none text-black lg:ml-0 ml-8 flex justify-center items-center lg:w-1/4"><a
                        href="[[~49]]"><strong>Продукция</strong></a></li>
                <li class="bg-none text-black flex justify-center items-center lg:w-1/4"><a
                        href="[[~51]]"><strong>Каталоги</strong></a>
                </li>
                <button class="open-btn btn-66B645 px-6  above"><h6>Запросить КП</h6></button> <!-- lg:w-1/4 -->
            </ul>
        </div>
        <!--        Всё меню выше 768px END-->

    </div>
</div>
',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'hamburger_menu' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'hamburger_menu',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '<div class=" md:hidden block sm:w-full w-6/12">

    <button id="burger_btn_open">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
             stroke="currentColor" class="md:w-12 md:h-12 w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
        </svg>
    </button>

    <div id="burger_menu" class="flex-col absolute top-0 gap-y-10 hidden bg-F3F3F3 p-6 w-9/12 z-40">
        <button id="burger_btn_close">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="md:w-12 md:h-12 w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
        </button>
        <div class="flex flex-col gap-2">
            <a href="[[~51]]"><strong>Каталоги</strong></a>
            <a href="[[~49]]"><strong>Продукция</strong></a>
        </div>
        <div class="flex flex-col gap-2">
            <a href="tel:8 888 888 88 88"><span>8 888 888 88 88</span></a>
            <a href="mailto:mail@a-flow.ru"><span>mail@a-flow.ru</span></a>
        </div>

        <div class="sm:hidden flex flex-col justify-center gap-y-2">
            <button class="open-btn btn-66B645 hamburger"><h6>Запросить КП</h6></button>
        </div>

    </div>

</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/base/chunks/header/elements/hamburger_menu.html',
          'content' => '<div class=" md:hidden block sm:w-full w-6/12">

    <button id="burger_btn_open">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
             stroke="currentColor" class="md:w-12 md:h-12 w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
        </svg>
    </button>

    <div id="burger_menu" class="flex-col absolute top-0 gap-y-10 hidden bg-F3F3F3 p-6 w-9/12 z-40">
        <button id="burger_btn_close">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="md:w-12 md:h-12 w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
        </button>
        <div class="flex flex-col gap-2">
            <a href="[[~51]]"><strong>Каталоги</strong></a>
            <a href="[[~49]]"><strong>Продукция</strong></a>
        </div>
        <div class="flex flex-col gap-2">
            <a href="tel:8 888 888 88 88"><span>8 888 888 88 88</span></a>
            <a href="mailto:mail@a-flow.ru"><span>mail@a-flow.ru</span></a>
        </div>

        <div class="sm:hidden flex flex-col justify-center gap-y-2">
            <button class="open-btn btn-66B645 hamburger"><h6>Запросить КП</h6></button>
        </div>

    </div>

</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'product_card' => 
      array (
        'fields' => 
        array (
          'id' => 17,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'product_card',
          'description' => '',
          'editor_type' => 0,
          'category' => 11,
          'cache_type' => 0,
          'snippet' => '<div class="bg-white">
    <div class="container">
        <div class="flex-col lg:py-20 sm:py-14 py-8 flex lg:grid grid-cols-12">

            <div class="flex flex-col justify-between xl:col-span-7 lg:col-span-6 lg:order-last lg:gap-y-16 gap-y-6 lg:mb-0 mb-10">
                [[pdoCrumbs?

                &tplWrapper=`@INLINE
                <ul class="flex flex-wrap gap-1 text-8A8A8A">[[+output]]</ul>
                `
                &tpl=`@INLINE
                <li><a href="[[+link]]"><strong>[[+menutitle]]</strong></a></li>
                `
                &tplCurrent=`@INLINE
                <li><strong>[[+menutitle]]</strong></li>
                `
                &outputSeparator=`/`
                &showCurrent=`0`
                &from=`0`
                &to=`3`

                ]]
                <div>
                    [[pdoCrumbs?
                    &exclude=`1,49`
                    &tplWrapper=`@INLINE
                    <div class="flex flex-wrap gap-2">[[+output]]</div>
                    `
                    &tpl=`@INLINE <h3>[[+menutitle]]</h3>`
                    &outputSeparator=`<h3 class="">—</h3>`
                    &showCurrent=`0`
                    ]]
                    <h4 class="text-8A8A8A mt-3">Код изделия: [[*pagetitle]]</h4>
                </div>
                <div class="flex sm:flex-row flex-col lg:gap-x-16 lg:gap-y-0 gap-y-6 lg:justify-normal justify-between">
                    <h3 class="text-66B645">от [[*price]] руб</h3>
                    <a class="btn-black w-1/3 justify-center" href="#"><h6 class="font-medium">Купить</h6></a>
                </div>
            </div>

            <div class="flex sm:flex-row flex-col xl:col-span-5 lg:col-span-6">
                <img src="[[*img]]" alt="КАРТИНКА ПРОДУКЦИИ">
                <div class="flex sm:flex-col flex-row sm:mx-5 sm:mt-0 mt-4 gap-4">
                    <!--                    <img class="mini_img_product_card active"-->
                    <!--                         src="/wp-content/themes/swagelok/assets/images/products/prod_1_mini.png" alt="">-->
                    <!--                    <img class="mini_img_product_card"-->
                    <!--                         src="/wp-content/themes/swagelok/assets/images/products/prod_1_mini.png" alt="">-->
                </div>
            </div>

        </div>
        <div class="pb-10 grid grid-cols-12">
            <div class="lg:col-span-5 col-span-12">
                <h2 class="mb-3">ОПИСАНИЕ</h2>
                <h6><?php echo esc_attr(wp_strip_all_tags(get_the_content(), true)); ?></h6>
            </div>
            <form class="product_card_form bg-F3F3F3 md:grid grid-cols-2 p-6 gap-x-6 lg:col-span-7 col-span-12 lg:mt-0 sm:mt-10 mt-6"
                  action="" method="post">
                <div class="flex flex-col gap-y-4">
                    <input type="text" placeholder="Телефон">
                    <input type="email" placeholder="E-mail">
                    <textarea class="md:hidden flex" name="" id="" placeholder="Сообщение"></textarea>
                    <button class="btn-66B645 md:w-full w-7/12" type="submit">Запросить КП</button>
                </div>
                <textarea class="md:flex hidden" name="" id="" placeholder="Сообщение"></textarea>
            </form>
        </div>
        <div class="pb-20 grid grid-cols-12">
            <div class="lg:col-span-5">
                <h2 class="mb-3">КАТАЛОГИ</h2>
                <a class="flex items-center gap-6" href="[[*catalog_path]]" download>
                    <img src="/assets/resources/images/pdf_icon.png" alt="PDF">
                    <h6>[[*catalog_title]]</h6>
                </a>
            </div>
        </div>
    </div>
</div>

[[product_similiar?
&parents=`49`
&alias=[[~[[*id:pdofield=`{"topLevel":3,"field":"id"}`]]]]
&showTitle=`1`
&hideShowMore=`0`
]]





',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/base/chunks/elements/product/product_card.html',
          'content' => '<div class="bg-white">
    <div class="container">
        <div class="flex-col lg:py-20 sm:py-14 py-8 flex lg:grid grid-cols-12">

            <div class="flex flex-col justify-between xl:col-span-7 lg:col-span-6 lg:order-last lg:gap-y-16 gap-y-6 lg:mb-0 mb-10">
                [[pdoCrumbs?

                &tplWrapper=`@INLINE
                <ul class="flex flex-wrap gap-1 text-8A8A8A">[[+output]]</ul>
                `
                &tpl=`@INLINE
                <li><a href="[[+link]]"><strong>[[+menutitle]]</strong></a></li>
                `
                &tplCurrent=`@INLINE
                <li><strong>[[+menutitle]]</strong></li>
                `
                &outputSeparator=`/`
                &showCurrent=`0`
                &from=`0`
                &to=`3`

                ]]
                <div>
                    [[pdoCrumbs?
                    &exclude=`1,49`
                    &tplWrapper=`@INLINE
                    <div class="flex flex-wrap gap-2">[[+output]]</div>
                    `
                    &tpl=`@INLINE <h3>[[+menutitle]]</h3>`
                    &outputSeparator=`<h3 class="">—</h3>`
                    &showCurrent=`0`
                    ]]
                    <h4 class="text-8A8A8A mt-3">Код изделия: [[*pagetitle]]</h4>
                </div>
                <div class="flex sm:flex-row flex-col lg:gap-x-16 lg:gap-y-0 gap-y-6 lg:justify-normal justify-between">
                    <h3 class="text-66B645">от [[*price]] руб</h3>
                    <a class="btn-black w-1/3 justify-center" href="#"><h6 class="font-medium">Купить</h6></a>
                </div>
            </div>

            <div class="flex sm:flex-row flex-col xl:col-span-5 lg:col-span-6">
                <img src="[[*img]]" alt="КАРТИНКА ПРОДУКЦИИ">
                <div class="flex sm:flex-col flex-row sm:mx-5 sm:mt-0 mt-4 gap-4">
                    <!--                    <img class="mini_img_product_card active"-->
                    <!--                         src="/wp-content/themes/swagelok/assets/images/products/prod_1_mini.png" alt="">-->
                    <!--                    <img class="mini_img_product_card"-->
                    <!--                         src="/wp-content/themes/swagelok/assets/images/products/prod_1_mini.png" alt="">-->
                </div>
            </div>

        </div>
        <div class="pb-10 grid grid-cols-12">
            <div class="lg:col-span-5 col-span-12">
                <h2 class="mb-3">ОПИСАНИЕ</h2>
                <h6><?php echo esc_attr(wp_strip_all_tags(get_the_content(), true)); ?></h6>
            </div>
            <form class="product_card_form bg-F3F3F3 md:grid grid-cols-2 p-6 gap-x-6 lg:col-span-7 col-span-12 lg:mt-0 sm:mt-10 mt-6"
                  action="" method="post">
                <div class="flex flex-col gap-y-4">
                    <input type="text" placeholder="Телефон">
                    <input type="email" placeholder="E-mail">
                    <textarea class="md:hidden flex" name="" id="" placeholder="Сообщение"></textarea>
                    <button class="btn-66B645 md:w-full w-7/12" type="submit">Запросить КП</button>
                </div>
                <textarea class="md:flex hidden" name="" id="" placeholder="Сообщение"></textarea>
            </form>
        </div>
        <div class="pb-20 grid grid-cols-12">
            <div class="lg:col-span-5">
                <h2 class="mb-3">КАТАЛОГИ</h2>
                <a class="flex items-center gap-6" href="[[*catalog_path]]" download>
                    <img src="/assets/resources/images/pdf_icon.png" alt="PDF">
                    <h6>[[*catalog_title]]</h6>
                </a>
            </div>
        </div>
    </div>
</div>

[[product_similiar?
&parents=`49`
&alias=[[~[[*id:pdofield=`{"topLevel":3,"field":"id"}`]]]]
&showTitle=`1`
&hideShowMore=`0`
]]





',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '<footer class="bg-66B645 md:py-16 pt-6 pb-16">

    <div class="flex sm:flex-row flex-col justify-between container sm:gap-y-0 gap-y-4">

        <div class="flex flex-col justify-between sm:gap-y-0 gap-y-2 lg:w-3/12 md:w-4/12 w-6/12">
            <img src="/assets/resources/images/logo/logo_footer.png" alt="">
            <h6 class="text-white md:mt-4">2023 г</h6>
        </div>

        <div class="flex flex-col sm:justify-center gap-3">
            <div class="flex md:flex-row flex-col justify-end md:gap-10 gap-y-2">
                <a class="text-white flex sm:justify-end" href="tel:8 888 888 88 88"><span>8 888 888 88 88</span></a>
                <a class="text-white flex sm:justify-end" href="mailto:mail@a-flow.ru"><span>mail@a-flow.ru</span></a>
            </div>
            <div class="flex sm:justify-end lg:mt-0 sm:mt-8 mt-2">
                <button class="bg-white text-66B645 rounded-3xl py-2 px-12"><h6>
                    Запросить КП</h6></button>
            </div>

        </div>

    </div>

</footer>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/base/chunks/footer/footer.html',
          'content' => '<footer class="bg-66B645 md:py-16 pt-6 pb-16">

    <div class="flex sm:flex-row flex-col justify-between container sm:gap-y-0 gap-y-4">

        <div class="flex flex-col justify-between sm:gap-y-0 gap-y-2 lg:w-3/12 md:w-4/12 w-6/12">
            <img src="/assets/resources/images/logo/logo_footer.png" alt="">
            <h6 class="text-white md:mt-4">2023 г</h6>
        </div>

        <div class="flex flex-col sm:justify-center gap-3">
            <div class="flex md:flex-row flex-col justify-end md:gap-10 gap-y-2">
                <a class="text-white flex sm:justify-end" href="tel:8 888 888 88 88"><span>8 888 888 88 88</span></a>
                <a class="text-white flex sm:justify-end" href="mailto:mail@a-flow.ru"><span>mail@a-flow.ru</span></a>
            </div>
            <div class="flex sm:justify-end lg:mt-0 sm:mt-8 mt-2">
                <button class="bg-white text-66B645 rounded-3xl py-2 px-12"><h6>
                    Запросить КП</h6></button>
            </div>

        </div>

    </div>

</footer>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'MODX\\Revolution\\modSnippet' => 
    array (
      'pdoCrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoCrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => 'use ModxPro\\PdoTools\\Fetch;
use MODX\\Revolution\\modResource;
use MODX\\Revolution\\modWebLink;

/** @var array $scriptProperties */
/** @var \\MODX\\Revolution\\modX $modx */


$modx->services[\'pdotools_config\'] = $scriptProperties;
$pdoFetch = $modx->services->get(Fetch::class);

$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {
    $from = 0;
}
if (empty($to)) {
    $to = $modx->resource->id;
}
if (empty($direction)) {
    $direction = \'ltr\';
}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {
    $outputSeparator = \'&nbsp;&larr;&nbsp;\';
}
$limit = $limit ?: 10;

// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {
    $limit = $maxCrumbs;
}
if (!empty($containerTpl)) {
    $tplWrapper = $containerTpl;
}
if (!empty($currentCrumbTpl)) {
    $tplCurrent = $currentCrumbTpl;
}
if (!empty($linkCrumbTpl)) {
    $scriptProperties[\'tpl\'] = $linkCrumbTpl;
}
if (!empty($maxCrumbTpl)) {
    $tplMax = $maxCrumbTpl;
}
if (isset($showBreadCrumbsAtHome)) {
    $showAtHome = $showBreadCrumbsAtHome;
}
if (isset($showHomeCrumb)) {
    $showHome = $showHomeCrumb;
}
if (isset($showCurrentCrumb)) {
    $showCurrent = $showCurrentCrumb;
}
// --
$fastMode = !empty($fastMode);
$siteStart = (int)$modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id === $siteStart) {
    return \'\';
}

$class = modResource::class;
$alias = $modx->getAlias($class);
// Start building "Where" expression
$where = [];
if (empty($showUnpublished) && empty($showUnPub)) {
    $where[\'published\'] = 1;
}
if (empty($showHidden)) {
    $where[\'hidemenu\'] = 0;
}
if (empty($showDeleted)) {
    $where[\'deleted\'] = 0;
}
if (!empty($hideContainers) && empty($showContainer)) {
    $where[\'isfolder\'] = 0;
}

$resource = ($to == $modx->resource->id)
    ? $modx->resource
    : $modx->getObject($class, $to);

if (!$resource) {
    $message = \'Could not build breadcrumbs to resource "\' . $to . \'"\';

    return \'\';
}

if (!empty($customParents)) {
    $customParents = is_array($customParents) ? $customParents : array_map(\'trim\', explode(\',\', $customParents));
    $parents = is_array($customParents) ? array_reverse($customParents) : [];
}
if (empty($parents)) {
    $parents = $modx->getParentIds($resource->id, $limit, [\'context\' => $resource->get(\'context_key\')]);
}
if (!empty($showHome)) {
    $parents[] = $siteStart;
}

$ids = [$resource->id];
foreach ($parents as $parent) {
    if (!empty($parent)) {
        $ids[] = $parent;
    }
    if (!empty($from) && $parent == $from) {
        break;
    }
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
    $where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = [$alias => implode(\',\', $resourceColumns)];

// Add custom parameters
foreach ([\'where\', \'select\'] as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = [
    \'class\' => $class,
    \'where\' => $where,
    \'select\' => $select,
    \'groupby\' => $alias . \'.id\',
    \'sortby\' => "find_in_set(`$alias`.`id`,\'" . implode(\',\', $ids) . "\')",
    \'sortdir\' => \'\',
    \'return\' => \'data\',
    \'totalVar\' => \'pdocrumbs.total\',
    \'disableConditions\' => true,
];

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = [];
if (!empty($rows) && is_array($rows)) {
    if (strtolower($direction) == \'ltr\') {
        $rows = array_reverse($rows);
    }

    foreach ($rows as $row) {
        if (!empty($useWeblinkUrl) && $row[\'class_key\'] === modWebLink::class) {
            $row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
                ? $pdoFetch->makeUrl((int)trim($row[\'content\'], \'[]~ \'), $row)
                : $row[\'content\'];
        } else {
            $row[\'link\'] = $pdoFetch->makeUrl($row[\'id\'], $row);
        }

        $row = array_merge(
            $scriptProperties,
            $row,
            [\'idx\' => $pdoFetch->idx++]
        );
        if (empty($row[\'menutitle\'])) {
            $row[\'menutitle\'] = $row[\'pagetitle\'];
        }

        if (isset($return) && $return === \'data\') {
            $output[] = $row;
            continue;
        }
        if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
            continue;
        } elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
            $tpl = $tplCurrent;
        } elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
            $tpl = $tplHome;
        } else {
            $tpl = $pdoFetch->defineChunk($row);
        }
        $output[] = empty($tpl)
            ? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
            : $pdoFetch->getChunk($tpl, $row, $fastMode);
    }
}
if (isset($return) && $return === \'data\') {
    return $output;
}

$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
    $pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
    $output = [];
}

$log = \'\';
if ($modx->user->isAuthenticated(\'mgr\') && (bool)$showLog) {
    $modx->setPlaceholder(\'pdoCrumbsLog\', print_r($pdoFetch->getTime(), true));
}

if (!empty($toSeparatePlaceholders)) {
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output = implode($outputSeparator, $output);
    if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
        $output = ($direction == \'ltr\')
            ? $pdoFetch->getChunk($tplMax, [], $fastMode) . $output
            : $output . $pdoFetch->getChunk($tplMax, [], $fastMode);
    }
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, [\'output\' => $output, \'crumbs\' => $output], $fastMode);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'from' => 
            array (
              'name' => 'from',
              'desc' => 'pdotools_prop_from',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id ресурса, от которого строить хлебные крошки. Обычно это корень сайта, то есть "0".',
              'area_trans' => '',
            ),
            'to' => 
            array (
              'name' => 'to',
              'desc' => 'pdotools_prop_to',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id ресурса для которого строятся хлебные крошки. По умолчанию это id текущей страницы.',
              'area_trans' => '',
            ),
            'customParents' => 
            array (
              'name' => 'customParents',
              'desc' => 'pdotools_prop_customParents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список id через запятую для кастомного построения хлебных крошек.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'exclude' => 
            array (
              'name' => 'exclude',
              'desc' => 'pdotools_prop_exclude',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список id ресурсов, которые нужно исключить из выборки.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'pdotools_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '
',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательная строка для разделения результатов работы.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'pdotools_prop_includeTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно подготовить перед выводом. По умолчанию, установлено в "1", что означает подготовку всех ТВ, указанных в "&includeTVs=``"',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно обработать перед выводом. Если установить в "1" - будут обработаны все ТВ, указанные в "&includeTVs=``". По умолчанию параметр пуст.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'pdotools_prop_tvPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tv.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для ТВ параметров.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'hideContainers' => 
            array (
              'name' => 'hideContainers',
              'desc' => 'pdotools_prop_hideContainers',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Отключает вывод контейнеров, то есть, ресурсов с isfolder = 1.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="breadcrumb-item"><a href="[[+link]]">[[+menutitle]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplCurrent' => 
            array (
              'name' => 'tplCurrent',
              'desc' => 'pdotools_prop_tplCurrent',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="breadcrumb-item active">[[+menutitle]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего документа в навигации.',
              'area_trans' => '',
            ),
            'tplMax' => 
            array (
              'name' => 'tplMax',
              'desc' => 'pdotools_prop_tplMax',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="breadcrumb-item disabled">&nbsp;...&nbsp;</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, который добавляется в начало результатов, если их больше чем "&limit".',
              'area_trans' => '',
            ),
            'tplHome' => 
            array (
              'name' => 'tplHome',
              'desc' => 'pdotools_prop_tplHome',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на главную страницу.',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'pdotools_prop_tplWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ol class="breadcrumb">[[+output]]</ol>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка, для заворачивания всех результатов. Понимает один плейсхолдер: [[+output]]. Не работает вместе с параметром "toSeparatePlaceholders".',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'pdotools_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включает вывод чанка-обертки (tplWrapper) даже если результатов нет.',
              'area_trans' => '',
            ),
            'showCurrent' => 
            array (
              'name' => 'showCurrent',
              'desc' => 'pdotools_prop_showCurrent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выводить текущий документ в навигации.',
              'area_trans' => '',
            ),
            'showHome' => 
            array (
              'name' => 'showHome',
              'desc' => 'pdotools_prop_showHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выводить ссылку на главную в начале навигации.',
              'area_trans' => '',
            ),
            'showAtHome' => 
            array (
              'name' => 'showAtHome',
              'desc' => 'pdotools_prop_showAtHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать хлебные крошки на главной странице сайта.',
              'area_trans' => '',
            ),
            'hideSingle' => 
            array (
              'name' => 'hideSingle',
              'desc' => 'pdotools_prop_hideSingle',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Не выводить результат, если он один единственный.',
              'area_trans' => '',
            ),
            'direction' => 
            array (
              'name' => 'direction',
              'desc' => 'pdotools_prop_direction',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'ltr',
                  'text' => 'Left To Right (ltr)',
                  'name' => 'Left To Right (ltr)',
                ),
                1 => 
                array (
                  'value' => 'rtl',
                  'text' => 'Right To Left (rtl)',
                  'name' => 'Right To Left (rtl)',
                ),
              ),
              'value' => 'ltr',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление навигации: слева направо (ltr) или справа налево (rtl), например для Арабского языка.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования ссылок: "uri" для подстановки поля uri документа (очень быстро) или параметр для modX::makeUrl().',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdocrumbs.php',
          'content' => 'use ModxPro\\PdoTools\\Fetch;
use MODX\\Revolution\\modResource;
use MODX\\Revolution\\modWebLink;

/** @var array $scriptProperties */
/** @var \\MODX\\Revolution\\modX $modx */


$modx->services[\'pdotools_config\'] = $scriptProperties;
$pdoFetch = $modx->services->get(Fetch::class);

$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {
    $from = 0;
}
if (empty($to)) {
    $to = $modx->resource->id;
}
if (empty($direction)) {
    $direction = \'ltr\';
}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {
    $outputSeparator = \'&nbsp;&larr;&nbsp;\';
}
$limit = $limit ?: 10;

// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {
    $limit = $maxCrumbs;
}
if (!empty($containerTpl)) {
    $tplWrapper = $containerTpl;
}
if (!empty($currentCrumbTpl)) {
    $tplCurrent = $currentCrumbTpl;
}
if (!empty($linkCrumbTpl)) {
    $scriptProperties[\'tpl\'] = $linkCrumbTpl;
}
if (!empty($maxCrumbTpl)) {
    $tplMax = $maxCrumbTpl;
}
if (isset($showBreadCrumbsAtHome)) {
    $showAtHome = $showBreadCrumbsAtHome;
}
if (isset($showHomeCrumb)) {
    $showHome = $showHomeCrumb;
}
if (isset($showCurrentCrumb)) {
    $showCurrent = $showCurrentCrumb;
}
// --
$fastMode = !empty($fastMode);
$siteStart = (int)$modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id === $siteStart) {
    return \'\';
}

$class = modResource::class;
$alias = $modx->getAlias($class);
// Start building "Where" expression
$where = [];
if (empty($showUnpublished) && empty($showUnPub)) {
    $where[\'published\'] = 1;
}
if (empty($showHidden)) {
    $where[\'hidemenu\'] = 0;
}
if (empty($showDeleted)) {
    $where[\'deleted\'] = 0;
}
if (!empty($hideContainers) && empty($showContainer)) {
    $where[\'isfolder\'] = 0;
}

$resource = ($to == $modx->resource->id)
    ? $modx->resource
    : $modx->getObject($class, $to);

if (!$resource) {
    $message = \'Could not build breadcrumbs to resource "\' . $to . \'"\';

    return \'\';
}

if (!empty($customParents)) {
    $customParents = is_array($customParents) ? $customParents : array_map(\'trim\', explode(\',\', $customParents));
    $parents = is_array($customParents) ? array_reverse($customParents) : [];
}
if (empty($parents)) {
    $parents = $modx->getParentIds($resource->id, $limit, [\'context\' => $resource->get(\'context_key\')]);
}
if (!empty($showHome)) {
    $parents[] = $siteStart;
}

$ids = [$resource->id];
foreach ($parents as $parent) {
    if (!empty($parent)) {
        $ids[] = $parent;
    }
    if (!empty($from) && $parent == $from) {
        break;
    }
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
    $where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = [$alias => implode(\',\', $resourceColumns)];

// Add custom parameters
foreach ([\'where\', \'select\'] as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = [
    \'class\' => $class,
    \'where\' => $where,
    \'select\' => $select,
    \'groupby\' => $alias . \'.id\',
    \'sortby\' => "find_in_set(`$alias`.`id`,\'" . implode(\',\', $ids) . "\')",
    \'sortdir\' => \'\',
    \'return\' => \'data\',
    \'totalVar\' => \'pdocrumbs.total\',
    \'disableConditions\' => true,
];

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = [];
if (!empty($rows) && is_array($rows)) {
    if (strtolower($direction) == \'ltr\') {
        $rows = array_reverse($rows);
    }

    foreach ($rows as $row) {
        if (!empty($useWeblinkUrl) && $row[\'class_key\'] === modWebLink::class) {
            $row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
                ? $pdoFetch->makeUrl((int)trim($row[\'content\'], \'[]~ \'), $row)
                : $row[\'content\'];
        } else {
            $row[\'link\'] = $pdoFetch->makeUrl($row[\'id\'], $row);
        }

        $row = array_merge(
            $scriptProperties,
            $row,
            [\'idx\' => $pdoFetch->idx++]
        );
        if (empty($row[\'menutitle\'])) {
            $row[\'menutitle\'] = $row[\'pagetitle\'];
        }

        if (isset($return) && $return === \'data\') {
            $output[] = $row;
            continue;
        }
        if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
            continue;
        } elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
            $tpl = $tplCurrent;
        } elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
            $tpl = $tplHome;
        } else {
            $tpl = $pdoFetch->defineChunk($row);
        }
        $output[] = empty($tpl)
            ? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
            : $pdoFetch->getChunk($tpl, $row, $fastMode);
    }
}
if (isset($return) && $return === \'data\') {
    return $output;
}

$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
    $pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
    $output = [];
}

$log = \'\';
if ($modx->user->isAuthenticated(\'mgr\') && (bool)$showLog) {
    $modx->setPlaceholder(\'pdoCrumbsLog\', print_r($pdoFetch->getTime(), true));
}

if (!empty($toSeparatePlaceholders)) {
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output = implode($outputSeparator, $output);
    if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
        $output = ($direction == \'ltr\')
            ? $pdoFetch->getChunk($tplMax, [], $fastMode) . $output
            : $output . $pdoFetch->getChunk($tplMax, [], $fastMode);
    }
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, [\'output\' => $output, \'crumbs\' => $output], $fastMode);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdofield' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoField',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => 'use ModxPro\\PdoTools\\Fetch;
use MODX\\Revolution\\modResource;

/** @var array $scriptProperties */
/** @var modX $modx */

if (!empty($input)) {
    $id = $input;
}
if (!isset($default)) {
    $default = \'\';
}
if (!isset($output)) {
    $output = \'\';
}
$class = $modx->getOption(\'class\', $scriptProperties, modResource::class, true);
$alias = $modx->getAlias($class);
$isResource = $class === modResource::class || in_array($class, $modx->getDescendants(modResource::class));

if (empty($field)) {
    $field = \'pagetitle\';
}
$top = isset($top) ? (int)$top : 0;
$topLevel = isset($topLevel) ? (int)$topLevel : 0;
if (!empty($options) && is_string($options)) {
    $options = trim($options);
    if ($options[0] == \'{\') {
        $tmp = json_decode($options, true);
        if (is_array($tmp)) {
            extract($tmp, EXTR_OVERWRITE);
            $scriptProperties = array_merge($scriptProperties, $tmp);
        }
    } else {
        $field = $options;
    }
}
if (empty($id)) {
    if (!empty($modx->resource)) {
        $id = $modx->resource->id;
    } else {
        return \'You must specify an id of \' . $alias;
    }
}
if (!isset($context)) {
    $context = \'\';
}

// Gets the parent from root of context, if specified
if ($isResource && $id && ($top || $topLevel)) {
    // Select needed context for parents functionality
    if (empty($context)) {
        $q = $modx->newQuery($class, $id);
        $q->select(\'context_key\');
        $tstart = microtime(true);
        if ($q->prepare() && $q->stmt->execute()) {
            $modx->queryTime += microtime(true) - $tstart;
            $modx->executedQueries++;
            $context = $q->stmt->fetch(PDO::FETCH_COLUMN);
        }
    }
    // Original pdoField logic
    if (empty($ultimate)) {
        if ($topLevel) {
            $pids = $modx->getChildIds(0, $topLevel, [\'context\' => $context]);
            $pid = $id;
            while (true) {
                $tmp = $modx->getParentIds($pid, 1, [\'context\' => $context]);
                if (!$pid = current($tmp)) {
                    break;
                } elseif (in_array($pid, $pids)) {
                    $id = $pid;
                    break;
                }
            }
        } elseif ($top) {
            $pid = $id;
            for ($i = 1; $i <= $top; $i++) {
                $tmp = $modx->getParentIds($pid, 1, [\'context\' => $context]);
                if (!$pid = current($tmp)) {
                    break;
                }
                $id = $pid;
            }
        }
    }
    // UltimateParent logic
    // https://github.com/splittingred/UltimateParent/blob/develop/core/components/ultimateparent/snippet.ultimateparent.php
    elseif ($id != $top) {
        $pid = $id;
        $pids = $modx->getParentIds($id, 10, [\'context\' => $context]);
        if (!$topLevel || count($pids) >= $topLevel) {
            while ($parentIds = $modx->getParentIds($id, 1, [\'context\' => $context])) {
                $pid = array_pop($parentIds);
                if ($pid == $top) {
                    break;
                }
                $id = $pid;
                $parentIds = $modx->getParentIds($id, 10, [\'context\' => $context]);
                if ($topLevel && count($parentIds) < $topLevel) {
                    break;
                }
            }
        }
    }
}

$modx->services[\'pdotools_config\'] = $scriptProperties;
$pdoFetch = $modx->services->get(Fetch::class);
$pdoFetch->addTime(\'pdoTools loaded\');

$where = [$alias . \'.id\' => $id];
// Add custom parameters
foreach ([\'where\'] as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$field = strtolower($field);
if (in_array($field, $resourceColumns)) {
    $scriptProperties[\'select\'] = [$alias => $field];
    $scriptProperties[\'includeTVs\'] = \'\';
} elseif ($isResource) {
    $scriptProperties[\'select\'] = [$alias => \'id\'];
    $scriptProperties[\'includeTVs\'] = $field;
}
// Additional default field
if (!empty($default)) {
    $default = strtolower($default);
    if (in_array($default, $resourceColumns)) {
        $scriptProperties[\'select\'][$alias] .= \',\' . $default;
    } elseif ($isResource) {
        $scriptProperties[\'includeTVs\'] = empty($scriptProperties[\'includeTVs\'])
            ? $default
            : $scriptProperties[\'includeTVs\'] . \',\' . $default;
    }
}

$scriptProperties[\'disableConditions\'] = true;
if ($row = $pdoFetch->getArray($class, $where, $scriptProperties)) {
    foreach ($row as $k => $v) {
        if (strtolower($k) == $field && $v != \'\') {
            $output = $v;
            break;
        }
    }

    if (empty($output) && !empty($default)) {
        foreach ($row as $k => $v) {
            if (strtolower($k) == $default && $v != \'\') {
                $output = $v;
                break;
            }
        }
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'id' => 
            array (
              'name' => 'id',
              'desc' => 'pdotools_prop_id',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Идентификатор ресурса.',
              'area_trans' => '',
            ),
            'field' => 
            array (
              'name' => 'field',
              'desc' => 'pdotools_prop_field',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'pagetitle',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Поле ресурса.',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно подготовить перед выводом. По умолчанию, установлено в "1", что означает подготовку всех ТВ, указанных в "&includeTVs=``"',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно обработать перед выводом. Если установить в "1" - будут обработаны все ТВ, указанные в "&includeTVs=``". По умолчанию параметр пуст.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_field_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Контекст ресурса, для выборки его родителей. Нужен для работы параметров "&top" и "&topLevel".',
              'area_trans' => '',
            ),
            'top' => 
            array (
              'name' => 'top',
              'desc' => 'pdotools_prop_top',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выбирает родителя указанного "&id" на уровне "&top".',
              'area_trans' => '',
            ),
            'topLevel' => 
            array (
              'name' => 'topLevel',
              'desc' => 'pdotools_prop_topLevel',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выбирает родителя указанного "&id" на уровне "&topLevel" от корня контекста.',
              'area_trans' => '',
            ),
            'default' => 
            array (
              'name' => 'default',
              'desc' => 'pdotools_prop_field_default',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите дополнительное поле ресурса, которое вернётся, если "&field" окажется пуст.',
              'area_trans' => '',
            ),
            'output' => 
            array (
              'name' => 'output',
              'desc' => 'pdotools_prop_field_output',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Указанная здесь строка вернётся, если и "&default" и "&field" оказались пустыми.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'ultimate' => 
            array (
              'name' => 'ultimate',
              'desc' => 'pdotools_prop_ultimate',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Параметры &top и &topLevel работают как в сниппете UltimateParent.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdofield.php',
          'content' => 'use ModxPro\\PdoTools\\Fetch;
use MODX\\Revolution\\modResource;

/** @var array $scriptProperties */
/** @var modX $modx */

if (!empty($input)) {
    $id = $input;
}
if (!isset($default)) {
    $default = \'\';
}
if (!isset($output)) {
    $output = \'\';
}
$class = $modx->getOption(\'class\', $scriptProperties, modResource::class, true);
$alias = $modx->getAlias($class);
$isResource = $class === modResource::class || in_array($class, $modx->getDescendants(modResource::class));

if (empty($field)) {
    $field = \'pagetitle\';
}
$top = isset($top) ? (int)$top : 0;
$topLevel = isset($topLevel) ? (int)$topLevel : 0;
if (!empty($options) && is_string($options)) {
    $options = trim($options);
    if ($options[0] == \'{\') {
        $tmp = json_decode($options, true);
        if (is_array($tmp)) {
            extract($tmp, EXTR_OVERWRITE);
            $scriptProperties = array_merge($scriptProperties, $tmp);
        }
    } else {
        $field = $options;
    }
}
if (empty($id)) {
    if (!empty($modx->resource)) {
        $id = $modx->resource->id;
    } else {
        return \'You must specify an id of \' . $alias;
    }
}
if (!isset($context)) {
    $context = \'\';
}

// Gets the parent from root of context, if specified
if ($isResource && $id && ($top || $topLevel)) {
    // Select needed context for parents functionality
    if (empty($context)) {
        $q = $modx->newQuery($class, $id);
        $q->select(\'context_key\');
        $tstart = microtime(true);
        if ($q->prepare() && $q->stmt->execute()) {
            $modx->queryTime += microtime(true) - $tstart;
            $modx->executedQueries++;
            $context = $q->stmt->fetch(PDO::FETCH_COLUMN);
        }
    }
    // Original pdoField logic
    if (empty($ultimate)) {
        if ($topLevel) {
            $pids = $modx->getChildIds(0, $topLevel, [\'context\' => $context]);
            $pid = $id;
            while (true) {
                $tmp = $modx->getParentIds($pid, 1, [\'context\' => $context]);
                if (!$pid = current($tmp)) {
                    break;
                } elseif (in_array($pid, $pids)) {
                    $id = $pid;
                    break;
                }
            }
        } elseif ($top) {
            $pid = $id;
            for ($i = 1; $i <= $top; $i++) {
                $tmp = $modx->getParentIds($pid, 1, [\'context\' => $context]);
                if (!$pid = current($tmp)) {
                    break;
                }
                $id = $pid;
            }
        }
    }
    // UltimateParent logic
    // https://github.com/splittingred/UltimateParent/blob/develop/core/components/ultimateparent/snippet.ultimateparent.php
    elseif ($id != $top) {
        $pid = $id;
        $pids = $modx->getParentIds($id, 10, [\'context\' => $context]);
        if (!$topLevel || count($pids) >= $topLevel) {
            while ($parentIds = $modx->getParentIds($id, 1, [\'context\' => $context])) {
                $pid = array_pop($parentIds);
                if ($pid == $top) {
                    break;
                }
                $id = $pid;
                $parentIds = $modx->getParentIds($id, 10, [\'context\' => $context]);
                if ($topLevel && count($parentIds) < $topLevel) {
                    break;
                }
            }
        }
    }
}

$modx->services[\'pdotools_config\'] = $scriptProperties;
$pdoFetch = $modx->services->get(Fetch::class);
$pdoFetch->addTime(\'pdoTools loaded\');

$where = [$alias . \'.id\' => $id];
// Add custom parameters
foreach ([\'where\'] as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$field = strtolower($field);
if (in_array($field, $resourceColumns)) {
    $scriptProperties[\'select\'] = [$alias => $field];
    $scriptProperties[\'includeTVs\'] = \'\';
} elseif ($isResource) {
    $scriptProperties[\'select\'] = [$alias => \'id\'];
    $scriptProperties[\'includeTVs\'] = $field;
}
// Additional default field
if (!empty($default)) {
    $default = strtolower($default);
    if (in_array($default, $resourceColumns)) {
        $scriptProperties[\'select\'][$alias] .= \',\' . $default;
    } elseif ($isResource) {
        $scriptProperties[\'includeTVs\'] = empty($scriptProperties[\'includeTVs\'])
            ? $default
            : $scriptProperties[\'includeTVs\'] . \',\' . $default;
    }
}

$scriptProperties[\'disableConditions\'] = true;
if ($row = $pdoFetch->getArray($class, $where, $scriptProperties)) {
    foreach ($row as $k => $v) {
        if (strtolower($k) == $field && $v != \'\') {
            $output = $v;
            break;
        }
    }

    if (empty($output) && !empty($default)) {
        foreach ($row as $k => $v) {
            if (strtolower($k) == $default && $v != \'\') {
                $output = $v;
                break;
            }
        }
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'product_similiar' => 
      array (
        'fields' => 
        array (
          'id' => 39,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'product_similiar',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => 'echo \'
<div class="bg-F3F3F3 my-10">
    <div class="container">\';
if ($showTitle) {
    echo \'<h2 class="my-10">Похожие изделия</h2>\';
}
echo \'<div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-4 gap-y-6">\';

echo $modx->runSnippet(\'pdoResources\', array(
    \'parents\' => $parents,
    \'limit\' => $limit ?? 4,
    \'depth\' => \'\',
    \'tpl\' => \'product_cutaway\',
    \'includeTVs\' => \'img,banner,price\',
    \'hideContainers\' => \'1\',
));
if (!$hideShowMore) {
    echo \'
       <div class="lg:hidden sm:flex hidden flex-col justify-end px-6 pb-2">
            <button class="btn-66B645"><span class="font-medium">Показать еще</span></button>
        </div>\';
}
echo \'</div>\';
if (!$hideShowMore) {

    echo \'<div class="lg:flex sm:hidden flex justify-end my-6">
                    <a class="btn-66B645 md:w-2/12 w-5/12" href=\' . $alias . \'><span class="font-medium">Показать еще</span></a>
        </div>\';
}
echo \'</div>
</div>\';',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => true,
          'static_file' => 'assets/base/snippets/product_similiar.php',
          'content' => 'echo \'
<div class="bg-F3F3F3 my-10">
    <div class="container">\';
if ($showTitle) {
    echo \'<h2 class="my-10">Похожие изделия</h2>\';
}
echo \'<div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-4 gap-y-6">\';

echo $modx->runSnippet(\'pdoResources\', array(
    \'parents\' => $parents,
    \'limit\' => $limit ?? 4,
    \'depth\' => \'\',
    \'tpl\' => \'product_cutaway\',
    \'includeTVs\' => \'img,banner,price\',
    \'hideContainers\' => \'1\',
));
if (!$hideShowMore) {
    echo \'
       <div class="lg:hidden sm:flex hidden flex-col justify-end px-6 pb-2">
            <button class="btn-66B645"><span class="font-medium">Показать еще</span></button>
        </div>\';
}
echo \'</div>\';
if (!$hideShowMore) {

    echo \'<div class="lg:flex sm:hidden flex justify-end my-6">
                    <a class="btn-66B645 md:w-2/12 w-5/12" href=\' . $alias . \'><span class="font-medium">Показать еще</span></a>
        </div>\';
}
echo \'</div>
</div>\';',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoResources' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoResources',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => 'use ModxPro\\PdoTools\\Fetch;
use MODX\\Revolution\\modSnippet;

/** @var array $scriptProperties */
/** @var \\MODX\\Revolution\\modX $modx */

if (isset($parents) && $parents === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
}
if (!empty($returnIds)) {
    $scriptProperties[\'return\'] = $return = \'ids\';
} elseif (!isset($return)) {
    $scriptProperties[\'return\'] = $return = \'chunks\';
}

// Adding extra parameters into special place so we can put them in a results
/** @var modSnippet $snippet */
$additionalPlaceholders = $properties = [];
if (isset($this) && $this instanceof modSnippet && $this->get(\'properties\')) {
    $properties = $this->get(\'properties\');
} elseif ($snippet = $modx->getObject(modSnippet::class, [\'name\' => \'pdoResources\'])) {
    $properties = $snippet->get(\'properties\');
}
if (!empty($properties)) {
    foreach ($scriptProperties as $k => $v) {
        if (!isset($properties[$k])) {
            $additionalPlaceholders[$k] = $v;
        }
    }
}
$scriptProperties[\'additionalPlaceholders\'] = $additionalPlaceholders;

$modx->services[\'pdotools_config\'] = $scriptProperties;
$pdoFetch = $modx->services->get(Fetch::class);
$pdoFetch->addTime(\'pdoTools loaded\');
$output = $pdoFetch->run();

if ($modx->user->isAuthenticated(\'mgr\') && !empty($showLog)) {
    $modx->setPlaceholder(\'pdoResourcesLog\', print_r($pdoFetch->getTime(), true));
}

// Return output
if (!empty($returnIds)) {
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
} elseif ($return === \'data\') {
    return $output;
} elseif (!empty($toSeparatePlaceholders)) {
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array_merge($additionalPlaceholders, [\'output\' => $output]),
            $pdoFetch->config(\'fastMode\'));
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'returnIds' => 
            array (
              'name' => 'returnIds',
              'desc' => 'pdotools_prop_returnIds',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Возвращать строку со списком id ресурсов, вместо оформленных результатов.',
              'area_trans' => '',
            ),
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'publishedon',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'sortbyTV' => 
            array (
              'name' => 'sortbyTV',
              'desc' => 'pdotools_prop_sortbyTV',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Сортировка по ТВ параметру. Если он не указан в &includeTVs, то будет подключен автоматически.',
              'area_trans' => '',
            ),
            'sortbyTVType' => 
            array (
              'name' => 'sortbyTVType',
              'desc' => 'pdotools_prop_sortbyTVType',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Тип сортировки по ТВ параметру. Возможные варианты: string, integer, decimal и datetime. Если пусто, то ТВ будет отсортирован в зависимости от его типа: как текст, число или дата.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortdirTV' => 
            array (
              'name' => 'sortdirTV',
              'desc' => 'pdotools_prop_sortdirTV',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки ТВ: по убыванию или возрастанию. Если не указан, то будет равен параметру &sortdir.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'pdotools_prop_depth',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Глубина поиска дочерних ресурсов от родителя.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'pdotools_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '
',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательная строка для разделения результатов работы.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'pdotools_prop_includeContent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включаем поле "content" в выборку.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'pdotools_prop_includeTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно подготовить перед выводом. По умолчанию, установлено в "1", что означает подготовку всех ТВ, указанных в "&includeTVs=``"',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно обработать перед выводом. Если установить в "1" - будут обработаны все ТВ, указанные в "&includeTVs=``". По умолчанию параметр пуст.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'pdotools_prop_tvPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tv.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для ТВ параметров.',
              'area_trans' => '',
            ),
            'tvFilters' => 
            array (
              'name' => 'tvFilters',
              'desc' => 'pdotools_prop_tvFilters',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список фильтров по ТВ, с разделителями AND и OR. Разделитель, указанный в параметре "&tvFiltersOrDelimiter" представляет логическое условие OR и по нему условия группируются в первую очередь.  Внутри каждой группы вы можете задать список значений, разделив их "&tvFiltersAndDelimiter". Поиск значений может проводиться в каком-то конкретном ТВ, если он указан ("myTV==value"), или в любом ("value"). Пример вызова: "&tvFilters=`filter2==one,filter1==bar%||filter1==foo`". <br />Обратите внимание: фильтрация использует оператор LIKE и знак "%" является метасимволом. <br />И еще: Поиск идёт по значениям, которые физически находятся в БД, то есть, сюда не подставляются значения по умолчанию из настроек ТВ.',
              'area_trans' => '',
            ),
            'tvFiltersAndDelimiter' => 
            array (
              'name' => 'tvFiltersAndDelimiter',
              'desc' => 'pdotools_prop_tvFiltersAndDelimiter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => ',',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Разделитель для условий AND в параметре "&tvFilters". По умолчанию: ",".',
              'area_trans' => '',
            ),
            'tvFiltersOrDelimiter' => 
            array (
              'name' => 'tvFiltersOrDelimiter',
              'desc' => 'pdotools_prop_tvFiltersOrDelimiter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '||',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Разделитель для условий OR в параметре "&tvFilters". По умолчанию: "||".',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'hideContainers' => 
            array (
              'name' => 'hideContainers',
              'desc' => 'pdotools_prop_hideContainers',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Отключает вывод контейнеров, то есть, ресурсов с isfolder = 1.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'idx' => 
            array (
              'name' => 'idx',
              'desc' => 'pdotools_prop_idx',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вы можете указать стартовый номер итерации вывода результатов.',
              'area_trans' => '',
            ),
            'first' => 
            array (
              'name' => 'first',
              'desc' => 'pdotools_prop_first',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Номер первой итерации вывода результатов.',
              'area_trans' => '',
            ),
            'last' => 
            array (
              'name' => 'last',
              'desc' => 'pdotools_prop_last',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Номер последней итерации вывода результатов. По умолчанию он рассчитается автоматически, по формуле (total + first - 1).',
              'area_trans' => '',
            ),
            'tplFirst' => 
            array (
              'name' => 'tplFirst',
              'desc' => 'pdotools_prop_tplFirst',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для первого ресурса в результатах.',
              'area_trans' => '',
            ),
            'tplLast' => 
            array (
              'name' => 'tplLast',
              'desc' => 'pdotools_prop_tplLast',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для последнего ресурса в результатах.',
              'area_trans' => '',
            ),
            'tplOdd' => 
            array (
              'name' => 'tplOdd',
              'desc' => 'pdotools_prop_tplOdd',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для каждого чётного ресурса (хоть "odd" значит "нечётный", работает для чётных ресурсов).',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'pdotools_prop_tplWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка, для заворачивания всех результатов. Понимает один плейсхолдер: [[+output]]. Не работает вместе с параметром "toSeparatePlaceholders".',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'pdotools_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включает вывод чанка-обертки (tplWrapper) даже если результатов нет.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'pdotools_prop_totalVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'total',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера для сохранения общего количества результатов.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'tplCondition' => 
            array (
              'name' => 'tplCondition',
              'desc' => 'pdotools_prop_tplCondition',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Поле ресурса, из которого будет получено значение для выбора чанка по условию в "conditionalTpls".',
              'area_trans' => '',
            ),
            'tplOperator' => 
            array (
              'name' => 'tplOperator',
              'desc' => 'pdotools_prop_tplOperator',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'is equal to',
                  'value' => '==',
                  'name' => 'is equal to',
                ),
                1 => 
                array (
                  'text' => 'is not equal to',
                  'value' => '!=',
                  'name' => 'is not equal to',
                ),
                2 => 
                array (
                  'text' => 'less than',
                  'value' => '<',
                  'name' => 'less than',
                ),
                3 => 
                array (
                  'text' => 'less than or equal to',
                  'value' => '<=',
                  'name' => 'less than or equal to',
                ),
                4 => 
                array (
                  'text' => 'greater than or equal to',
                  'value' => '>=',
                  'name' => 'greater than or equal to',
                ),
                5 => 
                array (
                  'text' => 'is empty',
                  'value' => 'empty',
                  'name' => 'is empty',
                ),
                6 => 
                array (
                  'text' => 'is not empty',
                  'value' => '!empty',
                  'name' => 'is not empty',
                ),
                7 => 
                array (
                  'text' => 'is null',
                  'value' => 'null',
                  'name' => 'is null',
                ),
                8 => 
                array (
                  'text' => 'is in array',
                  'value' => 'inarray',
                  'name' => 'is in array',
                ),
                9 => 
                array (
                  'text' => 'is between',
                  'value' => 'between',
                  'name' => 'is between',
                ),
              ),
              'value' => '==',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательный оператор для проведения сравнения поля ресурса в "tplCondition" с массивом значений и чанков в "conditionalTpls".',
              'area_trans' => '',
            ),
            'conditionalTpls' => 
            array (
              'name' => 'conditionalTpls',
              'desc' => 'pdotools_prop_conditionalTpls',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'JSON строка с массивом, у которого в ключах указано то, с чем будет сравниваться "tplCondition", а в значениях - чанки, которые будут использованы для вывода, если сравнение будет успешно. Оператор сравнения указывается в "tplOperator". Для операторов типа "isempty" можно использовать массив без ключей.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'pdotools_prop_toSeparatePlaceholders',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если вы укажете слово в этом параметре, то ВСЕ результаты будут выставлены в разные плейсхолдеры, начинающиеся с этого слова и заканчивающиеся порядковым номером строки, от нуля. Например, указав в параметре "myPl", вы получите плейсхолдеры [[+myPl0]], [[+myPl1]] и т.д.',
              'area_trans' => '',
            ),
            'loadModels' => 
            array (
              'name' => 'loadModels',
              'desc' => 'pdotools_prop_loadModels',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список компонентов, через запятую, чьи модели нужно загрузить для построения запроса. Например: "&loadModels=`ms2gallery,msearch2`".',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования ссылок: "uri" для подстановки поля uri документа (очень быстро) или параметр для modX::makeUrl().',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdoresources.php',
          'content' => 'use ModxPro\\PdoTools\\Fetch;
use MODX\\Revolution\\modSnippet;

/** @var array $scriptProperties */
/** @var \\MODX\\Revolution\\modX $modx */

if (isset($parents) && $parents === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
}
if (!empty($returnIds)) {
    $scriptProperties[\'return\'] = $return = \'ids\';
} elseif (!isset($return)) {
    $scriptProperties[\'return\'] = $return = \'chunks\';
}

// Adding extra parameters into special place so we can put them in a results
/** @var modSnippet $snippet */
$additionalPlaceholders = $properties = [];
if (isset($this) && $this instanceof modSnippet && $this->get(\'properties\')) {
    $properties = $this->get(\'properties\');
} elseif ($snippet = $modx->getObject(modSnippet::class, [\'name\' => \'pdoResources\'])) {
    $properties = $snippet->get(\'properties\');
}
if (!empty($properties)) {
    foreach ($scriptProperties as $k => $v) {
        if (!isset($properties[$k])) {
            $additionalPlaceholders[$k] = $v;
        }
    }
}
$scriptProperties[\'additionalPlaceholders\'] = $additionalPlaceholders;

$modx->services[\'pdotools_config\'] = $scriptProperties;
$pdoFetch = $modx->services->get(Fetch::class);
$pdoFetch->addTime(\'pdoTools loaded\');
$output = $pdoFetch->run();

if ($modx->user->isAuthenticated(\'mgr\') && !empty($showLog)) {
    $modx->setPlaceholder(\'pdoResourcesLog\', print_r($pdoFetch->getTime(), true));
}

// Return output
if (!empty($returnIds)) {
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
} elseif ($return === \'data\') {
    return $output;
} elseif (!empty($toSeparatePlaceholders)) {
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array_merge($additionalPlaceholders, [\'output\' => $output]),
            $pdoFetch->config(\'fastMode\'));
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'MODX\\Revolution\\modTemplateVar' => 
    array (
      'price' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'number',
          'name' => 'price',
          'caption' => 'Цена',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'locked' => false,
          'elements' => NULL,
          'rank' => 0,
          'display' => 'default',
          'default_text' => '0',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minValue' => '',
            'maxValue' => '',
            'allowDecimals' => '0',
            'decimalPrecision' => '2',
            'strictDecimalPrecision' => 'false',
            'decimalSeparator' => '.',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '0',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'img' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'image',
          'name' => 'img',
          'caption' => 'Картинка',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'locked' => false,
          'elements' => NULL,
          'rank' => 0,
          'display' => 'default',
          'default_text' => 'assets/resources/images/products/fitingi/fitingi1.png',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => 'assets/resources/images/products/fitingi/fitingi1.png',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'catalog_path' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'catalog_path',
          'caption' => 'Ссылка на каталог',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'locked' => false,
          'elements' => NULL,
          'rank' => 0,
          'display' => 'default',
          'default_text' => 'https://www.swagelok.com/downloads/webcatalogs/en/ms-01-140.pdf',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => 'https://www.swagelok.com/downloads/webcatalogs/en/ms-01-140.pdf',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'catalog_title' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'catalog_title',
          'caption' => 'Имя каталога',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'locked' => false,
          'elements' => NULL,
          'rank' => 0,
          'display' => 'default',
          'default_text' => 'Здесь имя каталога',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => 'Здесь имя каталога',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);