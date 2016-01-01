<?php

namespace Faker\Provider\en_LK;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}}',
    );

    protected static $firstNameMale = array(
        'Kasun', 'Tharindu', 'Supun', 'Lahiru', 'Pasindu', 'Isuru', 'Gayan', 'Thilina', 'Sandun', 'Chathura', 'Tharaka', 'Sanjeewa', 'Amila', 
        'Ishara', 'Buddhika', 'Shehan', 'Ravindu', 'Sampath', 'Sahan', 'Hasitha', 'Ranga', 'Shan', 'Aruna', 'Kevin', 'Ashan', 'Channa', 'Ruwan', 
        'Nuwan', 'Sachintha', 'Induwara', 'Roshan', 'Duminda', 'Dinesh', 'Hashan', 'Rajitha', 'Akila', 'Gihan', 'Pradeep', 'Mahesh', 'Chathuranga', 
        'Amal', 'Asanka', 'Janitha', 'Tharanga', 'Chanaka', 'Sachin', 'Chamath', 'Sameera', 'Thushara', 'Sumudu', 'Chinthaka', 'Lakmal', 'Darshana', 
        'Kavindu', 'Lakshan', 'Sithija', 'Chamara', 'Manoj', 'Harsha', 'Sasindu', 'Danushka', 'Damian', 'Imran', 'Sanjaya', 'Indika', 'Janith', 'Heshan', 
        'Shashin', 'Rahmath', 'Asiri', 'Dilshan', 'Ashen', 'Madushan', 'Yohan', 'Malith', 'Deshan', 'Dulaj', 'Sajith', 'Hasith', 'Dilan', 'Nishan', 
        'Chanuka', 'Ravi', 'Shanaka', 'Anjana', 'Kusal', 'Samith', 'Ananda', 'Shanuka', 'Sachith', 'Vimukthi', 'Sandil', 'Ayesh', 'Yasas', 'Dhammika', 
        'Dhanushka', 'Lakshitha', 'Hirusha', 'Rehan', 'Maduranga'
    );

    protected static $firstNameFemale = array(
        'Tharushi', 'Hiruni', 'Sachini', 'Bhagya', 'Samadhi', 'Amanda', 'Fathima', 'Rashmi', 'Thilini', 'Nethmi', 'Upeksha', 'Janani', 'Sara', 
        'Chathu', 'Nipuni', 'Kalpani', 'Ama', 'Piyumi', 'Saumya', 'Dewmini', 'Gayani', 'Dinithi', 'Shehara', 'Hansi', 'Senuri', 'Sanduni', 
        'Harshani', 'Hashani', 'Sandali', 'Sachi', 'Yashodha', 'Nayani', 'Isuri', 'Jayani', 'Iresha', 'Piumi', 'Vishaka', 'Anjalee', 'Alexcia', 
        'Hansani', 'Aysha', 'Geethma', 'Hansika', 'Priya', 'Dinusha', 'Shashini', 'Nathasha', 'Amaya', 'Shehani', 'Kaushi', 'Shani', 'Kasuni', 
        'Vinodi', 'Nimesha', 'Kalani', 'Navodya', 'Navoda', 'Sithara', 'Sarah', 'Himasha', 'Kaveesha', 'Chathuri', 'Nadeesha', 'Savindi', 'Nishi', 
        'Shakya', 'Visuri', 'Anuradha', 'Tharindi', 'Shalini', 'Supuni', 'Wathsala', 'Natasha', 'Chathuni', 'Vishmi', 'Madu', 'Sewwandi', 'Kavindi', 
        'Sandani', 'Anu', 'Dhanu', 'Thakshila', 'Nimasha', 'Roshani', 'Shashi', 'Imesha', 'Sahani', 'Dilini', 'Noofa', 'Heshani', 'Chami', 'Tharushika', 
        'Sandhy', 'Nethmini', 'Hiba', 'Chaya', 'Mandula', 'Dasuni', 'Anjali', 'Sabeeha'
    );

    protected static $lastName = array(
        'Amarasekere', 'Senanayake', 'Goonetilleke', 'Kotelawala', 'Bandaranaike', 'Dahanayake', 'Jayewardene', 'Kumaratunga', 'Rajapaksa', 
        'Wickremasinghe', 'Wickremanayake', 'Jayaratne', 'Wijeyeratne', 'Gunawardena', 'Dissanayake', 'Athulathmudali', 'Jayasuriya', 
        'Bogollagama', 'Dissanayaka', 'Wijewardene', 'Gopallawa', 'Keppetipola ', 'Kobbekaduwa', 'Madugalle', 'Meedeniya ', 'Nugawela', 
        'Bandara', 'Ratwatte', 'Dias ', 'Udugama', 'Hulugalle', 'Silva', 'Jayathilaka', 'Jayatwardana', 'Jayasekara'
    );
}
