<?php
include 'ApiMultiCompany.php';

// Crear una instancia nueva de la clase "ApiMultiCompany"
$api = new ApiMultiCompany();

// Autenticarse a la api con las credenciales que tiene la configuración de la misma
echo 'Login API';
$login = $api->login();
var_dump($login);

if(isset($login->message)){
    //Url de la compañía a buscar
    $company_search = 'http://credito786.process.suite786.com';

    //Implementar función "get_all_data_company()" para obtener todos los datos de la compañía
    $all_company = $api->get_all_data_company($company_search);
    echo 'All Data Company';
    var_dump(json_decode($all_company) != null ? json_decode($all_company) : $all_company);

    //Cerrar la session de token y borrarlo de la BD
    $api->logout();
}


//Este es el resultado completo
/*object(stdClass)[3]
  public 'id' => int 1
  public 'name' => string 'credito786' (length=10)
  public 'name_sms' => string 'credito786' (length=10)
  public 'logo' => string 'http://multi-company/images/credito786-logo.png' (length=47)
  public 'logo_icon' => string 'http://multi-company/images/credito786-icon.png' (length=47)
  public 'fav_icon' => string 'http://multi-company/images/192.png' (length=35)
  public 'phone' => string '+16175551212' (length=12)
  public 'address' => string '' (length=0)
  public 'schedule' => string 'asana' (length=5)
  public 'website' => string '786suite.com' (length=12)
  public 'facebook' => string '786suite' (length=8)
  public 'instagram' => string '786suite' (length=8)
  public 'youtube' => string '786suite' (length=8)
  public 'subdomain' => string '786suite' (length=8)
  public 'created_at' => string '2021-11-07T23:23:15.000000Z' (length=27)
  public 'updated_at' => string '2021-11-07T23:23:15.000000Z' (length=27)
  public 'modules' =>
    array (size=5)
      0 =>
        object(stdClass)[26]
          public 'id' => int 1
          public 'name' => string 'Process App' (length=11)
          public 'description' => string 'Process App' (length=11)
          public 'url' => string 'http://786suite.process.suite786.com' (length=36)
          public 'created_at' => string '1987-08-27T07:15:20.000000Z' (length=27)
          public 'updated_at' => string '2000-03-28T08:59:17.000000Z' (length=27)
          public 'plans' =>
            array (size=0)
              ...
          public 'pivot' =>
            object(stdClass)[25]
              ...
      1 =>
        object(stdClass)[24]
          public 'id' => int 2
          public 'name' => string 'Finance App' (length=11)
          public 'description' => string 'Finance App' (length=11)
          public 'url' => string 'http://786suite.sales.suite786.com' (length=34)
          public 'created_at' => string '2013-10-26T23:54:54.000000Z' (length=27)
          public 'updated_at' => string '1984-01-31T00:00:23.000000Z' (length=27)
          public 'plans' =>
            array (size=3)
              ...
          public 'pivot' =>
            object(stdClass)[16]
              ...
      2 =>
        object(stdClass)[17]
          public 'id' => int 3
          public 'name' => string 'Crm App' (length=7)
          public 'description' => string 'Crm App' (length=7)
          public 'url' => string 'http://786suite.crm.suite786.com' (length=32)
          public 'created_at' => string '1972-08-29T18:54:15.000000Z' (length=27)
          public 'updated_at' => string '1972-03-07T23:10:31.000000Z' (length=27)
          public 'plans' =>
            array (size=0)
              ...
          public 'pivot' =>
            object(stdClass)[14]
              ...
      3 =>
        object(stdClass)[15]
          public 'id' => int 4
          public 'name' => string 'Customer Services App' (length=21)
          public 'description' => string 'Customer Services App' (length=21)
          public 'url' => string 'http://786suite.customerservices.suite786.com' (length=45)
          public 'created_at' => string '1982-03-17T18:05:56.000000Z' (length=27)
          public 'updated_at' => string '1986-09-09T06:55:08.000000Z' (length=27)
          public 'plans' =>
            array (size=0)
              ...
          public 'pivot' =>
            object(stdClass)[6]
              ...
      4 =>
        object(stdClass)[13]
          public 'id' => int 5
          public 'name' => string 'Credit Disputes App' (length=19)
          public 'description' => string 'Credit Disputes App' (length=19)
          public 'url' => string 'http://786suite.disputes.suite786.com' (length=37)
          public 'created_at' => string '2008-03-30T14:37:27.000000Z' (length=27)
          public 'updated_at' => string '1994-06-24T03:41:40.000000Z' (length=27)
          public 'plans' =>
            array (size=0)
              ...
          public 'pivot' =>
            object(stdClass)[11]
              ...
  public 'twilio' =>
    object(stdClass)[12]
      public 'id' => int 1
      public 'companies_id' => int 1
      public 'twilio_id' => string 'ACbf9620c360eceb4d2236fce4c5d8915128' (length=36)
      public 'twilio_token' => string '' (length=0)
      public 'twilio_from' => string '+18554590394' (length=12)
      public 'twilio_status_callback' => string 'https://preprod.process.credito786.us/Vasasdksdfdfdfgj/sms_callback' (length=67)
      public 'created_at' => string '2021-11-07T23:23:16.000000Z' (length=27)
      public 'updated_at' => string '2021-11-07T23:23:16.000000Z' (length=27)
  public 'sendgrid' =>
    object(stdClass)[9]
      public 'id' => int 1
      public 'companies_id' => int 1
      public 'protocol' => string 'smtp' (length=4)
      public 'smtp_host' => string 'smtp.sendgrid.net' (length=17)
      public 'smtp_user' => string 'apikey' (length=6)
      public 'smtp_pass' => string '' (length=0)
      public 'smtp_port' => int 587
      public 'crlf' => string '\r\n' (length=4)
      public 'newline' => string '\r\n' (length=4)
      public 'created_at' => string '2021-11-07T23:23:16.000000Z' (length=27)
      public 'updated_at' => string '2021-11-07T23:23:16.000000Z' (length=27)
  public 'apiconfig' =>
    array (size=3)
      0 =>
        object(stdClass)[10]
          public 'id' => int 1
          public 'companies_id' => int 1
          public 'api' => string 'seller_api' (length=10)
          public 'uri' => string 'http://localhost/sales/axcsdskjhfweroiukasldj/' (length=46)
          public 'created_at' => string '2021-11-07T23:23:16.000000Z' (length=27)
          public 'updated_at' => string '2021-11-07T23:23:16.000000Z' (length=27)
      1 =>
        object(stdClass)[7]
          public 'id' => int 2
          public 'companies_id' => int 1
          public 'api' => string 'process_api' (length=11)
          public 'uri' => string 'http://localhost/process/bjydskjhfweroiuk20/' (length=44)
          public 'created_at' => string '2021-11-07T23:23:16.000000Z' (length=27)
          public 'updated_at' => string '2021-11-07T23:23:16.000000Z' (length=27)
      2 =>
        object(stdClass)[8]
          public 'id' => int 3
          public 'companies_id' => int 1
          public 'api' => string 'disputes_api' (length=12)
          public 'uri' => string 'http://localhost/disputes/kpo8b97f31fbe65wrl/' (length=45)
          public 'created_at' => string '2021-11-07T23:23:16.000000Z' (length=27)
          public 'updated_at' => string '2021-11-07T23:23:16.000000Z' (length=27)
  public 'recaptcha' =>
    object(stdClass)[4]
      public 'id' => int 1
      public 'companies_id' => int 1
      public 'grecaptcha_v2_public_key' => string '' (length=0)
      public 'grecaptcha_v2_secret_key' => string '' (length=0)
      public 'created_at' => string '2021-11-07T23:23:16.000000Z' (length=27)
      public 'updated_at' => string '2021-11-07T23:23:16.000000Z' (length=27)
  public 'googlemapsapikey' =>
    object(stdClass)[5]
      public 'id' => int 1
      public 'companies_id' => int 1
      public 'gmap_api_key' => string 'AIzaSyBldBomKPJyDv9QnT5pSNr1vqhs4FivMRM' (length=39)
      public 'created_at' => string '2021-11-07T23:23:16.000000Z' (length=27)
      public 'updated_at' => string '2021-11-07T23:23:16.000000Z' (length=27)*/