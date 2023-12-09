<?php
        namespace App\Enums;
        enum Status:string
        {
            case available='In Stock';
            case  notavailable='Not Available';
            case comming ='Comming Soon';
        }