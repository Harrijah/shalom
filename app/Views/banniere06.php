<section>
    <div class="bann-content02">
        <div class="form-image">
            <img src="<?php echo base_url('image/shalom.jpg'); ?>" class="border-me02 group-image" alt="les personnes âgées">
        </div>
        <div class="form-type">
            <h2>Nous contacter</h2>
            <div class="separator02"></div>
            <?php //echo form_open('email'); ?>
            
                <?php if (! empty($errors)): ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif ?>

            <form action="<?php echo base_url('email'); ?>" method="GET" enctype="form-data">
                <input type="text" name="nom" placeholder="Votre nom">
                <input type="email" name="email" id="" placeholder="Votre adresse e-mail">
                <input type="text" name="telephone" id="" placeholder="Votre numéro de téléphone">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Votre message, ici ..."></textarea>
                <input type="submit"  class="mybutton" value="Envoyer">
            </form>
        </div>
    </div>
</section>