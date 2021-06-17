<?php

class About extends controll {
    public function index()
    {
        $data['judul'] = 'About';
        $this->view('templates/head',$data);
        $this->view('about/index');
        $this->view('templates/footer');
    }

}