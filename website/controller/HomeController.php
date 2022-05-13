<?php
/**
 * Auteur   : Serghei Diulgherov
 * Date     : 06.05.2022
 * Home 
 */


class HomeController extends Controller 
{
    /**
     * It takes the value of the action parameter in the URL and appends "Action" to it. Then it calls
     * the function with that name.
     * 
     * So if the URL is http://example.com/index.php?action=foo, the function fooAction() will be
     * called.
     * 
     * @return void
     */
    public function display(){

        $action = $_GET['action'] . "Action";

        return call_user_func(array($this, $action));
    }

    /**
     * It takes a file, evaluates it, and returns the content.
     * 
     * @return content The content of the view file.
     */
    private function indexAction()
    {
        $view = file_get_contents('view/page/home/index.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }
}
?>