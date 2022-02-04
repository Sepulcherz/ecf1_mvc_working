<?php $this->view("header", $data); ?>
<main>
    <aside>
        <div class="blocs_right" onmouseover="changeColor(this)" onmouseout="changeColorBack(this)">
            <form id="form1" action="mailto:mr_devaux@hotmail.fr" method="GET">
                <label for="email">Indiquez votre
                    e-mail</label>
                <input type="email" id="email">
            </form>
            <button type="submit" form="form1" value="Submit" onClick="return empty()">Envoyer</button>
        </div>
    </aside>
</main>
<?php $this->view("footer", $data); ?>