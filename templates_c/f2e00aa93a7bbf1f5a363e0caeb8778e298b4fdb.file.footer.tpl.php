<?php /* Smarty version Smarty 3.1.4, created on 2014-04-15 21:49:25
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12128642605314609e55b6f1-60192716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2e00aa93a7bbf1f5a363e0caeb8778e298b4fdb' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/footer.tpl',
      1 => 1397584164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12128642605314609e55b6f1-60192716',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5314609e5b02e',
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5314609e5b02e')) {function content_5314609e5b02e($_smarty_tpl) {?><footer class="footer">
    <div class="horizontal-limiter">
        <div class="inner-block">
            <div class="units-row-end">
                <div class="unit-50" itemscope itemtype="http://data-vocabulary.org/Organization">
                    <span itemprop="tel">+7 (926) 960-40-20</span><br>
                    <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('common','main_email');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('common','main_email');?>
</a><br><br>
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
                        &copy; <?php if ($_smarty_tpl->tpl_vars['core']->value->getConstant('common','start_year')<date('Y')){?><?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('common','start_year');?>
&ndash;<?php }?><?php echo date('Y');?>


                        <?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('common','brand_name');?>

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

<?php }} ?>