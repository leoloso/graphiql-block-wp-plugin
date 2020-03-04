<?php
namespace Leoloso\GraphiQLBlockWPPlugin;

class Plugin {

    public function init(): void
    {
        // Initialize the GraphiQL Block
		(new \Leoloso\GraphiQLWPBlock\Block())->init();
    }
}
