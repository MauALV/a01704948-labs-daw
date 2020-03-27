<?php include '_header.html'; ?>
    <?php if (isset($error)): ?>
        <div class="red-text">Error: <?= $error ?></div>
    <?php endif; ?>

    <div class="uk-container">
        <h1>Lab 12 - A01704948</h1>

        <form action="index.php" method="post">
            <div class="uk-margin">
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input class="uk-input" type="text">
                </div>
          </div>

            <div class="uk-margin">
                <div class="uk-inline">
                  <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                  <input class="uk-input" type="password"><br>
                </div>
            </div>

            <div class="uk-margin">
                <div class="uk-inline">
                    <button class="uk-button uk-button-primary">Iniciar Sesión</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include '_footer.html'; ?>
