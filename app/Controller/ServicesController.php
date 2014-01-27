<?php
 
 class ServicesController extends AppController{
 	public $uses = array('Service','Sector');

    public function index() {
        $this->set('services', $this->Service->find('all'));  
        $this->set('sectors', $this->Sector->find('all'));             
    }
    public function view($id = null) {
      $this->set('sectors', $this->Sector->find('all'));
      $this->Service->id = $id;
      $this->set('service', $this->Service->read());
    }
    public function add() {
      $this->set('sectors', $this->Sector->find('all'));
    	 $this->set('service', $this->Service->find('all'));  
      if($this->request->is('post'))
      {
         if($this->Service->saveAll($this->request->data))
         {
           $this->redirect(array('action' => 'index'));
         } 
      }
    }
    public function edit($id = null) {
      $this->set('sectors', $this->Sector->find('all'));
      $this->set('service', $this->Service->find('all'));  
      $this->Service->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Service->read();
    } else {
        if ($this->Service->saveAll($this->request->data)) {
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
    }
    if ($this->Service->delete($id)) {
        $this->redirect(array('action' => 'index'));
    }
  }
                
 }

?>