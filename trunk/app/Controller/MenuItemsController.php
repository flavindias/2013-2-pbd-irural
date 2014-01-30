<?php
 
 class MenuItemsController extends AppController{
 	public $uses = array('MenuItem','MenuType');

    public function index() {
        $this->set('menuitems', $this->MenuItem->find('all'));  
        $this->set('menu_types', $this->MenuType->find('all'));             
    }
    public function view($id = null) {
      
        $this->set('menuitem_types', $this->MenuItemType->find('all')); 
      $this->MenuItem->id = $id;
      $this->set('menuitem', $this->MenuItem->read());
    }
    public function add() {
      $this->set('menu_types', $this->MenuType->find('all')); 
    	$this->set('menuitem_types', $this->MenuType->find('all'));  
      if($this->request->is('post'))
      {
         if($this->MenuItem->saveAll($this->request->data))
         {
           $this->redirect(array('action' => 'index'));
         } 
      }
    }
    public function edit($id = null) {
      $this->set('menu_types', $this->MenuType->find('all')); 
      $this->set('menuitem_types', $this->MenuType->find('all'));  
      $this->MenuItem->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->MenuItem->read();
    } else {
        if ($this->MenuItem->saveAll($this->request->data)) {
            $this->redirect(array('action' => 'index'));
        }
    }
}
   public function delete($id) {
    if (!$this->request->is('post')) {
    }
    if ($this->MenuItem->delete($id)) {
        $this->redirect(array('action' => 'index'));
    }
  }
    
    public function route($string){
    $this->layout = 'mapCar';
    $latlong = explode("_", $string);
    $this->set('latitude', $latlong[0]);
    $this->set('longitude', $latlong[1]);

  }
            
 }

?>