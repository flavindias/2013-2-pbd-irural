<?php
 
 class SectorTypesController extends AppController{
    public function index() {
        $this->set('sector_types', $this->SectorType->find('all'));              
    }
    public function view($id = null) {
      $this->SectorType->id = $id;
      $this->set('sector_type', $this->SectorType->read());
    }
    public function add() {
      if($this->request->is('post'))
      {
         if($this->SectorType->saveAll($this->request->data))
         {
           $this->redirect(array('action' => 'index'));
         } 
      }
    }
    public function edit($id = null) {
      $this->SectorType->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->SectorType->read();
    } else {
        if ($this->SectorType->saveAll($this->request->data)) {
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
    }
    if ($this->SectorType->delete($id)) {
        $this->redirect(array('action' => 'index'));
    }
  }
                
 }

?>