<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // populate the teachers section
        $teachernames = array(
            "Avetyan,Rafayel R.",
            "Boots,Peter P.J.H.M.",
            "Fransen,Mariëlle M.H.T.",
            "Gestel,Bert L.F.M. van",
            "Geurts,Jaap J.",
            "Geurts,Joris J.H.J.",
            "Gupta,Roopali R.",
            "Hartingsveldt,Stan S. van",
            "Henning,Frank F.L.",
            "Hilderink,Gerald G.H.",
            "Kabzar,Vladimir U.Y.",
            "Koehorst,Michiel M.W.",
            "Kuah,Chung W.C.",
            "Kuiper,Matthijs M.S.",
            "Kuprys,Andrius A.",
            "Lara Rojas,John J.G.",
            "Lepper,Frank F.P.H. de",
            "Li,Li L.",
            "Linnartz,Paul P.L.L.J.",
            "Littel,Antoinette A.C.J.M.",
            "Manolache,Georgiana G.",
            "Öztan,Ahmet A",
            "Paval,Roxana R.",
            "Pesic,Maja M.",
            "Postma,André A.",
            "Ravelo Sánchez,Jesús J.N.",
            "Sanden,Ella P.M. van der",
            "Schouwenaars,Basjan B.T.J.C.",
            "Schriek,Erik H.J.D. van der",
            "Shaghelani Lor,Mikaeil M.",
            "Thaqi,Emin E.",
            "Veugen-van Vroonhoven,Agnes A.L.B. van",
            "Wolf-Guis,Corrie C.P.",
            "Zijlmans,Jack J.H.A.",
        );
        $teacherlinks = array(
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI874073",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI871412",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI872270",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI871186",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI875395",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI878848",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI875857",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI888602",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI872921",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI876260",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI874898",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI872578",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI874156",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI875290",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI876989",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI887095",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI875946",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI879556",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI874049",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI881637",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI875856",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI876026",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI888077",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI884294",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI885233",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI875196",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI875235",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI875375",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI876608",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI874259",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI887002",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI871294",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI870882",
            "https://mysite.fhict.nl/my/Person.aspx?accountname=FHICT%5CI871207",
        );



        for($i=0; $i<count($teachernames); $i++)
        {
            DB::table('Teachers')->insert([
                'name' => $teachernames[$i],
                'link' => $teacherlinks[$i],
                'picture'=> 'nil'
            ]);
        }
        
        // to be updated
        DB::table('Qualifications')->insert([
                'title' => 'Best Teacher 2017',
                'description' => 'Who do you find the best teacher of this year?',
            ]);
        // to be updated
        DB::table('Qualifications')->insert([
                'title' => 'FHICTster 2017',
                'description' => 'Choose the coolest teacher of the year!',
            ]);
        
    }
}
