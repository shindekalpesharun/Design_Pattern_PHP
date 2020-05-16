<?php

// This help to algo select at run time in php

interface SortStrategy
{
    public function sortfun();
}

class QuickSort
{
    private $data;

    public function __construct(Array $data)
    {
        $this->data = $data;
    }

    public function sortfun()
    {
    }
}

class MergeSort
{
    private $data;

    public function __construct(Array $data)
    {
        $this->data = $data;
    }

    public function sortfun()
    {
    }
}

function sortfun(array $data)
{
    if (count($data) > 20) {
        $tempData = new QuickSort($data);
    }else{
        $tempData = new MergeSort($data);
    }
    $tempData->sortfun();
}

$data = array(3,4,5,5,6,4,8,6,4);
sortfun($data);
?>