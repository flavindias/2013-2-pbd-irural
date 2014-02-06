<?php
 
 class RestaurantsController extends AppController{ 	

    public function index() {        
        $this->set('restaurant', $this->Restaurant->find('all'));             
    }

    public function view($id){
      $this->Restaurant->id = $id;
      $this->set('restaurant', $this->Restaurant->read());
    }

    public function add() {
      $this->set('restaurant', $this->Sector->find('all'));    	 
      if($this->request->is('post'))
      {
         if($this->Restaurant->saveAll($this->request->data))
         {
           $this->redirect(array('action' => 'index'));
         } 
      }
    }
    public function edit($id = null) {      
      $this->set('restaurant', $this->Restaurant->find('all'));  
      $this->Restaurant->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Restaurant->read();
    } else {
        if ($this->Restaurant->saveAll($this->request->data)) {
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
    }
    if ($this->Restaurant->delete($id)) {
        $this->redirect(array('action' => 'index'));
    }
  }
                
 }

?>