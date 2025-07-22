<?php

class Home extends Controller{
    public $usermodel;
    public $request;
    public $redirect;
    public function __construct(Request $request = null){
        $this->usermodel = $this->model('UserModel');
        $this->request = $request !== null ? $request : new Request;
        $this->redirect = new Redirect;
    }    
    public function index() {
        $message = null;
        if ($this->request->isPost()) {
            $name = $this->request->data('name');
            $email = $this->request->data('email');
            if (!empty($name) && !empty($email)) {
                $insert = $this->usermodel->add($name, $email);
                if ($insert) {
                    $message = [
                        'type' => 'success',
                        'text' => 'Data Inserted Successfully.'
                    ];
                    // Optionally, you can redirect after showing the message
                } else {
                    $message = [
                        'type' => 'danger',
                        'text' => 'Data not Inserted.'
                    ];
                }
            } else {
                $message = [
                    'type' => 'warning',
                    'text' => 'Name and Email are required.'
                ];
            }
        }
        $this->view("welcome", ['message' => $message]);
    }
}

?>
