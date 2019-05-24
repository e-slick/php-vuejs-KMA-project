<?php include 'User.php';


class Blogger extends User
{
    public $previousEntries = array();
    public $blogText;


    public function addEntry($key, $entry){
        $this->previousEntries[$key] = $entry;
    }

    public function removeEntry($entryKey){
        $tempArray = array();
        foreach($this->previousEntries as $key => $value){
            if($entryKey == $key){
                continue;
            }
            else{
                $tempArray[$key] = $value;
            }
        }
        $this->previousEntries = $tempArray;
    }

    public function displayEntries(){
        echo "<strong>Keys</strong>"," <strong>Entries</strong>", "<br>";
        foreach($this->previousEntries as $key => $value){
            echo "<br>",$key;
            echo " ",$value;
        }
    }

    public function displayPrevEntry($entryKey){
        foreach($this->previousEntries as $key => $value){
            if($entryKey == $key) {
                echo "<strong>Entry found!</strong><br>";
                echo $value;
            }
        }
    }


}