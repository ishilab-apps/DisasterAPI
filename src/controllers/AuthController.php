<?php
namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Models\User;

/**
 * Login Process
 */
class AuthController extends BaseController{

    public function getLogin(Request $request, Response $response, $args){
        $params = $request->getAttribute('params');
    }

    public function postLogin(Request $request, Response $response, $args){
        $params = $request->getAttribute('params');

//        $user = User::query()
//            ->where('user_id', $params->post->user->user_id)
//            ->where('password', $params->post->user->password)
//            ->get()->first();
//
//        // Login failed.
//        if (count($user) < 1) {
//            $this->flash->addMessage('errors', 'ログインに失敗しました．ユーザーIDまたはパスワードが間違っています');
//            return $response->withRedirect($this->router->pathFor('root', [], [
//                'user_id' => $params->post->user->user_id
//            ]));
//        }
//
//        // Login success.
//        // save a session data.
//        $this->session->put([
//            'state' => true,
//            'id' => $user->id,
//            'user_id' => $user->user_id,
//            'admin' => $user->admin,
//            'time' => time()
//        ]);
    }


    public function postLogout(Request $request, Response $response, $args){
//        $this->session->destroy();
//        return $response->withRedirect('/');
    }
}