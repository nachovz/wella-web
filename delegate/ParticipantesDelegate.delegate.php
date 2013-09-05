<?php

class ParticipantesDelegate
{

	function loadParticipantes($validator)
	{
		$xml = simplexml_load_file('participantes.xml');		
		return $xml;
	}
	
	
}

?>