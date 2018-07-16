<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */

    "operations" => array(

        /**
         *    getProductListings() method
         *
         *    reference: https://help.shopify.com/api/reference/product_variant
         */
        "getProductListings" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/product_listings.json",
            "summary" => "Retrieve a list of all product by listing.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "product_ids" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "IDs of the product.",
                    "required" => true
                ),
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results."
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Page to show (Default: 1)."
                )
            )
        ),
        "getProductListingIds" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/product_listings/product_ids.json",
            "summary" => "Retrieve a list of all product by listing.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results."
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Page to show (Default: 1)."
                )
            )
        ),
      ),

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */

    "models" => array(
    ),
);
