<!DOCTYPE html>
<html>
<head>
    {include file="include/common/head.tpl"}
</head>
<body>
<div class="wrapper">
    <header class="header-inner">
        {include file="include/common/header-inner.tpl"}
    </header>

    <div class="content-inner">
        <div class="horizontal-limiter">
            <div class="inner-block" style="background: #eee url(../resources/img/patterns/furley_bg.png)">

            </div>
        </div>
    </div>

    <footer class="footer">
        {include file="include/common/footer.tpl"}
    </footer>
</div>

{$core->getConstant('scripts', 'body_code')}

</body>
</html>