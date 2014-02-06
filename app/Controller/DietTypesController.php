<?php
 
 class DietTypesController extends AppController{
    public function index() {
        $this->set('diet_types', $this->DietType->find('all'));              
    }
    public function view($id = null) {
      $this->DietType->id = $id;
      $this->set('diet_type', $this->DietType->read());
    }
    public function add() {
      if($this->request->is('post'))
      {
         if($this->DietType->saveAll($this->request->data))
         {
           $this->redirect(array('action' => 'index'));
         } 
      }
    }
    public function edit($id = null) {
      $this->DietType->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->DietType->read();
    } else {
        if ($this->DietType->saveAll($this->request->data)) {
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
    }
    if ($this->DietType->delete($id)) {
        $this->redirect(array('action' => 'index'));
    }
  }
                
 }

?>