<?php /* Smarty version Smarty 3.1.4, created on 2014-09-27 10:33:11
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/templates/include/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158393491554265a2716a9c0-12371076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6469dd6aa8122d515792be72bea81e75d9f440f2' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/templates/include/common/footer.tpl',
      1 => 1411668489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158393491554265a2716a9c0-12371076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54265a271a52f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54265a271a52f')) {function content_54265a271a52f($_smarty_tpl) {?><footer class="footer">
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