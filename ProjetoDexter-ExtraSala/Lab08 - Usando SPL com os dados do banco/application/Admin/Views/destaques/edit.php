<h1 class="title_page">Editar Destaque</h1>
<form method="post" class="form_model">
    <fieldset>
        <input type="hidden" value="<?= $this->destaque->getId() ?>" id="id" name="id" />
        <div class="line_form">
            <label for="titulo" class="label_form">Titulo</label>
            <input 
                type="text"
                class="input_text_form"
                id="titulo"
                name="titulo"
                value="<?= $this->destaque->getTitulo() ?>"/>
        </div>
        <div class="line_form">
            <label for="descricao" class="label_form">Descrição</label>
            <input 
                type="text"
                class="input_text_form"
                id="descricao"
                name="descricao"
                value="<?= $this->destaque->getDescricao() ?>"/>
        </div>
        <div class="line_form">
            <label for="imagem" class="label_form">Imagem</label>
            <input 
                type="text"
                class="input_text_form"
                id="imagem"
                name="imagem"
                value="<?= $this->destaque->getImagem() ?>"/>
        </div>
        <div class="line_form">
            <input type="submit" class="button_model input_submit_form" value="Salvar" />
        </div>
        <span><?= $this->msg ?></span>
   </fieldset>
</form>
