<?php
namespace Craft;

class CraftButtonsPlugin extends BasePlugin
{

	public function getName()
	{
		 return Craft::t('Craft Buttons');
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getDeveloper()
	{
		return 'Ayup Digital';
	}

	public function getDeveloperUrl()
	{
		return 'https://ayup.agency';
	}

}