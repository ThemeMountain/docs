<?php

return [
    'mix' => function($expression) {
        return '<?php echo $page->getAssetPath('.$expression.') . mix('.$expression.'); ?>';
    },
    'asset' => function($expression) {
        return '<?php echo '.$expression.'; ?>';
    },
    'svg' => function($expression) {
        return '<?php
            $file = "source/img/icons/" .' . $expression . '. ".svg";
            echo file_exists($file) ? file_get_contents($file) : ""; ?>';
    },
];
