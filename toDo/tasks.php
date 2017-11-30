<?php
    class Tasks {
        private $id;
        private $title;
        private $isComplete;

        // public function __construct()
        // {
        //     $this->title = new Title();
        // }

        public function getId()
        {
            return $this->id;
        }
    
        public function setId($id)
        {
            $this->id = $id;
        }

        public function getTitle() {
            return $this->title;
            }
    
        public function setTitle($title) {
            $this->title = $title;
        }

        public function getisComplete() {
            return $this->isComplete;
            }

            public function setIsComplete($isComplete) {
                $this->isComplete = $isComplete;
            }
    
        // public function prettyPrint()
        // {
        //     return "$this->first_name $this->last_name";
        // }
    }


?>