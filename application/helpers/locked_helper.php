<?php


function is_locked()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $akses = $ci->uri->segment(1);
    }

    //  if($ci->session->userdata('email',['role_id'==1])){
    //      redirect('admin');
    //  }else if ($ci->session->userdata('email',['role_id'==2])){
    //      redirect('apoteker');
    //  }else{
    //      redirect('user');
    //  }
}
