<?php
// if (!defined('BASEPATH')) exit('No direct script access allowed');
if ($isi) {
    return view($isi);
} else {
    return view('templates/error404');
}
