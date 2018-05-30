<?php
spl_autoload_register(function ($entity) {
    $entity = strtolower($entity);
    $sep = DIRECTORY_SEPARATOR;
    $dir = __DIR__;

    $path = "${dir}${sep}lib${sep}${entity}_class.php";
    if (file_exists($path)) {
        require_once $path;
        return;
    }

    $path = "${dir}${sep}trait${sep}${entity}_trait.php";
    if (file_exists($path)) {
        require_once $path;
        return;
    }

    // todo: Throw some error about entity not loaded
});
