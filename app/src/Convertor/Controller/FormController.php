<?php
/**
 * Created by PhpStorm.
 * User: dariush
 * Date: 17/04/2021
 * Time: 9:40 PM
 */

namespace Convertor\Controller;

use Convertor\Controller\Controller\BaseController;
use Convertor\Service\CSVConvertor;
use Convertor\Service\Filter;
use Convertor\Traits\App;
use function var_dump;

class FormController extends BaseController
{
    use App;

    /**
     * Form
     * @url GET /convertor
     *
     */
    public function show()
    {
        $this->view('form');
    }


    /**
     * Funding List
     * @url POST /convertor
     *
     */
    public function list()
    {
        try{
            $this->resolve('json2csv')->start(
                new Filter(
                    $this->postParam('start'),
                    $this->postParam('end')),
                new CSVConvertor(
                    $this->getEnv('CSV_DIR'))
            );
            $this->show();
        }catch (\Throwable $e){
            $this->view('form')
                ->assign( 'error', ['msg' =>$e->getMessage(),'code' => $e->getCode()]);
        }
    }
}