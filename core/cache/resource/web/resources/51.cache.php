<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 51,
    'type' => 'document',
    'pagetitle' => 'Каталоги',
    'longtitle' => '',
    'description' => '',
    'alias' => 'katalogi',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 1,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '[[!$catalogs]]',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 1,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1692880250,
    'editedby' => 1,
    'editedon' => 1692880280,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1692880260,
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
    'uri' => 'katalogi',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'alias_visible' => 1,
    '_content' => '<!DOCTYPE html>
<html>

<head>
    [[!$base_head]]
</head>

<body>
[[!$header]]

[[!$catalogs]]

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
&tpl=`@INLINE <li><a href="[[+link]]"><strong>[[+menutitle]]</strong></a></li>`
&tplCurrent=`@INLINE <li><strong>[[+menutitle]]</strong></li>`
&outputSeparator=`/`
&showCurrent=`0`]]' => '<ul class="flex flex-wrap gap-1 text-8A8A8A"><li><a href="/"><strong>Главная</strong></a></li></ul>',
    '[[pdoMenu?
        &parents=`49`
        &level=`0`
        &includeTVs=`catalog_path,catalog_title`
        &tplOuter=`@INLINE
        <div class="lg:grid grid-cols-2 gap-4 flex flex-col mt-12">
            [[+wrapper]]
        </div>
        `
        &tpl=`@INLINE
        <div class="col-span-1 md:my-10 my-4">
            <h2 class="mb-8 uppercase text-66B645">[[+pagetitle]]</h2>
            [[+wrapper]]
        </div>
        `
        &tplInner=`@INLINE
        <ul>
            [[+wrapper]]
        </ul>
        `
        &tplInnerRow=`@INLINE
        <li class="my-2">
            <a class="flex items-center gap-6" href="[[+catalog_path]]" download>
                <img src="/assets/resources/images/pdf_icon.png" alt="PDF">
                <h6>[[+pagetitle]][[+catalog_title]]</h6>
            </a>
        </li>
        `]]' => '<div class="lg:grid grid-cols-2 gap-4 flex flex-col mt-12">
            <div class="col-span-1 md:my-10 my-4">
            <h2 class="mb-8 uppercase text-66B645">Клапаны</h2>
            <ul>
            <li class="my-2">
            <a class="flex items-center gap-6" href="https://www.swagelok.com/downloads/webcatalogs/en/ms-01-140.pdf" download>
                <img src="/assets/resources/images/pdf_icon.png" alt="PDF">
                <h6>Игольчатые клапаны и клапаны тонкой регулировкиЗдесь имя каталога</h6>
            </a>
        </li><li class="my-2">
            <a class="flex items-center gap-6" href="https://www.swagelok.com/downloads/webcatalogs/en/ms-01-140.pdf" download>
                <img src="/assets/resources/images/pdf_icon.png" alt="PDF">
                <h6>Быстроразъемные соединенияЗдесь имя каталога</h6>
            </a>
        </li>
        </ul>
        </div><div class="col-span-1 md:my-10 my-4">
            <h2 class="mb-8 uppercase text-66B645">Фитинги</h2>
            <ul>
            <li class="my-2">
            <a class="flex items-center gap-6" href="https://www.swagelok.com/downloads/webcatalogs/en/ms-01-140.pdf" download>
                <img src="/assets/resources/images/pdf_icon.png" alt="PDF">
                <h6>Трубные обжимные фитинги и переходникиЗдесь имя каталога</h6>
            </a>
        </li><li class="my-2">
            <a class="flex items-center gap-6" href="https://www.swagelok.com/downloads/webcatalogs/en/ms-01-140.pdf" download>
                <img src="/assets/resources/images/pdf_icon.png" alt="PDF">
                <h6>Трубные фитингиЗдесь имя каталога</h6>
            </a>
        </li><li class="my-2">
            <a class="flex items-center gap-6" href="https://www.swagelok.com/downloads/webcatalogs/en/ms-01-140.pdf" download>
                <img src="/assets/resources/images/pdf_icon.png" alt="PDF">
                <h6>Трубные обжимные фитинги среднего давленияЗдесь имя каталога</h6>
            </a>
        </li>
        </ul>
        </div>
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
      'catalogs' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'catalogs',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="bg-white py-32">  <!--py-10 -->

    <div class="container mt-10">
        [[!$breadcrumbs]]
        <h2 class="mt-2 uppercase">[[*pagetitle]]</h2>


        [[pdoMenu?
        &parents=`49`
        &level=`0`
        &includeTVs=`catalog_path,catalog_title`
        &tplOuter=`@INLINE
        <div class="lg:grid grid-cols-2 gap-4 flex flex-col mt-12">
            [[+wrapper]]
        </div>
        `
        &tpl=`@INLINE
        <div class="col-span-1 md:my-10 my-4">
            <h2 class="mb-8 uppercase text-66B645">[[+pagetitle]]</h2>
            [[ +wrapper]]
        </div>
        `
        &tplInner=`@INLINE
        <ul>
            [[ +wrapper]]
        </ul>
        `
        &tplInnerRow=`@INLINE
        <li class="my-2">
            <a class="flex items-center gap-6" href="[[+catalog_path]]" download>
                <img src="/assets/resources/images/pdf_icon.png" alt="PDF">
                <h6>[[+pagetitle]][[+catalog_title]]</h6>
            </a>
        </li>
        `
        ]]


    </div>
