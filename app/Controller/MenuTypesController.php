<?php
 
 class MenuTypesController extends AppController{
    public function index() {
        $this->set('menu_types', $this->MenuType->find('all'));              
    }
    public function view($id = null) {
      $this->MenuType->id = $id;
      $this->set('menu_type', $this->MenuType->read());
    }
    public function add() {
      if($this->request->is('post'))
      {
         if($this->MenuType->saveAll($this->request->data))
         {
           $this->redirect(array('action' => 'index'));
         } 
      }
    }
    public function edit($id = null) {
      $this->MenuType->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->MenuType->read();
    } else {
        if ($this->MenuType->saveAll($this->request->data)) {
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
    }
    if ($this->MenuType->delete($id)) {
        $this->redirect(array('action' => 'index'));
    }
  }
                
 }

?>