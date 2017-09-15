<!DOCTYPE html>
<!-- bestroof.kh.ua -->
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Кровельные работы в Харькове. Здоровая крыша</title>
        <meta name="Description" content="Здоровая крыша лучшая крыша. Кровельные работы в Харькове. Ремонт, проектирование и устройство крыш в Харькове и области. Сопутствующие строительные работы. Монтаж водостоков" />
        <meta name="keywords" content="кровельная работа Харьков, ремонт крыш Харьков, монтаж крыш Харьков, проектирование крыш Харьков, монтаж стропил, подшивка крыш Харьков, монтаж водостоков Харьков, подшивка и водосток Харьков, монтаж кровли, плоская кровля, металлочерепица монтаж, рулонная кровля, профнастил монтаж, гибкая черепица, мягкая кровля">

        <meta property="business:contact_data:phone_number" content="+38 0505186943"/>
        <meta name="geo.placename" content="Харьков, Украина" /> 
        <meta name="geo.position" content="49.988458;36.232799"/>
        <meta name="geo.region" content="UA-Харьков" /> 
        <meta name="ICBM" content="49.988458, 36.232799"/> 
        <link rel="stylesheet" href="/bs/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
        <meta name="yandex-verification" content="d209145b2095d8a5" />
    </head>
    <body>
   
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- ************************************************************************************* -->
        <div>
            <header>
                <?php
                    require "$_SERVER[DOCUMENT_ROOT]/page/header.php";
                ?>
            </header>

            <section>
                <?php
                    
                    $routes = explode('/', $_SERVER['REQUEST_URI']);

                    if (!empty($routes[1]))
                    {
                        if ($routes[1]=='material'){
                            require "$_SERVER[DOCUMENT_ROOT]/patterns/page_material.php";       
                        };
                    }
                    else
                    {
                        require "$_SERVER[DOCUMENT_ROOT]/page/block2.php";
                        require "$_SERVER[DOCUMENT_ROOT]/page/block3.php";
                        require "$_SERVER[DOCUMENT_ROOT]/page/block4.php";
                        require "$_SERVER[DOCUMENT_ROOT]/page/block9_game.php";
                        require "$_SERVER[DOCUMENT_ROOT]/page/block5.php";
                        require "$_SERVER[DOCUMENT_ROOT]/page/block6.php";
                        require "$_SERVER[DOCUMENT_ROOT]/page/block7.php";
                        require "$_SERVER[DOCUMENT_ROOT]/page/block8.php";
                        require "$_SERVER[DOCUMENT_ROOT]/page/block8_1.php";
                    };
                ?>
            </section>
            <footer>
                <?php
                    require "$_SERVER[DOCUMENT_ROOT]/page/footer.php";
                ?>
            </footer>
        </div>

        <!--подключение своих js-скриптов-->
        <script type="text/javascript" src="js/main.js"></script>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-54422544-3', 'auto');
            ga('send', 'pageview');

        </script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41173929 = new Ya.Metrika({
                    id:41173929,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/41173929" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bs/js/bootstrap.min.js"></script>

    </body>
</html>