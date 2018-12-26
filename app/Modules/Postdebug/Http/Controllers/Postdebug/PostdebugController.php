<?php
namespace App\Modules\Postdebug\Http\Controllers\Postdebug;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PostdebugController extends Controller {
	public function __construct(){

	}

	public function index(){
		return view('postdebug::postdebug.index');
	}

	public function debug(Request $request){
		$params= $request->all();
		$url = $params['url'];
		$reqParam = $params['request'];
		self::guzzle_curl($url,json_decode($reqParam),'post');
		return $request->all();
	}

	public function guzzle_curl($url,$params,$method = 'get'){
		$client = new Client();
        $options = json_encode($params, JSON_UNESCAPED_UNICODE);        
        $data = [            
            'body' => $options,            
            'headers' => [
                'content-type' => 'application/json'
            ]
        ];
        if($method == 'post'){
        	$response = $client->post($url, $data);
        }else {
        	$response = $client->get($url,$data);
        }           
        $callback = json_decode($response->getBody()->getContents());
        return $this->output_json('200', '返回结果', $callback);
	}

}