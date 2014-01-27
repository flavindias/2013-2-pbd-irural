<?php
 
 class EventsController extends AppController{
 	public $uses = array('Event','Sector');

    public function index() {
        $this->set('events', $this->Event->find('all'));  
        $this->set('sectors', $this->Sector->find('all'));             
    }
    public function view($id = null) {
      $this->set('sectors', $this->Sector->find('all'));
      $this->Event->id = $id;
      $this->set('Event', $this->Event->read());
    }
    public function add() {
      $this->set('sectors', $this->Sector->find('all'));
    	 $this->set('event', $this->Event->find('all'));  
      if($this->request->is('post'))
      {
         if($this->Event->saveAll($this->request->data))
         {
           $this->redirect(array('action' => 'index'));
         } 
      }
    }
    public function edit($id = null) {
      $this->set('sectors', $this->Sector->find('all'));
      $this->set('event', $this->Event->find('all'));  
      $this->Event->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Event->read();
    } else {
        if ($this->Event->saveAll($this->request->data)) {
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
    }
    if ($this->Event->delete($id)) {
        $this->redirect(array('action' => 'index'));
    }
  }
                
 }

?>