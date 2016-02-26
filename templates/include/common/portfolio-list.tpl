<div class="units-row">
    {$i = 0}

    {foreach from=$items item=portfolio name=portfolio_loop}
    {$i = $i + 1}

    <div class="unit-25">
        <a href="{$portfolio.path}" class="item browser">
            <span class="item-container">
                <i class="buttons"></i>

                {$image = $core->getItemSingleImage('section_20', $portfolio.id, 'col_168')}

                <span class="viewport">
                    <img src="{$image.path|escape}{$image.name|escape}_pic.{$image.extension|escape}" alt="{$portfolio.structure_name|escape}" />
                </span>
            </span>

            <span class="name">{$portfolio.structure_name}</span>
        </a>

        <span class="desc">{$portfolio.subname}</span>
    </div>

    {if $i == 4 && !$smarty.foreach.portfolio_loop.last}
</div>
<div class="units-row">

    {$i = 0}
    {/if}
    {/foreach}
</div>