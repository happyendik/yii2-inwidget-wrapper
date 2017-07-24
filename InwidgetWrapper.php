<?php

namespace happyendik;

class InwidgetWrapper extends \yii\base\Widget
{
    public function run()
    {
        ?>
        <!-- Без профиля -->
        <iframe src='/inwidget/index.php?toolbar=false' scrolling='no'
                frameborder='no' style='border:none;width:260px;height:320px;overflow:hidden;'></iframe>
        <?php
    }
}
