<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CardapiosPedidos Controller
 *
 * @property \App\Model\Table\CardapiosPedidosTable $CardapiosPedidos
 *
 * @method \App\Model\Entity\CardapiosPedido[] paginate($object = null, array $settings = [])
 */
class CardapiosPedidosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pedidos', 'Cardapios']
        ];
        $cardapiosPedidos = $this->paginate($this->CardapiosPedidos);

        $this->set(compact('cardapiosPedidos'));
        $this->set('_serialize', ['cardapiosPedidos']);
    }

    /**
     * View method
     *
     * @param string|null $id Cardapios Pedido id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cardapiosPedido = $this->CardapiosPedidos->get($id, [
            'contain' => ['Pedidos', 'Cardapios']
        ]);

        $this->set('cardapiosPedido', $cardapiosPedido);
        $this->set('_serialize', ['cardapiosPedido']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cardapiosPedido = $this->CardapiosPedidos->newEntity();
        if ($this->request->is('post')) {
            $cardapiosPedido = $this->CardapiosPedidos->patchEntity($cardapiosPedido, $this->request->getData());
            if ($this->CardapiosPedidos->save($cardapiosPedido)) {
                $this->Flash->success(__('The cardapios pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cardapios pedido could not be saved. Please, try again.'));
        }
        $pedidos = $this->CardapiosPedidos->Pedidos->find('list', ['limit' => 200]);
        $cardapios = $this->CardapiosPedidos->Cardapios->find('list', ['limit' => 200]);
        $this->set(compact('cardapiosPedido', 'pedidos', 'cardapios'));
        $this->set('_serialize', ['cardapiosPedido']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cardapios Pedido id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cardapiosPedido = $this->CardapiosPedidos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cardapiosPedido = $this->CardapiosPedidos->patchEntity($cardapiosPedido, $this->request->getData());
            if ($this->CardapiosPedidos->save($cardapiosPedido)) {
                $this->Flash->success(__('The cardapios pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cardapios pedido could not be saved. Please, try again.'));
        }
        $pedidos = $this->CardapiosPedidos->Pedidos->find('list', ['limit' => 200]);
        $cardapios = $this->CardapiosPedidos->Cardapios->find('list', ['limit' => 200]);
        $this->set(compact('cardapiosPedido', 'pedidos', 'cardapios'));
        $this->set('_serialize', ['cardapiosPedido']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cardapios Pedido id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cardapiosPedido = $this->CardapiosPedidos->get($id);
        if ($this->CardapiosPedidos->delete($cardapiosPedido)) {
            $this->Flash->success(__('The cardapios pedido has been deleted.'));
        } else {
            $this->Flash->error(__('The cardapios pedido could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function cozinha($status = 'Pendente', $status = 'Em Andamento')
    {
        $this->paginate = [
            'contain' => ['Pedidos', 'Cardapios']
        ];
        $cardapiosPedidos = $this->paginate($this->CardapiosPedidos);

        $this->set(compact('cardapiosPedidos'));
        $this->set('_serialize', ['cardapiosPedidos']);
    }
}
