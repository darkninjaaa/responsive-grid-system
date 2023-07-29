<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Pannels extends BaseController
{
    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

		// Preload any models, libraries, etc, here.
		// E.g.: $this->session = \Config\Services::session();
	}	

    public function index()
    {
		$this->view();
	}
	
    public function view()
    {
		$data = Array(
			'head_data' => Array(
				'title' => "pannels",
				'TotalSegments' => $this->TotalSegments,
				'seg_controller' => $this->seg_controller,
				'seg_func' => $this->seg_func,
				'seg_table' => $this->seg_table,
				'seg_index' => $this->seg_index,
			),
			'view_data' => Array(
			),
			'tail_data' => Array(
				'TotalSegments' => $this->TotalSegments,
				'seg_controller' => $this->seg_controller,
				'seg_func' => $this->seg_func,
				'seg_table' => $this->seg_table,
				'seg_index' => $this->seg_index,
				'handy_pannels' => 'handy_pannels',
			)
		);

		echo view('main_head', $data['head_data']);
		echo view('pannels_view', $data['view_data']);
		echo view('main_tail', $data['tail_data']);
    }

}

?>
