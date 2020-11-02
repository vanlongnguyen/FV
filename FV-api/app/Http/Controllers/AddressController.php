<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Src\AddressHandler;


class AddressController extends Controller
{
    /**
     * @var AddressHandler
     */
    private $addressHandler;
    private $request;
    public function __construct(AddressHandler $addressHandler, Request $request)
    {
        $this->addressHandler = $addressHandler;
        $this->request = $request;
    }

    /**
     * @return array|string
     * @throws \Illuminate\Validation\ValidationException
     */
    public function submit()
    {
        $rule = [
            'address' => 'bail|required|max:30',
            'address2' => 'nullable|max:30',
            'address3' => 'nullable|max:30',
        ];
        $message = [
            'address.required' => 'Address is required!',
            'address2' => 'Address should not longer than 30 characters',
            'address3' => 'Address should not longer than 30 characters'
        ];

        $validator = Validator::make($this->request->all(), $rule, $message);

        if ($validator->fails()) {
            return $validator->errors()->messages();
        }
        return $this->addressHandler->addHandler($validator->validated());
    }
}
