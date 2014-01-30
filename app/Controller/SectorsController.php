<?php
 
 class SectorsController extends AppController{
 	public $uses = array('Sector','SectorType');

    public function index() {
        $this->set('sectors', $this->Sector->find('all'));  
        $this->set('sector_types', $this->SectorType->find('all'));             
    }
    public function view($id = null) {
      
        $this->set('sector_types', $this->SectorType->find('all')); 
      $this->Sector->id = $id;
      $this->set('sector', $this->Sector->read());
    }
    public function add() {
    	 $this->set('sector_types', $this->SectorType->find('all'));  
      if($this->request->is('post'))
      {
         if($this->Sector->saveAll($this->request->data))
         {
           $this->redirect(array('action' => 'index'));
         } 
      }
    }
    public function edit($id = null) {
      $this->set('sector_types', $this->SectorType->find('all'));  
      $this->Sector->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Sector->read();
    } else {
        if ($this->Sector->saveAll($this->request->data)) {
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
    }
    if ($this->Sector->delete($id)) {
        $this->redirect(array('action' => 'index'));
    }
  }
    
    public function route($string){
    $latlong = explode("_", $string);
    $this->set('latitude', $latlong[0]);
    $this->set('longitude', $latlong[1]);

  }
            
 }

?>