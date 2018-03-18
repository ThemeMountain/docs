<?php

return [
    'mix' => function($expression) {
        return '<?php echo $page->getAsset('.$expression.'); ?>';
    },
];
