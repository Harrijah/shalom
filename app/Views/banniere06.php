<section>
    <div class="bann-content02">
        <div class="form-image">
            <img src="<?php echo base_url('image/shalom.jpg'); ?>" class="border-me02 group-image" alt="les personnes âgées">
        </div>
        <div class="form-type">
            <h2>Nous contacter</h2>
            <div class="separator02"></div>
            <!-- <?php //echo form_open('email'); ?> -->
            <form action="<?php echo base_url('contact'); ?>" method="post" enctype="form-data">
                <input type="text" placeholder="Votre nom">
                <input type="email" name="" id="" placeholder="Votre adresse e-mail">
                <input type="text" name="" id="" placeholder="Votre numéro de téléphone">
                <textarea name="" id="" cols="30" rows="10" placeholder="Votre message, ici ..."></textarea>
                <input type="submit"  class="mybutton" value="Envoyer">
            </form>
        </div>
    </div>
</section>