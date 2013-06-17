<?php if ( ! defined('BASEPATH')) {exit('No direct script access allowed');
}

class MY_Controller extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

		// If we're in a development environment, enable the profile
		$this->output->enable_profiler(ENVIRONMENT === 'development');
    }
}
