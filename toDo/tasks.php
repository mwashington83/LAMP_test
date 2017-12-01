<?php

    class Tasks {
        private $id;
        private $title;
        private $isComplete;
        // private $date_created;
        // private $date_completed;

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

        public function getIsComplete() {
            return $this->isComplete;
            }

        public function setIsComplete($isComplete) {
            $this->isComplete = $isComplete;
            }

        // public function setDateCreated($date_created) {
        //     $this->date_created = $date_created;
        //     }
        // public function getDateCreated() {
        //     return $this->date_created;
        //     }
            
        // public function setDateCompleted($date_completed) {
        //     $this->date_completed = $date_completed;
        //     }
        // public function getDateCompleted() {
        //     return $this->date_completed;
        //     }
    
        // public function prettyPrint()
        // {
        //     return "$this->first_name $this->last_name";
        // }
    }


?>