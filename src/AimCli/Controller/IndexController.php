<?php
/**
 * AimCli - Sample command line integration module in ZF2.
 *
 * @package   AimCli
 * @author    Md. Arifin Ibne Matin<contact@arifinbinmatin.com>
 * @link      http://arifinbinmatin.com
 * @license   GPL-2.0+ 
 * @copyright 2014 Md. Arifin Ibne Matin
 */

namespace AimCli\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $request = $this->getRequest();

        // Make sure that we are running in a console and the user has not tricked our
        // application into running this action from a public web server.
        if (!$request instanceof ConsoleRequest){
            throw new \RuntimeException('You can only use this action from a console!');
        }

        // Get param from console 
        $param   = $request->getParam('param');

        if ($param){
            return "Done! Parameter received : '$param' .\n";
        }else{
            return "No parameter to show\n";
        }
    }
}
?>
