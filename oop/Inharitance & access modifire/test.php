<?php
    class Test extends Something{
        public function js(){
           echo 'js';
        }
        protected function laravel(){
            echo 'Laravel';
        }
        private function bootstrap(){
            echo 'Bootstrap';
        }
        public function check(){
            $this->html();
        }
    }
?>