<?php 

namespace Convertor\Service;

use function count;
use Exception;

class CSVConvertor {

    protected $fileDir = '';
    private $row = [];

    function __construct( string $fileDir )
    {
        $this->fileDir = ROOT . $fileDir;
    }


    public function convertArrayToCsv( array $request ) : void
    {
        if (!count($request))
            throw new Exception( 'There is no result.' );

        try{
            $file = fopen($this->fileDir, 'w');
            $this->manageFile($request, $file);
        }
        catch( Throwable $e ) {
            throw new Exception( $e->getMessage() );
        }
        finally {
            if ( file_exists( $this->fileDir ) && isset( $file ))
            fclose( $file );
        }
    }

    /**
     * @param array $request
     * @param $file
     */
    public function manageFile(array $request, $file): void
    {
        $delimiter = ';';
        $condition = true;
        foreach ($request as $fields) {
             $this->getObjectDetails($fields['financing']);
            if ($condition) {
                fputcsv($file, array_keys($this->row), $delimiter);
                $condition = false;
            }
            fputcsv($file, $this->row, $delimiter);
        }
    }

    private function getObjectDetails($value)
    {
        foreach ( $value as $deepKey => $deepValue ){
            if( is_array ( $deepValue ))
                $this->getObjectDetails( $deepValue );
            else
                 isset($this->row[$deepKey])
                     ? $this->row[$deepKey] = $this->row[$deepKey] . ' , ' . $deepValue
                     : $this->row[$deepKey] = $deepValue ;

        }
    }

}