</div>







',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/base/chunks/catalogs.html',
          'content' => '<div class="bg-white py-32">  <!--py-10 -->

    <div class="container mt-10">
        [[!$breadcrumbs]]
        <h2 class="mt-2 uppercase">[[*pagetitle]]</h2>


        [[pdoMenu?
        &parents=`49`
        &level=`0`
        &includeTVs=`catalog_path,catalog_title`
        &tplOuter=`@INLINE
        <div class="lg:grid grid-cols-2 gap-4 flex flex-col mt-12">
            [[+wrapper]]
        </div>
        `
        &tpl=`@INLINE
        <div class="col-span-1 md:my-10 my-4">
            <h2 class="mb-8 uppercase text-66B645">[[+pagetitle]]</h2>
            [[ +wrapper]]
        </div>
        `
        &tplInner=`@INLINE
        <ul>
            [[ +wrapper]]
        </ul>
        `
        &tplInnerRow=`@INLINE
        <li class="my-2">
            <a class="flex items-center gap-6" href="[[+catalog_path]]" download>
                <img src="/assets/resources/images/pdf_icon.png" alt="PDF">
                <h6>[[+pagetitle]][[+catalog_title]]</h6>
            </a>
        </li>
        `
        ]]


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
      'breadcrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 16,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'breadcrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '[[pdoCrumbs?

&tplWrapper=`@INLINE
<ul class="flex flex-wrap gap-1 text-8A8A8A">[[+output]]</ul>
`
&tpl=`@INLINE <li><a href="[[+link]]"><strong>[[+menutitle]]</strong></a></li>`
&tplCurrent=`@INLINE <li><strong>[[+menutitle]]</strong></li>`
&outputSeparator=`/`
&showCurrent=`0`

]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/base/chunks/elements/breadcrumbs.html',
          'content' => '[[pdoCrumbs?

&tplWrapper=`@INLINE
<ul class="flex flex-wrap gap-1 text-8A8A8A">[[+output]]</ul>
`
&tpl=`@INLINE <li><a href="[[+link]]"><strong>[[+menutitle]]</strong></a></li>`
&tplCurrent=`@INLINE <li><strong>[[+menutitle]]</strong></li>`
&outputSeparator=`/`
&showCurrent=`0`

]]',
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
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => 'use ModxPro\\PdoTools\\Fetch;
use ModxPro\\PdoTools\\Support\\MenuBuilder;
use MODX\\Revolution\\modResource;

