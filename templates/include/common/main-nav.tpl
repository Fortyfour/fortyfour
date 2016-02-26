<ul>
    <li class="phone"><span class="icon phone"><i class="phone"></i>+7 (926) 960-40-20</span></li>
    <li><a href="#" class="icon common-feedback-opener"><i class="mail"></i>&nbsp;</a></li>

    <li {if $core->uri == '/about/'}class="active"{/if}><a href="/about">О компании</a></li>
    <li {if $core->uri == '/portfolio/'}class="active"{/if}><a href="/portfolio">Портфолио</a></li>
    <li {if $core->uri == '/services/'}class="active"{/if}><a href="/services">Услуги</a></li>
    <li {if $core->uri == '/projects/'}class="active"{/if}><a href="/projects">Проекты</a></li>
    <li {if $core->uri == '/blog/'}class="active"{/if}><a href="/blog">Блог</a></li>
    <li {if $core->uri == '/contacts/'}class="active"{/if}><a href="/contacts">Контакты</a></li>
</ul>