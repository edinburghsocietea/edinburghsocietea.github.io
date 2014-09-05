<? require_once('events.php'); ?>
<h3>Coming up</h3>
<ol class="events">
    <?foreach($events as $e):?>
        <?if($e['date'] > time()):?>
            <li class="lighter-bg trans">
                <p class="wee align-right unpad"><?=date("g:ia, D jS M Y",$e['date'])?></p>
                <h4><?=$e['title']?></strong></h4>
                <?if($e['descr'] != ""):?>
                    <p><?=$e['descr']?></p>
                <?endif?>
                <p><em><?=$e['place']?></em></p>
                <p class="color1 align-right unpad"><strong><?=$e['price']?></strong></p>
            </li>
        <?endif?>
    <?endforeach?>
</ol>
<p class="lighter-bg trans btn-big"><a href="https://www.google.com/calendar/embed?src=g94b12ho3h76inp0heq1el8u8g%40group.calendar.google.com&ctz=Europe/London">Calendar</a></p>