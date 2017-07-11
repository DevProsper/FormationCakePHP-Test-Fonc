<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 */
class PostsController extends AppController
{
  public function initialize()
{
parent::initialize();
$this->loadComponent('RequestHandler');
}
    public function index(){
        $posts = $this->Posts->find('all');
        $this->set(compact('posts'));
        $this->set('_serialize', ['posts']);
    }

    public function view($id = null){
        $post = $this->Posts->get($id);
        $this->set(compact('post'));
    }

    public function add(){
        $post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->data);
            if ($this->Posts->save($post)) {
                $this->Flash->success(__("L'article a bien été ajouté"));
                $this->redirect(['controller' => 'posts', 'action' => 'index']);
            }else{
                $this->Flash->error(__("Erreur lors de l'ajout de l'article :)"));
            }
        }
        $this->set(compact('post'));
    }

    public function delete($id = null){
        //$this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__("Votre Article a bien été suprimé"));
            $this->redirect(['controller' => 'posts', 'action' => 'index']);
        }else{
            $this->Flash->error(__("Erreur lors de la suppression de l'article"));
        }
    }

    public function edit($id = null){
        //$this->request->allowMethod(['post', 'put', 'patch']);
        $post = $this->Posts->get($id);
        if ($this->request->is(['post', 'put', 'patch'])) {
            $post = $this->Posts->patchEntity($post, $this->request->data());
            if ($this->Posts->save($post)) {
                $this->Flash->success(__("Votre article a bien été sauvegarder"));
                $this->redirect(['controller' => 'posts', 'action' => 'index']);
                $this->redirect(['controller' => 'posts', 'action' => 'index']);
            }else{
                $this->Flash->error(__("Erreur lors de la modification de l'article"));
            }
        }
        $this->set(compact('post'));
    }

}
