<?php
namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Controllers\Traits\RestfulMethods;
use App\Transformers\CompanyTransformer;

class CompanyController extends ApiController
{
    use RestfulMethods;

    public function __construct(Company $customer, CompanyTransformer $transformer)
    {
        $this->_model = $customer;
        $this->_transformer = $transformer;
        parent::__construct();
    }

}