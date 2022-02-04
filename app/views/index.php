<?php $this->view("header", $data); ?>
<main>
    <section>
        <h1>LOUL</h1>
        <?php if (is_array($data['posts'])) : ?>
            <?php foreach ($data['posts'] as $row) : ?>
                <article onmouseover="changeColor(this)" onmouseout="changeColorBack(this)" id="most_visited">
                    <?= $row->description ?>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
    <aside>
        <a href="#most_visited">
            <div class="blocs_right" onmouseover="changeColor(this)" onmouseout="changeColorBack(this)">Go back to the first post</div>
        </a>
        <div class="blocs_right" onmouseover="changeColor(this)" onmouseout="changeColorBack(this)">
            <a href="https://sepulcherz.github.io/CV/" target="blank"><img src="./assets/imgs/rotatingtiass2.gif" id="qrcode" alt="ma tête mais un peu cheloue" /></a>
        </div>
        <div class="blocs_right" onmouseover="changeColor(this)" onmouseout="changeColorBack(this)">
            <form id="form1" action="mailto:mr_devaux@hotmail.fr" method="GET"><label for="email">Send me a mail!</label></form><button type="submit" form="form1" value="Submit" onClick="return empty()">Ok!</button>
        </div>
    </aside>
</main>
<?php $this->view("footer", $data); ?>