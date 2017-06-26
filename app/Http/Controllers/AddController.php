<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Add;
use \App\Repositories\AddRepository;
use App\Http\Requests\AddRequest;

class AddController extends Controller
{
    /**
     * Parsing webs
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AddRepository $addRepository)
    {
            $url = "http://www.ldb.lt/Informacija/Veikla/_layouts/listfeed.aspx?List=5ece83ac-3721-4a17-85a0-4d57ea8b7ef7&View=%7BA38AF6E2-8FC1-4D36-81AC-0591BCE2A703%7D";
        $homepage = $addRepository->getFile($url);

        //$homepage = file_get_contents('http://www.ldb.lt/Informacija/Veikla/_layouts/listfeed.aspx?List=5ece83ac-3721-4a17-85a0-4d57ea8b7ef7&View=%7BA38AF6E2-8FC1-4D36-81AC-0591BCE2A703%7D');
        $homepage = simplexml_load_string($homepage);

        //var_dump($homepage);
        //echo $homepage, $error;
        return view('index.index', compact('homepage'));
    }

    /****************************************************
     *
     * Parsing delfi web pages
     * 
     ***************************************************/
    public function create(AddRepository $addRepository)
    {
        $contentt = $addRepository->delfi();

                return view('index.tests', compact('contentt'));
    }


    /************************************************
    *
    * Ekonomika lt
    *
    ************************************************/

    public function economic(AddRepository $addRepository)
    {   //****************** test ekonomika

        $conte= $addRepository->economic();

                return view('index.economic', compact('conte'));
    }

    /**************************************************
    *
    * first subscribe forms, enrolling  URL's, validations
    *
    ***************************************************/

    public function subsOrder(AddRequest $request, AddRepository $addRepository)
    {

        return view('subs.subscribe');

    }

    /************************************************
    *
    * work subscribe confirmations, cheking if address
    * valide and it is described
    *
    ************************************************/

    public function work(AddRequest $request, AddRepository $addRepository )
    {   

        $internalErrors = libxml_use_internal_errors(true);

                    if (request('addUrl')): 
                    
                    $link = request('addUrl');
               
                            $sites = array('cvbankas', 'dirba', 'darbo', 'cv', 'cvkodas', 'cvzona', 'cvmarket');
                        foreach ($sites as $site) {

                            if (preg_match_all("/.{0,}{$site}.{0,}/", $link)){
                                
                                //$file = file_get_contents($link);

                                $file = $addRepository->getFile($link);

                                
                                $conte = $addRepository->{$site}($file, 10);
                            }
                        }

                        else:
                            $link = '';
                            $conte= '';
                        endif;


        libxml_use_internal_errors($internalErrors);

                return view('index.job', compact('conte', 'link'));
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
