<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Governorate;
use App\Entity\City;

class LocationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {


        // Ariana
        $ariana = array("Ariana Medina", "Ettadhamen", "Kalaat el Andalous", "Mnihla", "Raoued", "Sidi Thabet", "Soukra");
        $governorate = new Governorate();
        $governorate->setName("Ariana");
        $manager->persist($governorate);
        foreach ($ariana as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }


        // Béja
        $beja = array("Amdoun", "Béja Nord", "Béja Sud", "Goubellat", "Medjez El Bab", "Nefza", "Teboursouk", "Testour", "Tibar");
        $governorate = new Governorate();
        $governorate->setName("Béja");
        $manager->persist($governorate);
        foreach ($beja as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }

        // Ben Arous
        $benArous = array("Ben Arous", "Bou Mhel El Bassatine", "El Mourouj", "Ezzahra", "Fouchana", "Hammam Chôtt", "Hammam Lif", "La Nouvelle Medina", "Megrine", "Mohamedia", "Mornag", "Radès");
        $governorate = new Governorate();
        $governorate->setName("Ben Arous");
        $manager->persist($governorate);
        foreach ($benArous as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }

        // Bizerte
        $bizerte = array("Bizerte Nord", "Bizerte Sud", "Djoumine", "El Alia", "Ghar El Melh", "Ghezala", "Mateur", "Menzel Bourguiba", "Menzel Jemil", "Ras Jabel", "Sejenane", "Tinja", "Utique", "Zarzouna");
        $governorate = new Governorate();
        $governorate->setName("Bizerte");
        $manager->persist($governorate);
        foreach ($bizerte as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }

        // Gabès
        $gabes = array("El Hamma", "El Metouia", "Gabes Medina", "Gabes Ouest", "Gabes Sud", "Ghannouch", "Menzel El Habib", "Mareth", "Matmata", "Nouvelle Matmata");
        $governorate = new Governorate();
        $governorate->setName("Gabès");
        $manager->persist($governorate);
        foreach ($gabes as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }

        // Gafsa
        $gafsa = array("Belkhir", "El Guetar", "El Ksar", "Gafsa Nord", "Gafsa Sud", "Mdhilla", "Metlaoui", "Oum El Araies", "Redeyef", "Sidi Aïch", "Sned");
        $governorate = new Governorate();
        $governorate->setName("Gafsa");
        $manager->persist($governorate);
        foreach ($gafsa as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }

        // Jendouba
        $jandouba = array("Jendouba", "Bou Salem", "Tabarka", "Aïn Draham", "Fernana", "Beni M'Tir", "Ghardimaou", "Oued Melliz");
        $governorate = new Governorate();
        $governorate->setName("Jendouba");
        $manager->persist($governorate);
        foreach ($jandouba as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }

        // Kairouan
        $kairoun = array("Kairouan", "Chebika", "Sbikha", "Oueslatia", "Aïn Djeloula", "Haffouz", "Alaâ", "Hajeb El Ayoun", "Nasrallah", "Menzel Mehiri", "Echrarda", "Bou Hajla");
        $governorate = new Governorate();
        $governorate->setName("Kairouan");
        $manager->persist($governorate);
        foreach ($kairoun as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }


        // Kasserine
        $kasserine = array("El Ayoun", "Ezzouhour", "Fériana", "Foussana", "Haïdra", "Hassi El Ferid", "Jedelienne", "Kasserine Nord", "Kasserine Sud", "Majel Bel Abbès", "Sbeïtla", "Sbiba", "Thala");
        $governorate = new Governorate();
        $governorate->setName("Kasserine");
        $manager->persist($governorate);
        foreach ($kasserine as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }

        // Kebili
        $kebili = array("Douz North", "Douz South", "Faouar", "Kebili North", "Kebili South", "Souk El Ahed");
        $governorate = new Governorate();
        $governorate->setName("Kebili");
        $manager->persist($governorate);
        foreach ($kebili as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }

        // Kef
        $kef = array("El Kef", "Nebeur", "Touiref", "Sakiet", "Sidi Youssef", "Tajerouine", "Menzel Salem", "Kalaat es Senam", "Kalâat Khasba", "Jérissa", "El Ksour", "Dahmani", "Sers");
        $governorate = new Governorate();
        $governorate->setName("Kef");
        $manager->persist($governorate);
        foreach ($kef as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }


        // Mahdia
        $mahdia = array("Mahdia", "Rejiche", "Bou Merdes", "Ouled Chamekh", "Chorbane", "Hebira", "Essouassi", "El Djem", "Kerker", "Chebba", "Melloulèche", "Sidi Alouane", "Ksour Essef", "El Bradâa");
        $governorate = new Governorate();
        $governorate->setName("Mahdia");
        $manager->persist($governorate);
        foreach ($mahdia as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }

        // Manouba
        $manouba = array("Borj El Amri", "Djedeida", "Douar Hicher", "El Battan", "Manouba", "Mornaguia", "Oued Ellil", "Tebourba");
        $governorate = new Governorate();
        $governorate->setName("Manouba");
        $manager->persist($governorate);
        foreach ($manouba as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }

