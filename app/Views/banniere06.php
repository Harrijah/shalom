<section>
    <div class="bann-content02">
        <div class="form-image">
            <img src="<?php echo base_url('image/shalom.jpg'); ?>" class="border-me02 group-image" alt="les personnes âgées">
        </div>
        <div class="form-type">
            <h2>Nous contacter</h2>
            <div class="separator02"></div>
            <?php //echo form_open('email'); ?>

            <form action="<?php echo base_url('email'); ?>" method="POST" enctype="form-data">
                <input type="text" name="nom" placeholder="Votre nom" value="<?= set_value('nom'); ?>">
                <?php if(isset($errors['nom'])) echo '<div class="invalid-feedback">' . $errors['nom'] . '</div>'; ?>

                <input type="email" name="email" id="" placeholder="Votre adresse e-mail" value="<?= set_value('email') ?>">
                <?php if(isset($errors['email'])) echo '<div class="invalid-feedback">' . $errors['email'] . '</div>'; ?>

                <input type="text" name="telephone" id="" placeholder="Votre numéro de téléphone" value="<?= set_value('telephone') ?>">
                <?php if(isset($errors['telephone'])) echo '<div class="invalid-feedback">' . $errors['telephone'] . '</div>'; ?>

                <textarea name="message" id="" cols="30" rows="10" placeholder="Votre message, ici ..." value="<?= set_value('message') ?>"></textarea>
                <?php if(isset($errors['message'])) echo '<div class="invalid-feedback">' . $errors['message'] . '</div>'; ?>
				
				<?php  if (isset($validation)): ?>
					<div class="alert alert-danger" role="alert">
						<?= $validation->listErrors(); ?>
					</div>
				<?php endif; ?>
				
                <input type="submit"  class="mybutton" value="Envoyer">
            </form>
        </div>
    </div>
</section>