	<?php
	
	/**
	* Get the path to a versioned Elixir file.
	*
	* @param  string  $file
	* @return string
	*/
	function elixir($file)
	{
		static $manifest = null;

		if (is_null($manifest))
		{
			$manifest = json_decode(file_get_contents(__DIR__ . '/public/build/rev-manifest.json'), true);
		}

		if (isset($manifest[$file]))
		{
			return '/build/'.$manifest[$file];
		}

		throw new InvalidArgumentException("File {$file} not defined in asset manifest.");
	}