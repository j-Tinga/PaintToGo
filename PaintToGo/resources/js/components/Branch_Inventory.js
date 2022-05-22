import React, { useEffect, useState } from "react"
import api from "../api/api";

const user_id = sessionStorage.getItem('user_id');
const branch_id = sessionStorage.getItem('branch_id');


export default function Branch_Inventory(){
    return ( 
    <div class="flex justify-center">
      <div class="w-9/12 flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      
              <div class="mb-6 flex justify-between">
                <div class="flex items-center  mr-4">
                  <h1 class="text-2xl font-semibold uppercase">Products Inventory</h1>
                </div>    
                <input type="text" id="search" name ="search" placeholder = "Search" class="w-2/6 m-0 rounded-md " value = ""></input>              
              </div>
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-md">
              <div class="px-6 py-4 whitespace-nowrap bg-white text-gray-900 text-md font-semibold flex items-center"> 
                @if (Session::get('requestID') == null)   
                <button onclick="window.location='{{ route('requestsform') }}'"  class="mr-6 bg-blue-500 text-white px-4 py-3 w-40 rounded-sm text-sm hover:bg-blue-300 ">Request Form</button>
                @else
                <button onclick="window.location='{{ route('sendRequest') }}'"  class="mr-6 bg-blue-500 text-white px-4 py-3 w-40 rounded-sm text-sm hover:bg-blue-300 ">Make a new Request</button>
                @endif 
                <button onclick="toggleModal('requestList')" class="bg-blue-500 text-white px-4 py-3 w-40 rounded-sm text-sm hover:bg-blue-300 ">View Request List</button>
              </div>

              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Item ID
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Item Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Brand
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Utility
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Stock
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Action
                    </th>
                  </tr>   
                </thead> 
                <tbody class="bg-white divide-y divide-gray-200"> 
                </tbody>
              </table>

            </div>
          </div>  
        </div>
      </div>
  </div>
)
}