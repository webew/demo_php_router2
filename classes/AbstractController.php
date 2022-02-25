<?php

abstract class AbstractController
{
    protected function render($vue, $datas = [])
    {
        extract($datas);
        include TEMPLATE . "/base.php";
    }
}
