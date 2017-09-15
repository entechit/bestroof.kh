<div id="bl_5_container">
    <div class="container">
        <div class = "row">
            <div class = "col-md-12">
                <h2>Материалы для кровли</h2>
            </div>
        </div>
        <div class = "row bl_5_row row-flex">

            <div class = "col-md-4 text-center">
                <div class="bl_5_material">
                    <a href="material/profnastil">
                        <img class="bl_5_material_img1" src="/img/materials/profnastil.jpg" alt="Профнастил">
                        <img class="bl_5_material_img2" src="/patterns/material_house.png" alt="bestroof шаблон">
                     </a>
                </div>
            </div>
            
            <div class = "col-md-4">
                <div class="material_name" style = "top:0">
                    Профнастил
                </div>
                <br>
                <div class = "bl_5_row_icon_container">
                    <div class = "bl_5_row_icon bl_5_row_icon_first">
                        <span class = "bl_5_icon bl_5_icon_hand"></span>
                        60 - 100 грн.
                    </div>
                    <div class = "bl_5_row_icon">
                        <span class = "bl_5_icon bl_5_icon_hourglass"></span>
                       10 - 30 лет
                    </div>
                </div>

                <div class = "bl_5_row_text_container">
                    <p class = "bl_5_row_text">
                    Легкий, прочный, экологичный
                    </p>
                </div>

            </div>
            
            <div class = "col-md-4 text-center">
                <img src="/img/block5/info.png" alt="Шильд">
            </div>

        </div>




        <div class = "row bl_5_row row-flex">

            <?php
                /*+*/
                material_block("/img/materials/shifer.jpg", 
                                "Шифер", 
                                "70 - 80 грн.", 
                                "30 - 45 лет", 
                                "Прочный, долговечный. Монтируется на стропильную систему",
                                "material/shifer");

                /*+*/
                material_block("/img/materials/evroruberoid.jpg", 
                                "Еврорубероид", 
                                "24 - 40 грн.", 
                                "10 - 30 лет", 
                                "Долговечность. Наплавляется на бетонные основания",
                                "material/evroruberoid");
                /*+*/
                material_block("/img/materials/bitumnaja_cherepica_full.jpg", 
                                "Битумная черепица", 
                                "100 - 200 грн.", 
                                "10 - 100 лет !!!", 
                                "Долговечное, легкое. Требует подготовки основания",
                                "material/bitumnaja_cherepica");

                /*+*/
                material_block("/img/materials/metallocherepica.jpg", 
                                "Металлочерепица", 
                                "90 - 180 грн.", 
                                "15 - 60 лет", 
                                "Легкий, прочный, экологичный. Монтируется на стропильную систему",
                                "material/metallocherepica");

                /*+*/
                material_block("/img/materials/keramicheskaya_cherepica.jpg", 
                                "Керамочерепица", 
                                "260 - 900 грн.", 
                                "70 - 100 лет", 
                                "Долговечность, термоизоляция и шумоизоляция",
                                "material/keramicheskaya_cherepica");

                 /*+*/
                material_block("/img/materials/kompozitnaya_cherepica.jpg", 
                                "<small>Композитная черепица</small>", 
                                "350 - 1000 грн.", 
                                "50 - 100 лет", 
                                "Внешне может заменить любой другой материал.",
                                "material/ompozitnaya_cherepica");
            ?>

        </div>
        <div class="row bl_5_footer">
            <div class = "col-md-offset-2 col-md-8">
                <p>Мы поможем Вам выбрать кровельный материал с подходящими характеристиками</p>

                <a href="#bl_footer_form">
                    <img class="img-responsive btn-center" src="/img/block5/btn_question.png" alt="Задать вопрос">
                </a>
            </div>
        </div>
    </div>
</div>

<?php
    function material_block($img, $name, $price, $term, $note, $href)
    {
       echo '<div class = "col-md-4 text-center">
                <div class="bl_5_material">
                    <a href="/'.$href.'">
                        <img class="bl_5_material_img1" src="'.$img.'" alt="'.$name.'">
                        <img class="bl_5_material_img2" src="/patterns/material_house.png" alt="bestroof шаблон">
                    </a>
                    <div class="material_name">
                        '.$name.'    
                    </div>
                </div>
                <div class = "bl_5_row_icon_container">
                    <div class = "bl_5_row_icon bl_5_row_icon_first">
                        <span class = "bl_5_icon bl_5_icon_hand"></span>
                       '.$price.'
                    </div>
                    <div class = "bl_5_row_icon">
                        <span class = "bl_5_icon bl_5_icon_hourglass"></span>
                       '.$term.'
                    </div>
                </div>
                <div class = "bl_5_row_text_container">
                    <p class = "bl_5_row_text">'.$note.'</p>
                </div>
            </div>';
    }
?>