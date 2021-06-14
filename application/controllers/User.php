<?php
defined('BASEPATH') or exit('No direct script access allowed');



class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->library('session');
        is_locked();
    }
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/index', $data);
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
            $this->load->view('user/edit', $data);
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
            redirect('user');
        }
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
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Current Password!</div>');
                redirect('user/changePassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cant be same as current password!</div>');
                    redirect('user/changePassword');
                } else {
                    //jika password benar
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password Changed Success!</div>');
                    redirect('user/changepassword');
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
        $this->load->view('user/input_obat', $data);
        $this->load->view('templates/footer');
    }


    public function inputObat()
    {
        $data['title'] = 'Daftar Obat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->M_User->get_all_obat();

        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $_SESSION["nama"] = $user['name'];
        $_SESSION["id"] = $user['id'];

        $this->form_validation->set_rules('namaObat', 'Nama Obat', 'required');
        $this->form_validation->set_rules('jumlahObat', 'Jumlah Obat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/input_obat', $data);
            $this->load->view('templates/footer');
        } else {
            if ($user) {
                $data =  array(
                    'user_id'      => $_SESSION["id"],
                    'nama_user'    => $_SESSION["nama"],
                    'nama_obat'    => $this->input->post('namaObat', true),
                    'jumlah'       => $this->input->post('jumlahObat', true)
                );
                $this->session->set_userdata($data);

                $this->M_User->insert_obat_user($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Pembelian Berhasil</div>');
                redirect('user/cartObat');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Pembelian Gagal</div>');
            }
        }
    }


    public function cartObat()
    {
        $data['title'] = 'Keranjang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->M_User->get_all_obat();

        $data['keranjang'] = $this->db->get_where('keranjang_user', ['user_id' => $this->session->userdata('id')])->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/cart_obat', $data);
        $this->load->view('templates/footer');
    }

    public function viewObat($id)
    {
        // $data['title'] = 'Keranjang';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->db->get_where('obat', ['id' => $id])->row_array();

        $result = $this->db->where('id', $id)->get('obat');

        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/input_obat', $data);
        $this->load->view('templates/footer');
    }

    public function deleteObat($id)
    {
        $this->M_User->delete_keranjang($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete Success!</div>');
        redirect('user/cartObat');
    }
}
