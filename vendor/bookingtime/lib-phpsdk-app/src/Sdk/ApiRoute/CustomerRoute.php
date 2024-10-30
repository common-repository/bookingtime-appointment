<?php

namespace bookingtime\phpsdkapp\Sdk\ApiRoute;
use bookingtime\phpsdkapp\Sdk\Route;
use bookingtime\phpsdkapp\Lib\BasicLib;



/**
 * handle specific API requests
 *
 * @author <bookingtime GmbH>
 */
class CustomerRoute extends Route {



	/**
	 * add an entity
	 *
	 * @param	array		$urlParameter: list of url paramerts like ids
	 * @param	array		$requestContent: send this content to api
	 * @param	integer	$expectedResponseCode: expected http response code for http-client
	 * @return	array		reponse content
	 */
	public function add(array $urlParameter,array $requestContent,$expectedResponseCode) {
		//check submitted parameters
		BasicLib::checkType('integer',$expectedResponseCode,__METHOD__.'(): expectedResponseCode');

		//make request to API
		$this->checkUrlParameters(['organizationId'],$urlParameter);
		$response=$this->httpClient->request('POST','/organization/'.$urlParameter['organizationId'].'/customer/add',$requestContent,$expectedResponseCode);
		#die(BasicLib::debug($response));
		return $response['content'];
	}



	/**
	 * show an entity
	 *
	 * @param	array		$urlParameter: list of url paramerts like ids
	 * @param	integer	$expectedResponseCode: expected http response code for http-client
	 * @return	array		reponse content
	 */
	public function show(array $urlParameter,$expectedResponseCode) {
		//check submitted parameters
		BasicLib::checkType('integer',$expectedResponseCode,__METHOD__.'(): expectedResponseCode');

		//make request to API
		$this->checkUrlParameters(['organizationId','customerId'],$urlParameter);
		$response=$this->httpClient->request('GET','/organization/'.$urlParameter['organizationId'].'/customer/'.$urlParameter['customerId'].'/show',[],$expectedResponseCode);
		#die(BasicLib::debug($response));
		return $response['content'];
	}



	/**
	 * identify an entity
	 *
	 * @param	array		$urlParameter: list of url paramerts like ids
	 * @param	integer	$expectedResponseCode: expected http response code for http-client
	 * @return	array		reponse content
	 */
	public function identify(array $urlParameter,$expectedResponseCode) {
		//check submitted parameters
		BasicLib::checkType('integer',$expectedResponseCode,__METHOD__.'(): expectedResponseCode');

		//make request to API
		$this->checkUrlParameters(['organizationId','customId'],$urlParameter);
		$response=$this->httpClient->request('GET','/organization/'.$urlParameter['organizationId'].'/customer/'.$urlParameter['customId'].'/identify',[],$expectedResponseCode);
		#die(BasicLib::debug($response));
		return $response['content'];
	}



	/**
	 * index
	 *
	 * @param	array		$urlParameter: list of url paramerts like ids
	 * @param	boolean	$all: true - shows all in a short version | false - shows just a few in a detailed version
	 * @param	integer	$expectedResponseCode: expected http response code for http-client
	 * @return	array		reponse content
	 */
	public function index(array $urlParameter,$all,$expectedResponseCode) {
		//check submitted parameters
		BasicLib::checkType('boolean',$all,__METHOD__.'(): all');
		BasicLib::checkType('integer',$expectedResponseCode,__METHOD__.'(): expectedResponseCode');

		//make request to API
		$this->checkUrlParameters(['organizationId','page'],$urlParameter);
		$response=$this->httpClient->request('GET','/organization/'.$urlParameter['organizationId'].'/customer/'.($all?'indexAll':'index').'/'.($urlParameter['page']?$urlParameter['page']:'1'),[],$expectedResponseCode);
		#die(BasicLib::debug($response));
		return $response['content'];
	}



