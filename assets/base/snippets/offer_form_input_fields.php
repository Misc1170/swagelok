<?php
$count = $count ?? 1;
$mini = $mini ?? '';
for ($i = 0; $i < $count; $i++) :
    echo '
    <div class="flex gap-x-4 items-baseline">
        <input class="pop_up__input w-8/12" type="text" placeholder="Код изделия" name="item-' . $i . '">
        <div id="group-count-' . $i . $mini . '" class="flex flex-col gap-y-1 w-3/12">
            <input class="pop_up__input" type="text" placeholder="Кол-во" name="count-' . $i . '">
        </div>
        <div class="remove-inputs-field col-span-1">
            <img class="" src="/assets/resources/images/x-mark.png" alt="">
        </div>
    </div>
';
endfor;