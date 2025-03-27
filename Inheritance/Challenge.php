<?php

class MyProfile
{
    public $fullName;
    public $studentId;
    public $track;
    public $nameSchool;

    public function __construct($fullName, $studentId, $track, $nameSchool) 
    {
        $this->fullName = $fullName;
        $this->studentId = $studentId;
        $this->track = $track;
        $this->nameSchool = $nameSchool;
    }

    public function displayMyProfile()
    {
        return "{$this->fullName} <br> {$this->studentId} <br> {$this->track} <br> {$this->nameSchool}";
    }
}
class OtherInformation extends MyProfile
{

    public $email;
    public $address;
    public $phoneNumber;
    public $birthDate;

    public function __construct($fullName, $studentId, $track, $nameSchool, $email, $address, $phoneNumber, $birthDate)
    {
        parent::__construct($fullName, $studentId, $track, $nameSchool);
        $this->email = $email;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->birthDate = $birthDate;
    }

    public function getOtherInformation()
    {
        return "<br> {$this->email} <br> {$this->address} <br> {$this->phoneNumber} <br> {$this->birthDate}";
    }
}


$myProfileObject = new OtherInformation(
    fullName: "STO.TOMAS, CARLJOHN",
    studentId: "02000411496",
    track: "BS INFORMATION TECHNOLOGY",
    nameSchool: "STI COLLEGE CALOOCAN",
    email: " stotomas.411496@caloocan.sti.edu.ph",
    address: "BLK5 LOT 1 BAGONG SIBOL ST BRGY 28 CALOOCAN",
    phoneNumber: "09933404417",
    birthDate: "JUNE 28, 2006"
);
