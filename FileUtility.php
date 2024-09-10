<?php

class FileUtility
{
    public static function writeToFile($filename, $data)
    {
        $file = fopen($filename, 'w');
        foreach ($data as $row) {
            fputcsv($file, $row);
        }
        fclose($file);
    }

    public static function readFromFile($filename)
    {
        $rows = [];
        if (($file = fopen($filename, 'r')) !== FALSE) {
            while (($data = fgetcsv($file)) !== FALSE) {
                $rows[] = $data;
            }
            fclose($file);
        }
        return $rows;
    }
}