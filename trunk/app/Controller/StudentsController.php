<?php
 
 class StudentsController extends AppController{
    public function index() {
        $this->set('students', $this->Student->find('all'));              
    }
    public function view($id = null) {
      $this->Student->id = $id;
      $this->set('student', $this->Student->read());
    }
    public function add() {
      if($this->request->is('post'))
      {
         if($this->Student->saveAll($this->request->data))
         {
           $this->redirect(array('action' => 'index'));
         } 
      }
    }
    public function edit($id = null) {
      $this->Student->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Student->read();
    } else {
        if ($this->Student->saveAll($this->request->data)) {
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
    }
    if ($this->Student->delete($id)) {
        $this->redirect(array('action' => 'index'));
    }
  }
                
 }

?>