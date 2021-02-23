<?php
namespace Application\Controller;
use Concrete\Core\User\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Concrete\Core\Support\Facade\Application;
use Express;
use Concrete\Core\Routing\Redirect;

// use Concrete\Core\Page\Theme;

class GetjsonController
{

    public function getjson()
    {
        $u = new User();
        if ($u->isRegistered()) {
            $data = [];
            $data['user_id'] = $u->getUserID();
            $data['username'] = $u->getUserName();
            return new JsonResponse($data);
        } else {
            return new JsonResponse([], 500);
        }
    }

    // public function install()
    // {
    //     $pkg = parent::install();
    //     $object = Express::buildObject('contact_form', 'contacts_form', 'contact form', $pkg);
    //     $contactus = Express::buildObject('contact_form', 'contacts_form', 'contact form', $pkg);
    //     $contactus->addAttribute('text', 'name', 'contact_name' );
    //     $contactus->addAttribute('text', 'email', 'contact_email');
    //     $contactus->addAttribute('textarea', 'message', 'contact_message');
    //     $contactusEntity = $contactus->save();

    //     $form = $contactus->buildForm('Form');
    //     $form->addFieldset('Basics')
    //             ->addAttributeKeyControl('contact_name')
    //             ->addAttributeKeyControl('contact_email')
    //             ->addTextControl('', 'This is just some basic explanatory text.')
    //             ->addAttributeKeyControl('contact_message');
    //     $form = $form->save();

    //     $entityManager = $contactus->getEntityManager();
    //     $contactusEntity->setDefaultViewForm($form);
    //     $contactusEntity->setDefaultEditForm($form);
    //     $entityManager->persist($contactusEntity);
    //     $entityManager->flush();
    // }

    public function renderView(){
        // $app = Application::getFacadeApplication();
        // $factory = $app->make(\Concrete\Core\Http\ResponseFactoryInterface::class);
        // $view = new \Concrete\Core\View\View('/account/activate/form');
        // $view->setThemeHandle('digital-team');
        // $contents = $view->render();
        // return new \Concrete\Core\Http\Response($contents);

        // $qsID = intval($_POST['qsID']);
        // print_r ($_POST);
        // die;
        // 1. object handle, 2. object plural name, 3. object name
        

        // $contactus = new \Concrete\Core\Entity\Attribute\Value\Value\contactusValue();
        // $contactus->setName($_POST['name']);
        // $contactus->setEmail($_POST['email']);
        // $contactus->setMessage($_POST['message']);

        // $contactus = new Concrete\Core\Entity\Express\Entity;
        
        $entry = Express::buildEntry('contact_form')
                ->setContactName($_POST['name'])
                ->setContactEmail( $_POST['email'])
                ->setContactMessage($_POST['message'])
                ->save();

                $r = Redirect::to('http://concretesite.com/index.php');
                $r->send();
                exit;
                                

    }
}