<div class="plain-content">
    <div class="tags">
        <span class="date color-gray"><i class="icon-clock"></i>{$core->page.item.date|date:"date"}</span>

        {$tags = explode(',', $core->page.item.tags)}

        {if count($tags) > 0}
            <i class="icon-tags color-gray-light" title="Теги"></i>
            {foreach $tags as $tag}
                <a href="/blog?mode=tags&tag={$tag}" class="tag color-gray-light">{$tag}</a>
            {/foreach}
        {/if}
    </div>

    {$core->page.item.text}

    <hr/>

    <div class="social-likes">
        <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
        <div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
        <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
        <div class="plusone" title="Поделиться ссылкой в Гугл-плюсе">Google+</div>
    </div>
</div>