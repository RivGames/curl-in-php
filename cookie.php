<?php
if(!$_COOKIE){
    echo json_encode($_COOKIE);
}else{
    echo "error";
}