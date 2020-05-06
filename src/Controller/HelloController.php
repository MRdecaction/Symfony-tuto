<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;


    class HelloController {

        public function hello(){
            return new Response("Hello wrold !!!");

        }

        /**
         * @route("quit")
         */
        public function bye() {
            $message = "<h1>Merci de votre visite<h1>";
            return new Response($message);
        }


    }