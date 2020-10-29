<?php

namespace DAO;

use Models\Cinema as Cinema;

class cinemaDAO
{
    private $cinemaList=array();

    public function getAll()
    {
        $this->retrieveData();
        return $this->cinemaList;
    }

    public function Add(Cinema $newCinema)
    {

        $this->retrieveData();
        $newCinema->setIdCinema(count($this->cinemaList)+1);
        array_push($this->cinemaList,$newCinema);
        $this->saveData();
    }

    public function searchCinema($idCinema)
    {
        $cinemaList= $this->getAll();
        foreach($cinemaList as $cinema)
        {
            if($cinema->getIdCinema()==$idCinema)
            {
                $editCinema = new Cinema($cinema->getIdCinema(),$cinema->getName(),$cinema->getAdress(),$cinema->getRoom(),$cinema->getPrice());
                return $editCinema;
            }
        }
        
    }

    public function updateCinema($id,$name,$adress,$room,$price)
    {
        $cinemaList= $this->getAll();   

        
        foreach($cinemaList as $cinema)
        {
            if($cinema->getIdCinema()==$id)
            {
                
                $cinema->setName($name);
                $cinema->setAdress($adress);
                $cinema->setRoom($room);
                $cinema->setPrice($price);

               
            }


        }

        $this->saveData();


    }

    public function delete($id)
    {
        $this->retrieveData();
        $newList=array();
        foreach($this->cinemaList as $cinema)
        {
            if($cinema->getIdCinema()!=$id)
            {
                array_push($newList,$cinema);
            }
            $this->cinemaList=$newList;
            $this->saveData();
        }
    }



    public function retrieveData()
    {
        $this->cinemaList=array();

        $jsonContent=file_get_contents(dirname(__DIR__).'/Data/cinemas.json');

        $arrayToDecode= ($jsonContent) ? json_decode($jsonContent,true) : array();

        foreach ($arrayToDecode as $valueArray)
        {
            $cinema = new Cinema($valueArray['idCinema'],$valueArray['adress'],$valueArray['name'],$valueArray['room'],$valueArray['price']);

            array_push($this->cinemaList,$cinema);
        }
    }

    public function saveData()
    {
            $arrayToEncode=array();

            foreach ($this->cinemaList as $cinema)
            {
                $valueArray['idCinema']=$cinema->getIdCinema();
                $valueArray['adress']=$cinema->getAdress();
                $valueArray['name']=$cinema->getName();
                $valueArray['room']=$cinema->getRoom();
                $valueArray['price']=$cinema->getPrice();

                array_push($arrayToEncode,$valueArray);
                
            }

            $jsonContent = json_encode($arrayToEncode,JSON_PRETTY_PRINT);
            file_put_contents(dirname(__DIR__).'/Data/cinemas.json',$jsonContent);
    }

}

?>