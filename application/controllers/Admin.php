<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User'); // memanggil model
        is_locked();
    }
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            // $this->load->view('template/topbar', $data);
            $this->load->view('admin/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $alamat = $this->input->post('alamat');
            $kota = $this->input->post('kota');


            //jika ada gambar yang akan di upload
            $upload = $_FILES['image']['name'];

            if ($upload) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '500';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->set('alamat', $alamat);
            $this->db->set('kota', $kota);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your profile has been updated!</div>');
            redirect('admin');
        }
    }

    public function user_list()
    {
        $data['title'] = 'Daftar User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['list'] = $this->M_User->get_all_user();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('admin/daftar_user', $data);
        $this->load->view('templates/footer');

        // $where = array('id' => $id);
        // $data['user'] = $this->M_User->edit_role($where, 'user')->result();
    }

    public function delete($id)
    {
        $this->M_User->delete_user($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete Success!</div>');
        redirect('admin/user_list');
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[5]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm Password', 'required|trim|min_length[5]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            // $this->load->view('templates/topbar', $data);
            $this->load->view('admin/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Current Password!</div>');
                redirect('admin/changePassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cant be same as current password!</div>');
                    redirect('admin/changePassword');
                } else {
                    //jika password benar
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password Changed Success!</div>');
                    redirect('admin/changepassword');
                }
            }
        }
    }

    // public function edit_role($id)
    // {

    //     $data['title'] = 'Daftar User';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['list'] = $this->M_User->get_all_user();

    //     $this->form_validation->set_rules('role', 'Role', 'required');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('admin/daftar_user', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $data = [
    //             'role_id' => $this->input->post('role', true)
    //         ];

    //         $this->M_User->update_role($data, $id);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    //         Role Changed</div>');
    //         redirect('admin/user_list');
    //     }
    // }

    public function daftarObat()
    {
        $data['title'] = 'Daftar Obat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->M_User->get_all_obat();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('admin/daftar_obat', $data);
        $this->load->view('templates/footer');
    }


    public function editRole($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->M_User->edit_role($where, 'user')->result();
        $this->load->view('admin/daftar_user', $data);
    }

    public function updateRole()
    {
        $id = $this->input->post('id');
        $roleId = $this->input->post('role');

        $data = array(
            'role_id' => $roleId
        );
        $where = array(
            'id' => $id
        );
        $this->M_User->update_role($where, $data, 'user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Role Changed</div>');
        redirect('admin/user_list');
    }

    public function viewObat($id)
    {
        $data['obat'] = $this->db->get_where('obat', ['id' => $id])->row_array();

        $result = $this->db->where('id', $id)->get('obat');

        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/daftar_obat', $data);
        $this->load->view('templates/footer');
    }
}