/** @var \\MODX\\Revolution\\modX $modx */
/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = [];
        if (!empty($scriptProperties[\'showDeleted\'])) {
            /** @var Fetch $pdoFetch */
            $pdoFetch = $modx->services->get(\'pdofetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents, $pdoFetch->getChildIds(modResource::class, 0, $scriptProperties[\'depth\'], [\'context\' => $ctx]));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents, $modx->getChildIds(0, $scriptProperties[\'depth\'], [\'context\' => $ctx]));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = [];
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = [
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
];
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var MenuBuilder $menuBuilder */
$modx->services[\'pdotools_config\'] = $scriptProperties;
$menuBuilder = $modx->services->get(MenuBuilder::class);
$menuBuilder->pdoTools->addTime(\'MenuBuilder loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = [];
if ($cache) {
    $tree = $menuBuilder->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $menuBuilder->pdoTools->run();
    $data = $menuBuilder->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = [];
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$menuBuilder->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $menuBuilder->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (isset($return) && $return === \'data\') {
    return $tree;
}
if (!empty($tree)) {
    $output = $menuBuilder->templateTree($tree);
}

if ($modx->user->isAuthenticated(\'mgr\') && !empty($showLog)) {
    $modx->setPlaceholder(\'pdoMenuLog\', print_r($menuBuilder->pdoTools->getTime(), true));
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
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
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Уровень генерируемого меню.',
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
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ начальных узлов меню. Полезно при указании более одного "parents".',
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
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список шаблонов, через запятую, для фильтрации результатов. Если id шаблона начинается с дефиса, ресурсы с ним исключается из выборки.',
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
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
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
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
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
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ неопубликованных документов, если у пользователя есть на это разрешение.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Спрятать неактивные ветки меню.',
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
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
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
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
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
              'value' => 0,
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
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс id="" для выставления идентификатора в чанк.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для первого пункта меню.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс последнего пункта меню.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для активного пункта меню.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс категории меню.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс одной строки меню.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс обертки меню.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс внутренних ссылок меню.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс уровня меню. Например, если укажите "level", то будет "level1", "level2" и т.д.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс текущего документа в меню.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс документа-ссылки.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка всего блока меню.',
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
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк текущего документа',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка внутренних пунктов меню. Если пуст - будет использовать "tplOuter".',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления одного пункта меню.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного пункта меню.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Специальный чанк оформления категории. Категория - это документ с потомками и или нулевым шаблоном, или с атрибутом "rel=\\"category\\"".',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления корневого пункта, при условии, что включен "displayStart".',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите, какие разрешения нужно проверять у пользователя при выводе документов.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id документа, текущего для генерируемого меню. Нужно указывать только если скрипт сам его неверно определяет, например при выводе меню из чанка другого сниппета.',
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
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
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
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вывести точное количество активных потомков документа в плейсхолдер [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => 'use ModxPro\\PdoTools\\Fetch;
use ModxPro\\PdoTools\\Support\\MenuBuilder;
use MODX\\Revolution\\modResource;

/** @var \\MODX\\Revolution\\modX $modx */
/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = [];
        if (!empty($scriptProperties[\'showDeleted\'])) {
            /** @var Fetch $pdoFetch */
            $pdoFetch = $modx->services->get(\'pdofetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents, $pdoFetch->getChildIds(modResource::class, 0, $scriptProperties[\'depth\'], [\'context\' => $ctx]));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents, $modx->getChildIds(0, $scriptProperties[\'depth\'], [\'context\' => $ctx]));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = [];
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = [
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
];
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var MenuBuilder $menuBuilder */
$modx->services[\'pdotools_config\'] = $scriptProperties;
$menuBuilder = $modx->services->get(MenuBuilder::class);
$menuBuilder->pdoTools->addTime(\'MenuBuilder loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = [];
if ($cache) {
    $tree = $menuBuilder->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $menuBuilder->pdoTools->run();
    $data = $menuBuilder->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = [];
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$menuBuilder->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $menuBuilder->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (isset($return) && $return === \'data\') {
    return $tree;
}
if (!empty($tree)) {
    $output = $menuBuilder->templateTree($tree);
}

if ($modx->user->isAuthenticated(\'mgr\') && !empty($showLog)) {
    $modx->setPlaceholder(\'pdoMenuLog\', print_r($menuBuilder->pdoTools->getTime(), true));
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
    ),
    'MODX\\Revolution\\modTemplateVar' => 
    array (
    ),
  ),
);