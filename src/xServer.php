<?php

namespace gjhernandez1234\xserver;

/**
 * Clase que permite conectarse a la REST de ALEPH
 * @author German de Jesus Hernandez Garcia
 * @date 11/09/2018
 * @copyright SIBE
 *
 */

use GuzzleHttp\Client;

class xServer
{
	private $config;
	private $HOST;
	private $PORT;
	private $BASE;

	/**
	 * Permite conectarse a un servidor X-Server
	 * @param array $config Arreglo con la configuracion de ip y puerto del servidor
	 * @param null $config
	 */
	function __construct(array $config=null)
	{
		$this->config = $config;

		if(!isset($config['HOST']) or !isset($config['PORT']) or !isset($config['BASE']))
		{
			throw new \Exception("Error en la configuración");
	    }
	    
		$this->HOST = $config['HOST'];
		$this->PORT = $config['PORT'];
		$this->BASE = $config['BASE'];
	}
	
	/**
	 * Metodo que devuelve el XML de un registro
	 * @param string $NUMERO_SISTEMA numero de sistema de ALEPH
	 *
	 */

	function getRegistroXML($NUMERO_SISTEMA)
	{
		try{
			if(isset($NUMERO_SISTEMA) and is_numeric($NUMERO_SISTEMA))
			{
				$client = new Client();
				$req = "http://{$this->HOST}:{$this->PORT}/X?op=find-doc&doc_number={$NUMERO_SISTEMA}&base={$this->BASE}";
				$res = $client->request("GET", $req);
				
				$xml = new \SimpleXMLElement($res->getBody()->getContents());
				if(isset($xml->error))
				{
                    return $xml->error;
                }
				return $xml->asXML();
			}   
        }catch (\Exception $e){
			throw new \Exception("Error [6543]: error al retornar el xml {$e}");
        }
	}
}


