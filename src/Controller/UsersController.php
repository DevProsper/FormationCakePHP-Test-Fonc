<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 *
 */
class UsersController extends AppController
{
    //use CellTrait;
    public function initialize(){
      parent::initialize();
      //$this->Auth->allow(['add', 'index']);
      //$this->layout = 'admin';
    }

    public function index(){
        $users = $this->Users->find('all');
        $this->set(compact('users'));
    }

    public function view($id = null){
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__("L'utilisateur a bien été ajouté"));
                $this->redirect(['controller' => 'users', 'action' => 'index']);
            }else{
                $this->Flash->error(__("Erreur lors de l'ajout de l'utilisateur"));
            }
        }
        $this->set(compact('user'));
    }

    public function edit($id = null){
        $user = $this->Users->get($id);
        if ($this->request->is(['post', 'put', 'patch'])) {
            $user = $this->Users->patchEntity($user, $this->request->data());
            if ($this->Users->save($user)) {
                $this->Flash->success(__("L'utilisateur a bien été modifié"));
                $this->redirect(['controller' => 'users', 'action' => 'index']);
            }else{
                $this->Flash->error(__("Erreur lors de la modification de l'article"));
            }
        }
        $this->set(compact('user'));
    }

    public function delete($id){
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__("L'utilisateur a bien été suprimé"));
        }else{
            $this->Flash->error(__("Erreur lors de la suprission de l'utilisateur"));
        }
    }

    public function login(){
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error("Les informations remplis sont inexactes :) ");
        }
    }

    public function logout(){
        $this->Flash->success(__("Vous êtes maintenant connecté"));
        $this->redirect($this->Auth->logout());
    }
}
