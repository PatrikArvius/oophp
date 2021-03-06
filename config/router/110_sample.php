<?php
/**
 * Routes for the game Dice101
 */
return [
    // Path where to mount the routes, is added to each route path.
    //"mount" => "sample",

    // All routes in order
    "routes" => [
        [
            "info" => "Sample controller app style, gonna be dice.",
            "mount" => "app",
            "handler" => "\Anax\Controller\SampleAppController",
        ],
        /* [
            "info" => "Sample controller di style.",
            "mount" => "di",
            "handler" => "\Anax\Controller\SampleController",
        ],
        [
            "info" => "Sample controller di style with json responses.",
            "mount" => "json",
            "handler" => "\Anax\Controller\SampleJsonController",
        ], */
    ]
];
