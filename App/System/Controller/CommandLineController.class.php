<?php
    /**
     * XPHP Project
     * By xtl
     * 
     */
    
    namespace Controller\System;
    
    use X\Controller;
    
    class CommandLineController extends Controller implements \X\Interfaces\Bootable {

        public function bootup(){
            $this->app->handler->cli->addArt($this->app->config['SysDir'] . $this->app->config['Path']['Template'] . '/default/System/cliart');
        }
        
        public function serve($req){

            $p = rand(20000, 30000);

            $this->app->handler->cli
                ->out("<bold>XPHP Development Server</bold>")
                ->inline("Listening On: ")
                ->red(isset($req->get()->data->param->p) ? $req->get()->data->param->p : $p)
                ->out("Press <bold><green>Ctrl + C</green></bold> to quit.\n");
            echo shell_exec("php -S 127.0.0.1:" . (isset($req->get()->data->param->p) ? $req->get()->data->param->p : $p ) . " ./Public/index.php");

            return $this->response("", [], "Failed to startup server.");

        }

    }
    