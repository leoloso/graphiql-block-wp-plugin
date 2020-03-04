<?php
namespace Leoloso\GraphiQLBlockWPPlugin;

class Plugin {

    public function init(): void
    {
        // Initialize the GraphiQL Block
		$graphiQLPath = 'vendor/leoloso/graphiql-wp-block';
		$graphiQLURLPath = \plugins_url($graphiQLPath, __FILE__);
		(new \Leoloso\GraphiQLWPBlock\Block($graphiQLURLPath))->init();
    }
}
