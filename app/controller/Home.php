<?php

class Home extends controll {
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/head',$data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

}