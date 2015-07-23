<?php
/**
 * Mandrill Component
 *
 * @author        Ghian Del Mundo <ghian@quicklinkt.com>
 * @package       Controller.Component
 * @version       1.0
 * @description   This plugin will implement all Mandrill API calls defined in https://mandrillapp.com/api/1.0/
 *                Mandrill API documentation is available at https://mandrillapp.com/api/docs/
 * 
 */

App::uses('Component', 'Controller');
App::uses('HttpSocket', 'Network/Http');

class MandrillComponent extends Component {
    
    /**
    * Mandrill API Key
    *
    * @var string
    */
    private $api_key;
   
   /**
    * The Connection to the mandrill API server
    *
    * @var HttpSocket
    */
    private $connection;
    
   /**
    * Arguments
    *
    * @var string
    */
    private $arguments;
    
    /**
    * Base API URI
    *
    * @var string
    */
    protected $base_uri = 'https://mandrillapp.com/api/1.0/';
    
    /**
    * Request
    *
    * @var array
    */
    protected $request = array(
        'header' => array(
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'User-Agent' => 'CakePHP/MandrillComponent-1.0',
        )
    );

    /**
    * Initialize callback
    *
    * @param Controller $controller
    * @param array $settings
    * @return void
    */
    public function initialize(Controller $controller, $settings = array()) {
        
        $this->api_key = Configure::read('Mandrill.api_key');

    }
    
    /**
    * Mandrill Smart Call
    *
    * @param string name
    * @param array arguments
    * @return json data
    */
    public function __call($name, $arguments) {

        $this->arguments = json_encode(
                                array_merge(array(
                                    'key' => $this->api_key), 
                                    (!empty($arguments) ? $arguments[0] : $arguments) 
                                )
                            );
        
        // parse json uri
        $uri = $this->base_uri.str_replace('_', '/', Inflector::underscore(str_replace('_', '-', $name))).'.json';
        $this->connection = new HttpSocket();
        $data = json_decode($this->connection->post($uri, $this->arguments, $this->request), true);
        
        return $data;
        
    }
}

