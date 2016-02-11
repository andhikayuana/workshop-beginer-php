<?php
class View
{
    public function load($template, $data = array())
    {
        $file = 'views/'. $template . '.php';
        if ( file_exists($file) && is_file($file) ) {
            if ( !empty($data) ) {
                extract($data);
            }

            include $file;
        } else {
            exit("File $file tidak ditemukan");
        }
    }
}
