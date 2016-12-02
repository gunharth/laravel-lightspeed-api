<?php

namespace Gunharth\Lightspeed;

class Lightspeed
{
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
        $this->api = new \WebshopappApiClient($config['cluster_id'], $config['api_key'], $config['api_secret'], $config['locale']);
    }

    /**
     * API Language Setter.
     */
    public function setApiLanguage($apiLanguage)
    {
        return $this->api->setApiLanguage($apiLanguage);
    }

    /**
     * API Resources.
     */
    public function account()
    {
        return $this->api->account;
    }

    public function accountMetafields()
    {
        return $this->api->accountMetafields;
    }

    public function accountPermissions()
    {
        return $this->api->accountPermissions;
    }

    public function accountRatelimit()
    {
        return $this->api->accountRatelimit;
    }

    public function additionalcosts()
    {
        return $this->api->additionalcosts;
    }

    public function attributes()
    {
        return $this->api->attributes;
    }

    public function blogs()
    {
        return $this->api->blogs;
    }

    public function blogsArticles()
    {
        return $this->api->blogsArticles;
    }

    public function blogsArticlesImage()
    {
        return $this->api->blogsArticlesImage;
    }

    public function blogsArticlesTags()
    {
        return $this->api->blogsArticlesTags;
    }

    public function blogsComments()
    {
        return $this->api->blogsComments;
    }

    public function blogsTags()
    {
        return $this->api->blogsTags;
    }

    public function brands()
    {
        return $this->api->brands;
    }

    public function brandsImage()
    {
        return $this->api->brandsImage;
    }

    public function catalog()
    {
        return $this->api->catalog;
    }

    public function categories()
    {
        return $this->api->categories;
    }

    public function categoriesImage()
    {
        return $this->api->categoriesImage;
    }

    public function categoriesProducts()
    {
        return $this->api->categoriesProducts;
    }

    public function checkouts()
    {
        return $this->api->checkouts;
    }

    public function checkoutsOrder()
    {
        return $this->api->checkoutsOrder;
    }

    public function checkoutsPayment_methods()
    {
        return $this->api->checkoutsPayment_methods;
    }

    public function checkoutsProducts()
    {
        return $this->api->checkoutsProducts;
    }

    public function checkoutsShipment_methods()
    {
        return $this->api->checkoutsShipment_methods;
    }

    public function checkoutsValidate()
    {
        return $this->api->checkoutsValidate;
    }

    public function contacts()
    {
        return $this->api->contacts;
    }

    public function countries()
    {
        return $this->api->countries;
    }

    public function customers()
    {
        return $this->api->customers;
    }

    public function customersLogin()
    {
        return $this->api->customersLogin;
    }

    public function customersMetafields()
    {
        return $this->api->customersMetafields;
    }

    public function customersTokens()
    {
        return $this->api->customersTokens;
    }

    public function dashboard()
    {
        return $this->api->dashboard;
    }

    public function deliverydates()
    {
        return $this->api->deliverydates;
    }

    public function discountrules()
    {
        return $this->api->discountrules;
    }

    public function discounts()
    {
        return $this->api->discounts;
    }

    public function events()
    {
        return $this->api->events;
    }

    public function external_services()
    {
        return $this->api->external_services;
    }

    public function files()
    {
        return $this->api->files;
    }

    public function filters()
    {
        return $this->api->filters;
    }

    public function filtersValues()
    {
        return $this->api->filtersValues;
    }

    public function groups()
    {
        return $this->api->groups;
    }

    public function groupsCustomers()
    {
        return $this->api->groupsCustomers;
    }

    public function invoices()
    {
        return $this->api->invoices;
    }

    public function invoicesItems()
    {
        return $this->api->invoicesItems;
    }

    public function invoicesMetafields()
    {
        return $this->api->invoicesMetafields;
    }

    public function languages()
    {
        return $this->api->languages;
    }

    public function metafields()
    {
        return $this->api->metafields;
    }

    public function orders()
    {
        return $this->api->orders;
    }

    public function ordersCredit()
    {
        return $this->api->ordersCredit;
    }

    public function ordersMetafields()
    {
        return $this->api->ordersMetafields;
    }

    public function ordersProducts()
    {
        return $this->api->ordersProducts;
    }

    public function ordersCustomstatuses()
    {
        return $this->api->ordersCustomstatuses;
    }

    public function ordersEvents()
    {
        return $this->api->ordersEvents;
    }

    public function paymentmethods()
    {
        return $this->api->paymentmethods;
    }

    public function products()
    {
        return $this->api->products;
    }

    public function productsAttributes()
    {
        return $this->api->productsAttributes;
    }

    public function productsFiltervalues()
    {
        return $this->api->productsFiltervalues;
    }

    public function productsImages()
    {
        return $this->api->productsImages;
    }

    public function productsMetafields()
    {
        return $this->api->productsMetafields;
    }

    public function productsRelations()
    {
        return $this->api->productsRelations;
    }

    public function quotes()
    {
        return $this->api->quotes;
    }

    public function quotesConvert()
    {
        return $this->api->quotesConvert;
    }

    public function quotesPaymentmethods()
    {
        return $this->api->quotesPaymentmethods;
    }

    public function quotesProducts()
    {
        return $this->api->quotesProducts;
    }

    public function quotesShippingmethods()
    {
        return $this->api->quotesShippingmethods;
    }

    public function redirects()
    {
        return $this->api->redirects;
    }

    public function returns()
    {
        return $this->api->returns;
    }

    public function reviews()
    {
        return $this->api->reviews;
    }

    public function sets()
    {
        return $this->api->sets;
    }

    public function shipments()
    {
        return $this->api->shipments;
    }

    public function shipmentsMetafields()
    {
        return $this->api->shipmentsMetafields;
    }

    public function shipmentsProducts()
    {
        return $this->api->shipmentsProducts;
    }

    public function shippingmethods()
    {
        return $this->api->shippingmethods;
    }

    public function shippingmethodsCountries()
    {
        return $this->api->shippingmethodsCountries;
    }

    public function shippingmethodsValues()
    {
        return $this->api->shippingmethodsValues;
    }

    public function shop()
    {
        return $this->api->shop;
    }

    public function shopCompany()
    {
        return $this->api->shopCompany;
    }

    public function shopJavascript()
    {
        return $this->api->shopJavascript;
    }

    public function shopLimits()
    {
        return $this->api->shopLimits;
    }

    public function shopMetafields()
    {
        return $this->api->shopMetafields;
    }

    public function shopScripts()
    {
        return $this->api->shopScripts;
    }

    public function shopTracking()
    {
        return $this->api->shopTracking;
    }

    public function shopWebsite()
    {
        return $this->api->shopWebsite;
    }

    public function subscriptions()
    {
        return $this->api->subscriptions;
    }

    public function suppliers()
    {
        return $this->api->suppliers;
    }

    public function tags()
    {
        return $this->api->tags;
    }

    public function tagsProducts()
    {
        return $this->api->tagsProducts;
    }

    public function taxes()
    {
        return $this->api->taxes;
    }

    public function taxesOverrides()
    {
        return $this->api->taxesOverrides;
    }

    public function textpages()
    {
        return $this->api->textpages;
    }

    public function themeCategories()
    {
        return $this->api->themeCategories;
    }

    public function themeProducts()
    {
        return $this->api->themeProducts;
    }

    public function tickets()
    {
        return $this->api->tickets;
    }

    public function ticketsMessages()
    {
        return $this->api->ticketsMessages;
    }

    public function time()
    {
        return $this->api->time;
    }

    public function types()
    {
        return $this->api->types;
    }

    public function typesAttributes()
    {
        return $this->api->typesAttributes;
    }

    public function variants()
    {
        return $this->api->variants;
    }

    public function variantsMetafields()
    {
        return $this->api->variantsMetafields;
    }

    public function variantsBulk()
    {
        return $this->api->variantsBulk;
    }

    public function variantsMovements()
    {
        return $this->api->variantsMovements;
    }

    public function webhooks()
    {
        return $this->api->webhooks;
    }
}
