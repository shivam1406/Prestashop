<?php 
class Test extends Module {
	function __construct()
	{
        $this->name = "Test";
        $this->tab = 'Tab Name';
		$this->version = '1.0.0';
		$this->author = 'Shivam';
        parent::__construct();
        $this->displayName = $this->l('Test Module');
        $this->description = $this->l('We have created a simple test Module.');
	}	
	function install()
	{
       if (!parent::install()
           OR !$this->registerHook('rightColumn')
           OR !$this->registerHook('leftColumn'))
                return false;
        return true;	
	}
	public function hookLeftColumn()	
	{
		return "<iframe src='https://plivo1.demo.xmagestore.com/shivam/slider.html'></iframe>";
	}
	function uninstal()
	{
		if (!parent::uninstall())
			return false;
		return true;
	}
}
?>