<?php $this->view("header", $data); ?>
<main>
    <aside>
        <div class="blocs_right">
            <form id="form2" method="post">
                <textarea type="text" name="description" placeholder="Write anything!" required="required"></textarea>
                <button>Envoyer</button>
            </form>
        </div>
    </aside>
</main>
<?php $this->view("footer", $data); ?>