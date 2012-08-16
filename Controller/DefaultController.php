<?php
/**
 * 
 * @package phpBBUpdateGitRepoBundle
 * @copyright (c) 2012 phpBB Group
 * @license http://opensource.org/licenses/gpl-3.0.php GNU General Public License v3
 * @author Unknown Bliss
 * 
 */

namespace phpBB\UpdateGitRepoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('phpBBUpdateGitRepoBundle:Default:index.html.twig', array('name' => $name));
    }
}
