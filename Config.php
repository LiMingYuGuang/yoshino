<?php
    /**
     * XPHP Configure File
     * 
     * You can add your providers here.
     * 
     */
    return function ($App) {

        $App->boot('\X\Middleware\Filter');

        $App->container->get("Core.View")->addHelper("file", function ($file){
            return "/Static/".$file;
        });

        $App->container->get("Core.View")->addHelper("trans", function ($name){
            static $language = "zh_CN";
            static $dir = "";
            static $index;
            static $page;
            static $sidebar;
            static $auth;
            static $user;
            static $parts = ["page", "index", "sidebar", "auth", "user"];
            static $init = true;

            if ($init) {
                $dir = SysDir . "Var/Lang/" . $language . "/";
                foreach ($parts as $part) {
                    $$part = json_decode(file_get_contents($dir . $part . ".json"));
                }
                $init = false;
                unset($part);
            }

            $block = explode(".", $name);
            $part = $block[0];
            $expression = $block[1];

            return $$part->$expression;
        });

        $App->container->get("Core.View")->addHelper("path", function ($name){
            static $router = [
                "index" => "/",
                "login" => "/auth/login",
                "reg"   => "/auth/reg",
                "sign-out" => "/auth/logout",
                "user"  => "/user",
                "user.player" => "/user/player",
                "user.skin" => "/user/skin",
                "github"=> ""
            ];

            return $router[$name];
        });

        $App->container->get("Core.View")->addHelper("data", function ($name){
            return (isset($GLOBALS["yoshino"][$name])) ? $GLOBALS["yoshino"][$name] : "";
        });

    };