<div class="portfolio">
    <div class="portfolio-inner" style="background-position: 0 -39px">
        {include file="include/common/breadcrumb.tpl"}

        <div class="relative">
            <nav class="submenu">
                <a {if $smarty.get.type == 'sites'}class="active"{/if} href="/portfolio?type=sites">Сайты</a>
                <a {if $smarty.get.type == 'applications'}class="active"{/if} href="/portfolio?type=applications">Приложения</a>
                <a {if $smarty.get.type == 'logotypes'}class="active"{/if} href="/portfolio?type=logotypes">Логотипы</a>
                <a {if !$smarty.get.type}class="active"{/if} href="/portfolio">Все</a>
            </nav>

            <h1>{$core->page.h1}</h1>
        </div>

        <hr class="dark">

        {include file="include/common/portfolio-list.tpl" items=$core->getPortfolio(false, $smarty.get.type)}

        {*
        <hr class="dark">

        <nav class="pager pager-white">
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <div class="clear"></div>
        </nav>
        *}

        <div class="calc-banner">
            <div class="units-row-end">
                <div class="unit-50">
                    <a href="/order" class="button big yellow">Заказать разработку сайта</a>
                </div>

                <div class="unit-50">
                    <div class="text-side">
                        Узнайте стоимость своего проекта<br>и закажите разработку прямо сейчас!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>