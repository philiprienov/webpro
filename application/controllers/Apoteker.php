<?php

/**
 * [SOAL]
 * 2. Baca ini: https://github.com/jupeter/clean-code-php
 *    Rapiin method changePassword
 * 3. Ganti url /original/apoteker/changePassword
 *    Agar bisa diakses dengan url profile/password
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Apoteker extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        is_locked();
    }
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('apoteker/index', $data);
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
            $this->load->view('apoteker/edit', $data);
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
            redirect('apoteker');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password', 'New Password', 'required|trim|min_length[5]|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|trim|min_length[5]|matches[new_password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            // $this->load->view('templates/topbar', $data);
            $this->load->view('apoteker/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Current Password!</div>');
                redirect('apoteker/changePassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cant be same as current password!</div>');
                    redirect('apoteker/changePassword');
                } else {
                    //jika password benar
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password Changed Success!</div>');
                    redirect('apoteker/changepassword');
                }
            }
        }
    }

    public function daftarObat()
    {
        $data['title'] = 'Daftar Obat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->M_User->get_all_obat();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('apoteker/input_obat', $data);
        $this->load->view('templates/footer');
    }

    public function inputObat()
    {
        $data['title'] = 'Daftar Obat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->M_User->get_all_obat();

        $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            // $this->load->view('templates/topbar', $data);
            $this->load->view('apoteker/input_obat', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_obat' => $this->input->post('nama_obat', true),
                'stok' => $this->input->post('stok', true),
                'deskripsi' => $this->input->post('deskripsi', true)
            ];

            $this->M_User->insert_obat($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Input Success</div>');
            redirect('apoteker/daftarObat');
        }
    }

    public function delete($id)
    {
        $this->M_User->delete_obat($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete Success!</div>');
        redirect('apoteker/daftarObat');
    }

    public function editStok($id)
    {
        $where = array('id' => $id);
        $data['obat'] = $this->M_User->edit_stok($where, 'obat')->result();
        $this->load->view('apoteker/input_obat', $data);
    }

    public function updateStok()
    {
        $id = $this->input->post('id');
        $estok = $this->input->post('eStok');

        $data = array(
            'stok' => $estok
        );
        $where = array(
            'id' => $id
        );
        $this->M_User->update_stok($where, $data, 'obat');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Stok Changed</div>');
        redirect('apoteker/daftarObat');
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
        $this->load->view('apoteker/input_obat', $data);
        $this->load->view('templates/footer');
    }
}
