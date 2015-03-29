<?php

/**
 * Our homepage. Show the most recently added quote.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct()
    {
	parent::__construct();
        
        $this->load->model('order');
    }

    //-------------------------------------------------------------
    //  Homepage: show a list of the orders on file
    //-------------------------------------------------------------

    function index()
    {
	// Build a list of orders
        $orders = $this->order->getOrders();
	
	// Present the list to choose from
	$this->data['pagebody'] = 'homepage';
        $this->data['orders'] = $orders;
	$this->render();
    }
    
    //-------------------------------------------------------------
    //  Show the "receipt" for a specific order
    //-------------------------------------------------------------

    function order($filename)
    {
	// Build a receipt for the chosen order
	$order = $this->order->getSingleOrder($filename);
        
	// Present the list to choose from
	$this->data['pagebody'] = 'justone';
        
        $this->data['customer']     = $order['customer'];
        $this->data['burgers']      = $order['burgers'];
        $this->data['ordertotal']   = $order['ordertotal'];
        $this->data['ordernum']     = $filename;
        $this->data['type']         = $order['type'];
        $this->data['special']      = $order['special'];
        
	$this->render();
    }
    

}
