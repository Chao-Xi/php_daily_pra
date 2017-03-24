<?php
    function add()
    {
      return array_sum(func_get_args());
    }

    echo add(5, 10, 10);