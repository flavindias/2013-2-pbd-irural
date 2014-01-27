<?php
 
 class UsersController extends AppController{
    public function index() {
        $this->set('users', $this->User->find('all'));              
    }
    public function view($id = null) {
      $this->User->id = $id;
      $this->set('user', $this->User->read());
    }
    public function add() {
      if($this->request->is('post'))
      {
         if($this->User->saveAll($this->request->data))
         {
           $this->redirect(array('action' => 'index'));
         } 
      }
    }
    public function edit($id = null) {
      $this->User->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->User->read();
    } else {
        if ($this->User->saveAll($this->request->data)) {
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
    }
    if ($this->User->delete($id)) {
        $this->redirect(array('action' => 'index'));
    }
  }
                
 }

?>