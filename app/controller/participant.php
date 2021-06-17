<?php

class participant extends controll {
    public function index()
    {
        $data['judul'] = 'Participant';
        $data['donate'] = $this->model('participant_model') -> getParticipant();
        $this->view('templates/head',$data);
        $this->view('participant/index');
        $this->view('templates/footer');
    }


}