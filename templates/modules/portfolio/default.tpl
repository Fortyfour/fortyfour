{$favicon = $core->getItemSingleImage('section_20', $core->page.item.id, 'col_179')}
{$screenshots = $core->getItemImageGallery('section_20', $core->page.item.id, 'col_187')}

<div class="content-inner">
    <div class="horizontal-limiter">
        <div class="inner-block">
            {include file="include/common/breadcrumb.tpl"}

            <h1>{$core->page.h1}</h1>

            <hr>

            <p>
                <span class="color-gray">Задача:</span> {$core->page.item.taskname}
                <br/>

                <span class="color-gray">Дата выпуска:</span> {$core->page.item.date|date:"date"}

                {if $core->page.item.site}
                    <br>
                    <span class="color-gray">Адрес:</span> <a href="http://{$core->page.item.site}">{$core->page.item.site}</a>
                {/if}
                <br>
                <br>
            </p>

            {$core->page.item.text_short}

            <h1>{$core->page.item.text}</h1>

            {foreach $screenshots as $screenshot}
                <div class="work-site-screenshot">
                    <i class="bar-l"></i>
                    <i class="bar-r"></i>
                    <span class="bar-title">{$screenshot.metaname}</span>

                    {if $core->page.item.site}
                        <span class="bar-favicon"><img src="{$favicon.path|escape}{$favicon.name|escape}.{$favicon.extension|escape}"></span>
                        <span class="bar-address"><a href="http://{$core->page.item.site}">{$core->page.item.site}</a></span>
                    {/if}

                    <img src="{$screenshot.path|escape}{$screenshot.name|escape}.{$screenshot.extension|escape}" alt="{$screenshot.metaname|escape}">
                </div>

                <em>{$screenshot.metadesc|escape}</em>
            {/foreach}
        </div>
    </div>
</div>