<div class="blog">
    {foreach from=$core->page.items item=item}
        <div class="item">
            <h2><a href="{$item.path|escape}" class="no-link black-link">{$item.structure_name}</a></h2>

            <div class="tags">
                <span class="date color-gray"><i class="icon-clock"></i>{$item.date|date:"date"}</span>

                {$tags = explode(',', $item.tags)}

                {if count($tags) > 0}
                    <i class="icon-tags color-gray-light" title="Теги"></i>
                    {foreach $tags as $tag}
                    <a href="/blog?mode=tags&tag={$tag}" class="tag color-gray-light">{$tag}</a>
                    {/foreach}
                {/if}
            </div>

            {$item.announce}
        </div>
    {foreachelse}
        <p class="color-gray">Нет активных записей</p>
    {/foreach}
</div>

{include file="include/common/pager.tpl" pager=$core->page.pager}