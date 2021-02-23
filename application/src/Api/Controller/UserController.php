<?php
namespace Application\Api\Controller;
use Concrete\Core\User\User;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController
{
    protected $currentUser;
    public function __construct(User $currentUser){
        $this->currentUser = $currentUser;
    }
    

    public function getCurrentUser()
    {

        if ($this->currentUser->isRegistered()) {
            $data = [];
            $data['user_id'] = $this->currentUser->getUserID();
            $data['username'] = $this->currentUser->getUserName();
            return new JsonResponse($data);
        } else {
            return new JsonResponse([], 500);
        }
        
        // $u = new User();
        // if ($u->isRegistered()) {
        //     $data = [];
        //     $data['user_id'] = $u->getUserID();
        //     $data['username'] = $u->getUserName();
        //     return new JsonResponse($data);
        // } else {
        //     return new JsonResponse([], 500);
        // }
    }
}