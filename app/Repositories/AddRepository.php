<?php

namespace App\Repositories;


use Illuminate\Http\Request;

use \App\User;


class AddRepository
{


    /*************************************
    *
    * Geting remote files, 
    * if file_get_contents fails
    *
    *************************************/
    Public function getFile($url)
    {
            $ch = curl_init($url);

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_PROXYPORT, 80);
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);


            $homepage = curl_exec($ch);
            $error = curl_error($ch); 

            curl_close($ch);

            return $homepage;

    }


  /****************************************************
  *
  * cvbankas repository
  *
  *****************************************************/

  public function cvbankas($file, $count = 4)
  {

                    $doc2 = new \DOMDocument();
                    $doc2->loadHTML('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">' .$file);
                    $doc2->saveHTML();

                         $xpath2 = new \DomXPath($doc2);
                    $conten= $xpath2->query("//article[@class=\"list_article list_article_rememberable\" 
                                                and //a/div[@class=\"list_a_wrapper\"]/div[@class=\"list_cell list_ads_c_last\"]/span[@class=\"txt_list_2\"] = 'prieš 1 d.'
                                                ][position() <= {$count}]");//
                    $conte = [];
                                   if($conten->length > 0) {
                    
                 foreach($conten as $parent) {
                        $cont = [];
                        $cont['href'] =  $xpath2->query(".//a/@href", $parent)->item(0)->nodeValue;
                        $cont['description'] = $xpath2->query(".//h3[@class=\"list_h3\"]", $parent)->item(0)->nodeValue;
                        $cont['title'] =  $xpath2->query(".//h3[@class=\"list_h3\"]", $parent)->item(0)->nodeValue;


                    array_push($conte, $cont);
                    }
                }

                return $conte;

  }

    /****************************************************
    *
    * darbo repository
    *
    *****************************************************/

    public function darbo($file, $count = 4)
    {

                    $doc2 = new \DOMDocument();
                    $doc2->loadHTML($file);
                    $doc2->saveHTML();

                   $xpath2 = new \DomXPath($doc2);

                   $date = \Carbon\Carbon::yesterday();
          
                     $day =  $date->format('m\\.d');

                $conten= $xpath2->query("//table/tbody/tr[td[@class=\"cell2\" and contains(text(), '$day') ]]
                                        [position() <= {$count}]");//

                        $conte = [];

                                   if($conten->length > 0) {
                    
                 foreach($conten as $parent) {
                        $cont = [];
                        $cont['href'] =  $xpath2->query(".//td[@class=\"cell3\"][1]/a/@href", $parent)->item(0)->nodeValue;
                        $cont['description'] = $xpath2->query(".//td[@class=\"cell2\"][2]", $parent)->item(0)->nodeValue;
                        $cont['title'] =  $xpath2->query(".//td[@class=\"cell3\"][1]", $parent)->item(0)->nodeValue;

                    array_push($conte, $cont);
                    }
                }

        return $conte;
    }


    /****************************************************
    *
    * dirba repository
    *
    *****************************************************/

    public function dirba($file, $count = 4)
    {

                    $doc2 = new \DOMDocument();
                    $doc2->loadHTML($file);
                    $doc2->saveHTML();

                   $xpath2 = new \DomXPath($doc2);


                $conten= $xpath2->query("//div[@style=\"padding-top:7px;\"]/div[@class=\"skelbimas\" 
                                            and
                                        //div[@class=\"sKd\"]= 'Prieš 1 d.'    
                                            ][position() <= {$count}]");//

                        $conte = [];

                                   if($conten->length > 0) {
                    
                 foreach($conten as $parent) {
                        $cont = [];
                        $cont['href'] =  $xpath2->query(".//div[@class=\"sKp\"]/h3/a/@href", $parent)->item(0)->nodeValue;
                        $cont['description'] = $xpath2->query(".//div[@class=\"sKz\"]", $parent)->item(0)->nodeValue;
                        $cont['title'] =  $xpath2->query(".//div[@class=\"sKp\"]/h3", $parent)->item(0)->nodeValue;


                    array_push($conte, $cont);
                    }
                }
 
        return $conte;

    }



    /****************************************************
    *
    * cv.lt repository
    *
    *****************************************************/

    public function cv($file, $count = 4)
    {

                    $doc2 = new \DOMDocument();
                    $doc2->loadHTML($file);
                    $doc2->saveHTML();

                   $xpath2 = new \DomXPath($doc2);
           $conten= $xpath2->query("//table/tbody/tr[@class=\"data\" and .//td[1]/div[contains(text(), 'Prieš 1 d.')]]
                                        [position() <= {$count}]");//

                        $conte = [];

                                   if($conten->length > 0) {
                    
                 foreach($conten as $parent) {
                        $cont = [];
                        $cont['href'] =  'http://cv.lt'.$xpath2->query(".//td[3]/p/a[1]/@href", $parent)->item(0)->nodeValue;
                        $cont['description'] = $xpath2->query(".//td[3]/p/a[1]", $parent)->item(0)->nodeValue;
                        $cont['title'] =  $xpath2->query(".//td[3]/p/a", $parent)->item(0)->nodeValue;



                    array_push($conte, $cont);
                    }
                    
                    var_dump($conten);
                   // echo $conten;
                }

        return $conte;
    }

    /****************************************************
    *
    * cvkodas repository
    *
    *****************************************************/

    public function cvkodas($file, $count = 4)
    {

                    $doc2 = new \DOMDocument();
                    $doc2->loadHTML($file);
                    $doc2->saveHTML();

                   $xpath2 = new \DomXPath($doc2);


                $conten= $xpath2->query("//div[@class=\"jobs-list\"]/ul/li[.//div/div/div[@class=\"item-time\"][contains(text(), \"prieš 1 d.\")]][position() <= {$count}]");
                        $conte = [];

                if($conten->length > 0) {
                    foreach($conten as $parent) {
                        $cont = [];
                        $cont['href'] =  $xpath2->query(".//div[@class=\"job-item\"]/div[3]/a/@href", $parent)->item(0)->nodeValue;
                        $cont['description'] = $xpath2->query(".//div[@class=\"job-item\"]/div[3]/a/span", $parent)->item(0)->nodeValue;
                        $cont['title'] =  $xpath2->query(".//div[@class=\"job-item\"]/div[3]/a/h3", $parent)->item(0)->nodeValue;

                    array_push($conte, $cont);
                    }
                }
 
        return $conte;

    }

      public function delfi()
  {

    
        $content = file_get_contents('http://delfi.lt/mokslas');

        $internalErrors = libxml_use_internal_errors(true);
            
                    $doc = new \DOMDocument();
                    $doc->loadHTML('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">' .$content);
                    $doc->saveHTML();

                   $xpath = new \DomXPath($doc);
                    $content= $xpath->query("//div[@class=\"article-full-image article-first\"]");//->length; //output 2 -> correct


                if($content->length > 0) {
                    $contentt = [];
                    $classname ='limiter';
                foreach($content as $parent) {
                       
                        $cont = [];
                        $cont['title'] =  $xpath->query(".//div[contains(@class, '$classname')]/h3/a[@class=\"article-title\"]", $parent)->item(0)->nodeValue;
                        $cont['description'] = $xpath->query(".//div[contains(@class, '$classname')]/span[@class=\"article-lead-limiter\"]/span[@class=\"article-lead\"]", $parent)->item(0)->nodeValue;
                        $cont['href'] =  $xpath->query(".//div[contains(@class, '$classname')]/a/@href", $parent)->item(0)->nodeValue;


                    array_push($contentt, $cont);
                    }
                }

        libxml_use_internal_errors($internalErrors);

        return $contentt;
  }

  public function economic()
  {
              $internalErrors = libxml_use_internal_errors(true);
                
                       $doc2 = new \DOMDocument();
                    $doc2->loadHTMLFile('http://ekonomika.tv3.lt/valdzia-ir-pinigai');
                    $doc2->saveHTML();

                   $xpath2 = new \DomXPath($doc2);
                   $classname2 = 'story';
                    $conten= $xpath2->query("//div[@class=\"story\"]");//

                                   if($conten->length > 0) {
                    $conte = [];
                 foreach($conten as $parent) {
                        $cont = [];
                        $cont['title'] =  $xpath2->query(".//h2", $parent)->item(0)->nodeValue;
                        $cont['description'] = $xpath2->query(".//p", $parent)->item(0)->nodeValue;
                        $cont['href'] =  $xpath2->query(".//h2/a/@href", $parent)->item(0)->nodeValue;


                    array_push($conte, $cont);
                    }
                }


        libxml_use_internal_errors($internalErrors);

        return $conte;
  }

    /****************************************************
    *
    * cvmarket repository
    *
    *****************************************************/

    public function cvmarket($file, $count = 4)
    {

                    $doc2 = new \DOMDocument();
                    $doc2->loadHTML($file);
                    $doc2->saveHTML();

                   $xpath2 = new \DomXPath($doc2);

                $conten= $xpath2->query("//div[@class=\"f_jobs\"]/div[@id =\"f_jobs_main\"]/table/tr
                                                    [td[1][contains(text(), \"prieš 1 d.\")]]
                                                    [position() <= {$count}]");

                        $conte = [];

                                   if($conten->length > 0) {
                    
                 foreach($conten as $parent) {
                        $cont = [];
                        $cont['href'] =  $xpath2->query(".//td[@class=\"column hidden-xs-down\"]/a/@href", $parent)->item(0)->nodeValue;
                        $cont['description'] = $xpath2->query(".//td[@class=\"column hidden-xs-down\"]/span", $parent)->item(0)->nodeValue;
                        $cont['title'] =  $xpath2->query(".//td[@class=\"column hidden-xs-down\"]/a", $parent)->item(0)->nodeValue;

                    array_push($conte, $cont);
                    }
                }

        return $conte;
    }


    /****************************************************
    *
    * cvzona repository,  corrections needed!!!
    *
    *****************************************************/

    public function cvzona($file, $count = 4)
    {
                   $date = \Carbon\Carbon::yesterday();
          
                     $day =  $date->format('Y-m-d');
                    $doc2 = new \DOMDocument();
                    $doc2->loadHTML($file);
                    $doc2->saveHTML();

                   $xpath2 = new \DomXPath($doc2);

                                        //div[@class=\"table vr_block\"]/
                $conten= $xpath2->query("//div[@id =\"vr_container\"]/div[@class=\"table vr_block\"]/div[@class=\"tr list-item sk-list\" or @class=\"tr list-item sk-list vip\"]
                                                                               [div[@class=\"td td3\"]/div[@class=\"td-w\"]/div/span[contains(text(), \"$day\")]
                                                                                ]
                                                                                [position() <= {$count}]");
                        $conte = [];

                                   if($conten->length > 0) {
                 foreach($conten as $parent) {
                        $cont = [];
                        $cont['href'] =  'http://cvzona.lt'.$xpath2->query(".//div[@class=\"td td2\"]/div[@class=\"td-w\"]/h3/a/@href", $parent)->item(0)->nodeValue;
                       // $cont['description'] = $xpath2->query(".//div[@class=\"td td2\"]/div[@class=\"td-w\"]/div/em", $parent)->item(0)->nodeValue;
                        $cont['title'] =  $xpath2->query(".//div[@class=\"td td2\"]/div[@class=\"td-w\"]/h3/a", $parent)->item(0)->nodeValue;

                        $cont['description'] = $xpath2->query(".//div[@class=\"td td3\"]/div[@class=\"td-w\"]/div/span", $parent)->item(0)->nodeValue;

                    array_push($conte, $cont);
                    }
                }
 
        return $conte;

    }
}