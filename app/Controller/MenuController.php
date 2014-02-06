<?php
 
 class MenuController extends AppController{
    public function index() {
        $this->set('menu', $this->Menu->find('all'));              
    }
    public function view($id = null) {
      $this->Menu->id = $id;
      $this->set('menu', $this->Menu->read());
    }
    public function add() {
      if($this->request->is('post'))
      {
         if($this->Menu->saveAll($this->request->data))
         {
           $this->redirect(array('action' => 'index'));
         } 
      }
    }
    public function edit($id = null) {
      $this->Menu->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Menu->read();
    } else {
        if ($this->Menu->saveAll($this->request->data)) {
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
    }
    if ($this->Menu->delete($id)) {
        $this->redirect(array('action' => 'index'));
    }
  }
                
 }

?>