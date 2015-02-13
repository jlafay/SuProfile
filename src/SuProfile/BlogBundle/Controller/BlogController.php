<?php

namespace SuProfile\BlogBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Form\Form;

use SuProfile\BlogBundle\Entity\Article;
use SuProfile\BlogBundle\Entity\Categorie;
use SuProfile\BlogBundle\Entity\Commentaire;
use SuProfile\BlogBundle\Entity\Image;
use SuProfile\BlogBundle\Entity\Fichier;
use SuProfile\BlogBundle\Entity\Suprofile;
use SuProfile\BlogBundle\Entity\B1;
use SuProfile\BlogBundle\Entity\B2;
use SuProfile\BlogBundle\Entity\B3;
use SuProfile\BlogBundle\Entity\M1;
use SuProfile\BlogBundle\Entity\M2;

use SuProfile\BlogBundle\Form\ArticleType;
use SuProfile\BlogBundle\Form\ArticleEditType;
use SuProfile\BlogBundle\Form\ArticleDownloadType;
use SuProfile\BlogBundle\Form\CommentaireType;
use SuProfile\BlogBundle\Form\SuprofileType;
use SuProfile\BlogBundle\Form\SuprofileEditType;

 
class BlogController extends Controller
{
	public function indexAction()
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			return $this->render('SuProfileBlogBundle:Blog:index.html.twig');
		}
		else{
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}
	}
  
	public function cateAction($cate, $page)
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			$nbParPage = 5;

			$articles = $this->getDoctrine()
							 ->getManager()
							 ->getRepository('SuProfileBlogBundle:Article')
							 ->getArticles($nbParPage, $page, $cate);


			return $this->render('SuProfileBlogBundle:Blog:cate.html.twig', array(
			'articles' => $articles,
			'cate'     => $cate,
			'page'     => $page,
			'nb_page'  => ceil(count($articles) / $nbParPage) ?: 1
			));
		}
		else{
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}
	}
	
	public function dlAction($page)
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			$nbParPage = 5;

			$articles = $this->getDoctrine()
							 ->getManager()
							 ->getRepository('SuProfileBlogBundle:Article')
							 ->getDownloads($nbParPage, $page);


			return $this->render('SuProfileBlogBundle:Blog:dl.html.twig', array(
			'articles' => $articles,
			'page'     => $page,
			'nb_page'  => ceil(count($articles) / $nbParPage) ?: 1
			));
		}
		else{
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}
	}
	
	public function monSuprofileAction($page)
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			$nbParPage = 5;
			$userId = $this->get('security.context')->getToken()->getUser()->getId();
			
			$suprofiles = $this->getDoctrine()
							 ->getManager()
							 ->getRepository('SuProfileBlogBundle:Suprofile')
							 ->getSuprofile($userId, $nbParPage, $page);


			return $this->render('SuProfileBlogBundle:Blog:monSuprofile.html.twig', array(
			'suprofiles' => $suprofiles,
			'page'     => $page,
			'nb_page'  => ceil(count($suprofiles) / $nbParPage) ?: 1,
			'userId'   => $userId
			));
		}
		else{
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}
	}
	
	public function suprofileAction($id, $page)
	{
			$nbParPage = 5;
			$userId = $id;
			
			$suprofiles = $this->getDoctrine()
							 ->getManager()
							 ->getRepository('SuProfileBlogBundle:Suprofile')
							 ->getSuprofile($userId, $nbParPage, $page);


			return $this->render('SuProfileBlogBundle:Blog:afficherSuprofile.html.twig', array(
			'suprofiles' => $suprofiles,
			'page'     => $page,
			'nb_page'  => ceil(count($suprofiles) / $nbParPage) ?: 1
			));
	}
 
	public function voirAction(Article $article, Form $form = null)
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			$em = $this->getDoctrine()->getManager();
			$currentUser = $this->get('security.context')->getToken()->getUser()->getUsername();
			$commentaires = $em->getRepository('SuProfileBlogBundle:Commentaire')
							   ->getByArticle($article->getId());
			
			$fichier = $article->getFichier();

			if (null === $form) {
				$form = $this->getCommentaireForm($article);
			}

			return $this->render('SuProfileBlogBundle:Blog:voir.html.twig', array(
			'article'      => $article,
			'form'         => $form->createView(),
			'commentaires' => $commentaires,
			'fichier'      => $fichier,
			'currentUser'   => $currentUser
			));
		}
		else{
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}
	}
 
	public function ajouterAction()
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			$article = new Article;
	
			if ($this->getUser()) {
				$article->setUser($this->getUser());
			}
 
			$form = $this->createForm(new ArticleType(), $article);
 
			$request = $this->getRequest();
 
			if ($request->getMethod() == 'POST') {

				$form->bind($request);
 
				if ($form->isValid()) {

					$em = $this->getDoctrine()->getManager();
					$em->persist($article);
					$em->flush();
 
					$this->get('session')->getFlashBag()->add('info', 'Article bien ajouté');
 
					return $this->redirect($this->generateUrl('SuProfileblog_voir', array('slug' => $article->getSlug())));
				}
			}
 
			return $this->render('SuProfileBlogBundle:Blog:ajouter.html.twig', array(
			'form' => $form->createView(),
			));
		}
		else{
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}	
	}
	
	public function ajouterDlAction()
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			$article = new Article;
	
			if ($this->getUser()) {
				$article->setUser($this->getUser());
			}
 
			$form = $this->createForm(new ArticleDownloadType(), $article);
 
			$request = $this->getRequest();
 
			if ($request->getMethod() == 'POST') {

				$form->bind($request);
 
				if ($form->isValid()) {

					$em = $this->getDoctrine()->getManager();
					$em->persist($article);
					$em->flush();
 
					$this->get('session')->getFlashBag()->add('info', 'Fichier bien ajouté');
 
					return $this->redirect($this->generateUrl('SuProfileblog_voir', array('slug' => $article->getSlug())));
				}
			}
			$fichier = $article->getFichier();
			return $this->render('SuProfileBlogBundle:Blog:ajouter.html.twig', array(
			'form' => $form->createView(),
			'fichier' => $fichier
			));
		}
		else{
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}	
	}
	
	public function ajouterSuprofileAction()
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			$suprofile = new Suprofile;
	
			if ($this->getUser()) {
				$suprofile->setUser($this->getUser());
			}
 
			$form = $this->createForm(new SuprofileType(), $suprofile);
 
			$request = $this->getRequest();
 
			if ($request->getMethod() == 'POST') {

				$form->bind($request);
 
				if ($form->isValid()) {

					$em = $this->getDoctrine()->getManager();
					$em->persist($suprofile);
					$em->flush();
 
					$this->get('session')->getFlashBag()->add('info', 'Suprofile bien ajoutée');
 
					return $this->redirect($this->generateUrl('SuProfileblog_monSuprofile'));
				}
			}
 
			return $this->render('SuProfileBlogBundle:Blog:ajouterSuprofile.html.twig', array(
			'form' => $form->createView(),
			));
		}
		else{
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}	
	}
	
	public function modifierAction(Article $article)
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			$form = $this->createForm(new ArticleEditType(), $article);
 
			$request = $this->getRequest();
 
			if ($request->getMethod() == 'POST') {
				$form->bind($request);
 
				if ($form->isValid()) {
					$em = $this->getDoctrine()->getManager();
					$em->persist($article);
					$em->flush();
 
					$this->get('session')->getFlashBag()->add('info', 'Article bien modifié');
 
					return $this->redirect($this->generateUrl('SuProfileblog_voir', array('slug' => $article->getSlug())));
				}
			}
 
			return $this->render('SuProfileBlogBundle:Blog:modifier.html.twig', array(
			'form'    => $form->createView(),
			'article' => $article
			));
		}
		else{
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}
	}
	
	public function modifierSuprofileAction(Suprofile $suprofile)
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			$form = $this->createForm(new SuprofileEditType(), $suprofile);
 
			$request = $this->getRequest();
 
			if ($request->getMethod() == 'POST') {
				$form->bind($request);
 
				if ($form->isValid()) {
					$em = $this->getDoctrine()->getManager();
					$em->persist($suprofile);
					$em->flush();
 
					$this->get('session')->getFlashBag()->add('info', 'Suprofile bien modifiée');
 
					return $this->redirect($this->generateUrl('SuProfileblog_monSuprofile'));
				}
			}
 
			return $this->render('SuProfileBlogBundle:Blog:modifierSuprofile.html.twig', array(
			'form'    => $form->createView(),
			'suprofile' => $suprofile
			));
		}
		else{
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}
	}
 
	public function supprimerAction(Article $article)
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			$form = $this->createFormBuilder()->getForm();
 
			$request = $this->getRequest();
			if ($request->getMethod() == 'POST') {
				$form->bind($request);
 
				if ($form->isValid()) {
					$em = $this->getDoctrine()->getManager();
					$em->remove($article);
					$em->flush();
 
					$this->get('session')->getFlashBag()->add('info', 'Article bien supprimé');
 
					return $this->redirect($this->generateUrl('SuProfileblog_accueil'));
				}
			}

			return $this->render('SuProfileBlogBundle:Blog:supprimer.html.twig', array(
			'article' => $article,
			'form'    => $form->createView()
			));
		}
		else{
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}
	}
  
	public function ajouterCommentaireAction(Article $article)
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			$commentaire = new Commentaire;
			$commentaire->setArticle($article);

			$form = $this->getCommentaireForm($article, $commentaire);

			$request = $this->getRequest();

			$form->bind($request);
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($commentaire);
				$em->flush();

				$this->get('session')->getFlashBag()->add('info', 'Commentaire bien enregistré !');

				return $this->redirect($this->generateUrl('SuProfileblog_voir', array('slug' => $article->getSlug())).'#comment'.$commentaire->getId());
			}

			$this->get('session')->getFlashBag()->add('error', 'Votre formulaire contient des erreurs');

			return $this->forward('SuProfileBlogBundle:Blog:voir', array(
			'article' => $article,
			'form'    => $form
			));
		}
		else{
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}
	}	
  
	public function supprimerCommentaireAction(Commentaire $commentaire)
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			$form = $this->createFormBuilder()->getForm();

			$request = $this->getRequest();
			if ($request->getMethod() == 'POST') {
				$form->bind($request);

				if ($form->isValid()) { 
					$em = $this->getDoctrine()->getManager();
					$em->remove($commentaire);
					$em->flush();

					$this->get('session')->getFlashBag()->add('info', 'Commentaire bien supprimé');

					return $this->redirect($this->generateUrl('SuProfileblog_voir', array('slug' => $commentaire->getArticle()->getSlug())));
				}
			}
		
			return $this->render('SuProfileBlogBundle:Blog:supprimerCommentaire.html.twig', array(
			'commentaire' => $commentaire,
			'form'        => $form->createView()
			));
		}
		else{
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}
	}
  
	/**
	* @param Article $article
	* @return Form
	*/
	protected function getCommentaireForm(Article $article, Commentaire $commentaire = null)
	{
		if (null === $commentaire) {
			$commentaire = new Commentaire;
		}

		if (null !== $this->getUser()) {
			$commentaire->setUser($this->getUser());
		}

		return $this->createForm(new CommentaireType(), $commentaire);
	}
	
	public function downloadAction($id, Fichier $fichier){
		$format = $fichier->getFormat();
		$nom = "$id.$format";
         
        $response = new Response();
        $response->setContent(file_get_contents(__DIR__.'/../../../../web/uploads/dl/'.$nom));
        $response->headers->set('Content-Type', 'application/force-download'); 
        $response->headers->set('Content-disposition', 'filename='. $nom);
         
        return $response;
	}
}