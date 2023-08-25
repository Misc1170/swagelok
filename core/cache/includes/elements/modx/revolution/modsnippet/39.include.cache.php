<?php

echo '
<div class="bg-F3F3F3 my-10">
    <div class="container">';
if ($showTitle) {
    echo '<h2 class="my-10">Похожие изделия</h2>';
}
echo '<div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-4 gap-y-6">';

echo $modx->runSnippet('pdoResources', array(
    'parents' => $parents,
    'limit' => $limit ?? 4,
    'depth' => '',
    'tpl' => 'product_cutaway',
    'includeTVs' => 'img,banner,price',
    'hideContainers' => '1',
));
if (!$hideShowMore) {
    echo '
       <div class="lg:hidden sm:flex hidden flex-col justify-end px-6 pb-2">
            <button class="btn-66B645"><span class="font-medium">Показать еще</span></button>
        </div>';
}
echo '</div>';
if (!$hideShowMore) {

    echo '<div class="lg:flex sm:hidden flex justify-end my-6">
                    <a class="btn-66B645 md:w-2/12 w-5/12" href=' . $alias . '><span class="font-medium">Показать еще</span></a>
        </div>';
}
echo '</div>
</div>';
return;
