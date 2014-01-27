<?php
 
 class ManagementTypesController extends AppController{
    public function index() {
        $this->set('management_types', $this->ManagementType->find('all'));              
    }
    public function view($id = null) {
      $this->ManagementType->id = $id;
      $this->set('management_type', $this->ManagementType->read());
    }
    public function add() {
      if($this->request->is('post'))
      {
         if($this->ManagementType->saveAll($this->request->data))
         {
           $this->redirect(array('action' => 'index'));
         } 
      }
    }
    public function edit($id = null) {
      $this->ManagementType->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->ManagementType->read();
    } else {
        if ($this->ManagementType->saveAll($this->request->data)) {
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
    }
    if ($this->ManagementType->delete($id)) {
        $this->redirect(array('action' => 'index'));
    }
  }
                
 }

?>