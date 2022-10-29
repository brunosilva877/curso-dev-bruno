<div class="containner">
    <section class="title__buttons">
        <h1>Usuários <small>edição</small></h1>

        <?= $this->Html->link(__('Listagem'), ['controller' => 'Users', 'action' => 'index']); ?>
    </section> class= "title__buttons>

 <?= $this->Form->create($user); ?>
 <?= $this->flash->render(); ?>
 
 <label> nome completo</label>
    <?= $this->Form->control('name',['label'=> false]); ?>

 <label> E-email</label>   

    <!-- Adionar o código aqui -->
</div>
