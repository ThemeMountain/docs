<?php

return [
    'mix' => function($expression) {
        return '<?php echo $page->getAssetPath('.$expression.') . mix('.$expression.'); ?>';
    },
];
