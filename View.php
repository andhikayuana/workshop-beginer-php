<?php
class View
{
    public function load($nama_file, $data = array())
    {
        $folder = "view/";
        $file = $folder . $nama_file . '.php';
        if ( file_exists($file) && is_file($file) ) {
            if ( !empty($data) ) {
                extract($data);
            }
            include $file;
        } else {
            echo "File $file tidak ditemukan.";
        }
    }

}
