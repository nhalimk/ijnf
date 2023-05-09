<?php

namespace App\Auth;

use Cake\Auth\BaseAuthenticate;
use Cake\Http\ServerRequest;
use Cake\Http\Response;
use GuzzleHttp\Client;
use Cake\Datasource\ConnectionManager;

class SsoAuthenticate extends BaseAuthenticate
{

    public function authenticate(ServerRequest $request, Response $response)
    {
        $url = 'https://sso.awan.info/api/login-external';

        $client = new Client(['verify' => false]);

        $response = $client->request('POST', $url, [
            'form_params' => [
                'email' => $_POST['username'],
                'password' => $_POST['password'],
                'platform' => 'web'
            ]
        ]);

        $statusCode = $response->getStatusCode();
        $content = $response->getBody()->getContents();
        $result = json_decode(($content), false);
        //var_dump($result);
        $status = $result->status;
        $connection = ConnectionManager::get('sso');
        $res = [];
        if ($statusCode == 200 && $status != 'failed') {
            $res['id'] = $result->data->id;
            $res['staffno']=$result->data->staffno;
            $res['icno']=$result->data->icno;
            $res['email']=$result->data->email;
            $res['photo']=$result->data->photo;
            $res['name']=$result->data->name;
            $res['department']=$result->data->department;
            $res['department_id']=$result->data->department_id;
            $res['position']=$result->data->position;
            $res['add1']=$result->data->add1;
            $res['add2']=$result->data->add2;
            $res['add3']=$result->data->add3;
            $res['postcode']=$result->data->postcode;
            $res['city']=$result->data->city;
            $res['state']=$result->data->state;
            $res['phone']=$result->data->phone;
            $res['office']=$result->data->officenum;

            $results = $connection->execute('SELECT
                                                role_id, 
                                                role_ijns.`name` role
                                            FROM
                                                accessrole_ijns
                                                INNER JOIN
                                                role_ijns
                                                ON 
                                                    accessrole_ijns.role_id = role_ijns.id
                                            WHERE
                                                user_id =  ' . $result->data->id)->fetch('assoc');

            if($results){
                $res['role'] = $results['role'];
            }else{
                $res['role'] = 'Staff';
            }
            return $res;
        } else {
            return false;
        }
    }
}