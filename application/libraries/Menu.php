<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Menu {
	var $ci;
	function __construct()
	{
		$this->ci =& get_instance();
	}

	function display_child($parent, $id)
	{
	  	$sql = "SELECT 
	          a.id, 
	          a.nama, 
	          a.url, 
	          a.icon, 
	          DERIV1.JML 
	        FROM 
	          menu a 
	        LEFT OUTER JOIN 
	        (
	          SELECT 
	            parent, 
	            COUNT(*) JML 
	          FROM 
	            menu 
	          GROUP BY 
	            parent
	        ) 
	        DERIV1 ON 
	        a.id = DERIV1.parent 
	        WHERE 
	        a.parent = $parent and a.status = 1 order by urutan";
		$data = $this->ci->db->query($sql);
		$html = '';

	  	foreach ($data->result() as $key => $value) {

		    if ($value->JML > 0){

		      	$html .= '
			        <li class="dropdown">
						<a href="'.base_url().$value->url.'" class="dropdown-toggle" data-toggle="dropdown">
							<i class="'.$value->icon.'"></i>
							<span>'.$value->nama.'</span> 
						</a>
			            <ul class="dropdown-menu">';
		      	$html .= $this->display_child($value->id, $id);
	  			$html .= "</ul></li>";

		    }else if($value->JML == ""){

		      $html .= '
		      	<li>
		        	<a href="'.base_url().$value->url.'">
		        		<i class="'.$value->icon.'"></i>
		        		<span>'. $value->nama .'</span> 
		        	</a> 
		        </li>
		      ';

		    }
	  	}
	  // $html .= "</ul></li>";

	  	return $html;
	}
}