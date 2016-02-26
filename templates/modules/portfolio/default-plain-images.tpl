{$favicon = $core->getItemSingleImage('section_20', $core->page.item.id, 'col_179')}
{$screenshots = $core->getItemImageGallery('section_20', $core->page.item.id, 'col_187')}

<div class="content-inner">
    <div class="horizontal-limiter">
        <div class="inner-block">
            {include file="include/common/breadcrumb.tpl"}

            <h1>{$core->page.h1}</h1>

            <hr>

            <div class="content-prefix">
                <div class="content-prefix-params">
                    <div class="units-row-end">
                        <div class="unit-40 text-right">
                            <span class="color-gray">Задача:</span>&nbsp;
                        </div>

                        <div class="init-60">
                            {$core->page.item.taskname}
                        </div>
                    </div>

                    <div class="units-row-end">
                        <div class="unit-40 text-right">
                            <span class="color-gray">Выпуск:</span>&nbsp;
                        </div>

                        <div class="init-60">
                            {$core->page.item.date|date:"date"}
                        </div>
                    </div>

                    {if $core->page.item.site}
                        <div class="units-row-end">
                            <div class="unit-40 text-right">
                                <span class="color-gray">Адрес:</span>&nbsp;
                            </div>

                            <div class="init-60">
                                <a href="http://{$core->page.item.site}">{$core->page.item.site}</a>
                            </div>
                        </div>
                    {/if}
                </div>

                {$core->page.item.text_short}

                <div class="clear"></div>
            </div>

            {$core->page.item.text}

            {foreach $screenshots as $screenshot}
                <img class="rounded" src="{$screenshot.path|escape}{$screenshot.name|escape}.{$screenshot.extension|escape}" alt="{$screenshot.metaname|escape}">

                <em>{$screenshot.metadesc|escape}</em>
            {/foreach}
        </div>
    </div>
</div>