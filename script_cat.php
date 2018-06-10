<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.06.2018
 * Time: 13:26
 */


$pl = file_get_contents('kategorii.xlsx');


$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('CP1251');
$data->setUTFEncoder('mb');
$data->read("kategorii.xlsx");

echo $data;