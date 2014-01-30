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
    public function preroute(){
      $this->set('sectors', $this->Sector->find('all'));
      if ($this->request->is('post')) {

        
      $destino = $_POST['Destino'];
      $origem = $_POST['Origem'];
      $route = $origem."_".$destino;
      //$latlong = explode("_", $route);
      $this->redirect(array('action' => 'route/'.$route));
    }  

    }
    
    public function route($string){
      $this->layout = 'route';
    $latlong = explode("_", $string);
    $this->set('latitudeO', $latlong[0]);
    $this->set('longitudeO', $latlong[1]);
    $this->set('latitudeD', $latlong[2]);
    $this->set('longitudeD', $latlong[3]);
    


  }
            
 }

?>