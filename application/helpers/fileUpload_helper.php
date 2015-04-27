<?php

function doUpload(){
    
echo 1;
    echo 2;
    $this->upload->data();
    echo 3;
    if ( ! $this->upload->do_upload()){
            $error = array('error' => $this->upload->display_errors());
            return $error;
    }else{
        return TRUE;
    }
}