	/**
	 * filter entities
	 *
	 * @param	array		$urlParameter: list of url paramerts like ids
	 * @param	boolean	$all: true - shows all in a short version | false - shows just a few in a detailed version
	 * @param	integer	$expectedResponseCode: expected http response code for http-client
	 * @return	array		reponse content
	 */
	public function filter(array $urlParameter,$all,$expectedResponseCode) {
		//check submitted parameters
		BasicLib::checkType('boolean',$all,__METHOD__.'(): all');
		BasicLib::checkType('integer',$expectedResponseCode,__METHOD__.'(): expectedResponseCode');

		//make request to API
		$this->checkUrlParameters(['organizationId','searchQuery','page'],$urlParameter);
		$response=$this->httpClient->request('GET','/organization/'.$urlParameter['organizationId'].'/customer/'.($all?'filterAll':'filter').'/'.($urlParameter['page']?$urlParameter['page']:'1').'?searchQuery='.$urlParameter['searchQuery'],[],$expectedResponseCode);
		#die(BasicLib::debug($response));
		return $response['content'];
	}



	/**
	 * list entities
	 *
	 * @param	array		$urlParameter: list of url paramerts like ids
	 * @param	boolean	$all: true - shows all in a short version | false - shows just a few in a detailed version
	 * @param	integer	$expectedResponseCode: expected http response code for http-client
	 * @return	array		reponse content
	 */
	public function list(array $urlParameter,$all,$expectedResponseCode) {
		//check submitted parameters
		BasicLib::checkType('boolean',$all,__METHOD__.'(): all');
		BasicLib::checkType('integer',$expectedResponseCode,__METHOD__.'(): expectedResponseCode');

		//make request to API
		$this->checkUrlParameters(['organizationId'],$urlParameter);
		$response=$this->httpClient->request('GET','/organization/'.$urlParameter['organizationId'].'/customer/'.($all?'listAll':'list'),[],$expectedResponseCode);
		#die(BasicLib::debug($response));
		return $response['content'];
	}



	/**
	 * edit an entity
	 *
	 * @param	array		$urlParameter: list of url paramerts like ids
	 * @param	array		$requestContent: send this content to api
	 * @param	integer	$expectedResponseCode: expected http response code for http-client
	 * @return	array		reponse content
	 */
	public function edit(array $urlParameter,array $requestContent,$expectedResponseCode) {
		//check submitted parameters
		BasicLib::checkType('integer',$expectedResponseCode,__METHOD__.'(): expectedResponseCode');

		//make request to API
		$this->checkUrlParameters(['organizationId','customerId'],$urlParameter);
		$response=$this->httpClient->request('PUT','/organization/'.$urlParameter['organizationId'].'/customer/'.$urlParameter['customerId'].'/edit',$requestContent,$expectedResponseCode);
		#die(BasicLib::debug($response));
		return $response['content'];
	}



	/**
	 * delete an entity
	 *
	 * @param	array		$urlParameter: list of url paramerts like ids
	 * @param	integer	$expectedResponseCode: expected http response code for http-client
	 * @return	array		reponse content
	 */
	public function delete(array $urlParameter,$expectedResponseCode) {
		//check submitted parameters
		BasicLib::checkType('integer',$expectedResponseCode,__METHOD__.'(): expectedResponseCode');

		//make request to API
		$this->checkUrlParameters(['organizationId','customerId'],$urlParameter);
		$response=$this->httpClient->request('DELETE','/organization/'.$urlParameter['organizationId'].'/customer/'.$urlParameter['customerId'].'/delete',[],$expectedResponseCode);
		#die(BasicLib::debug($response));
		return $response['content'];
	}



	/**
	 * customEntity index
	 *
	 * @param	array		$urlParameter: list of url paramerts like ids
	 * @param	integer	$expectedResponseCode: expected http response code for http-client
	 * @return	array		reponse content
	 */
	public function customEntityIndex(array $urlParameter,$expectedResponseCode) {
		//check submitted parameters
		BasicLib::checkType('integer',$expectedResponseCode,__METHOD__.'(): expectedResponseCode');

		//make request to API
		$this->checkUrlParameters(['organizationId','customEntityId','customEntityType','page'],$urlParameter);
		$response=$this->httpClient->request('GET','/organization/'.$urlParameter['organizationId'].'/customEntity/'.$urlParameter['customEntityType'].'/'.$urlParameter['customEntityId'].'/customer/index/'.($urlParameter['page']?$urlParameter['page']:'1'),[],$expectedResponseCode);
		#die(BasicLib::debug($response));
		return $response['content'];
	}



