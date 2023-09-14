<?php
$count = $count ?? 1;
for ($i = 0; $i < $count; $i++) :
    echo '
    <div class="flex gap-x-4 items-center">
        <input class="pop_up__input w-8/12" type="text" placeholder="Код изделия" name="item-'.$i.'">
        <input class="pop_up__input  w-3/12" type="text" placeholder="Кол-во" name="count-'.$i.'">
        <div class="remove-inputs-field col-span-1">
            <img class="" src="/assets/resources/images/x-mark.png" alt="">
        </div>
    </div>
';
endfor;
