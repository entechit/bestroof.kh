<?php
    if ($routes[2]=='shifer'){  // имя указанное в ссылке на главной странице
        material_func(
            'Шифер 8-ми волновой', /*заголовок*/
            '/img/materials/shifer.jpg',            /*путь к иллюстрации*/
            'Кровельный материал для жилых сооружений, коттеджей, временных построек', /*кратко назначение*/
            ' лист 1750 * 1130 * 5.2-5.8мм ', /*размеры, объемы*/
            'Украина', /*производители*/
            '85 - 160 грн/лист', /*цена*/
            '<p>В современном строительстве применяется шифер в виде волнистых листов 
            (ГОСТ 30340-95 Листы асбестоцементные волнистые. Технические условия) и в виде плоских листов 
            (ГОСТ 18124-95 Листы асбестоцементные плоские. Технические условия), 
            которые используют не только как материал для покрытия крыш, но и для отделочных работ. 
            Асбестоцементный шифер — прочный, долговечный, простой в монтаже, недорогой материал.
                        </p>
                        <h3>Преимущества асбестоцементного шифера</h3>
                        <p>
                        <ul>
                        <li>Благодаря своей твёрдости выдерживает вес человека</li>
                        <li>Малый нагрев в солнечную погоду</li>
                        <li>Долговечность</li>
                        <li>Легко обрабатывается механическими инструментами</li>
                        <li>Не корродирует, в отличие от металлических покрытий</li>
                        <li>Обладает хорошими электроизоляционными свойствами</li>
                        <li>Хорошая звукоизоляция</li>
                        <li>Хорошая ремонтопригодность</li>
                        </ul>
                         </p>'   
                        /* статья, для отделения абзацами нужно ограничивать каждый абзац(параграф) в теги <p> текст параграфа</p> */
            );
			// форомируем заголовок закладки - важно для поисковиков
			?>
			 <script type="text/javascript">
				document.title = 'Шиферная крыша в Харькове. Здоровая крыша';
			 </script>
			<?php

    } else if ($routes[2]=='evroruberoid'){  // имя указанное в ссылке на главной странице
        material_func(
            'Еврорубероид', /*заголовок*/
            '/img/materials/evroruberoid.jpg',            /*путь к иллюстрации*/
            'Кровельный и гидроизоляционный материал для помещений любого типа', /*кратко назначение*/
            ' рулон 1 * 9 м, 2 - 4 кг/м<sup>2<sup>', /*размеры, объемы*/
            'Украина', /*производители*/
            '200 - 400 грн/рулон', /*цена*/
            '<p>Еврорубероид – эластичный многослойный строительный материал, который позволяет создавать надежное покрытие, устойчивое к деформации, разрывам, воздействию влаги. Его можно использовать как самостоятельно, так и в сочетании с шифером или черепицей для создания отдельного защитного слоя крыши. В его состав входят стеклохолст или полимерное полотно, очищенный битум, защитная пленка и минеральная крошка. Полиэтиленовый слой защищает материал от механических повреждений во время транспортировки и монтажа, а также не дает ему склеиться в рулоне. Благодаря наружному слою, состоящему из крошки гранита или мелкозернистого песка, еврорубероид защищает поверхности от ультрафиолетового излучения (также эта фактурная составляющая придает ему привлекательный вид). Структура и компоненты материала подобраны таким образом, что вместе они составляют идеальный влагоустойчивый комплекс, образуют покрытие, не подверженное гниению, защищенное от появления грибка или плесени. Поскольку материал отличается эластичностью, его легко и удобно хранить в рулонах.
                        </p>
                        <h3>Преимущества еврорубероида:</h3>
                        <p>
                        <ul>
                        <li>Надежная гидроизоляция как наземных, так и подземных сооружений</li>
                        <li>Прочность, эластичность, долгий срок службы (от 10 до 30 лет)</li>
                        <li>Устойчивость к избытку влаги, асептические качества</li>
                        <li>Простота монтажа (материал приклеивают на поверхность, нагревая с помощью газовой горелки, или просто закрепляют, если он будет служить вспомогательной прослойкой под профнастилом)</li>
                        </ul>
                         </p>'   
                        /* статья, для отделения абзацами нужно ограничивать каждый абзац(параграф) в теги <p> текст параграфа</p> */
            );
            // форомируем заголовок закладки - важно для поисковиков
            ?>
             <script type="text/javascript">
                document.title = 'Крыша из еврорубероида в Харькове. Здоровая крыша';
             </script>
            <?php

    }

    else 
    {
//header("HTTP/1.1 404 Not Found");
        echo '<div class = "col-md-offset-2 col-md-8">
        <br><br><h2>Данная статья в стадии разработки.</h2> <br><br><br><i><h3>Если вас интересуют вопросы, связанные с применением нами кровельных материалов, 
        обратитесь пожалуйста к нам по телефонам указанным выше либо задайте вопрос через форму "Задать вопрос"</h3></i><br><br>
        </div>';
        echo '  <div class="row">
                    <div class = "col-sm-12">    
                        <a href="/#bl_footer_form">  
                            <img class="img-responsive btn-center" src="/img/block5/btn_question.png" alt="Задать вопрос">
                        </a>
                    </div>    
                </div>';

       ?>
			 <script type="text/javascript">
				document.title = ' Здоровая крыша';
			 </script>
			<?php
    }


/************************/
function material_func($name, $img, $target, $size, $producer, $price, $note)
    {
        echo '<div id="page_material">
                <div class="row">
                    <div class = "col-md-6">
                        <h2 class="bl_4_title">'.$name.'</h2>
                    </div>
                </div>
                <div class="row pmr-bottom-margin">   
                    <div class = "col-md-5">
                        <img src='.$img.' style="border: 4px solid #4caf50" alt="Материал" width ="100%">                       
                    </div>  
                    <div class = "col-md-offset-1 col-md-6">
                        <h3>Назначение:</h3>    
                        <p><small>'.$target.'</small></p>
                        <h3>Размер листа:</h3>    
                        <p><small>'.$size.'</small></p>  
                        <h3>Производитель:</h3>    
                        <p><small>'.$producer.'</small></p>  
                        <h3>Цена:</h3>    
                        <p><strong>'.$price.'</strong></p>      
                    </div> 
                </div> 
                <div class="row pmr-bottom-margin"> 
                    <div class = "col-sm-12">
                    '.$note.'    
                    </div>
                </div> 
                <div class="row">
                    <div class = "col-sm-12">    
                        <a href="/#bl_footer_form">  
                            <img class="img-responsive btn-center" src="/img/block5/btn_question.png" alt="Задать вопрос">
                        </a>
                    </div>    
                </div>
            </div>';
}            
?>            