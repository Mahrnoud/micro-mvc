<?php

class App
{

    public function __construct()
    {
        /**
         * if we have Params
         * Then...
         */
        if(isset($_GET['url'])){

            /**
             *
             * Get The Params
             * Right Trim /
             * Then Explode By /
             */
            $url = $_GET['url'];
            $url = rtrim($url, '/');

            $ex = explode('/', $url);

            /**
             * 1st Param is the Folder Name
             */
            $folder = ucwords($ex[0]);

            /**
             *
             * Class Name Like: UserController
             */
            $class = $folder.'Controller';

            /**
             *
             * Get File Name
             * Then Check If Exists Or Not
             */
            $file = 'Controllers/'.$folder.'/'.$class.'.php';

            if(file_exists($file)){

                /**
                 *
                 * Require Class
                 */
                require "$file";

                /**
                 * Create Class
                 */
                $namespace = "Controllers\\".$folder."\\".$class;
                $controller = new $namespace;

                /**
                 *
                 * if 2nd Param exists
                 * Trait it as Method
                 */
                if(isset($ex[1])){

                    /**
                     *
                     * Get 2nd Param
                     * Check if Method Exists In Class Or Not
                     */
                    $method = $ex[1];

                    if(method_exists($controller, $method)){

                        /**
                         *
                         * if 3rd Param is Exist
                         * Then Trait it Like Method(Parameter)
                         */
                        if(isset($ex[2])){

                            $controller->$method($ex[2]);
                        }else{

                            $controller->$method();
                        }

                    }else{

                        /**
                         *
                         * if Method Doesn't Exist Show Error!
                         */
                        die('Function Not Exist!');
                    }
                }else{

                    /**
                     *
                     * if 2nd Param is Empty
                     * Show index Method
                     */
                    $controller->index();
                }

            }else{

                /**
                 *
                 * if File doesn't Exist
                 * Show Error!
                 */
                die('File Not Exist!');
            }


        }else{

            /**
             *
             * if There isn't Params
             * Then..
             * Show Homepage
             */
            echo 'Homepage!';
        }
    }
}