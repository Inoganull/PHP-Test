<?php

    function mapper($items, $closure) {

        $result = [];

        foreach($items as $item) {
            $result[] = $closure($item);
        }

        return $result;
    }

    $data = [10, 20, 30];

    $result = mapper($data, function ($item) {
        return $item * 5;
    });

    $result1 = mapper($data, function ($item) {
        return $item * 3 / 2;
    });
    var_dump($result, $result1);

?>