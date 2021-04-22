<?php
namespace Convertor;


use Convertor\Service\CSVConvertor;
use Convertor\Service\Filter;
use Convertor\Traits\App;
use function json_decode;
use function var_dump;


class JsonToCSV
{
    use App;

	public function start( Filter $filter, CSVConvertor $convertor )
	{
        $token = $this->getEnv('HEADER_PREFIX') . ' ' . $this->getEnv('TOKEN');
        $convertor->convertArrayToCsv(
            $filter->getFilteredProducts(
                $this->resolve('http')->get(
                    $this->getEnv('URL'),
                    null,
                    ['Accept:application/json', "Authorization: $token"])));

        header('Location: ./../csv/file.csv');
	}
	
}
