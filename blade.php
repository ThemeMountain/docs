<?php

return [
    'hello' => function($expression) {
        return '<?php echo "Hello ' . str_replace("'", '', $expression) . '"; ?>';
    },
];
