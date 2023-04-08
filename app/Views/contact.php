
<div class="spacer01"></div>
<div class="spacer01"></div>
<div class="spacer01"></div>
<section>
    <div class="bann-content">
        <h2>Prenons soin de nos parents</h2>
        <div class="separator01"></div>
        <p class="mytext01">
            Pour toutes vos demandes sur nos services ou sur nos tarifs, veuillez nous envoyer directement un message via ce formulaire. Nous nous ferons un plaisir de répondre à vos questions et à vous fournir plus d'informations concernant votre séjour et celui de votre priche chez Shalom - Maison d'Accueil.
        </p>
        <!-- <div class="separator01"></div> -->
    </div>
</section>

<section>
    <div class="bann-content02">
        <div class="form-image02">
                <img src="<?php echo base_url('image/photogroup.jpg'); ?>" class="border-me02 group-image" alt="les personnes âgées">
        </div>
        <div class="form-type02">
            <h2>Votre message </h2>
            <div class="separator02"></div>
            <form action="<?php echo base_url('sendcontact'); ?>" method="POST" enctype="form-data">
                <input type="text"  name="nom" placeholder="Votre nom">
                <?php if(isset($errors['nom'])) echo '<div class="invalid-feedback">' . $errors['nom'] . '</div>'; ?>

                <input type="email" name="email" id="" placeholder="Votre adresse e-mail">
                <?php if(isset($errors['email'])) echo '<div class="invalid-feedback">' . $errors['email'] . '</div>'; ?>

                <input type="text" name="telephone" id="" placeholder="Votre numéro de téléphone">
                <?php if(isset($errors['telephone'])) echo '<div class="invalid-feedback">' . $errors['telephone'] . '</div>'; ?>

                <input type="text" name="demande" id="" placeholder="Objet de votre demande">
                <?php if(isset($errors['demande'])) echo '<div class="invalid-feedback">' . $errors['demande'] . '</div>'; ?>

                <textarea name="message" id="" cols="30" rows="10" placeholder="Votre message, ici ..."></textarea>
                <?php if(isset($errors['message'])) echo '<div class="invalid-feedback">' . $errors['message'] . '</div>'; ?>

                
				<?php  if (isset($validation)): ?>
					<div class="alert alert-danger" role="alert">
						<?= $validation->listErrors() ?>
					</div>
				<?php endif; ?>

                <input type="submit"  class="mybutton" value="Envoyer">

            </form>
        </div>
    </div>
</section>