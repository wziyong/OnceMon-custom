<?php
/**
 * Created by PhpStorm.
 * User: wziyong
 * Date: 2015/9/6
 * Time: 17:45
 */
$cwd = getcwd();
$name = substr($cwd, strrpos($cwd, '\\')+1);
`for /D %i in (locale\\*) do msgfmt %i\\$name.po -o %i\\LC_MESSAGES\\$name.mo`;