	/**
	 * customEntity filter
	 *
	 * @param	array		$urlParameter: list of url paramerts like ids
	 * @param	integer	$expectedResponseCode: expected http response code for http-client
	 * @return	array		reponse content
	 */
	public function customEntityFilter(array $urlParameter,$expectedResponseCode) {
		//check submitted parameters
		BasicLib::checkType('integer',$expectedResponseCode,__METHOD__.'(): expectedResponseCode');

		//make request to API
		$this->checkUrlParameters(['organizationId','customEntityId','customEntityType','page'],$urlParameter);
		$response=$this->httpClient->request('GET','/organization/'.$urlParameter['organizationId'].'/customEntity/'.$urlParameter['customEntityType'].'/'.$urlParameter['customEntityId'].'/customer/filter/'.($urlParameter['page']?$urlParameter['page']:'1').'?searchQuery='.$urlParameter['searchQuery'],[],$expectedResponseCode);
		#die(BasicLib::debug($response));
		return $response['content'];
	}



	/**
	 * customEntity list
	 *
	 * @param	array		$urlParameter: list of url paramerts like ids
	 * @param	integer	$expectedResponseCode: expected http response code for http-client
	 * @return	array		reponse content
	 */
	public function customEntityList(array $urlParameter,$expectedResponseCode) {
		//check submitted parameters
		BasicLib::checkType('integer',$expectedResponseCode,__METHOD__.'(): expectedResponseCode');

		//make request to API
		$this->checkUrlParameters(['organizationId','customEntityId','customEntityType'],$urlParameter);
		$response=$this->httpClient->request('GET','/organization/'.$urlParameter['organizationId'].'/customEntity/'.$urlParameter['customEntityType'].'/'.$urlParameter['customEntityId'].'/customer/list',[],$expectedResponseCode);
		#die(BasicLib::debug($response));
		return $response['content'];
	}


	/**
	 * customerGroupLink
	 *
	 * @param	array		$urlParameter: list of url paramerts like ids
	 * @param	boolean	$unlink: true - unlink | false - link
	 * @param	integer	$expectedResponseCode: expected http response code for http-client
	 * @return	array		reponse content
	 */
	public function customerGroupLink(array $urlParameter,$unlink,$expectedResponseCode) {
		//check submitted parameters
		BasicLib::checkType('boolean',$unlink,__METHOD__.'(): unlink');
		BasicLib::checkType('integer',$expectedResponseCode,__METHOD__.'(): expectedResponseCode');

		//make request to API
		$this->checkUrlParameters(['organizationId','customerId','customerGroupId'],$urlParameter);
		$response=$this->httpClient->request(($unlink?'UNLINK':'LINK'),'/organization/'.$urlParameter['organizationId'].'/customer/'.$urlParameter['customerId'].'/customerGroup/'.$urlParameter['customerGroupId'].'/'.($unlink?'unlink':'link'),[],$expectedResponseCode);
		#die(BasicLib::debug($response));
		return $response['content'];
	}



	/**
	 * link/unlink entity
	 *
	 * @param	array		$urlParameter: list of url paramerts like ids
	 * @param	boolean	$unlink: true - unlink | false - link
	 * @param	integer	$expectedResponseCode: expected http response code for http-client
	 * @return	array		reponse content
	 */
	public function fileLink(array $urlParameter,$unlink,$expectedResponseCode) {
		//check submitted parameters
		BasicLib::checkType('boolean',$unlink,__METHOD__.'(): unlink');
		BasicLib::checkType('integer',$expectedResponseCode,__METHOD__.'(): expectedResponseCode');

		//make request to API
		$this->checkUrlParameters(['organizationId','customerId'],$urlParameter);
		$response=$this->httpClient->request($unlink?'UNLINK':'LINK','/organization/'.$urlParameter['organizationId'].'/customer/'.$urlParameter['customerId'].'/file/'.$urlParameter['fileId'].'/'.($unlink?'unlink':'link'),[],$expectedResponseCode);
		#die(BasicLib::debug($response));
		return $response['content'];
	}
}