        // Medenine
        $medenine = array("Medenine Nord", "Medenine Sud", "Beni Khedech", "Ben Guerdane", "Zarzis", "Djerba Houmet Souk", "Djerba Midoun", "Djerba Ajim", "Sidi Makhloulf");
        $governorate = new Governorate();
        $governorate->setName("Medenine");
        $manager->persist($governorate);
        foreach ($medenine as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }



        // Monastir
        $monastir = array("Amiret El Fhoul", "Amiret El Hojjaj", "Amiret Touazra", "Bekalta", "Bembla", "Beni Hassen", "Bennane", "Bouhjar", "Cherahil", "El Masdour", "Ghenada", "Jemmal", "Khniss", "Ksar Hellal", "Ksibet el-Médiouni", "Lamta", "Menzel Ennour", "Menzel Farsi", "Menzel Hayet", "Menzel Kamel", "Moknine", "Monastir", "Ouerdanin", "Sayada", "Téboulba", "Touza");
        $governorate = new Governorate();
        $governorate->setName("Monastir");
        $manager->persist($governorate);
        foreach ($monastir as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }



        // Nabeul
        $nabeul = array("Béni Khalled", "Béni Khiar", "Bou Argoub", "Dar Châabane El Fehri", "El Haouaria", "El Mida", "Grombalia", "Hammam El Guezaz", "Hammamet", "Kélibia", "Korba", "Menzel Bouzelfa", "Menzel Temime", "Nabeul", "Soliman", "Takelsa");
        $governorate = new Governorate();
        $governorate->setName("Nabeul");
        $manager->persist($governorate);
        foreach ($nabeul as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }

        // Sfax
        $sfax = array("Sfax", "Sakiet Ezzit", "Chihia", "Sakiet Eddaïer", "Gremda", "El Ain", "Thyna", "Agareb", "Jebiniana", "El Hencha", "Menzel Chaker", "Ghraïba", "Bir Ali Ben Khélifa", "Skhira", "Mahares", "Kerkennah");
        $governorate = new Governorate();
        $governorate->setName("Sfax");
        $manager->persist($governorate);
        foreach ($sfax as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }

        // Sidi Bouzid
        $sidiBouzid = array("Bir El Hafey", "Cebbala Ouled Asker", "Jilma", "Menzel Bouzaiane", "Meknassy", "Mezzouna", "Ouled Haffouz", "Regueb", "Sidi Ali Ben Aoun", "Sidi Bouzid");
        $governorate = new Governorate();
        $governorate->setName("Sidi Bouzid");
        $manager->persist($governorate);
        foreach ($sidiBouzid as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }


        // Siliana
        $siliana = array("Siliana", "Bou Arada", "Gaâfour", "El Krib", "Sidi Bou Rouis", "Maktar", "Rouhia", "Kesra", "Bargou", "El Aroussa");
        $governorate = new Governorate();
        $governorate->setName("Siliana");
        $manager->persist($governorate);
        foreach ($siliana as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }


        // Sousse
        $sousse = array("Akouda", "Bouficha", "Enfidha", "Hammam Sousse", "Hergla", "Kalaa Kebira", "Kalaa Sghira", "Kondar", "M'Saken", "Sidi Bou Ali", "Sidi El Heni", "Sousse Jaouhara", "Sousse Medina", "Sousse Riadh", "Sousse Sidi Abdelhamid");
        $governorate = new Governorate();
        $governorate->setName("Sousse");
        $manager->persist($governorate);
        foreach ($sousse as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }



        // Tataouine
        $tataouine = array("Bir Lahmar", "Dhehiba", "Ghomrassen", "Remada", "Smâr", "Tataouine Nord", "Tataouine Sud");
        $governorate = new Governorate();
        $governorate->setName("Tataouine");
        $manager->persist($governorate);
        foreach ($tataouine as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }

        // Tozeur
        $tozeur = array("Degach", "Hazoua", "Nefta", "Tameghza", "Tozeur");
        $governorate = new Governorate();
        $governorate->setName("Tozeur");
        $manager->persist($governorate);
        foreach ($tozeur as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }

        // Tunis
        $tunis = array("Tunis", "Le Bardo", "Le Kram", "La Goulette", "Carthage", "Sidi Bou Said", "La Marsa", "Sidi Hassine");
        $governorate = new Governorate();
        $governorate->setName("Tunis");
        $manager->persist($governorate);
        foreach ($tunis as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }


        // Zaghouan
        $zaghouan = array("Zaghouan", "Zriba", "Bir Mcherga", "Djebel Oust", "El Fahs", "Nadhour");
        $governorate = new Governorate();
        $governorate->setName("Zaghouan");
        $manager->persist($governorate);
        foreach ($zaghouan as $value) {
            $city = new City();
            $city->setName($value)
                ->setGovernorate($governorate);
            $manager->persist($city);
        }




        $manager->flush();
    }
}
