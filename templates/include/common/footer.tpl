<footer class="footer">
    <div class="horizontal-limiter">
        <div class="inner-block">
            <div class="units-row-end">
                <div class="unit-50" itemscope itemtype="http://data-vocabulary.org/Organization">
                    <span itemprop="tel">+7 (926) 960-40-20</span><br>
                    <a href="mailto:{$core->getConstant('common', 'main_email')}">{$core->getConstant('common', 'main_email')}</a><br><br>
                    <span itemprop="name">Веб-студия &laquo;Forty four&raquo;.</span> 
                    <span itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
                        <span itemprop="locality">Москва</span>, <span itemprop="region">поселок Румянцево</span>,<br> 
                        <span itemprop="street-address">БП &laquo;Румянцево&raquo;, строение 2, корпус В, офис 525-В</span>
                    </span>
                </div>

                <div class="unit-25">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="/about">О компании</a></li>
                            <li><a href="/portfolio">Портфолио</a></li>
                            <li><a href="/services">Услуги</a></li>
                        </ul>
                    </div>

                    <br>

                    <nobr>
                        &copy; {if $core->getConstant('common', 'start_year') < date('Y')}{$core->getConstant('common', 'start_year')}&ndash;{/if}{date('Y')}

                        {$core->getConstant('common', 'brand_name')}
                    </nobr>
                </div>

                <div class="unit-25">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="/projects">Проекты</a></li>
                            <li><a href="/blog">Блог</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                        </ul>
                    </div>

                    <br>

                    <a href="/sitemap">Карта сайта</a>
                </div>
            </div>
        </div>
    </div>
</footer>

{literal}
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
    try {
        w.yaCounter6161821 = new Ya.Metrika({id:6161821, enableAll: true, webvisor:true});
    } catch(e) { }
    });
    
    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
    d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/6161821" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2808802-28', 'fortyfour.ru');
  ga('send', 'pageview');

</script>
{/literal}
