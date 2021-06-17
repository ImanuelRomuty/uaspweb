<?php

class donation extends controll {
    public function index()
    {
        $data['judul'] = 'donation';
        $this->view('templates/head',$data);
        $this->view('donation/index');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ( $this->model('participant_model')->insertDonation($_POST) > 0 ) {
            echo "berhasil";
            header('Location: ' . URl . '/donation');
            exit;
        } else {
            echo "gagal";
            header('Location: ' . URl . '/donation');
            exit;
        }
    }
}