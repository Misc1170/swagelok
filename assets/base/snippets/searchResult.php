<?php
global $modx;
$url = "http://avy.ru:575/"; // URL-адрес POST
$resourceUrl = "http://avy.ru:82";
$data = [
    'task' => 'updateFilter',
    'props' => [
//        'searchOnly' => ['code'],
        'view' => ["form_materials", "connect_size_1", "connect_size_2", "connect_type_1", "connect_type_2"],
        'search' => $_POST['search']
    ]
];
$options = [
    'http' => [
        'method' => 'POST',
        'content' => json_encode($data)
    ]
];

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$response = json_decode($result, true);

if (!$response['table']['levels']) : ?>
    <h3 class="text-center my-6">Результатов не найдено</h3>
    <?php return; ?>
<?php endif;

foreach ($response['table']['levels'] as $items) :
    foreach ($items as $keyTable => $item) : ?>
        <div class="grid grid-cols-12 gap-6 py-10">

            <!--        *** IMG + CATALOG **-->
            <div class="flex flex-col col-span-2">
                <img src="<?php echo $resourceUrl . $item['preview'] ?>" alt="PREVIEW">
                <?php
                if ($item['tabs'] != null) :
                    $pdf = $item['tabs']['Каталоги']['list'][0] ?>
                    <a class="flex items-center justify-center gap-6 py-4" href="<?php echo $pdf['file_link'] ?>"
                       download>
                        <img src="/assets/resources/images/pdf_icon.png" alt="PDF">
                        <h6><?php echo $pdf['title'] ?></h6>
                    </a>
                <?php endif; ?>
            </div>
            <!--        *** IMG + CATALOG **-->


            <!--        *** BREADCRUMBS ***-->
            <div class="flex flex-col justify-between gap-4 col-span-10">
                <div class="flex text-8A8A8A gap-1">
                    <?php for ($i = 0; $i < 2; $i++): ?>
                        <?php $breadcrumb = $item['breadСrumbs'][$i]['title'] ?>
                        <a href="#"><span><?php echo $breadcrumb ?></span></a>
                        <?php echo $i + 1 == 2 ? '' : '<span> / </span>'; ?>
                    <?php endfor; ?>
                </div>
                <!--            *** BREADCRUMBS ***-->

                <!--            *** NAME ***-->
                <div class="flex flex-wrap text-black gap-1">
                    <?php for ($i = 1; $i < count($item['breadСrumbs']); $i++): ?>
                        <?php $breadcrumb = $item['breadСrumbs'][$i]['title'] ?>
                        <h3 class=""><?php echo $breadcrumb ?></h3>
                        <?php echo $i + 1 == count($item['breadСrumbs']) ? '' : '<h3> — </h3>'; ?>
                    <?php endfor; ?>
                </div>
                <!--            *** NAME ***-->

                <!--            *** TABLE ***-->
                <table class="search-result-table">
                    <tr>
                        <?php foreach ($item['headers'] as $header): ?>
                            <th><?php echo $header == 'Кодировка' ? 'Код изделия' : $header ?></th>
                        <?php endforeach; ?>
                    </tr>

                    <?php foreach ($item['tables'] as $rows) :
                        $lengthCode = $rows['length'];
                        foreach ($rows['rows'] as $row): ?>
                            <tr>
                                <?php foreach ($row as $key => $item):
                                    echo $key != 'prettyPagetitle'
                                        ? $key == 'pagetitle'
                                            ? '<td><a href="#">' . $item . '</a></td>'
                                            : '<td>' . $item . '</td>'
                                        : '';
                                endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </table>
                <!--            *** TABLE ***-->

            </div>

            <?php echo $modx->getChunk('pagination', ['length' => $lengthCode]);
            ?>
        </div>

    <?php endforeach;
endforeach;

echo $modx->getChunk('general_pagination', $response['table']);

return;
function p($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}