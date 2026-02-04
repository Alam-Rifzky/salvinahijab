<?php

function setCommonView($launcher,$data) {
    $data['base_dir'] = $launcher->base_dir;
    return $data;
}