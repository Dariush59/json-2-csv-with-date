<?php 
namespace Convertor\Controller;

use Convertor\Traits\App;
use Convertor\Controller\Controller\BaseController;

class ConvertorController extends BaseController
{
    use App;

    /**
     * Funding List
     * @url GET /api/list
     * 
     */
    public function list()
    {
        //
    }
    

    /**
     * Saves an ad to the database
     *
     * @url POST /api/
     */
    public function registration(\stdClass $data) : array
    {
        //
    }


    /**
     * Delete ad by id
     *            
     * @url DELETE /api/registers/$id
     */
    public function deleteUser(int $id) : viod
    {
        //
    }
}
