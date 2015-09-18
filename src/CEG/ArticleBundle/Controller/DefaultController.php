<?php

namespace CEG\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use CEG\ArticleBundle\Entity\Article;
use CEG\ArticleBundle\Form\ArticleType;
use CEG\ArticleBundle\Entity\Image;
use CEG\ArticleBundle\Form\ImageType;

class DefaultController extends Controller
{



  public function listAction($page)
  {
    $em    = $this->get('doctrine.orm.entity_manager');
    $dql   = "SELECT a FROM CEGArticleBundle:Article a ORDER BY a.id DESC";
    $query = $em->createQuery($dql);

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
    $query,
    $page/*page number*/,
    4/*limit per page*/
  );

  // parameters to template
  return $this->render('CEGArticleBundle:Default:indexArticle.html.twig', array('pagination' => $pagination));
}

public function showArticleAction($id)
{
  $em = $this->getDoctrine()->getManager();
  $article = $em->getRepository('CEGArticleBundle:Article')->find($id);

  return $this->render('CEGArticleBundle:Default:showArticle.html.twig',array('article' => $article ));
}

public function createArticleAction(Request $request){
  $article = new Article();
  $formBuilder = $this->createFormBuilder($article);
  $form = $this->container->get('form.factory')->create(new ArticleType,$article);
  if($form->handleRequest($request)->isValid())
  {
    $em = $this->getDoctrine()->getManager();

    $article->setArtclDate(new \DateTime());
    $article->setArtclLike(0);

    $em->persist($article);
    $em->flush();

    return $this->redirect($this->generateUrl('ceg_article_list',{'page':1}));
  }
  return $this->render('CEGArticleBundle:Default:createArticle.html.twig',array('form' => $form->createView() ));
}

public function updateArticleAction(Request $request, $id){
  $image = new Image();
  $formBuilder = $this->createFormBuilder($image);
  $form = $this->container->get('form.factory')->create(new ImageType,$image);
  if($form->handleRequest($request)->isValid())
  {
    $em = $this->getDoctrine()->getManager();
    $article = $em->getRepository('CEGArticleBundle:Article')->find($id);
    $image->setArticle($article);
    $em->persist($image);
    $em->persist($article);
    $em->flush();

    return $this->render('CEGArticleBundle:Default:checkArticle.html.twig',array('id'=>$id));
  }
  return $this->render('CEGArticleBundle:Default:updateArticle.html.twig',array('id'=>$id,'form' => $form->createView()));
}

public function deleteImageAction($id){
  $em = $this->getDoctrine()->getManager();
  $image = $em->getRepository('CEGArticleBundle:Image')->find($id);
  $articleId = $image->getArticle()->getId();
  $em->remove($image);
  $em->flush();
  return $this->redirect($this->generateUrl('ceg_article_show',array('id' => $articleId)));
}


public function deleteArticleAction($id){
  $em = $this->getDoctrine()->getManager();
  $article = $em->getRepository('CEGArticleBundle:Article')->find($id);

  $em->remove($article);
  $em->flush();

  return $this->redirect($this->generateUrl('ceg_article_list'));
}
}
