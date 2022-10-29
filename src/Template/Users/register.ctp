<main>
 <   
    <section class="allows">
        <h1>Cadastro</h1>

        <!-- Adionar o código aqui -->

        <p>Já possui conta? <?= $this->Html->link(__('Acessar'), ['controller' => 'Users', 'action' => 'login']); ?></p>
    </section>              
</main>

<?= $this->element('footer'); ?>
